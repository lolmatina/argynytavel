<?php

namespace App\Http\Controllers;

use App\Models\OfferCountry;
use App\Models\Offers;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class PromotionController extends Controller
{
    public function create() {
        if (!auth()->check())
            return view('/admin/index');

        return view('/admin/offers/offers/create', [
            'countries' => OfferCountry::all()
        ]);
    }

    public function store(Request $request) {
        if (!auth() -> check())
            redirect('/admin');

        $formFields = $request->validate([
            'name' => 'required|string',
            'country_id' => 'required',
            'description' => 'string',
            'info' => 'string',
            'additionalInfo' => 'string',
            'bookingStart' => 'date',
            'bookingEnd' => 'required',
            'livingStart' => 'date',
            'livingEnd' => 'required'
        ]);

        $offer = Offers::create($formFields);

        return redirect('admin/offers/');
    }

    public function edit($id) {
        if (!auth()->check())
            return redirect('/admin');

        return view('/admin/offers/offers/edit', [
            'countries' => OfferCountry::all(),
            'offer' => Offers::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id) {
        if (!auth() -> check())
            redirect('/admin');

        $formFields = $request->validate([
            'name' => 'required|string',
            'country_id' => 'required',
            'description' => 'string',
            'info' => 'string',
            'additionalInfo' => 'string',
            'bookingStart' => 'date',
            'bookingEnd' => 'required',
            'livingStart' => 'date',
            'livingEnd' => 'required'
        ]);

        $offer = Offers::findOrFail($id) -> update($formFields);

        return redirect('admin/offers/');
    }

    public function drop($id) {
        if (!auth() -> check())
            return redirect('/admin');

        $offer = Offers::findOrFail($id);
        $offer->delete();
        
        return redirect('admin/offers/');
    }
}
