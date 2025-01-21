<?php
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\KeysModel; 
  
class Keys extends Controller
{
    public function index()
    {
        $model = new KeysModel();  // Create an instance of the KeysModel

        $data = [
            'key_list' => $model->getKeys(),  // Call the getKeys() method
            'title'     => 'Keys',    // Pass the title for your page
        ];

        return view('templates/header', $data)
            . view('keys/index', $data)
            . view('templates/footer');
    }
    
    public function add()
    {
        $data = [
            'title' => 'Add Key',
        ];
        
        return view('templates/header', $data) 
            . view('keys/add')
            . view('templates/footer');
    }
    
    public function save()
    {
        $name = $this->request->getPost('name');
        $total_qty = $this->request->getPost('total_qty');
        $notes = $this->request->getPost('notes');
        
        if (!$name || !$total_qty) {
            return redirect()->back()->with('error', 'Please fill in all required fields');
        }
        
        $model = new KeysModel();
        $model->save([
            'name' => $name,
            'total_qty' => $total_qty,
            'notes' => $notes,
        ]);
        
        return redirect()->to('/keys')->with('success', 'Keys added successfully');
    }
    
    public function delete($id)
    {
    $model = new KeysModel();


    // Check if the key exists
    $key = $model->find($id);
    if (!$key) {
        return redirect()->to('/keys')->with('error', 'Key not found.');
    }

    // Delete the key
    $model->delete($id);

    // Redirect with success message
    return redirect()->to('/keys')->with('success', 'Key deleted successfully.');
    }
}