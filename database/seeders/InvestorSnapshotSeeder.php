<?php

namespace Database\Seeders;

use App\Models\InvestorSnapshot;
use Illuminate\Database\Seeder;

class InvestorSnapshotSeeder extends Seeder
{
    public function run(): void
    {
        InvestorSnapshot::current();
    }
}
