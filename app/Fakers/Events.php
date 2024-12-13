<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;

class Events
{
    public static function fakeEvents(): Collection
    {
        return collect([
            [
                "id" => "1",
                "title" => "Tech Conference",
                "description" => "Annual tech conference for developers",
                "location" => "City Convention Center",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "09:00 AM",
                "icon" => "Hourglass",
                "organizer" => "Tech Events Inc.",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/tech-conference",
                "maxAttendees" => 500,
                "image" =>
                'resources/images/projects/project1-400x400.jpg',
            ],
            [
                "id" => "2",
                "title" => "Product Launch",
                "description" => "Launch event for our latest product",
                "location" => "Company Headquarters",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "02:30 PM",
                "icon" => "Clock4",
                "organizer" => "Left4code",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/product-launch",
                "maxAttendees" => 200,
                "image" =>
                'resources/images/projects/project2-400x400.jpg',
            ],
            [
                "id" => "3",
                "title" => "Team Building Workshop",
                "description" => "Team-building activities and games",
                "location" => "City Park",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "10:00 AM",
                "icon" => "Truck",
                "organizer" => "Team Builders Inc.",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/team-building",
                "maxAttendees" => 100,
                "image" =>
                'resources/images/projects/project3-400x400.jpg',
            ],
           
           
           
        ])->shuffle();
    }
}
