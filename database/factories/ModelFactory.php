<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'names' => $faker->name, //i will add uui
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->tollFreePhoneNumber,
        'password' => $password ?: $password = bcrypt('secret'),
        'active'   =>  $faker->boolean,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Patient::class, function (Faker\Generator $faker) {

    return [
            'user_id' => $faker->numberBetween($min=1,$max=10),
            'patientID' => $faker->randomNumber(8), //rwandan's are ~12 millions(12000000)
            'dob' => $faker->dateTimeBetween(
                $startDate = '-30 years',
                $endDate = 'now',
                $timezone = date_default_timezone_get()
                ),
            'fathername' => $faker->firstName,
            'mothername' => $faker->lastName,
            'cell_id' => $faker->numberBetween($min=1,$max=10),
            'sector_id' => $faker->numberBetween($min=1,$max=10),
            'district_id' => $faker->numberBetween($min=1,$max=10),
            'gender' => $faker->randomElement(['male','female']),
    ];
});
$factory->define(App\Appointment::class, function (Faker\Generator $faker) {
    return [
        'checkup_reason' => $faker->text(15),
        'date' =>   $faker->dateTimeInInterval(
                    $startDate = '-1 days',
                    $interval = '+ 5 days',
                    $timezone = date_default_timezone_get()
                    ),
        'start_time'      => $faker->time($format = 'H:i:s', $max = 'now'),
        'end_time'        => $faker->time($format = 'H:i:s', $max = '+2 hours'),
        'approved'        => $faker->boolean(),
        'user_id' 		  => $faker->numberBetween(1,6),
        'patient_id' 	  => $faker->randomNumber($nbDigits = 1),
        'clinic_id'	      => $faker->randomNumber($nbDigits = 1),
    ];
});

$factory->define(App\Cell::class, function (Faker\Generator $faker) {
    return [
        'cell_name' => $faker->citySuffix,
        'sector_id'=>$faker->numberBetween(1, 403),
    ];
});