<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
class StoreController extends Controller
{
    public function index(){
        return view('store.index');
    }
}
