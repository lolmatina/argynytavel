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
        $formFields = $request->validate([
            'name' => 'required|string',
            'rate' => 'required',
            'price' => 'required',
            'country_id' => 'required'
        ]);

        if ($request->hasFile('image'))
            $formFields['image'] = $request->file('image')->store('hotels', ['public']);


        $country = OfferCountry::find($formFields['country_id']);
        error_log($country['offers']);
        $offer = Hotels::create($formFields);
        if ($country['hotels'])
            $country['hotels'] = $country['hotels'] . ',' . $offer['id'];
        else 
            $country['hotels'] = $offer['id'];

        $country->save();
        error_log($country['hotels']);


        return redirect('admin/offers/');
    }

    public function drop($id) {
        if (!auth() -> check())
            return view('admin/index');

        $hotel = Hotels::whereId($id);
        $country = OfferCountry::whereId($hotel['country_id']);
        $country['offers'] = array_diff(explode(',', $country['offers']), [$hotel['country_id']]);
        $country->save();
        $hotel->delete();

        return redirect('admin/offers/');
    }
}
