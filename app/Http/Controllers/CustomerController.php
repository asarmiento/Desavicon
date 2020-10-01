<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class CustomerController extends Controller
{
  public function index()
  {
    return Inertia::render('index', [
      'customers' => Customer::all()->map(function ($customer) {
        return [
          'id' => $customer->id,
          'card' => $customer->card,
          'phone' => $customer->phone,
          'address' => $customer->address,
          'name' => $customer->name,
          'email' => $customer->email,
          'edit_url' => URL::route('customer.edit', $customer),
        ];
      }),
      'create_url' => URL::route('register-customer'),
    ]);
    }

  public function register()
  {
    return Inertia::render('Customers/register');
    }

  public function store(Request $request)
  {
$data = $request->all();
    Customer::create(
      $data
    );

    return Redirect::route('register-customer');
    }
}
