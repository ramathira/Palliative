<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;

class ProjectDetails
{
    public static function generateRandomLink(): string
    {
        $randomChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $randomString = "";
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $randomChars[rand(0, strlen($randomChars) - 1)];
        }
        $url = "http://left4code.com/share/" . $randomString;
        return $url;
    }

    public static function fakeProjectDetails(): Collection
    {
        return collect([
            [
                "title" => "Marketing Campaign Poster",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project1-400x400.jpg"
            ],
            [
                "title" => "Social Media Graphics",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project2-400x400.jpg"
            ],
           
        ])->shuffle();
    }
}
