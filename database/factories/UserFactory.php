<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Contact;
use App\Practice;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->defineAs(User::class, 'admin', function (Faker $faker) {
    return [
        'name' => 'admin' . Str::random(1),
        'hint' => Str::random(5),
        'security_question' => Str::random(5),
        'secret_answer' => 'admin' . Str::random(1),
        'find_us' => 'admin',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('11111'), // password
        'remember_token' => Str::random(10),
    ];
});

$factory->defineAs(Contact::class, 'admin', function (Faker $faker) {
   $faker = \Faker\Factory::create('ru_Ru');
    return [
        'prefix' =>  $faker->title(),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'middle_name' => 'Иванович',
        'registration_number' => 'admin',
        'phone' => $faker->phoneNumber,
        'fax' => $faker->ean8,
        'mobile' => $faker->ean13,
        'website' => $faker->safeEmailDomain,
        'primary contact' => $faker->address,
        'description_profile' => $faker->text(200),
    ];
});

//$factory->defineAs(Organization::class, 'admin', function (Faker $faker) {
//    $faker = \Faker\Factory::create('ru_Ru');
//    return [
//        'organization_name' => $faker->firstName(),
//        'country' => $faker->title(),
//        'firm_address' => $faker->lastName,
//        'suite' => 'Иванович',
//        'city' => 'admin',
//        'another_country' => $faker->phoneNumber,
//        'province' => $faker->ean8,
//        'postal_code' => $faker->ean13,
//    ];
//});
