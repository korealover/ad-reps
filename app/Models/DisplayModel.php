<?php namespace App\Models;

use CodeIgniter\Model;

class DisplayModel extends Model {
    protected $table = 'display';
    protected $allowedFields = ['title'];

    public function getNews($id = false) {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }
}