<?php namespace App\Libraries;

require_once APPPATH . "/ThirdParty/PHPExcel.php";

class ExcelLib extends \PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}

?>