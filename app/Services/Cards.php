<?php

namespace App\Services;

class Cards
{
    public static function getAll(): array
    {
        return [
            [
                'title' => 'DDD Modelling vs Implementation',
                'type' => 'Workshop',
                'speaker_name' => 'Mathias Verraes',
                'speaker_title' => 'Student of systems',
                'speaker_photo' => '/images/speakers/mathias-verraes.jpg',
            ],
            [
                'title' => 'Building Autonomous Services',
                'type' => 'Workshop',
                'speaker_name' => 'Matthias Noback',
                'speaker_title' => 'Developer at Noback\'s Office',
                'speaker_photo' => '/images/speakers/matthias-noback.jpg',
            ],
            [
                'title' => 'Elixir for experienced web developers',
                'type' => 'Workshop',
                'speaker_name' => 'Konstantin Kudryashov',
                'speaker_title' => 'eXtreme Programmer',
                'speaker_photo' => '/images/speakers/konstantin-kudryashov.jpg',
            ],
            [
                'title' => 'React for Beginners',
                'type' => 'Workshop',
                'speaker_name' => 'Bram Van Damme',
                'speaker_title' => 'Freelance Creative Coder',
                'speaker_photo' => '/images/speakers/bram-van-damme.jpg',
            ],
            [
                'title' => 'Testing JavaScript applications',
                'type' => 'Workshop',
                'speaker_name' => 'Ivan Jovanovic',
                'speaker_title' => 'Senior Engineer at NearForm',
                'speaker_photo' => '/images/speakers/ivan-jovanovic.jpg',
            ]
        ];
    }
}

