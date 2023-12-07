<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $skills = [
            ['name' => 'HTML5', 'percentage' => 95],
            ['name' => 'CSS3', 'percentage' => 90],
            ['name' => 'React', 'percentage' => 75],
            ['name' => 'React Native', 'percentage' => 85],
            ['name' => 'PHP', 'percentage' => 80],
            ['name' => 'Python', 'percentage' => 75],
            ['name' => 'SQL', 'percentage' => 90],
            ['name' => 'Git', 'percentage' => 90],
            // Ajoutez d'autres compétences avec leurs pourcentages ici...
        ];

        foreach($skills as $skill) {
            Skill::create($skill);
        }
    }
}
