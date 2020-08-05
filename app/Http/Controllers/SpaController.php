<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class SpaController extends Controller
{

    public function index() {
        return view('spa');
    }

    public function nonexisting() {
        throw new Exception('I should never get here');
    }

}
