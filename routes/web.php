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
        ],
        [
            'title' => 'Elixir for experienced web developers',
            'teacher_name' => 'Konstantin Kudryashov',
            'teacher_title' => 'eXtreme Programmer',
            'teacher_photo' => '/images/speakers/konstantin-kudryashov.jpg',
        ],
        [
            'title' => 'React for Beginners',
            'teacher_name' => 'Bram Van Damme',
            'teacher_title' => 'Freelance Creative Coder',
            'teacher_photo' => '/images/speakers/bram-van-damme.jpg',
        ],
        [
            'title' => 'Testing JavaScript applications',
            'teacher_name' => 'Ivan Jovanovic',
            'teacher_title' => 'Senior Engineer at NearForm',
            'teacher_photo' => '/images/speakers/ivan-jovanovic.jpg',
        ]
    ];

    return view('cards', compact('workshops'));
});
