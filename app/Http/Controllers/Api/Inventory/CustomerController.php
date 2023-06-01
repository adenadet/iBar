<?php

namespace App\Http\Controllers\Api\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Inventory\Customer;
use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
        return response()->json([
            'customers'   => Customer::with(['users'])->orderBy('name', 'ASC')->paginate(10),       
            //'users'       => User::orderBy('first_name', 'ASC')->get(),       
        ]); 
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
