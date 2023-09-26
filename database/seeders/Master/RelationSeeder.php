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
            'rel_name' => 'Relation 1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}
