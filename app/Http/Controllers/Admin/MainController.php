<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index($id)
    {
        return view('admin.main.index',compact('id'));
    }

    public function detail()
    {
        return view('admin.main.detail');
    }

    public function list()
    {
        return view('admin.main.list');
    }
}
