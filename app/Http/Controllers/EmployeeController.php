<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function index() {
        if (!auth()->check())
            redirect('/admin');

        return view('admin/employees/index', [
            'employees' => Employees::all()
        ]);
    }
    public static function list() {
        return Employees::all();
    }

    public function create() {
        if (!auth()->check())
            redirect('/admin');

        return view('admin/employees/create');
    }

    public function store(Request $request) {
        if (!auth()->check())
            redirect('/admin');

        $fields = $request -> validate([
            'firstName' => 'string|required',
            'lastName' => 'string|required',
            'position' => 'string|required',
            'phone' => 'string|required',
            'description' => 'string|required',
            'city' => 'string|required',
            'timeStart' => 'required',
            'timeEnd' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $fields['photo'] = $request->file('photo')->store('employees', 'public');

            Employees::create($fields);

            return redirect('/admin/employees');
        }

        return back();
    }

    public function edit($id) {
        if (!auth()->check())
            redirect('/admin');

        if ($employee = Employees::find($id))
            return view('admin/employees/edit', ['employee' => $employee]);

        return redirect('/admin/employee');
    }

    public function update(Request $request, $id) {
        if (!auth()->check())
            redirect('/admin');

        $fields = $request -> validate([
            'firstName' => 'string|required',
            'lastName' => 'string|required',
            'position' => 'string|required',
            'phone' => 'string|required',
            'description' => 'string|required',
            'city' => 'string|required',
            'timeStart' => 'required',
            'timeEnd' => 'required'
        ]);

        $employee = Employees::findOrFail($id);

        $path = storage_path('app/public/'.$employee['photo']);
        if (File::exists($path)) {
            unlink($path);

            $fields['photo'] = $request->file('photo')->store('employees', 'public');
        }

        $employee->update($fields);

        return redirect('/admin/employees');
    }

    public function drop($id) {
        if (!auth()->check())
            redirect('/admin');

        $employee = Employees::findOrFail($id);

        $path = storage_path('app/public/'.$employee['photo']);
        if (File::exists($path)) {
            unlink($path);
        }

        $employee->delete();
        return redirect('/admin/employees');
    }
}
