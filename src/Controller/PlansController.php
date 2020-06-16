<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PlansController extends AbstractController
{
    public function GetPlans()
    {
        $plans = $this->json([
            'plans' => [
                [
                    "id"=> 1,
                    "name"=> "Активное продвижение",
                    "description"=> "Активное продвижение",
                    "activeDayCount"=> 30,
                    "price"=> 300,
                ],
                [
                    "id"=> 1,
                    "name"=> "Бесплатно",
                    "description"=> "Бесплатное размещение",
                    "activeDayCount"=> 7,
                    "price"=> 0,
                ],
                [
                    "id"=> 2,
                    "name"=> "Макс-эффект",
                    "description"=> "Ваше объявление всегда в топе",
                    "activeDayCount"=> 10,
                    "price"=> 5000,
                ],
            ]
        ]);
        return $plans;
    }

    public function GetPlan($id)
    {
        $plan = $this->json([
            'plan' => [
                [
                    "id"=> $id,
                    "name"=> "Бесплатно",
                    "description"=> "Бесплатное размещение",
                    "activeDayCount"=> 7,
                    "price"=> 0,
                ],
            ]
        ]);
        return $plan;
    }

    public function PostPlan(){
        return $this->json(['response'=>'Plan has been added successfully']);
    }

    public function PutPlan($id){
        return $this->json(['response'=>'Plan with id '.$id.' has been changed successfully']);
    }

    public function DeletePlan($id){
        return $this->json(['response'=>'Plan with id '.$id.' has been deleted successfully']);
    }
}
