<?php

namespace Database\Seeders;

use App\Models\InvestorReport;
use Illuminate\Database\Seeder;

class InvestorReportSeeder extends Seeder
{
    public function run(): void
    {
        $reports = [
            [
                'badge_label' => 'Q4 2025 Report',
                'badge_tone' => 'purple',
                'title' => 'Q4 & Full Year 2025 Financial Statement',
                'description' => 'Comprehensive balance sheet, income statement, and independent auditor review for FY 2025.',
                'file_label' => 'PDF • 4.8 MB',
                'download_message' => 'Downloading Q4 2025 Financial Statement PDF...',
                'sort_order' => 1,
            ],
            [
                'badge_label' => 'Q3 2025 Report',
                'badge_tone' => 'pink',
                'title' => 'Q3 2025 Interim Earnings Presentation',
                'description' => 'Investor conference call deck, revenue breakdown by product line, and D2C metrics.',
                'file_label' => 'PDF • 3.2 MB',
                'download_message' => 'Downloading Q3 2025 Interim Earnings PDF...',
                'sort_order' => 2,
            ],
            [
                'badge_label' => 'ESG & Governance',
                'badge_tone' => 'emerald',
                'title' => '2025 Sustainability & Ethics Report',
                'description' => 'Detailed report on carbon footprint reduction, solar warehousing, and Pakistan community upliftment.',
                'file_label' => 'PDF • 2.1 MB',
                'download_message' => 'Downloading 2025 Sustainability Report PDF...',
                'sort_order' => 3,
            ],
        ];

        foreach ($reports as $report) {
            InvestorReport::updateOrCreate(
                ['title' => $report['title']],
                $report
            );
        }
    }
}
