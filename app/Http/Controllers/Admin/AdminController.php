<?php

namespace App\Http\Controllers\Admin;

class AdminController extends \App\Http\Controllers\Controller
{
    public function dashboardPage() {
        return view("admin.dashboard");
    }

    public function anggotaPage() {
        return view("admin.anggota");
    }

    public function profilePage() {
        return view("admin.profile");
    }

    public function eventsPage() {
        return view("admin.events");
    }

    public function newsPage() {
        return view("admin.news");
    }
}
