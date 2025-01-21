<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view(string $page = 'home')
    {
        // Check if the requested page exists in the 'Views/pages' folder
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // If the page doesn't exist, throw a PageNotFoundException
            throw new PageNotFoundException("Page not found: $page");
        }

        // Prepare the data array (e.g., for the title)
        $data['title'] = ucfirst($page); // Capitalize the first letter of the page name

        // Render views by returning them as an array
        // Using the return statement and chaining views in an array
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}

