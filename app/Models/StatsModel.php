<?php namespace App\Models;

use CodeIgniter\Model;

class StatsModel extends Model {
    protected $table = 'stats';

    /**
     * @param string $table
     * @return array|array[]|object[]
     * 일별 접속수
     */
    public function get_stats_day_list($table = 'stats') {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ". $table ." ORDER BY stats_date DESC";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();
        return $result;
    }

    public function get_stats_week_list($table = 'stats') {
        $db = \Config\Database::connect();
        $sql = "SELECT 
                    DATE_FORMAT(DATE_SUB(stats_date, INTERVAL(DAYOFWEEK(stats_date)-1) DAY), '%Y-%m-%d') AS start,
                    DATE_FORMAT(DATE_SUB(stats_date, INTERVAL(DAYOFWEEK(stats_date)-7) DAY), '%Y-%m-%d') AS end,
                    DATE_FORMAT(stats_date, '%Y%U') AS date,
                SUM(pc_count) AS pc_count,
                SUM(mo_count) AS mo_count, 
                SUM(stats_count) AS stats_count
                FROM " . $table . "
                GROUP BY date";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();
        return $result;
    }

    public function get_stats_month_list($table = 'stats') {
        $db = \Config\Database::connect();
        $sql = "SELECT
                    DATE_FORMAT(stats_date, '%Y년 %m월') AS stats_date,
                    MONTH(stats_date) AS date,
                    SUM(pc_count) AS pc_count,
                    SUM(mo_count) AS mo_count, 
                    SUM(stats_count) AS stats_count
                FROM " . $table . "
                GROUP BY date";
        //echo $sql;
        $query = $db->query($sql);
        $result = $query -> getResult();

        $db->close();
        return $result;
    }
}
?>