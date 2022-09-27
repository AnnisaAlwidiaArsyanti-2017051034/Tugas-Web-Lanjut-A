<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

<<<<<<< HEAD
<<<<<<< HEAD
        return view('template/header', $data)
            . view('pages/' . $page)
            . view('template/footer');
=======
<<<<<<< HEAD
        return view('template/header', $data)
            . view('pages/' . $page)
            . view('template/footer');
=======
        return view('pages/' . $page);
>>>>>>> 3f46826 (comit)
>>>>>>> d81f7ee (comit)
=======
        return view('template/header', $data)
            . view('pages/' . $page)
            . view('template/footer');
>>>>>>> 0a3536ec322d74616c9ca3d8cac64d2f2f057474
    }
}