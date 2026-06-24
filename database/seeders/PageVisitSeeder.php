<?php

namespace Database\Seeders;

use App\Models\PageVisit;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PageVisitSeeder extends Seeder
{
    public function run(): void
    {
        $pages = ['/', '/about', '/services', '/contact', '/blog'];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $count = rand(15, 80);
            for ($j = 0; $j < $count; $j++) {
                PageVisit::create([
                    'page' => $pages[array_rand($pages)],
                    'ip_address' => '192.168.1.' . rand(1, 255),
                    'user_agent' => 'Mozilla/5.0',
                    'visited_at' => $date->copy()->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
                ]);
            }
        }

        // Seed some older monthly data
        for ($i = 5; $i >= 1; $i--) {
            $month = Carbon::now()->subMonths($i);
            $daysInMonth = $month->daysInMonth;
            for ($d = 1; $d <= $daysInMonth; $d++) {
                $count = rand(2, 20);
                for ($j = 0; $j < $count; $j++) {
                    PageVisit::create([
                        'page' => $pages[array_rand($pages)],
                        'ip_address' => '192.168.1.' . rand(1, 255),
                        'user_agent' => 'Mozilla/5.0',
                        'visited_at' => $month->copy()->setDay($d)->addHours(rand(0, 23)),
                    ]);
                }
            }
        }
    }
}
