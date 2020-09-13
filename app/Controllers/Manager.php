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
                echo  $id;
                $data = [
                    'current_left' => 'board',
                    'vs' => $model->get_view('board', $id),
                ];

            } elseif ($page == 'boardw') {
                $model = new BoardModel();
                $uri = new \CodeIgniter\HTTP\URI();
                $uri = $this->request->uri;
                $id = $uri->getSegment(4);
                echo  $id;
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
        $files = $this->request->getFiles();

        if ($files->hasFile('uploadedFile'))
        {
            $file = $files->getFile('uploadedfile');

            // Generate a new secure name
            $name = $file->getRandomName();

            // Move the file to it's new home
            $file->move('/path/to/dir', $name);

            echo $file->getSize('mb');      // 1.23
            echo $file->getExtension();     // jpg
            echo $file->getType();          // image/jpg
        }



        $model = new BoardModel();
        $boarddata = array(
            'user_id' => $session->get('admin_id'),
            'user_name' => $session->get('admin_name'),
            'subject' => $subject,
            'contents' => $contents,
        );

        $result = $model->get_save($boarddata);

//        echo $result;

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