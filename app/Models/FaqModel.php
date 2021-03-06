<?php namespace App\Models;

use CodeIgniter\Model;

class FaqModel extends Model {
    protected $table = 'faq';
    protected $allowedFields = ['title'];

    public function get_list($table = 'faq') {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ". $table ." ORDER BY id DESC";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();
        return $result;
    }

    public function get_count($table = 'faq') {
        $db = \Config\Database::connect();
        $count = $db->table($table)->countAll();

        $db->close();
        return $count;
    }

    public function get_view($table = 'faq', $id) {
        $db = \Config\Database::connect();
        $sql0 = "UPDATE ".$table." SET hits = hits + 1 WHERE id = " .$id."";
        $db->query($sql0);

        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
//        echo $sql;
        $query = $db->query($sql);

        $result = $query->getRowArray();

        $db->close();
        return $result;
    }

    public function get_save($boarddata) {
        $db = \Config\Database::connect();
        $sql = "INSERT INTO faq (pid, user_id, user_name, subject, contents, hits, file_size, file_name, file_path, org_file_name, reg_date) VALUES 
	            (0, :user_id:, :user_name:, :subject:, :contents:, 0, :file_size:, :file_name:, :file_path:, :org_file_name:, now());";

        if (!$db->query($sql, $boarddata)) {
            $error = $db->error();
            return $error;
        }

        $db->close();
        return "200";
    }

    public function get_edit($boarddata) {
        $db = \Config\Database::connect();
        $sql = "UPDATE faq SET subject=:subject:, contents=:contents:, file_size=:file_size:, file_name=:file_name:, file_path=:file_path:
                , org_file_name=:org_file_name: WHERE id=:id:";

        if (!$db->query($sql, $boarddata)) {
            $error = $db->error();
            return $error;
        }

        $db->close();
        return "200";
    }

    public function get_info($table = 'faq', $id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
        //echo $sql;
        $query = $db->query($sql);

        $result = $query->getRowArray();
        $db->close();
        return $result;
    }

    public function get_file_delete($table = 'faq', $id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
        $query = $db->query($sql);
        $row = $query->getRowArray();
        //첨부파일 삭제
        if ($row['file_name'] != "") {
            @unlink(ORG_FILE_PATH . "/" . $row['file_name']);
        }

        $db->close();
    }

    public function get_delete($table = 'faq', $id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
        $query = $db->query($sql);
        $row = $query->getRowArray();
        //첨부파일 삭제
        if ($row['file_name'] != "") {
            @unlink(ORG_FILE_PATH . "/" . $row['file_name']);
        }

        $sql2 = "DELETE FROM ".$table." WHERE id = ".$id."";
        if ($db->simpleQuery($sql2 ))
        {
            $result = "Success!";
        }
        else
        {
            $result = "Query failed!";
        }

        $db->close();
        return $result;
    }
}