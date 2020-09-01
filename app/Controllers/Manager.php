<?php namespace App\Controllers;

use App\Models\DisplayModel;
use CodeIgniter\Controller;

class Manager extends Controller {
	public function index() {
		//return view('welcome_message');
        $this->view();
	}

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
			if ($page == 'display') {
                $model = new DisplayModel();
                $data = [
                    'display' => $model->getNews(),
                    'title' => 'display archive',
                ];
            }
		}
		//echo view('templates/header', $data);
		echo view('manager/'.$page, $data);
		//echo view('templates/footer', $data);
	}

	public function login_proc() {
		$session = \Config\Services::session();
		$db = \Config\Database::connect();
		$admin_id = $this->request->getPost('admin_id');
		$admin_pwd = $this->request->getPost('admin_pwd');
		//echo $admin_id;
		//echo $admin_pwd;
		
		$sql = "Select * from tbl_admin where admin_id = :admin_id: and admin_pwd = password(:admin_pwd:) ";
		$query = $db->query($sql, [
			'admin_id' => $admin_id,
			'admin_pwd' => $admin_pwd
		]);

		$row = $query->getRow();
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

		print_r($session->get('logged_admin'));

		$db = db_connect();

	}

	public function logout() {
		$session = \Config\Services::session();
		$session->destroy();
		echo "<meta http-equiv='Refresh' content='0; URL=/manager/view/login'>";
		exit;
	}
}