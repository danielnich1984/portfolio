<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
        
        $data = [
            'title'     => 'Dashboard',
        ];
        
        return view('templates/header', $data)
            . view('pages/dashboard')
            . view('templates/footer');
    }
}