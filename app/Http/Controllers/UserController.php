<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function TugasUser($id){
        return 'Penjualan dengan ID'. $id;
    }
}
