<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceScheduleAdminController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.service-schedules.index');
    }
}
