<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
class ReservationController extends Controller
{
    public function index(Request $request){
       $data=$request->all();
Mapper::map(53.381128999999990000, -1.470085000000040000);        print '<div style="width:400px;height: 600px;">';
        print Mapper::render();
        print '</div>';
    }
}
