<?php
namespace Rehan\FormGenerator\Http\Controller;

use App\Http\Controllers\Controller;

class FormGeneratorController extends Controller
{

    public function index() {
        return view('FormGeneratorViews::form');
    }

}
