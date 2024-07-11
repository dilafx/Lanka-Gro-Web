<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminResearchController extends Controller
{
    public function index()
    {
        return view('pages.admin.Manage-Research.index');
    }
}

