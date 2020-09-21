<?php namespace App\Controllers;

use App\Libraries\StatsLib;
use App\Models\AdminModel;
use App\Models\BoardModel;
use App\Models\DisplayModel;
use App\Models\EventModel;
use App\Models\FaqModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class Manager extends Controller {
	public function index() {
		//return view('welcome_message');
        $this->view();
	}

    /**
     * 관리 화면 관련 처리
     * @param string $page
     *
     */
	public function view($page = 'login') {
		$session = \Config\Services::session();
		if ( ! is_file(APPPATH.'/Views/manager/'.$page.'.php')) {
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter
		if ($page == 'login') {

		} else {
			if (!$session->get('logged_admin')) {
				echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/login'>";
				exit;
			}

			if ($page == 'display') { /** 전시관 관리 */
                $model = new DisplayModel();
                $data = [
                    'current_left' => 'display',
                    'list' => $model->get_list(),
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            } elseif ($page == 'board') { /** 게시판 관리 - list */
			    $model = new BoardModel();
//			    $id = $this->url->segment(4);
                $data = [
                    'current_left' => 'board',
                    'list' => $model->get_list(),
                    'cnt' => $model->get_count(),
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            } elseif ($page == 'boardv') {
                $model = new BoardModel();
                $uri = new \CodeIgniter\HTTP\URI();
                $uri = $this->request->uri;
                $id = $uri->getSegment(4);
                $data = [
                    'current_left' => 'board',
                    'vs' => $model->get_view('board', $id),
                    'admin_menu' =>$session->get('admin_menu'),
                ];

            } elseif ($page == 'boardw') {
                $data = [
                    'current_left' => 'board',
                    'admin_menu' =>$session->get('admin_menu'),
                ];

            } elseif ($page == 'faq') {
                $model = new FaqModel();
                $data = [
                    'current_left' => 'faq',
                    'list' => $model->get_list(),
                    'cnt' => $model->get_count(),
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            } elseif ($page == 'faqv') {
                $model = new FaqModel();
                $uri = new \CodeIgniter\HTTP\URI();
                $uri = $this->request->uri;
                $id = $uri->getSegment(4);
                $data = [
                    'current_left' => 'faq',
                    'vs' => $model->get_view('faq', $id),
                    'admin_menu' =>$session->get('admin_menu'),
                ];

            } elseif ($page == 'faqw') {
                $data = [
                    'current_left' => 'faq',
                    'admin_menu' =>$session->get('admin_menu'),
                ];

            } elseif ($page == 'event') {
			    $model = new EventModel();
                $data = [
                    'current_left' => 'event',
                    'list' => $model->get_list(),
                    'cnt' => $model->get_count(),
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            } elseif ($page == 'eventv') {
                $model = new EventModel();
                $uri = new \CodeIgniter\HTTP\URI();
                $uri = $this->request->uri;
                $id = $uri->getSegment(4);
                $data = [
                    'current_left' => 'event',
                    'vs' => $model->get_view('event', $id),
                    'admin_menu' =>$session->get('admin_menu'),
                ];

            } elseif ($page == 'eventw') {
                $data = [
                    'current_left' => 'event',
                    'admin_menu' =>$session->get('admin_menu'),
                ];

            } elseif ($page == 'stats') {
                $data = [
                    'current_left' => 'stats',
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            } elseif ($page == 'admin') {
                $model = new AdminModel();
                $data = [
                    'current_left' => 'admin',
                    'list' => $model->get_list(),
                    'cnt' => $model->get_count(),
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            } elseif ($page == 'adminw') {
                $data = [
                    'current_left' => 'admin',
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            } elseif($page == 'adminv') {
                $model = new AdminModel();
                $uri = new \CodeIgniter\HTTP\URI();
                $uri = $this->request->uri;
                $number = $uri->getSegment(4);
                $data = [
                    'current_left' => 'admin',
                    'vs' => $model->get_view('tbl_admin', $number),
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            } else {
                $stats = new StatsLib();
                $perces = $stats->get_today();

                $data = [
                    'current_left' => 'main',
                    'week_row' => $stats->get_week(),
                    'month_row' => $stats->get_month(),
                    'pc_per' => $perces->pc_per,
                    'mo_per' => $perces->mo_per,
                    'admin_menu' =>$session->get('admin_menu'),
                ];
            }
		}
		//echo view('templates/header', $data);
		echo view('manager/'.$page, $data);
		//echo view('templates/footer', $data);
	}

    /**
     * 로그인 처리
     */
	public function login_proc() {
		$session = \Config\Services::session();
		$admin_id = $this->request->getPost('admin_id');
		$admin_pwd = $this->request->getPost('admin_pwd');
        $model = new LoginModel();

        $logindata  = array(
            'admin_id' => $admin_id,
			'admin_pwd' => $admin_pwd
        );
        $row = $model->get_logon_check($logindata);

		if (isset($row)) {
			$newdata = array(
					'admin_number' => $row->number,
					'admin_id' => $row->admin_id,
					'admin_name' => $row->admin_name,
					'logged_admin' => TRUE,
                    'admin_menu' => $row->gbn,
				);
			$session->set($newdata);

			$stats = new StatsLib();
            $stats->set_today_stats();

			echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/main'>";
			exit;
		} else {

			echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/login'>";
			exit;
		}

//		print_r($session->get('logged_admin'));

	}

    /**
     * 로그아웃 처리
     */
	public function logout() {
		$session = \Config\Services::session();
		$session->destroy();
		echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/login'>";
		exit;
	}

    /**
     * 공지사항 저장 처리
     */
	public function boardp() {
        $session = \Config\Services::session();
        $subject = $this->request->getPost('subject');
        $contents = $this->request->getPost('ckeditor_full');
        $id = $this->request->getPost('id');
        $mode = $this->request->getPost('mode');
        $file_size = 0;
        $file_name = "";
        $file_path = "";
        $org_file_name = "";
        $edit = "";

        if ($this->request->getFile('uploadedfile')->getName()) {
            $file = $this->request->getFile('uploadedfile');
            //print_r($file);

            // Generate a new secure name
            $name = $file->getRandomName();
            $file_name = $name;
            $org_file_name = $file->getName();

//            $org_file_path = "D:\projects\dev\ad-reps\www\upload";
            // Move the file to it's new home
            $file->move(ORG_FILE_PATH, $name);
            $file_path = "/upload";

            $file_size = $file->getSize('mb');      // 1.23
//            echo $file->getExtension();     // jpg
//            echo $file->getType();          // image/jpg
        } else {
            if($mode == "edit") {
                $edit = "N";    // 수정시 파일 업로드 없음
            }
        }

        $model = new BoardModel();

        if ($mode == "edit") {
            $row = $model->get_info('board', $id);
            //print_r($row);
            if ($edit == "N") {
                $file_size = $row['file_size'];
                $file_name = $row['file_name'];
                $file_path = $row['file_path'];
                $org_file_name = $row['org_file_name'];
            } else {
                // 수정된 파일 업로드가 있다면 기존 파일 삭제
                $model->get_file_delete('board', $id);
            }

            $boarddata = array(
                'id' => $id,
                'subject' => $subject,
                'contents' => $contents,
                'file_size' => $file_size,
                'file_name' => $file_name,
                'file_path' => $file_path,
                'org_file_name' => $org_file_name,
            );
            $result = $model->get_edit($boarddata);
        } else {
            $boarddata = array(
                'user_id' => $session->get('admin_id'),
                'user_name' => $session->get('admin_name'),
                'subject' => $subject,
                'contents' => $contents,
                'file_size' => $file_size,
                'file_name' => $file_name,
                'file_path' => $file_path,
                'org_file_name' => $org_file_name,
            );
            $result = $model->get_save($boarddata);
        }

        echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/board'>";
        exit;

    }

    /**
     * 전시관 저장
     */
    public function displays() {
        $session = \Config\Services::session();
        $id = $this->request->getPost('id');
        $url = $this->request->getPost('url');
        $model = new DisplayModel();
        $newdata = array(
            'id' => $id,
            'url' => $url
        );

        $result = $model->get_save($newdata);

        echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/display'>";
        exit;
    }

    /**
     * 공지사항 삭제
     */
    public function boardd() {
        $session = \Config\Services::session();
        $model = new BoardModel();
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = $this->request->uri;
        $id = $uri->getSegment(3);

        $result = $model->get_delete('board', $id);

        echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/board'>";
        exit;
    }

    /**
     * FAQ 저장 처리
     */
    public function faqp() {
        $session = \Config\Services::session();
        $subject = $this->request->getPost('subject');
        $contents = $this->request->getPost('ckeditor_full');
        $id = $this->request->getPost('id');
        $mode = $this->request->getPost('mode');
        $file_size = 0;
        $file_name = "";
        $file_path = "";
        $org_file_name = "";
        $edit = "";

        if ($this->request->getFile('uploadedfile')->getName()) {
            $file = $this->request->getFile('uploadedfile');
            //print_r($file);

            // Generate a new secure name
            $name = $file->getRandomName();
            $file_name = $name;
            $org_file_name = $file->getName();

//            $org_file_path = "D:\projects\dev\ad-reps\www\upload";
            // Move the file to it's new home
            $file->move(ORG_FILE_PATH, $name);
            $file_path = "/upload";

            $file_size = $file->getSize('mb');      // 1.23
//            echo $file->getExtension();     // jpg
//            echo $file->getType();          // image/jpg
        } else {
            if($mode == "edit") {
                $edit = "N";    // 수정시 파일 업로드 없음
            }
        }

        $model = new FaqModel();

        if ($mode == "edit") {
            $row = $model->get_info('faq', $id);
            //print_r($row);
            if ($edit == "N") {
                $file_size = $row['file_size'];
                $file_name = $row['file_name'];
                $file_path = $row['file_path'];
                $org_file_name = $row['org_file_name'];
            } else {
                // 수정된 파일 업로드가 있다면 기존 파일 삭제
                $model->get_file_delete('faq', $id);
            }

            $boarddata = array(
                'id' => $id,
                'subject' => $subject,
                'contents' => $contents,
                'file_size' => $file_size,
                'file_name' => $file_name,
                'file_path' => $file_path,
                'org_file_name' => $org_file_name,
            );
            $result = $model->get_edit($boarddata);
        } else {
            $boarddata = array(
                'user_id' => $session->get('admin_id'),
                'user_name' => $session->get('admin_name'),
                'subject' => $subject,
                'contents' => $contents,
                'file_size' => $file_size,
                'file_name' => $file_name,
                'file_path' => $file_path,
                'org_file_name' => $org_file_name,
            );
            $result = $model->get_save($boarddata);
        }

        echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/faq'>";
        exit;

    }

    /**
     * FAQ 삭제
     */
    public function faqd() {
        $session = \Config\Services::session();
        $model = new FaqModel();
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = $this->request->uri;
        $id = $uri->getSegment(3);

        $result = $model->get_delete('faq', $id);

        echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/faq'>";
        exit;
    }

    /**
     * 이벤트 저장
     */
    public function eventp() {
        $session = \Config\Services::session();
        $subject = $this->request->getPost('subject');
        $contents = $this->request->getPost('ckeditor_full');
        $id = $this->request->getPost('id');
        $mode = $this->request->getPost('mode');
        $pc_file_size = 0;
        $pc_file_name = "";
        $pc_org_file_name = "";
        $mo_file_size = 0;
        $mo_file_name = "";
        $mo_org_file_name = "";
        $file_path = "";
        $edit = "";

        /**
         * PC 썸네일 저장
         */
        if ($this->request->getFile('uploadedfile')->getName()) {
            $file = $this->request->getFile('uploadedfile');
            //print_r($file);

            // Generate a new secure name
            $name = $file->getRandomName();
            $pc_file_name = $name;
            $pc_org_file_name = $file->getName();
            $file->move(ORG_FILE_PATH, $name);
            $file_path = "/upload";

            $pc_file_size = $file->getSize('mb');      // 1.23
//            echo $file->getExtension();     // jpg
//            echo $file->getType();          // image/jpg
        } else {
            if($mode == "edit") {
                $edit = "N";    // 수정시 파일 업로드 없음
            }
        }

        /**
         * mobile 썸네일 저장
         */
        if ($this->request->getFile('moUploadedfile')->getName()) {
            $file = $this->request->getFile('moUploadedfile');
            //print_r($file);

            // Generate a new secure name
            $name = $file->getRandomName();
            $mo_file_name = $name;
            $mo_org_file_name = $file->getName();
            $file->move(ORG_FILE_PATH, $name);
            $file_path = "/upload";

            $mo_file_size = $file->getSize('mb');      // 1.23
//            echo $file->getExtension();     // jpg
//            echo $file->getType();          // image/jpg
        } else {
            if($mode == "edit") {
                $edit = "N";    // 수정시 파일 업로드 없음
            }
        }

        $model = new EventModel();

        if ($mode == "edit") {
            $row = $model->get_info('event', $id);
            //print_r($row);
            if ($edit == "N") {
                $pc_file_size = $row['pc_file_size'];
                $pc_file_name = $row['pc_file_name'];
                $pc_org_file_name = $row['org_file_name'];
                $mo_file_size = $row['mo_file_size'];
                $mo_file_name = $row['mo_file_name'];
                $mo_org_file_name = $row['mo_file_name'];
                $file_path = $row['file_path'];
            } else {
                // 수정된 파일 업로드가 있다면 기존 파일 삭제
                $model->get_file_delete('event', $id);
            }

            $boarddata = array(
                'id' => $id,
                'subject' => $subject,
                'contents' => $contents,
                'pc_file_size' => $pc_file_size,
                'pc_file_name' => $pc_file_name,
                'pc_org_file_name' => $pc_org_file_name,
                'mo_file_size' => $mo_file_size,
                'mo_file_name' => $mo_file_name,
                'mo_org_file_name' => $mo_org_file_name,
                'file_path' => $file_path,
            );
            $result = $model->get_edit($boarddata);
        } else {
            $boarddata = array(
                'user_id' => $session->get('admin_id'),
                'user_name' => $session->get('admin_name'),
                'subject' => $subject,
                'contents' => $contents,
                'pc_file_size' => $pc_file_size,
                'pc_file_name' => $pc_file_name,
                'pc_org_file_name' => $pc_org_file_name,
                'mo_file_size' => $mo_file_size,
                'mo_file_name' => $mo_file_name,
                'mo_org_file_name' => $mo_org_file_name,
                'file_path' => $file_path,
            );
            $result = $model->get_save($boarddata);
        }

        echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/event'>";
        exit;

    }

    /**
     * 관리자 저장/수정 처리
     */
    public function adminp() {
        $session = \Config\Services::session();
        $number = $this->request->getPost('number');
        $gbn = $this->request->getPost('gbn');
        $belong = $this->request->getPost('belong');
        $admin_id = $this->request->getPost('admin_id');
        $pwd1 = $this->request->getPost('pwd1');
        $pwd2 = $this->request->getPost('pwd2');
        if ($pwd1 != $pwd2) {
            echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/adminv/$number'>";
            exit;
        } else {
            $admin_pwd = $pwd1;
        }
        $mode = $this->request->getPost('mode');
        $admin_name = $this->request->getPost('admin_name');
        $ip = $_SERVER['REMOTE_ADDR'];
        $pwd_mode = $this->request->getPost('pwd_mode');
        $model = new AdminModel();

        if ($mode == "edit") {
            $admindata = array(
                'number' => $number,
                'gbn' => $gbn,
                'belong' => $belong,
                'admin_pwd' => $admin_pwd,
                'admin_name' => $admin_name,
                'ip' => $ip,
            );
            $result = $model->get_edit($admindata, $pwd_mode);
        } else {
            $admindata = array(
                'gbn' => $gbn,
                'belong' => $belong,
                'admin_id' => $admin_id,
                'admin_pwd' => $admin_pwd,
                'admin_name' => $admin_name,
                'ip' => $ip,
            );
            $result = $model->get_save($admindata);
        }

        echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/admin'>";
        exit;

    }

    /**
     * 관리자 아이디 사용 유무
     * @return mixed
     */
    public function adminIDCheck() {
        $admin_id = $this->request->getPost('admin_id');
        $stats = new StatsLib();
        $result = $stats->get_admin_id_check($admin_id);

        return $result->cnt;
    }

    /**
     * FAQ 삭제
     */
    public function admind() {
        $session = \Config\Services::session();
        $model = new AdminModel();
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = $this->request->uri;
        $number = $uri->getSegment(3);

        $result = $model->get_delete('tbl_admin', $number);

        echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/admin'>";
        exit;
    }
}