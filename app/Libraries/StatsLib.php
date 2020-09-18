<?php namespace App\Libraries;

class StatsLib {

    public function set_today_stats() {
        $db = \Config\Database::connect();
        $sql = "SELECT DATE_FORMAT(FROM_UNIXTIME(TIMESTAMP), '%Y-%m-%d') AS stats_date, COUNT(id) AS stats_count
                FROM ci_sessions
                WHERE TIMESTAMP BETWEEN UNIX_TIMESTAMP(CONCAT(CURDATE(), ' 00:00:00')) AND UNIX_TIMESTAMP(CONCAT(CURDATE(), ' 23:59:59'))";
        $query = $db->query($sql);
        $row = $query->getRow();

        if (isset($row)) {
//            print_r($row->stats_count);
            $uSql = "UPDATE stats SET stats_count='".$row->stats_count."' WHERE stats_date='".$row->stats_date."'";
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
                FROM stats GROUP BY DATE_FORMAT(stats_date, '%Y-%m')";
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();

        return $result;
    }

}
?>