<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AdsController extends AbstractController
{
    public function GetAds()
    {
        $ads = $this->json([
            'ads' => [
                [
                    "id"=> 1,
                    "name"=> "Компьютер",
                    "description"=> "Продам компьютер",
                    "price"=> 300,
                    "locality"=> "Севастополь",
                    "isActive"=> true,
                    "userId" => [
                        "id"=> "111cf35x-2c4y-483z-a0a9-158621f77a21",
                        "name"=> "Struk Anna",
                        "phoneNumber"=> "+78005553535",
                        "email"=> "anna.kohana@mail.ru",
                        "createdTime"=> new \DateTime('now'),
                        "updatedTime"=> new \DateTime('now'),
                    ],
                    "categoryId" => [
                        "id"=> 1,
                        "name"=> "Товары для дома",
                        "description"=> "Товары для дома",
                    ],
                    "planId" =>[
                        "id"=> 1,
                        "name"=> "Активное продвижение",
                        "description"=> "Активное продвижение",
                        "activeDayCount"=> 30,
                        "price"=> 30000,
                    ],
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
                [
                    "id"=> 2,
                    "name"=> "Ноутбук",
                    "description"=> "Продам ноутбук",
                    "price"=> 45000,
                    "locality"=> "Ялта",
                    "isActive"=> false,
                    "userId" => [
                        "id"=> 1,
                        "name"=> "Struk Anna",
                        "phoneNumber"=> "+78005553535",
                        "email"=> "anna.kohana@mail.ru",
                        "createdTime"=> new \DateTime('now'),
                        "updatedTime"=> new \DateTime('now'),
                    ],
                    "categoryId" => [
                        "id"=> 1,
                        "name"=> "Товары для дома",
                        "description"=> "Товары для дома",
                    ],
                    "planId" =>[
                        "id"=> 2,
                        "name"=> "Активное продвижение",
                        "description"=> "Активное продвижение",
                        "activeDayCount"=> 30,
                        "price"=> 300,
                    ],
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
                [
                    "id"=> 3,
                    "name"=> "Гараж",
                    "description"=> "Продам гараж",
                    "price"=> 150000,
                    "locality"=> "Краснодар",
                    "isActive"=> true,
                    "userId" => [
                        "id"=> 3,
                        "name"=> "Struk Anna",
                        "phoneNumber"=> "+78005553535",
                        "email"=> "anna.kohana@mail.ru",
                        "createdTime"=> new \DateTime('now'),
                        "updatedTime"=> new \DateTime('now'),
                    ],
                    "categoryId" => [
                        "id"=> 4,
                        "name"=> "Товары для дома",
                        "description"=> "Товары для дома",
                    ],
                    "planId" =>[
                        "id"=> 1,
                        "name"=> "Активное продвижение",
                        "description"=> "Активное продвижение",
                        "activeDayCount"=> 30,
                        "price"=> 300,
                    ],
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
            ]
        ]);
        return $ads;
    }

    public function GetAdsOfUser($userId)
    {
        $ads = $this->json([
            'ads' => [
                [
                    "id"=> 1,
                    "name"=> "Компьютер",
                    "description"=> "Продам компьютер",
                    "price"=> 300,
                    "locality"=> "Севастополь",
                    "isActive"=> true,
                    "userId" => [
                        "id"=> $userId,
                        "name"=> "Struk Anna",
                        "phoneNumber"=> "+78005553535",
                        "email"=> "anna.kohana@mail.ru",
                        "createdTime"=> new \DateTime('now'),
                        "updatedTime"=> new \DateTime('now'),
                    ],
                    "categoryId" => [
                        "id"=> 1,
                        "name"=> "Товары для дома",
                        "description"=> "Товары для дома",
                    ],
                    "planId" =>[
                        "id"=> 2,
                        "name"=> "Активное продвижение",
                        "description"=> "Активное продвижение",
                        "activeDayCount"=> 30,
                        "price"=> 30000,
                    ],
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
                [
                    "id"=> 3,
                    "name"=> "Ноутбук",
                    "description"=> "Продам ноутбук",
                    "price"=> 45000,
                    "locality"=> "Ялта",
                    "isActive"=> false,
                    "userId" => [
                        "id"=> $userId,
                        "name"=> "Struk Anna",
                        "phoneNumber"=> "+78005553535",
                        "email"=> "anna.kohana@mail.ru",
                        "createdTime"=> new \DateTime('now'),
                        "updatedTime"=> new \DateTime('now'),
                    ],
                    "categoryId" => [
                        "id"=> 1,
                        "name"=> "Товары для дома",
                        "description"=> "Товары для дома",
                    ],
                    "planId" =>[
                        "id"=> 2,
                        "name"=> "Активное продвижение",
                        "description"=> "Активное продвижение",
                        "activeDayCount"=> 30,
                        "price"=> 300,
                    ],
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
            ]
        ]);
        return $ads;
    }

    public function GetAdsOfCategory($categoryId)
    {
        $ads = $this->json([
            'ads' => [
                [
                    "id"=> 1,
                    "name"=> "Компьютер",
                    "description"=> "Продам компьютер",
                    "price"=> 300,
                    "locality"=> "Севастополь",
                    "isActive"=> true,
                    "userId" => [
                        "id"=> 2,
                        "name"=> "Struk Anna",
                        "phoneNumber"=> "+78005553535",
                        "email"=> "anna.kohana@mail.ru",
                        "createdTime"=> new \DateTime('now'),
                        "updatedTime"=> new \DateTime('now'),
                    ],
                    "categoryId" => [
                        "id"=> $categoryId,
                        "name"=> "Товары для дома",
                        "description"=> "Товары для дома",
                    ],
                    "planId" =>[
                        "id"=> 2,
                        "name"=> "Активное продвижение",
                        "description"=> "Активное продвижение",
                        "activeDayCount"=> 30,
                        "price"=> 30000,
                    ],
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
                [
                    "id"=> 2,
                    "name"=> "Ноутбук",
                    "description"=> "Продам ноутбук",
                    "price"=> 45000,
                    "locality"=> "Ялта",
                    "isActive"=> false,
                    "userId" => [
                        "id"=> 2,
                        "name"=> "Struk Anna",
                        "phoneNumber"=> "+78005553535",
                        "email"=> "anna.kohana@mail.ru",
                        "createdTime"=> new \DateTime('now'),
                        "updatedTime"=> new \DateTime('now'),
                    ],
                    "categoryId" => [
                        "id"=> $categoryId,
                        "name"=> "Товары для дома",
                        "description"=> "Товары для дома",
                    ],
                    "planId" =>[
                        "id"=> 2,
                        "name"=> "Активное продвижение",
                        "description"=> "Активное продвижение",
                        "activeDayCount"=> 30,
                        "price"=> 300,
                    ],
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
            ]
        ]);
        return $ads;
    }



    public function GetAd($id)
    {
        $ad = $this->json([
            'ad' => [
                [
                    "id"=> $id,
                    "name"=> "Ноутбук",
                    "description"=> "Продам ноутбук",
                    "price"=> 45000,
                    "locality"=> "Ялта",
                    "isActive"=> false,
                    "userId" => [
                        "id"=> 4,
                        "name"=> "Struk Anna",
                        "phoneNumber"=> "+78005553535",
                        "email"=> "anna.kohana@mail.ru",
                        "createdTime"=> new \DateTime('now'),
                        "updatedTime"=> new \DateTime('now'),
                    ],
                    "categoryId" => [
                        "id"=> 5,
                        "name"=> "Товары для дома",
                        "description"=> "Товары для дома",
                    ],
                    "planId" =>[
                        "id"=> 2,
                        "name"=> "Активное продвижение",
                        "description"=> "Активное продвижение",
                        "activeDayCount"=> 30,
                        "price"=> 300,
                    ],
                    "createdTime"=> new \DateTime('now'),
                    "updatedTime"=> new \DateTime('now'),
                ],
            ]
        ]);
        return $ad;
    }

    public function PostAd(){
        return $this->json(['response'=>'Ad has been added successfully']);
    }

    public function PutAd($id){
        return $this->json(['response'=>'Ad with id '.$id.' has been changed successfully']);
    }

    public function DeleteAd($id){
        return $this->json(['response'=>'Ad with id '.$id.' has been deleted successfully']);
    }
}
