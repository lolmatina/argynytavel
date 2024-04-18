<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index() {
        return view('admin/index', [
            'clients' => Clients::all()
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|string',
            'phone' => 'required',
            'city' => 'required|string'
        ]);

        $formFields['date'] = Carbon::now()->toDateTimeString();
        Clients::create($formFields);

        return redirect('/', 302, ['message' => 'Ваша заявка принята! Мы с вами скоро свяжемся.']);
    }
}
