<?php

namespace App\Http\Controllers\Approver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardApproverController extends Controller
{
    public function index(){
        return view('pages.dashboard.approver.index');
    }
}
