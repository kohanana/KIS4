<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    public function GetUsers()
    {
        $users = $this->json([
            'users' => [
                [
                    "id"=> 1,
                    "name"=> "Anna Kohana",
                    "phoneNumber"=> "+78005553535",
                    "email"=> "anna.kohana@mail.ru",
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
                [
                    "id"=> 2,
                    "name"=> "Anna Kohana",
                    "phoneNumber"=> "+78005553535",
                    "email"=> "anna.kohana@mail.ru",
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
                [
                    "id"=> 3,
                    "name"=> "Anna Kohana",
                    "phoneNumber"=> "+78005553535",
                    "email"=> "anna.kohana@mail.ru",
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
            ]
        ]);
        return $users;
    }

    public function GetUsero($id)
    {
        $user = $this->json([
            'user' => [
                [
                    "id"=> $id,
                    "name"=> "Anna Kohana",
                    "phoneNumber"=> "+78005553535",
                    "email"=> "anna.kohana@mail.ru",
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
            ]
        ]);
        return $user;
    }

    public function PostUser(){
        return $this->json(['response'=>'User has been added successfully']);
    }

    public function PutUser($id){
        return $this->json(['response'=>'User with id '.$id.' has been changed successfully']);
    }

    public function DeleteUser($id){
        return $this->json(['response'=>'User with id '.$id.' has been deleted successfully']);
    }
}
