<?php

namespace App\Models;
use CodeIgniter\Model;

class KeysModel extends Model{
    protected $table = 'doorkey';
    protected $primaryKey = 'id';
    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_at';
    
    protected $allowedFields = [
        'name',
        'total_qty',
        'notes',
    ];
    
    public function getKeys()
    {
        return $this->orderBy('name', 'ASC')->findAll();
    }
}