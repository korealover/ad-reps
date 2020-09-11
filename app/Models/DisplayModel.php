<?php namespace App\Models;

use CodeIgniter\Model;

class DisplayModel extends Model {
    protected $table = 'display';
    protected $allowedFields = ['title'];

    public function get_list($table = 'display') {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ". $table ." ORDER BY id";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query->getResult();

        return $result;
    }

    public function get_save($newdata) {
        $db = \Config\Database::connect();
        $sql = "Update display set url=:url:, upd_dt=now() where id= :id:";

        if (!$db->query($sql, $newdata)) {
            $error = $db->error();
            return $error;
        }

        return "200";
        //return $query->dataSeek();
    }
}