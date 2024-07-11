<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTutorialController extends Controller
{
    public function index()
    {
        return view('pages.admin.Manage-Tutorial.index');
    }
}
