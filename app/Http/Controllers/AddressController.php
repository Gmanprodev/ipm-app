<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $address = Address::get();

        return view('addresses', [
            'addresses' => $address
        ]);
    }

    public function create()
    {
        return view('create-address');
    }

    public function edit($id)
    {
        $address = Address::find($id);

        if (!$address) {
            abort(404);
        }

        return view('edit-address', [
            'address' => $address
        ]);
    }

    public function postCreate(AddressRequest $request)
    {
        $address = Address::create($request->only([
            'address'
        ]));

        if (!$address) {
            abort(500);
        }

        return redirect('addresses')
            ->with('status', 'Address created!');
    }

    public function postEdit($id, AddressRequest $request)
    {
        $address = Address::find($id)
            ->update($request->only([
                'address'
            ]));

        if (!$address) {
            abort(500);
        }

        return redirect('addresses')
            ->with('status', 'Address updated!');
    }

    public function postDelete($id)
    {
        $address = Address::find($id)
            ->delete();

        if (!$address) {
            abort(500);
        }

        return redirect('addresses')
            ->with('status', 'Address deleted!');
    }
}