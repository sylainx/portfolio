<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperienceSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        DB::table('experiences')->insert([
            [
                'title' => 'Web developer',
                'company' => 'ShippEx',
                'description' => 'As a web developer at ShippEx, my role centered around developing and maintaining platform functionalities using Php, MySql, HTML/CSS. I focused on designing and implementing new features while ensuring the ongoing maintenance of the entire system.',
                'start_date' => '2022-05-01',
                'end_date' => null,
                'user_id' => 1,
            ],
            [
                'title' => 'Mobile developer',
                'company' => 'ShippEx',
                'description' => 'I co-developed the mobile application for iOS and Android to showcase the company\'s services. My role was pivotal in crafting an intuitive interface while ensuring seamless communication with the existing infrastructure.',
                'start_date' => '2022-05-01',
                'end_date' => null,
                'user_id' => 1,
            ],
            [
                'title' => 'Fullstack developer',
                'company' => 'Heartbook',
                'description' => 'As a fullstack developer, I developed a web application showcasing the company and its range of books, combining user-friendliness and attractive design for an optimal user experience.',
                'start_date' => '2021-01-01',
                'end_date' => null,
                'user_id' => 1,
            ],
        ]);
    }
}
