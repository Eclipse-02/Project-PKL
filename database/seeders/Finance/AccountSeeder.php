<?php

namespace Database\Seeders\Finance;

use App\Models\Finance\Account as FinanceAccount;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinanceAccount::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "glacct_code" => '10001000',
            "glacct_description" => 'TINGKAT 1',
            "glacct_acct_type" => 'A',
            "glacct_acct_summ" => 'Y',
            "glacct_acct_enable" => 'Y',
            "glacct_acct_flag" => 'Y',
            "glacct_acct_default" => '',
            "glacct_rpt_flag" => 'N',
            "glacct_segment1_allow" => 'ALL',
            "created_by" => 'Seeder',
            "updated_by" => 'Seeder',
        ]);

        FinanceAccount::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "glacct_code" => '10001001',
            "glacct_description" => 'TINGKAT 2',
            "glacct_acct_type" => 'A',
            "glacct_acct_summ" => 'Y',
            "glacct_acct_enable" => 'Y',
            "glacct_acct_flag" => 'Y',
            "glacct_acct_default" => '',
            "glacct_acct_parent" => '10001000',
            "glacct_rpt_flag" => 'N',
            "glacct_segment1_allow" => 'ALL',
            "created_by" => 'Seeder',
            "updated_by" => 'Seeder',
        ]);

        FinanceAccount::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "glacct_code" => '10001002',
            "glacct_description" => 'TINGKAT 3',
            "glacct_acct_type" => 'A',
            "glacct_acct_summ" => 'Y',
            "glacct_acct_enable" => 'Y',
            "glacct_acct_flag" => 'Y',
            "glacct_acct_default" => '',
            "glacct_acct_parent" => '10001001',
            "glacct_rpt_flag" => 'N',
            "glacct_segment1_allow" => 'ALL',
            "created_by" => 'Seeder',
            "updated_by" => 'Seeder',
        ]);
    }
}
