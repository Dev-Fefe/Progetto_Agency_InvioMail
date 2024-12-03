<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = [
            ['id' => 1, 'serviceName' => 'Machine', 'price' => '100'],
            ['id' => 2, 'serviceName' => 'Air', 'price' => '200'],
            ['id' => 3, 'serviceName' => 'Lorem', 'price' => '300'],
            ['id' => 4, 'serviceName' => 'PC', 'price' => '400'],
        ];

        return view('service', ['service' => $services]);
    }

    public function detail($id){
        $services = [
            ['id' => 1, 'serviceName' => 'Machine', 'price' => '100'],
            ['id' => 2, 'serviceName' => 'Air', 'price' => '200'],
            ['id' => 3, 'serviceName' => 'Lorem', 'price' => '300'],
            ['id' => 4, 'serviceName' => 'PC', 'price' => '400'],
        ];

        foreach($services as $service){
            if($id == $service['id']){
                return view('detail', ['detail' => $service]);
            }
        }
        abort(404);
    }
}
