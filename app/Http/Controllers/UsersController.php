<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
  public function index()
  {
    $nomes = ['João', 'Maria', 'José', 'Pedro', 'Paulo'];
    return Inertia::render("Home", [
      'nomes' => $nomes
    ]);
  }
}
