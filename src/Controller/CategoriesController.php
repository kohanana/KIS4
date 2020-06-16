<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoriesController extends AbstractController
{
    public function GetCategories()
    {
        $categories = $this->json([
            'categories' => [
                [
                    "id"=> 1,
                    "name"=> "Товары для дома",
                    "description"=> "Товары для дома",
                ],
                [
                    "id"=> 2,
                    "name"=> "Техника",
                    "description"=> "Техника",
                ],
                [
                    "id"=> 3,
                    "name"=> "Товары для сада",
                    "description"=> "Товары для сада",
                ],
            ]
        ]);
        return $categories;
    }

    public function GetCategory($id)
    {
        $category = $this->json([
            'category' => [
                [
                    "id"=> $id,
                    "name"=> "Товары для дома",
                    "description"=> "Товары для дома",
                ],
            ]
        ]);
        return $category;
    }

    public function PostCategory(){
        return $this->json(['response'=>'Category has been added successfully']);
    }

    public function PutCategory($id){
        return $this->json(['response'=>'Category with id '.$id.' has been changed successfully']);
    }

    public function DeleteCategory($id){
        return $this->json(['response'=>'Category with id '.$id.' has been deleted successfully']);
    }
}
