<?php

Route::get('/', function () {
    $workshops = [
        [
            'title' => 'DDD Modelling vs Implementation',
            'teacher_name' => 'Mathias Verraes',
            'teacher_title' => 'Student of systems',
            'teacher_photo' => '/images/speakers/mathias-verraes.jpg',
        ],
        [
            'title' => 'Building Autonomous Services',
            'teacher_name' => 'Matthias Noback',
            'teacher_title' => 'Developer at Noback\'s Office',
            'teacher_photo' => '/images/speakers/matthias-noback.jpg',
        ]
    ];

    return view('cards', compact('workshops'));
});
