<?php namespace App\Models;

use CodeIgniter\Model;

class BoardModel extends Model {
    protected $table = 'board';
    protected $allowedFields = ['title'];

    public function get_list($table = 'board') {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ". $table ." ORDER BY id DESC";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query -> getResult();

        return $result;
    }

    public function get_view($table = 'board', $id) {
        $db = \Config\Database::connect();
        $sql0 = "UPDATE ".$table." SET hits = hits + 1 WHERE id = " .$id."";
        $db->query($sql0);

        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
//        echo $sql;
        $query = $db->query($sql);

        $result = $query->getRowArray();

        return $result;
    }

    public function get_save($boarddata) {
        $db = \Config\Database::connect();
        $sql = "INSERT INTO board (pid, user_id, user_name, subject, contents, hits, file_size, file_name, file_path, org_file_name, reg_date) VALUES 
	            (0, :user_id:, :user_name:, :subject:, :contents:, 0, :file_size:, :file_name:, :file_path:, :org_file_name:, now());";

        if (!$db->query($sql, $boarddata)) {
            $error = $db->error();
            return $error;
        }

        return "200";
    }

    public function get_edit($boarddata) {
        $db = \Config\Database::connect();
        $sql = "UPDATE board SET subject=:subject:, contents=:contents:, file_size=:file_size:, file_name=:file_name:, file_path=:file_path:
                , org_file_name=:org_file_name: WHERE id=:id:";

        if (!$db->query($sql, $boarddata)) {
            $error = $db->error();
            return $error;
        }

        return "200";
    }

    public function get_info($table = 'board', $id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
        echo $sql;
        $query = $db->query($sql);

        $result = $query->getRowArray();

        return $result;
    }
}