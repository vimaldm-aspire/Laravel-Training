<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Design login page',
                'description' => 'Create a responsive login page with form validation and error handling.',
                'status' => 'Pending',
            ],
            [
                'title' => 'Implement user authentication',
                'description' => 'Use JWT for secure login and token-based session management.',
                'status' => 'In progress',
            ],
            [
                'title' => 'Build task creation form',
                'description' => 'Add UI for users to create tasks with title, description, and status.',
                'status' => 'Completed',
            ],
            [
                'title' => 'Setup database schema',
                'description' => 'Define the models and relationships for users and tasks.',
                'status' => 'Completed',
            ],
            [
                'title' => 'Create task listing page',
                'description' => 'Display all tasks in a sortable and filterable table.',
                'status' => 'In progress',
            ],
            [
                'title' => 'Add edit task functionality',
                'description' => 'Allow users to update task title, description, and status.',
                'status' => 'Pending',
            ],
            [
                'title' => 'Deploy app to server',
                'description' => 'Push final code to server and make application live.',
                'status' => 'Pending',
            ],
            [
                'title' => 'Write unit tests',
                'description' => 'Ensure all critical components are covered with unit tests.',
                'status' => 'In progress',
            ],
            [
                'title' => 'Fix bug in task deletion',
                'description' => 'Resolve issue where task is not deleted from the backend.',
                'status' => 'Completed',
            ],
            [
                'title' => 'Optimize performance',
                'description' => 'Improve loading time and reduce API response latency.',
                'status' => 'Pending',
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
