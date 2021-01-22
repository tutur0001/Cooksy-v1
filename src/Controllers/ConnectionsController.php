<?php

namespace App\Controllers;



use App\Core\View;
use App\Models\User;
use App\Models\Post;
use App\Core\Router\Request;

class ConnectionsController
{
    public function connection()
    {
        new View('connections/connection');
    }
    public function create()
    {
        new View('connections/register');
    }

    public function admin()
    {
        $posts = Post::all();
        new View('connections/admin', compact('posts'));
    }

    public function verify(Request $request)
    {
        $users = User::all();
        foreach ($users as $user) {
            if ((md5($request->getBody()['mdp']) === $user->mdp) && ($request->getBody()['email'] === $user->email)) {
                session_start();
                $array = [$user->role_id, $user->name, $user->email];
                $_SESSION['user'] = $array;
                header('Location: /');
                break;
            }
        }
        session_start();
        $_SESSION['error'] = 'connection';
        new View('connections/connection');
    }

    public function store(Request $request)
    {
        //Check in bdd if exist or not 
        $users = User::all();
        foreach ($users as $user) {
            if (($request->getBody()['name'] === $user->name) || ($request->getBody()['email'] === $user->email)) {
                session_start();
                $_SESSION['error'] = 'register';
                new View('connections/register');
                break;
            }
        }
        //if not add value
        $registration = new User();
        $registration->name = $request->getBody()['name'];
        $registration->mdp = md5($request->getBody()['mdp']);
        $registration->email = $request->getBody()['email'];
        if ($registration->save()) {
            new View('homepage');
        }
    }
}
