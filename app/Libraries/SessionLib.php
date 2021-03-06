<?php namespace App\Libraries;

class SessionLib {

    public function set_browser($agent) {
        $session = \Config\Services::session();
        $id = session_id();
        if ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
            $device = "MO";
        } elseif ($agent->isRobot()) {
            $currentAgent = $this->agent->robot();
            $device = "RO";
        } elseif ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser();
            $device = "PC";
        } else {
            $currentAgent = 'Unidentified User Agent';
        }
        $os = $agent->getPlatform();

        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ci_sessions WHERE id = '".$id."'";
        if ($db->simpleQuery($sql)) {
            // echo "Success!";
            $uSql = "UPDATE ci_sessions SET use_agent='".$currentAgent."', use_os='".$os."', device='".$device."' WHERE id='".$id."'";
            $db->simpleQuery($uSql);
        }
        $db->close();
    }

    public function get_url($id) {
        $db = \Config\Database::connect();
        $sql = "SELECT url FROM display WHERE id=?";
        $query = $db->query($sql, [$id]);
        $row = $query->getRow();
        if (isset($row)) {
            $url = $row->url;
        } else {
            $url = "#";
        }
        $db->close();
        return $url;
    }
}

?>