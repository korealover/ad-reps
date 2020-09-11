<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {

    public function get_logon_check($logindata) {
        $db = \Config\Database::connect();
        $sql = "Select * from tbl_admin where admin_id = :admin_id: and admin_pwd = password(:admin_pwd:) ";
        $query = $db->query($sql, $logindata);
        $row = $query->getRow();

        return $row;
    }

}