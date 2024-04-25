<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\Offers;
use App\Models\OfferCountry;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\File;

class OfferController extends Controller
{
    public function index() {
        if (!auth() -> check())
            return redirect('/admin');

        return view('/admin/offers/index', [
            'offers' => OfferCountry::all(),
            'promotions' => Offers::all(),
            'hotels' => Hotels::all()
        ]);
    }

    public function show($id) {
        $country = OfferCountry::findOrFail($id);
        $offers = Offers::where('country_id', $id)->get();
        $hotels = Hotels::where('country_id', $id)->get();
        return view('offers/offer', ['offers' => $offers, 'hotels' => $hotels, 'country' => $country]);
    }

    public function create() {
        if (!auth() -> check())
            return redirect('/admin');

        return view('admin/offers/create', [
            'promotions' => Offers::all(), 
            'hotels' => Hotels::all()
        ]);
    }

    public function edit($offer) {
        if (!auth() -> check())
            return redirect('/admin');

        return view('/admin/offers/edit', [
            'offer' => OfferCountry::find($offer)
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'offer' => 'required|string',
            'preview_text' => 'required|string'
        ]);


        if ($request->hasFile('image') && $request->hasFile('preview') && $request->hasFile('image_mobile')) {
            $formFields['image'] = $request->file('image')->store('offers', 'public');
            $formFields['preview'] = $request->file('preview')->store('offers', 'public');
            $formFields['image_mobile'] = $request->file('image_mobile')->store('offers', 'public');
        }

        OfferCountry::create($formFields);

        return redirect('/admin/offers')->with('message', 'Страна была успешна добавлена');
    }
    
    public function update(Request $request, $id) {
        $formFields = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'offer' => 'required|string',
            'preview_text' => 'required|string'
        ]);

        $country = OfferCountry::findOrFail($id);

        if ($request->hasFile('image')) {
            $path = storage_path('app/public/'.$country['image']);
            if (File::exists($path)) {
                unlink($path);
            }
            $formFields['image'] = $request->file('image')->store('offers', 'public');
        }

        if ($request->hasFile('preview')) {
            $path = storage_path('app/public/'.$country['preview']);
            if (File::exists($path)) {
                unlink($path);
            }
            $formFields['preview'] = $request->file('preview')->store('offers', 'public');
        }
        if ($request->hasFile('image_mobile')) {
            $path = storage_path('app/public/'.$country['image_mobile']);
            if (File::exists($path)) {
                unlink($path);
            }
            $formFields['image_mobile'] = $request->file('image_mobile')->store('offers', 'public');
        }

        $country->update($formFields);

        return redirect('/admin/offers')->with('message', 'Страна была успешна отредактирована');
    }

    public function drop($id) {
        if (!auth() -> check())
            return redirect('/admin');

        $country = OfferCountry::find($id);
        // dd($country);

        $path = storage_path('app/public/'.$country['image']);
        if (File::exists($path)) {
            unlink($path);
        }

        $path = storage_path('app/public/'.$country['preview']);
        if (File::exists($path)) {
            unlink($path);
        }

        $path = storage_path('app/public/'.$country['image_mobile']);
        if (File::exists($path)) {
            unlink($path);
        }

        Offers::where('country_id', $id)->delete();
        Hotels::where('country_id', $id)->delete();
        $country->delete();

        return redirect('/admin/offers')->with('message', 'Страна была успешна удалена');
    }

    public static function list() {
        $countries = Offers::where('bookingEnd', '>=', now()->toDateString())->pluck('country_id')->unique();
        $countries = OfferCountry::find($countries);
        return $countries;
    }
}
