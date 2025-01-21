<?php

namespace App\Models;
use CodeIgniter\Model;

class StaffModel extends Model{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'fname',
        'email',
        'lname',
    ];
    
    public function getStaff()
    {
        return $this->orderBy('lname', 'ASC')->findAll();
    }
}