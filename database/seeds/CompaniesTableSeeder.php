<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 6) as $id) {
            $company = Company::create(['name' => $faker->unique()->company]);
            $company->addMedia(public_path('assets/images/companies/img-' . rand(1,
                    10) . '.png'))->preservingOriginal()->toMediaCollection('logo');
        }
    }
}
