<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\Offers;
use App\Models\OfferCountry;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

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
        if ($country = OfferCountry::find($id)) {
            $offers = Offers::where('country_id', $id)->get();
            $hotels = Hotels::where('country_id', $id)->get();
            return view('offers/offer', ['offers' => $offers, 'hotels' => $hotels, 'country' => $country]);
        }

        abort(404);
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


        if ($request->hasFile('image') && $request->hasFile('preview')) {
            // error_log($request->hasFile('image'), $request->hasFile('preview'));
            $formFields['image'] = $request->file('image')->store('offers', 'public');
            $formFields['preview'] = $request->file('preview')->store('offers', 'public');
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

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('offers', 'public');
        }

        if ($request->hasFile('preview'))
            $formFields['preview'] = $request->file('preview')->store('offers', 'public');

        OfferCountry::whereId($id)->update($formFields);

        return redirect('/admin/offers')->with('message', 'Страна была успешна отредактирована');
    }

    public function drop($id) {
        if (auth() -> check())
            return view('admin/index');

        OfferCountry::whereId($id) -> delete();

        return redirect('/admin/offers')->with('message', 'Страна была успешна удалена');
    }

    public static function list() {
        $countries = Offers::where('bookingEnd', '>=', now()->toDateString())->pluck('country_id')->unique();
        $countries = OfferCountry::find($countries);
        return $countries;
    }
}
