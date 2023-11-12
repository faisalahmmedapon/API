<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendors = array(
            [
                'name' => 'Square Pharmaceuticals Ltd.',
                'description' => 'Square Pharmaceuticals Ltd.'
            ], [
                'name' => 'Incepta Pharmaceutical Ltd.',
                'description' => 'Incepta Pharmaceutical Ltd.'
            ], [
                'name' => 'Beximco Pharmaceuticals Ltd.',
                'description' => 'Beximco Pharmaceuticals Ltd.'
            ], [
                'name' => 'Opsonin Pharma Ltd.',
                'description' => 'Opsonin Pharma Ltd.'
            ], [
                'name' => 'Renata Ltd.',
                'description' => 'Renata Ltd.'
            ], [
                'name' => 'Healthcare Pharmaceuticals Ltd.',
                'description' => 'Healthcare Pharmaceuticals Ltd.'
            ], [
                'name' => 'ACI Pharmaceuticals Ltd.',
                'description' => 'ACI Pharmaceuticals Ltd.'
            ], [
                'name' => 'Eskayef Pharmaceuticals Ltd.',
                'description' => 'Eskayef Pharmaceuticals Ltd.'
            ], [
                'name' => 'ACME Laboratories Ltd.',
                'description' => 'ACME Laboratories Ltd.'
            ], [
                'name' => 'Aristopharma Ltd.',
                'description' => 'Aristopharma Ltd.'
            ]
        );


        foreach ($vendors as $vendor){
            Vendor::updateOrCreate($vendor);
        }
    }
}
