<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quyen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
class TrangchuController extends Controller
{
    public function getshow(){
    	return view('admin.module.dashboard.main');
    }
}
