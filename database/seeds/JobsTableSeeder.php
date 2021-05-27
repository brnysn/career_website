<?php

use App\Category;
use App\Company;
use App\Job;
use App\Location;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::pluck('id');
        $companies = Company::pluck('id');
        $locations = Location::pluck('id');
        $faker = Faker\Factory::create();
        $job_natures = ['Full Time', 'Part Time', 'Freelance'];
        $salaries = ['20k - 25k', '15k - 20k', '10k - 15k', '5k - 10k'];

        foreach(range(1, 15) as $id)
        {
            $job = new Job;
            $job->title = $faker->unique()->jobTitle;
            $job->short_description = $faker->paragraph(rand(1, 2));
            $job->full_description = $faker->paragraph(rand(2, 6));
            $job->requirements = $faker->paragraph(rand(2, 6));
            $job->job_nature = $job_natures[array_rand($job_natures)];
            $job->company_id = $companies->random();
            $job->location_id = $locations->random();
            $job->address = $faker->unique()->address;
            $job->salary = $salaries[array_rand($salaries)];
            $job->top_rated = rand(0, 1);
            $job->save();
            $job->categories()->sync($categories->random(rand(1,3)));
        }
    }
}
