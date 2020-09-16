<?php namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model {
    protected $table = 'event';
    protected $allowedFields = ['title'];
   // protected $db = \Config\Database::connect();

    public function get_list($table = 'event') {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ". $table ." ORDER BY id DESC";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();
        return $result;
    }

    public function get_count($table = 'event') {
        $db = \Config\Database::connect();
        $count = $db->table($table)->countAll();

        $db->close();
        return $count;
    }

    public function get_view($table = 'event', $id) {
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
        $sql = "INSERT INTO event (pid, user_id, user_name, subject, contents, hits, pc_file_size, pc_file_name, pc_org_file_name, mo_file_size, mo_file_name, mo_org_file_name, file_path, reg_date) VALUES 
	            (0, :user_id:, :user_name:, :subject:, :contents:, 0, :pc_file_size:, :pc_file_name:, :pc_org_file_name:, :mo_file_size:, :mo_file_name:, :mo_org_file_name:, :file_path:,  now());";

        if (!$db->query($sql, $boarddata)) {
            $error = $db->error();
            return $error;
        }

        $db->close();
        return "200";
    }

    public function get_edit($boarddata) {
        $db = \Config\Database::connect();
        $sql = "UPDATE event SET subject=:subject:, contents=:contents:, pc_file_size=:pc_file_size:, pc_file_name=:pc_file_name:, pc_org_file_name=:pc_org_file_name: 
                , mo_file_size=:mo_file_size:, mo_file_name=:mo_file_name:, mo_org_file_name=:mo_org_file_name:, file_path=:file_path: WHERE id=:id:";

        if (!$db->query($sql, $boarddata)) {
            $error = $db->error();
            return $error;
        }

        $db->close();
        return "200";
    }

    public function get_info($table = 'event', $id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
        //echo $sql;
        $query = $db->query($sql);

        $result = $query->getRowArray();
        $db->close();
        return $result;
    }

    public function get_file_delete($table = 'event', $id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
        $query = $db->query($sql);
        $row = $query->getRowArray();
        //첨부파일 삭제
        if ($row['pc_file_name'] != "") {
            @unlink(ORG_FILE_PATH . "/" . $row['pc_file_name']);
        }
        if ($row['mo_file_name'] != "") {
            @unlink(ORG_FILE_PATH . "/" . $row['mo_file_name']);
        }

        $db->close();
    }

    public function get_delete($table = 'event', $id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ".$table." WHERE id = ".$id."";
        $query = $db->query($sql);
        $row = $query->getRowArray();
        //첨부파일 삭제
        if ($row['pc_file_name'] != "") {
            @unlink(ORG_FILE_PATH . "/" . $row['pc_file_name']);
        }
        if ($row['mo_file_name'] != "") {
            @unlink(ORG_FILE_PATH . "/" . $row['mo_file_name']);
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