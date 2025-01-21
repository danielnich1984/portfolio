<?php
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\StaffModel; 
  
class Staff extends Controller
{
    public function index()
    {
        $model = new StaffModel();  // Create an instance of the KeysModel

        $data = [
            'staff_list' => $model->getStaff(),  // Call the getKeys() method
            'title'     => 'Keys',    // Pass the title for your page
        ];

        return view('templates/header', $data)
            . view('staff/index', $data)
            . view('templates/footer');
    }

    public function add()
    {
        $data = [
            'title' => 'Add Staff',
        ];
        
        return view('templates/header', $data) 
            . view('staff/add')
            . view('templates/footer');
    }
    
    public function save()
    {
        $fname = $this->request->getPost('fname');
        $lname = $this->request->getPost('lname');
        $email = $this->request->getPost('email');
        
        if (!$fname || !$lname) {
            return redirect()->back()->with('error','Please fill in all required fields');
        }
        
        $model = new StaffModel();
        $model->save([
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
        ]);
        
        return redirect()->to('/staff')->with('success', 'Staff Added Successfully');
    }
    
    public function delete($id)
    {
        $model = new StaffModel();
        
        $staff = $model->find($id);
        if(!$staff) {
            return redirect()->to('/staff')->with('error', 'Staff Not Found');
        }
        
        $model->delete($id);
        
        return redirect()->to('/staff')->with('success', 'Staff Deleted Successfully');
    }
}
