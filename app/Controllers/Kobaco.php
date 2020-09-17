<?php namespace App\Controllers;


use App\Libraries\SessionLib;

class Kobaco extends BaseController
{
    /**
     * @return string
     * 메인
     */
    public function index() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('home');
    }

    /**
     * @return string
     *
     */
    public function ad() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/ad');
    }

    public function greetings() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/greetings');
    }

    public function info() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/info');
    }

    public function exhibit() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/exhibit');
    }

    public function history() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/history');
    }

    public function notice() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/notice');
    }

    public function detail() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/detail');
    }

    public function theme() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/theme');
    }

    public function faq() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/faq');
    }

    public function event() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/event');
    }

    public function edatil() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/edatil');
    }

}
