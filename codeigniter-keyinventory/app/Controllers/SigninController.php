<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller
{
    public function index(){
        helper(['form']);
        echo view('users/signin');
    }
    
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');

            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                // Use site_url() to generate the correct URL
                return redirect()->to(site_url('/signin'));
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            // Use site_url() to generate the correct URL
            return redirect()->to(site_url('/signin'));
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}