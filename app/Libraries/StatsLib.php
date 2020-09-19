<?php namespace App\Libraries;

class StatsLib {

    public function set_today_stats() {
        $db = \Config\Database::connect();
        $sql = "SELECT DATE_FORMAT(FROM_UNIXTIME(TIMESTAMP), '%Y-%m-%d') AS stats_date
                , COUNT(id) AS stats_count,SUM(device='PC') AS pc_count
                , SUM(device='MO') AS mo_count FROM ci_sessions
                WHERE TIMESTAMP BETWEEN UNIX_TIMESTAMP(CONCAT(CURDATE(), ' 00:00:00')) 
                AND UNIX_TIMESTAMP(CONCAT(CURDATE(), ' 23:59:59'))";
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
                    ON DUPLICATE KEY UPDATE stats_count='".$row->stats_count."'
                        , pc_count='".$row->pc_count."'
                        , mo_count='".$row->mo_count."'";
            $db->simpleQuery($uSql);
        }

        $db->close();
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
                    , ROUND(ROUND(pc_count/(pc_count+mo_count), 1) * 100) AS pc_per
                    , ROUND(ROUND(mo_count/(pc_count+mo_count), 1) * 100) AS mo_per
                FROM stats
                WHERE stats_date = CURDATE()";
        $query = $db->query($sql);
        $result = $query->getRow();

        $db->close();

        return $result;

    }

}
?>