<?php namespace App\Libraries;

class StatsLib {

    public function set_today_stats() {
        $db = \Config\Database::connect();
        $sql = "SELECT IFNULL(DATE_FORMAT(FROM_UNIXTIME(TIMESTAMP), '%Y-%m-%d'), CURDATE()) AS stats_date
                , COUNT(id) AS stats_count, IFNULL(SUM(device='PC'), 0) AS pc_count
                , IFNULL(SUM(device='MO'), 0) AS mo_count FROM ci_sessions
                WHERE TIMESTAMP BETWEEN UNIX_TIMESTAMP(DATE_SUB(NOW(), INTERVAL 20 MINUTE))  
                AND UNIX_TIMESTAMP(NOW())";
        $query = $db->query($sql);
        $row = $query->getRow();

        if (isset($row)) {
//            print_r($row->stats_count);
            $uSql = "INSERT INTO stats (stats_date
                        , stats_count
                        , pc_count
                        , mo_count
                    ) VALUES ('".$row->stats_date."'
                        , '".$row->stats_count."'
                        , '".$row->pc_count."'
                        , '".$row->mo_count."') 
                    ON DUPLICATE KEY UPDATE stats_count= stats_count + ".$row->stats_count."
                        , pc_count = pc_count + ".$row->pc_count."
                        , mo_count = mo_count + ".$row->mo_count;
            $db->simpleQuery($uSql);

            $tSql = "INSERT INTO stats_datetime (stats_datetime
                        , stats_date
                        , stats_count
                        , pc_count
                        , mo_count
                    ) VALUES (NOW() 
                        , CURDATE()
                        , '".$row->stats_count."'
                        , '".$row->pc_count."'
                        , '".$row->mo_count."') ";
            $db->simpleQuery($tSql);
        }

        $stats_count = $row->stats_count;
        $pc_count = $row->pc_count;
        $mo_count = $row->mo_count;

        $db->close();

        return $stats_count."-".$pc_count."-".$mo_count;
    }

    /**
     * 대시보드 주간 접속 추이 data
     * @return array|array[]|object[]
     */
    public function get_week() {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM stats
                WHERE stats_date BETWEEN DATE_ADD(NOW(),INTERVAL -1 WEEK ) AND NOW();";
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();

        return $result;
    }

    /**
     * 대시보드 월 접속 추이 data
     * @return array|array[]|object[]
     */
    public function get_month() {
        $db = \Config\Database::connect();
        $sql = "SELECT DATE_FORMAT(stats_date, '%Y-%m') AS stats_date
                , SUM(stats_count) AS stats_count
                , SUM(pc_count) AS pc_count
                , SUM(mo_count) AS mo_count
                FROM stats GROUP BY DATE_FORMAT(stats_date, '%Y-%m')";
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();

        return $result;
    }

    /**
     * 일일 접속 추이
     * @return array|array[]|object[]
     */
    public function get_today() {
        $db = \Config\Database::connect();
        $sql = "SELECT 
                    stats_date
                    , ROUND(ROUND(pc_count/(pc_count+mo_count), 3) * 100) AS pc_per
                    , ROUND(ROUND(mo_count/(pc_count+mo_count), 3) * 100) AS mo_per
                FROM stats
                WHERE stats_date = CURDATE()";
        $query = $db->query($sql);
        $result = $query->getRow();

        $db->close();
        return $result;
    }

    public function get_admin_id_check($admin_id) {
        $db = \Config\Database::connect();
        $sql = "SELECT COUNT(admin_id) AS cnt FROM tbl_admin WHERE admin_id = '".$admin_id."'";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query->getRow();

        $db->close();
        return $result;
    }

    /**
     * 누적 방문자 수
     * @return array|mixed|object|null
     */
    public function get_accumulate() {
        $db = \Config\Database::connect();
        $sql = "SELECT 
                    SUM(stats_count) AS total
                    ,SUM(pc_count) AS pc_total
                    ,SUM(mo_count) AS mo_total
                FROM stats";
        $query = $db->query($sql);
        $result = $query->getRow();

        $db->close();
        return $result;
    }

    /**
     * 일일 접속 추이
     * @return array|array[]|object[]
     */
    public function get_today_time() {
        $db = \Config\Database::connect();
        $sql = "SELECT CONCAT(date_format(stats_datetime, '%Y-%m-%d %H'), ':00') AS stats_datetm
                    , SUM(stats_count) AS stats_count
                    , SUM(pc_count) AS pc_count
                    , SUM(mo_count) AS mo_count
                from stats_datetime
                WHERE stats_date=CURDATE()
                GROUP BY date_format(stats_datetime, '%Y-%m-%d %H')";
        $query = $db->query($sql);
        $result = $query->getResult();

        $db->close();
        return $result;
    }

    /**
     * 일일 접속 추이
     * @return array|array[]|object[]
     */
    public function get_yesterday_time() {
        $db = \Config\Database::connect();
        $sql = "SELECT CONCAT(date_format(stats_datetime, '%Y-%m-%d %H'), ':00') AS stats_datetm
                    , SUM(stats_count) AS stats_count
                    , SUM(pc_count) AS pc_count
                    , SUM(mo_count) AS mo_count
                from stats_datetime
                WHERE stats_date=(CURDATE() - INTERVAL 1 DAY)
                GROUP BY date_format(stats_datetime, '%Y-%m-%d %H')";
        $query = $db->query($sql);
        $result = $query->getResult();

        $db->close();
        return $result;
    }

}
?>