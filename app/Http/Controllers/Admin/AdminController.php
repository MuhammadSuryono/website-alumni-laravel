<?php

namespace App\Http\Controllers\Admin;

class AdminController extends \App\Http\Controllers\Controller
{
    public function dashboardPage() {
        return view("admin.dashboard");
    }
}
