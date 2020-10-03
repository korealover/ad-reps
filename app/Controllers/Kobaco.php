<?php namespace App\Controllers;


use App\Libraries\Paging;
use App\Libraries\SessionLib;
use App\Models\FaqModel;
use App\Models\FEventModel;
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

    public function exhibition() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/history');
    }

    public function notice() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent);
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = $this->request->uri;
        $page  = $uri->getSegment(3);
        //$page = $this->request->getGet('page');
        $lib = new Paging();
        $model = new FNoticeModel();

        if (!$page) {$page = 1;}
        $scale_row = 9;
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
        $list_result = $model->get_list('board', $start, $scale_row);
        if ($model->get_count() > 0) {
            $total_num	=	$total_cnt;	//임시게시물번호
            if($page > 1) {
                $total_num	=	$total_num - ($page - 1) * $scale_row;
            }

            foreach ($list_result->getResult() as $row) {
                $list_data[]	=	array(
                    'NUM'		=>	$total_num,
                    'id'        => $row->id,
                    'subject'   => $row->subject,
                    'contents'  => iconv_substr(strip_tags($row->contents), 0, 75, 'utf-8'),
                    'regdate'   => str_replace("-", ".", substr($row->reg_date, 0, 10)),
                );
                $total_num	=	$total_num - 1;
            }
            $data['LOOP']	=	$list_data;
        }

        return view('/kobaco/notice', $data);
    }

    /**
     * 공지사항 상세 화면
     * @return string
     */
    public function detail() {
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = $this->request->uri;
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        $id = $uri->getSegment(3);
        $model = new FNoticeModel();
        
        //다음글
        $next = $model->get_next($id);
        if (!$model->get_next($id)) {
            $next = [
                'id' => '',
                'subject' => '다음글이 존재하지 않습니다.',
                ];
        }
        
        //이전글
        $prev = $model->get_prev($id);
        if (!$model->get_prev($id)) {
            $prev = [
                'id' => '',
                'subject' => '이전글이 존재하지 않습니다.',
            ];
        }

        $date = [
            'row' => $model->get_view('board', $id),
            'nrow' => $next,
            'prow' => $prev,
        ];

        return view('/kobaco/detail', $date);
    }

    public function theme() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/theme');
    }

    public function winner() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/winner');
    }

    public function adv() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/adv');
    }

    public function special() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/special');
    }

    public function global() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/global');
    }

    public function faq() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent);
        $model = new FaqModel();
        $data = [
            'list' => $model->get_list(),
        ];
        return view('/kobaco/faq', $data );
    }

    public function event() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent);
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = $this->request->uri;
        $page  = $uri->getSegment(3);
        //$page = $this->request->getGet('page');
        $lib = new Paging();
        $model = new FEventModel();

        if (!$page) {$page = 1;}
        $scale_row = 9;
        $start = ($page - 1) * $scale_row;
        $total_cnt = $model->get_count('event');
        $total_page = ceil($total_cnt / $scale_row);
        $start = $lib->start($page);
        $total_page = $lib->tpage($total_cnt);
        $lastpage = $lib->tpage($total_cnt);

        if ($lastpage == $page) {
            $scale_row = $total_cnt - (($lastpage - 1) * $scale_row);
        }

        $linkpage = "/kobaco/event";
        $ln = "";

        if ($total_cnt > 0) {
            $data['pagenum'] = $lib->divpage($linkpage, $total_page, $page, $ln);
        } else {
            $data['pagenum'] = "";
        }

        $data['TOTAL_CNT']	=	$total_cnt;		//총게시물
        $data['PAGE']		=	$page;			//현재페이지
        $data['TOTAL_PAGE']	=	$total_page;	//총페이지수
        $list_result = $model->get_list('event', $start, $scale_row);
        if ($total_cnt > 0) {
            $total_num = $total_cnt;	//임시게시물번호
            if($page > 1) {
                $total_num	=	$total_num - ($page - 1) * $scale_row;
            }

            foreach ($list_result->getResult() as $row) {
                $list_data[]	=	array(
                    'NUM'		=>	$total_num,
                    'id'        => $row->id,
                    'subject'   => $row->subject,
                    'contents'  => iconv_substr(strip_tags($row->contents), 0, 75, 'utf-8'),
                    'pc_file_name' => $row->pc_file_name,
                    'mo_file_name' => $row->mo_file_name,
                    'regdate'   => str_replace("-", ".", substr($row->reg_date, 0, 10)),
                );
                $total_num	=	$total_num - 1;
            }

            $data['LOOP']	=	$list_data;
        }

        return view('/kobaco/event', $data);
    }

    public function edetail() {
        $agent = $this->request->getUserAgent();
        $see = new SessionLib();
        $see->set_browser($agent );
        return view('/kobaco/edetail');
    }

}
