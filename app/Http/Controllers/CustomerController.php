<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerController extends Controller
{
  public function index()
  {
    return Inertia::render('index');
    }

  public function register()
  {
    return Inertia::render('Customers/register');
    }
}