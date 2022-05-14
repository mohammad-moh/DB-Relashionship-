<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use Illuminate\Support\Str;


class employeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Employee::class;

    public function definition()
    {

        $i = 0;
        return [
            'Fname'=>$this->faker->name(),
            'Lname'=>$this->faker->name(),
            'Bdate'=>$this->faker->date(),

            'Ssn'=>$this->faker->randomNumber(),


            'Sex' => $this->faker->randomLetter(['M','F']),
            'Salary' => $this->faker->randomDigit(),

        ];
    }
}