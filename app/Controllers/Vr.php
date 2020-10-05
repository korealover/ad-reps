<?php namespace App\Controllers;

class Vr extends BaseController
{
    /**
     * @return string
     * 메인
     */
    public function index() {
        return view('home');
    }

    /**
     * @return string
     * 글로벌관
     */
    public function global() {
        return view('/vr/global');
    }
}
?>