<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = ['acqua potabile', 'condizionatore','piano cottura','terrazza','parcheggio privato','ascensore'];

        foreach($services as $key => $service){
            $newService = new Service();
            $newService->id = $key+1;
            $newService->name = $service;
            $newService->save();
        }
    }
}
