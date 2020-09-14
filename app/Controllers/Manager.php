<?php namespace App\Controllers;

use App\Models\BoardModel;
use App\Models\DisplayModel;
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
                ];
            } elseif ($page == 'board') { /** 게시판 관리 - list */
			    $model = new BoardModel();
//			    $id = $this->url->segment(4);
                $data = [
                    'current_left' => 'board',
                    'list' => $model->get_list(),
                ];
            } elseif ($page == 'boardv') {
                $model = new BoardModel();
                $uri = new \CodeIgniter\HTTP\URI();
                $uri = $this->request->uri;
                $id = $uri->getSegment(4);
                $data = [
                    'current_left' => 'board',
                    'vs' => $model->get_view('board', $id),
                ];

            } elseif ($page == 'boardw') {
                $model = new BoardModel();
                $uri = new \CodeIgniter\HTTP\URI();
                $uri = $this->request->uri;
                $id = $uri->getSegment(4);
                $data = [
                    'current_left' => 'board',
                ];

            } elseif ($page == 'event') {
                $data = [
                    'current_left' => 'event',
                ];
            } elseif ($page == 'stats') {
                $data = [
                    'current_left' => 'stats',
                ];
            } elseif ($page == 'admin') {
                $data = [
                    'current_left' => 'admin',
                ];
            } else {
                $data = [
                    'current_left' => 'main',
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
					'logged_admin' => TRUE
				);
			$session->set($newdata);

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
     * 게시판 저장 처리
     */
	public function boardp() {
        $session = \Config\Services::session();
        $subject = $this->request->getPost('subject');
        $contents = $this->request->getPost('ckeditor_standard');
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

            $org_file_path = "D:\projects\dev\ad-reps\www\upload";
            // Move the file to it's new home
            $file->move($org_file_path, $name);
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
}