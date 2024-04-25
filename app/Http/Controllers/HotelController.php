<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\OfferCountry;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function create() {
        if (!auth()->check())
            return view('/admin/index');

        return view('/admin/offers/hotels/create', [
            'countries' => OfferCountry::all()
        ]);
    }

    public function store(Request $request) {
        if (!auth() -> check())
            return view('admin/index');

        $formFields = $request->validate([
            'name' => 'required|string',
            'rate' => 'required',
            'price' => 'required',
            'country_id' => 'required'
        ]);

        if ($request->hasFile('image'))
            $formFields['image'] = $request->file('image')->store('hotels', 'public');

        $offer = Hotels::create($formFields);

        return redirect('admin/offers/');
    }

    public function edit(Request $request, $id) {
        if (!auth() -> check())
            return view('admin/index');

        return view('admin/offers/hotels/edit', [
            'countries' => OfferCountry::all(),
            'hotel' => Hotels::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id) {
        if (!auth() -> check())
            return view('admin/index');

        $formFields = $request->validate([
            'name' => 'required|string',
            'rate' => 'required',
            'price' => 'required',
            'country_id' => 'required'
        ]);

        $offer = Hotels::findOrFail($id);

        if ($request->hasFile('image')) {
            $path = storage_path('app/public/'.$hotel['image']);
            if (File::exists($path)) {
                unlink($path);
            }
            $formFields['image'] = $request->file('image')->store('hotels', 'public');
        }

        $offer->update($formFields);

        return redirect('admin/offers/');
    }

    public function drop($id) {
        if (!auth() -> check())
            return view('admin/index');

        $hotel = Hotels::findOrFail($id);

        $path = storage_path('app/public/'.$hotel['image']);
        if (File::exists($path)) {
            unlink($path);
        }

        $hotel->delete();

        return redirect('admin/offers/');
    }
}
