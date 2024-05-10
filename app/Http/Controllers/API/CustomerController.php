<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function get($id = null)
    {
        if (isset($id)) {
            $customer = Customer::findOrFail($id);
            return response()->json(['msg' => 'Data retrieved', 'data' => $customer], 200);
        } else {
            $customers = Customer::get();
            return response()->json(['msg' => 'Data retrieved', 'data' => $customers], 200);
        }
    }

    function store(CustomerRequest $request)
    {
        $customer = Customer::create($request->all());
        return response()->json(['msg' => 'Data created', 'data' => $customer], 201);
    }

    function update($id, CustomerRequest $request)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return response()->json(['msg' => 'Data updated', 'data' => $customer], 200);
    }

    function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->json(['msg' => 'Data deleted'], 200);
    }
}
