<?php

namespace App\Http\Controllers;

use App\Models\OfferCountry;
use App\Models\Offers;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class PromotionController extends Controller
{
    //
    public function create() {
        if (!auth()->check())
            return view('/admin/index');

        return view('/admin/offers/offers/create', [
            'countries' => OfferCountry::all()
        ]);
    }

    public function store(Request $request) {
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


        $country = OfferCountry::find($formFields['country_id']);
        error_log($country['offers']);
        $offer = Offers::create($formFields);
        if ($country['offers'])
            $country['offers'] = $country['offers'] . ',' . $offer['id'];
        else 
            $country['offers'] = $offer['id'];

        $country->save();
        error_log($country['offers']);


        return redirect('admin/offers/');
    }

    public function drop($id) {
        if (!auth() -> check())
            return view('admin/index');

        
        $offer = Offers::whereId($id);
        $country = OfferCountry::whereId($offer['country_id']);
        $country['offers'] = array_diff(explode(',', $country['offers']), [$offer['country_id']]);
        $country->save();
        $offer->delete();
        
        return redirect('admin/offers/');
    }
}
