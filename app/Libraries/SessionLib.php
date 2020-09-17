<?php namespace App\Libraries;

class SessionLib {

    public function set_browser($agent) {
        $session = \Config\Services::session();
        $id = session_id();
        if ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } elseif ($agent->isRobot()) {
            $currentAgent = $this->agent->robot();
        } elseif ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }
        $os = $agent->getPlatform();

        $db = \Config\Database::connect();
        $sql = "SELECT * FROM ci_sessions WHERE id = '".$id."'";
        if ($db->simpleQuery($sql)) {
            // echo "Success!";
            $uSql = "UPDATE ci_sessions SET use_agent='".$currentAgent."', use_os='".$os."' WHERE id='".$id."'";
            $db->simpleQuery($uSql);
        }
        $db->close();
    }
}

?>