<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('programs')->truncate();

        $data = [
            // programs title
            [
                'id' => 1,
                'name' => 'Engineering Programs',
                'parent_id' => null,
                'fsc_pre_eng_can_apply' => null,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => null,
                'fsc_pre_med_can_apply' => null,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => null,
                'merit' => null,
                'status' => null,
                'is_entry_test_required' => null,
                'is_university_test_required' => null,
                'icom_can_apply' => null,
                'dae_chemical_with_60_percentage' => null,
                'dae_electrical_with_60_percentage' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Engineering Technology Programs',
                'parent_id' => null,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => null,
                'fsc_pre_eng_can_apply' => null,
                'fsc_pre_med_can_apply' => null,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => null,
                'merit' => null,
                'status' => null,
                'icom_can_apply' => null,
                'is_entry_test_required' => null,
                'is_university_test_required' => null,
                'dae_chemical_with_60_percentage' => null,
                'dae_electrical_with_60_percentage' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'BS/Non Engineering Programs',
                'parent_id' => null,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => null,
                'fsc_pre_eng_can_apply' => null,
                'fsc_pre_med_can_apply' => null,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => null,
                'merit' => null,
                'status' => null,
                'icom_can_apply' => null,
                'is_entry_test_required' => null,
                'is_university_test_required' => null,
                'dae_chemical_with_60_percentage' => null,
                'dae_electrical_with_60_percentage' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'M.Sc/MS Programs',
                'parent_id' => null,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => null,
                'fsc_pre_eng_can_apply' => null,
                'fsc_pre_med_can_apply' => null,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => null,
                'merit' => null,
                'status' => null,
                'icom_can_apply' => null,
                'dae_chemical_with_60_percentage' => null,
                'dae_electrical_with_60_percentage' => null,
                'is_entry_test_required' => null,
                'is_university_test_required' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Ph.D. Programs',
                'parent_id' => null,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => null,
                'fsc_pre_eng_can_apply' => null,
                'fsc_pre_med_can_apply' => null,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => null,
                'merit' => null,
                'status' => null,
                'icom_can_apply' => null,
                'dae_chemical_with_60_percentage' => null,
                'dae_electrical_with_60_percentage' => null,
                'is_entry_test_required' => null,
                'is_university_test_required' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // programs according to title
            [
                'id' => 6,
                'name' => 'B.Sc. Chemical Engineering',
                'parent_id' => 1,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fsc_pre_med_can_apply' => 0,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => 0,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => null,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'dae_chemical_with_60_percentage' => 1,
                'dae_electrical_with_60_percentage' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'B.Sc. Electrical Engineering',
                'parent_id' => 1,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 0,
                'fsc_pre_med_can_apply' => 0,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => 0,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 0,
                'dae_chemical_with_60_percentage' => 0,
                'dae_electrical_with_60_percentage' => 0,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'B.Sc. Civil Engineering Technology (M/E)',
                'parent_id' => 2,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_med_can_apply' => 0,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'dae_chemical_with_60_percentage' => 1,
                'dae_electrical_with_60_percentage' => 1,
                'ics_can_apply' => 0,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 0,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'name' => 'B.Sc. Electrical Engineering Technology (E)',
                'parent_id' => 2,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fsc_pre_med_can_apply' => 0,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => 0,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 0,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'dae_chemical_with_60_percentage' => 0,
                'dae_electrical_with_60_percentage' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'name' => 'B.Sc. Mechanical Engineering Technology (M/E)',
                'parent_id' => 2,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_med_can_apply' => 0,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => 0,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 1,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'dae_chemical_with_60_percentage' => 0,
                'dae_electrical_with_60_percentage' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'name' => 'B.Sc. Software Engineering Technology (E)',
                'parent_id' => 2,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_med_can_apply' => 0,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => 0,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 0,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'dae_chemical_with_60_percentage' => 0,
                'dae_electrical_with_60_percentage' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'name' => 'Mathematics',
                'parent_id' => 3,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_med_can_apply' => 0,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fa_simple_can_apply' => null,
                'fa_with_it_math_can_apply' => null,
                'dae_chemical' => null,
                'dae_civil' => null,
                'dae_electrical' => null,
                'dae_mechanical' => null,
                'ics_can_apply' => 1,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 0,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'dae_chemical_with_60_percentage' => 0,
                'dae_electrical_with_60_percentage' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'name' => 'Physics',
                'parent_id' => 3,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_med_can_apply' => 1,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fa_simple_can_apply' => 1,
                'fa_with_it_math_can_apply' => 1,
                'dae_chemical' => 1,
                'dae_civil' => 1,
                'dae_electrical' => 1,
                'dae_mechanical' => null,
                'ics_can_apply' => 1,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 0,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'dae_chemical_with_60_percentage' => 0,
                'dae_electrical_with_60_percentage' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'name' => 'BBA',
                'parent_id' => 3,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_med_can_apply' => 1,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fa_simple_can_apply' => 1,
                'fa_with_it_math_can_apply' => 1,
                'dae_chemical' => 1,
                'dae_civil' => 1,
                'dae_electrical' => 1,
                'dae_mechanical' => null,
                'ics_can_apply' => 1,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 0,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'dae_chemical_with_60_percentage' => 0,
                'dae_electrical_with_60_percentage' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'name' => 'Chemistry',
                'parent_id' => 3,
                'fsc_pre_eng_can_apply' => 1,
                'fsc_pre_med_can_apply' => 1,
                'fsc_pre_eng_60_percentage_for_engineering_programs' => 1,
                'fa_simple_can_apply' => 0,
                'fa_with_it_math_can_apply' => 0,
                'dae_chemical' => 1,
                'dae_civil' => 0,
                'dae_electrical' => 0,
                'dae_mechanical' => null,
                'ics_can_apply' => 0,
                'merit' => 'open_merit',
                'status' => 0,
                'icom_can_apply' => 0,
                'is_entry_test_required' => 0,
                'is_university_test_required' => 0,
                'dae_chemical_with_60_percentage' => 0,
                'dae_electrical_with_60_percentage' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DB::table('programs')->insert($data);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}