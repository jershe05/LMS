<?php

namespace Database\Seeders;

use App\Domains\Auth\Models\User;
use App\Domains\Subject\Models\Subject;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class SubjectSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        Subject::create([
            'name' => 'Mother Tongue'
        ]);

        Subject::create([
            'name' => 'Filipino'
        ]);

        Subject::create([
            'name' => 'English'
        ]);

        Subject::create([
            'name' => 'Mathematics'
        ]);
        Subject::create([
            'name' => 'Science'
        ]);
        Subject::create([
            'name' => 'Araling Panlipunan'
        ]);
        Subject::create([
            'name' => 'Edukasyong Pagpapahalaga (Esp)'
        ]);
        Subject::create([
            'name' => 'Music'
        ]);
        Subject::create([
            'name' => 'Arts'
        ]);
        Subject::create([
            'name' => 'Physical Education'
        ]);
        Subject::create([
            'name' => 'Health'
        ]);
        Subject::create([
            'name' => 'Edukasyong Pantahanan at Pangkabuhayan (EPP)'
        ]);
        Subject::create([
            'name' => 'TLE - GRI-FISHERY ARTS'
        ]);

        Subject::create([
            'name' => 'TLE - INFORMATION AND COMMUNICATIONS TECHNOLOGY (ICT)'
        ]);

        Subject::create([
            'name' => 'TLE - INDUSTRIAL ARTS'
        ]);

        // Add the master administrator, user id of 1

        $this->enableForeignKeys();
    }
}
