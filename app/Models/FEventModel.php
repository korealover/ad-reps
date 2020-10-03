<?php namespace App\Models;

use CodeIgniter\Model;

class FEventModel extends Model {
    protected $table = 'event';
    protected $allowedFields = ['subject'];

    public function get_list($table = 'event', $start, $page_row) {
        $today = date("Y-m-d");
        $db = \Config\Database::connect();
        $builder = $db->table('event');
        $builder->where('start_dt <=', $today.' 00:00:00');
        $builder->where('end_dt >=', $today.' 23:59:59');
        $builder->orderBy('id', 'DESC');
        $builder->limit($page_row, $start);
        $query = $builder->get();
//        $query = $builder->getCompiledSelect();
//        echo $query;

        $db->close();
        return $query;
    }

    public function get_count($table = 'event') {
        $today = date("Y-m-d");
        $db = \Config\Database::connect();
        //$count = $db->table($table)->countAll();
        $builder = $db->table($table);
        $builder->where('start_dt <=', $today.' 00:00:00');
        $count = $builder->where('end_dt >=', $today.' 23:59:59')->countAll();


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
        if ($row['file_name'] != "") {
            @unlink(ORG_FILE_PATH . "/" . $row['file_name']);
        }

        $db->close();
    }

    public function get_delete($table = 'event', $id) {
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

    public function get_next($id) {
        $db = \Config\Database::connect();
        $sql = "SELECT id, subject FROM event where id > ".$id." ORDER BY id ASC LIMIT 1";
        $query = $db->query($sql);
        $result = $query->getRowArray();

        $db->close();
        return $result;
    }

    public function get_prev($id) {
        $db = \Config\Database::connect();
        $sql = "SELECT id, subject FROM event where id < ".$id." ORDER BY id DESC LIMIT 1";
        $query = $db->query($sql);
        $result = $query->getRowArray();

        $db->close();
        return $result;
    }
}