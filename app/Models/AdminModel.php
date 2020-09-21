<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model {
    protected $table = 'tbl_admin';

    public function get_list($table = 'tbl_admin') {
        $db = \Config\Database::connect();
        $sql = "SELECT                     
                    number
                    ,admin_id
                    ,admin_name
                    ,gbn
                    ,CASE WHEN gbn=1001 THEN '수퍼 관리자'
                        WHEN gbn=1002 THEN '전시관 관리자'
                        WHEN gbn=1003 THEN '일반 관리자'
                        WHEN gbn=1004 THEN '이벤트 관리자'
                        END AS gbn_nm
                    ,belong
                    ,wdate
                    ,edate
                    ,ip 
                FROM ". $table ." ORDER BY number DESC";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();
        return $result;
    }

    public function get_count($table = 'tbl_admin') {
        $db = \Config\Database::connect();
        $count = $db->table($table)->countAll();

        $db->close();
        return $count;
    }

    public function get_view($table = 'tbl_admin', $number) {
        $db = \Config\Database::connect();

        $sql = "SELECT * FROM ".$table." WHERE number = ".$number."";
        $query = $db->query($sql);

        $result = $query->getRowArray();

        $db->close();
        return $result;
    }

    public function get_save($admindata) {
        $db = \Config\Database::connect();
        $sql = "INSERT INTO tbl_admin (admin_id, admin_name, admin_pwd, gbn, belong, wdate, ip) VALUES 
	            (:admin_id:, :admin_name:, PASSWORD(:admin_pwd:), :gbn:, :belong:, now(), :ip:);";

        if (!$db->query($sql, $admindata)) {
            $error = $db->error();
            return $error;
        }

        $db->close();
        return "200";
    }

    public function get_edit($admindata, $pwd_mode) {
        $db = \Config\Database::connect();
        if ($pwd_mode == '1') {
            $sql = "UPDATE tbl_admin SET admin_name=:admin_name:, admin_pwd=PASSWORD(:admin_pwd:), gbn=:gbn:, belong=:belong:
                    , edate=now(), ip=:ip: WHERE number=:number:";
        } else {
            $sql = "UPDATE tbl_admin SET admin_name=:admin_name:, gbn=:gbn:, belong=:belong: 
                    , edate=now(), ip=:ip: WHERE number=:number:";
        }

        if (!$db->query($sql, $admindata)) {
            $error = $db->error();
            return $error;
        }

        $db->close();
        return "200";
    }

    public function get_info($table = 'tbl_admin', $number) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ".$table." WHERE number = ".$number."";
        //echo $sql;
        $query = $db->query($sql);

        $result = $query->getRowArray();
        $db->close();
        return $result;
    }

    public function get_delete($table = 'tbl_admin', $number) {
        $db = \Config\Database::connect();
        $sql = "DELETE FROM ".$table." WHERE number = ".$number."";
        if ($db->simpleQuery($sql))
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