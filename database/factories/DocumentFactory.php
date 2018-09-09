<?php


$factory->define(\App\Document::class, function (\Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(random_int(2, 8)),
        'files' => [],
        'tags' => [],
    ];
});
