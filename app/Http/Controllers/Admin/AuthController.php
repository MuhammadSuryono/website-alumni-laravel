<?php

namespace App\Http\Controllers\Admin;

class AuthController extends \App\Http\Controllers\Controller
{
    public function loginPage() {
        return view("admin.auth.login");
    }
}
