<?php namespace App\Controllers;

class Vr extends BaseController
{
    /**
     * @return string
     * 메인
     */
    public function index() {
        return view('/vr/global');
    }

    /**
     * @return string
     * 글로벌관
     */
    public function global() {
        return view('/vr/global');
    }

    /**
     * @return string
     * 광고제작관
     */
    public function ad() {
        return view('/vr/ad');
    }

    /**
     * @return string
     * 역사관
     */
    public function history() {
        return view('/vr/history');
    }

    /**
     * @return string
     * 광고제작관
     */
    public function award() {
        return view('/vr/award');
    }

    /**
     * @return string
     * 공포관
     */
    public function horror() {
        return view('/vr/horror');
    }

    /**
     * @return string
     * 바이럴관
     */
    public function viral() {
        return view('/vr/viral');
    }
}
?>