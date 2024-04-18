<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\Attractions;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    // Shows all countries
    public function index() {
        return view('countries/index', [
            'countries' => Countries::all()
        ]);
    }

    public function indexAdmin() {
        if (!auth() -> check())
            return redirect('/admin');

        $countries = Countries::all();

        return view('/admin/countries/index', [
            'countries' => $countries
        ]);
    } 

    public function create() {
        if (!auth() -> check())
            return redirect('/admin');

        return view('/admin/countries/create');
    }

    public function store(Request $request) {
        if (!auth() -> check())
            return redirect('/admin');

        $formFields = $request->get('name', 'visa', 'requirements', 'description', 'capital', 'time', 'currency', 'language', 'climate', 'location');

        if ($request->hasFile('flag') && $request->hasFile('image')) {
            $formFields['flag'] = $request->file('flag') -> store('countries', ['public']);
            $formFields['image'] = $request->file('image') -> store('countries', ['public']);
        }

        $country = Countries::create($formFields);

        if ($request->has('attraction_name') && $request->has('attraction_description')) {
            for ($i = 0; $i < sizeof($request['attraction_name']); $i++) {
                $fields = [
                    'country_id' => $country['id'],
                    'name' => $request['attraction_name'][$i],
                    'description' => $request['attraction_description'][$i]
                ];

                if ($request->hasFile('attraction_image'))
                    $fields['image'] = $request->file('attraction_image')[$i] -> store('countries', ['public']);

                Attractions::create($fields);                
            }
        }

        return redirect('/admin/countries');
    }

    public function edit($id) {
        if (!auth() -> check())
            return redirect('/admin');

        $country = Countries::find($id);
        $attractions = Attractions::where('country_id', $id)->get();
        return view('/admin/countries/edit', ['country' => $country, 'attractions' => $attractions]);
    }

    // Shows single country
    public function show($id) {
        if ($data = Countries::find($id))

            return view('countries/country', [
                'data' => $data,
                'attractions' => Attractions::where('country_id', $id)->get()
            ]);
        
        abort(404);
    }
}
