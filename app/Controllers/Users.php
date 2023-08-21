<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MyUserModel;

class Users extends Controller
{
    public function __construct()
    {
        $user = auth()->user();
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }
        if (!$user->inGroup('admin', 'superadmin')) {
            return redirect()->to('/access-denied');
        }
    }

    public function index()
    {
        // Display the list of users
        $userModel = new MyUserModel();
        $users = $userModel->listAll();
        $data = [
            'users' => $users,
        ];
        //var_dump($data['users']);
        return view('users/index', $data);
    }

    public function create()
    {
        // Display the user creation form
    }

    public function store()
    {
        // Store the new user in the database
    }

    public function edit($id)
    {
        // Display the user edit form
    }

    public function update($id)
    {
        // Update the user in the database
    }

    public function delete($id)
    {
        // Delete the user from the database
    }
}