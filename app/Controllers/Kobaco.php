<?php namespace App\Controllers;

class Kobaco extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function ad() {
        return view('/kobaco/ad');
    }

    public function greetings() {
        return view('/kobaco/greetings');
    }

    public function info() {
        return view('/kobaco/info');
    }

    public function exhibit() {
        return view('/kobaco/exhibit');
    }

    public function history() {
        return view('/kobaco/history');
    }

    public function notice() {
        return view('/kobaco/notice');
    }

    public function detail() {
        return view('/kobaco/detail');
    }

    public function theme() {
        return view('/kobaco/theme');
    }

    public function faq() {
        return view('/kobaco/faq');
    }

    public function event() {
        return view('/kobaco/event');
    }

    public function edatil() {
        return view('/kobaco/edatil');
    }

}
