<?php

namespace App\Models;

use CodeIgniter\Model;

class KeyAssignmentModel extends Model
{
    protected $table = 'keyassignment';
    protected $primaryKey = 'id';
    protected $allowedFields = ['checkout_date', 'return_date', 'key_id', 'user_id', 'status'];

    // Define a method to fetch key assignments with related staff and key names
    public function getAssignmentsWithDetails()
    {
        return $this->select('keyassignment.id, keyassignment.checkout_date, keyassignment.return_date, 
                              keyassignment.status, doorkey.name AS key_name, staff.name AS staff_name')
            ->join('doorkey', 'keyassignment.key_id = doorkey.id', 'left') // Correct table name
            ->join('staff', 'keyassignment.user_id = staff.id', 'left')
            ->findAll();
    }

    // Fetch key inventory overview with calculated totals
    public function getKeyInventoryOverview()
    {
        return $this->db->table('doorkey')
            ->select('doorkey.name AS key_name, doorkey.notes, doorkey.total_qty, 
                      COUNT(CASE WHEN keyassignment_checkout.status = "CHECKED_OUT" THEN 1 END) AS checked_out_count,
                      COUNT(CASE WHEN keyassignment_checkout.status = "LOST" THEN 1 END) AS lost_count')
            ->join('keyassignment AS keyassignment_checkout', 'doorkey.id = keyassignment_checkout.key_id', 'left')
            ->where('doorkey.deleted_at', NULL)  // Exclude soft deleted keys
            ->groupBy('doorkey.id')
            ->get()
            ->getResultArray(); // Change to getResultArray() if you want an array
    }

    // Fetch key assignments with related staff and key names using alias for doorkey
    public function getAssignmentsWithDetailsAlias()
    {
        return $this->select('keyassignment.id, keyassignment.checkout_date, keyassignment.return_date, 
                              keyassignment.status, dk.name AS key_name, staff.name AS staff_name')
            ->join('doorkey AS dk', 'keyassignment.key_id = dk.id', 'left')  // Aliasing doorkey to dk
            ->join('staff', 'keyassignment.user_id = staff.id', 'left')
            ->findAll();
    }

    // Fetch all assigned keys and their statuses
    public function getAssignedInventoryList()
    {
        return $this->select('keyassignment.id, staff.fname, staff.lname, doorkey.name AS key_name, keyassignment.status')
            ->join('doorkey', 'keyassignment.key_id = doorkey.id', 'left') // Ensure you're using the correct table and column names
            ->join('staff', 'keyassignment.user_id = staff.id', 'left')
            ->findAll();
    }
}

