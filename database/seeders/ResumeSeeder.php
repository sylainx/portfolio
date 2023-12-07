<?php

namespace Database\Seeders;

use App\Models\Resume;
use App\Models\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResumeSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // Insertion des données dans la table 'resumes'
        Resume::create([
            'title' => 'Computer Engineer',
            'company' => 'Université INUKA',
            'description' => 'This program focuses on programming, web technologies, databases, and computer security. It delves deeper into skills related to networks and telecommunications. These crucial elements have effectively prepared me to meet the needs of the professional market.',
            'start_date' => '2018-01-01',
            'end_date' => '2022-01-01',
            'location' => 'Specify Location if needed',
            'skills_used' => 'Specify Skills if needed',
            'is_current' => false,
            'responsibilities' => 'Specify Responsibilities if needed',
            'portfolio_links' => 'Specify Portfolio Links if needed',
            'user_id' => 1, // Assurez-vous de spécifier le bon utilisateur (user_id)
        ]);

        Resume::create([
            'title' => 'Online courses',
            'company' => 'Openclassrooms / LinkedIn Learning',
            'description' => 'My continuous learning on platforms like OpenClassrooms, LinkedIn Learning, and YouTube has refined my skills in web development, cybersecurity, and digital marketing, ensuring industry relevance.',
            'start_date' => '2019-01-01',
            'end_date' => null, // Si c'est en cours, laissez la date de fin null
            'location' => 'Specify Location if needed',
            'skills_used' => 'Specify Skills if needed',
            'is_current' => true, // En cours
            'responsibilities' => 'Specify Responsibilities if needed',
            'portfolio_links' => 'Specify Portfolio Links if needed',
            'user_id' => 1, // Assurez-vous de spécifier le bon utilisateur (user_id)
        ]);

        Resume::create([
            'title' => 'High School',
            'company' => 'Collège Saint-Martin de Porrès, Hinche',
            'description' => 'I have developed a strong foundation of skills in leadership, teamwork, and time management. These experiences have shaped my critical thinking, problem-solving abilities, and capacity to adapt to new challenges.',
            'start_date' => '2011-01-01',
            'end_date' => '2018-01-01',
            'location' => 'Specify Location if needed',
            'skills_used' => 'Specify Skills if needed',
            'is_current' => false,
            'responsibilities' => 'Specify Responsibilities if needed',
            'portfolio_links' => 'Specify Portfolio Links if needed',
            'user_id' => 1, // Assurez-vous de spécifier le bon utilisateur (user_id)
        ]);
    }
}
