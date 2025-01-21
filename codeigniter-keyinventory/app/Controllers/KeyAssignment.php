<?php

namespace App\Controllers;

use App\Models\KeyAssignmentModel;
use App\Models\KeysModel;
use App\Models\StaffModel;

class KeyAssignment extends BaseController
{
    public function index()
    {
        $keyAssignmentModel = new KeyAssignmentModel();

        // Get the key inventory overview
        $keyInventory = $keyAssignmentModel->getKeyInventoryOverview();

        // Get the inventory list (staff names and statuses)
        $inventoryList = $keyAssignmentModel->getAssignedInventoryList();

        $data = [
            'title' => 'Key Inventory and Assignment Overview',
            'keyInventory' => $keyInventory,  // For Keys Overview
            'inventoryList' => $inventoryList,  // For Inventory List
        ];

        return view('templates/header', $data)
            . view('keyassignment/index', $data);
    }

    public function checkout()
    {
        $keysModel = new KeysModel();
        $staffModel = new StaffModel();

        $data = [
            'keys' => $keysModel->findAll(),
            'staff' => $staffModel->orderBy('fname', 'ASC')->findAll(),
            'title' => 'Assign a Key',
        ];

        return view('templates/header', $data)
            . view('keyassignment/checkout', $data);
    }

    public function saveCheckout()
    {
        $keyAssignmentModel = new KeyAssignmentModel();

        $keyAssignmentModel->save([
            'checkout_date' => $this->request->getPost('checkout_date') ? date('Y-m-d H:i:s') : null,
            'key_id' => $this->request->getPost('key_id'),
            'user_id' => $this->request->getPost('user_id'),
            'status' => 'CHECKED_OUT',
        ]);

        return redirect()->to('/keyassignment')->with('success', 'Key assigned successfully.');
    }

    public function updateStatus($id)
    {
        $status = $this->request->getPost('status');
        $return_date = $status === 'RETURNED' ? date('Y-m-d H:i:s') : null;

        $keyAssignmentModel = new KeyAssignmentModel();
        $keyAssignmentModel->update($id, [
            'status' => $status,
            'return_date' => $return_date,
        ]);

        return redirect()->to('/keyassignment')->with('success', 'Key status updated successfully.');
    }
}
