<?php namespace App\Controllers;


use App\Libraries\Paging;
use App\Libraries\SessionLib;
use App\Models\FNoticeModel;

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
        $see->set_browser($agent);
        $page = $this->request->getPost('page');
        $lib = new Paging();
        $model = new FNoticeModel();

        if (!$page) {$page = 1;}
        $scale_row = 20;
        $start = ($page - 1) * $scale_row;
        $total_cnt = $model->get_count('board');
        $total_page = ceil($total_cnt / $scale_row);
        $start = $lib->start($page);
        $total_page = $lib->tpage($total_cnt);
        $lastpage = $lib->tpage($total_cnt);

        if ($lastpage == $page) {
            $scale_row = $total_cnt - (($lastpage - 1) * $scale_row);
        }

        $linkpage = "/kobaco/notice";
        $ln = "";

        if ($total_cnt > 0) {
            $data['pagenum'] = $lib->divpage($linkpage, $total_page, $page, $ln);
        } else {
            $data['pagenum'] = "";
        }

        $data['TOTAL_CNT']	=	$total_cnt;		//총게시물
        $data['PAGE']		=	$page;			//현재페이지
        $data['TOTAL_PAGE']	=	$total_page;	//총페이지수
        $list_result = $model->get_list('board',$start, $scale_row);
        if ($list_result->countAllResults() > 0) {
            $total_num	=	$total_cnt;	//임시게시물번호
            if($page > 1) {
                $total_num	=	$total_num - ($page - 1) * $scale_row;
            }
//            $q = $list_result->get($start, $scale_row);
            foreach ($list_result->get($start, $scale_row)->getResult() as $row) {
                $list_data[]	=	array(
                    'NUM'		=>	$total_num,
                    'id'        => $row->id,
                    'subject'   => $row->subject,
                    'contents'  => iconv_substr(strip_tags($row->contents), 0, 80, 'utf-8'),
                    'regdate'   => str_replace("-", ".", substr($row->reg_date, 0, 10)),
                );
                $total_num	=	$total_num - 1;
            }
            $data['LOOP']	=	$list_data;
        }

        return view('/kobaco/notice', $data);
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
