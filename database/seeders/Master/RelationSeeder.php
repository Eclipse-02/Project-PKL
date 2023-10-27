<?php

namespace Database\Seeders\Master;

use App\Models\Master\Relation as MasterRelation;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterRelation::create([
            'id' => Str::uuid(),
            'rel_code' => 1,
            'rel_name' => 'Jakarta',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterRelation::create([
            'id' => Str::uuid(),
            'rel_code' => 2,
            'rel_name' => 'Bandung',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterRelation::create([
            'id' => Str::uuid(),
            'rel_code' => 3,
            'rel_name' => 'Bogor',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}
