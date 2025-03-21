<?php

declare(strict_types=1);

namespace BVP\BiwakoScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class TimeScraperDataProvider
{
    /**
     * @return array
     */
    public static function scrapeProvider(): array
    {
        return [
            [
                'arguments' => [1, '2024-01-03'],
                'expected' => [
                    'boat_number_1_racer_name' => '山田晃大',
                    'boat_number_1_racer_exhibition_time' => 6.77,
                    'boat_number_1_racer_lap_time' => 36.90,
                    'boat_number_1_racer_turn_time' => 5.28,
                    'boat_number_1_racer_straight_time' => 7.98,
                    'boat_number_2_racer_name' => '市川健太',
                    'boat_number_2_racer_exhibition_time' => 6.65,
                    'boat_number_2_racer_lap_time' => 36.67,
                    'boat_number_2_racer_turn_time' => 5.33,
                    'boat_number_2_racer_straight_time' => 7.88,
                    'boat_number_3_racer_name' => '吉川晴人',
                    'boat_number_3_racer_exhibition_time' => 6.70,
                    'boat_number_3_racer_lap_time' => 37.19,
                    'boat_number_3_racer_turn_time' => 5.40,
                    'boat_number_3_racer_straight_time' => 8.03,
                    'boat_number_4_racer_name' => '和田操拓',
                    'boat_number_4_racer_exhibition_time' => 6.65,
                    'boat_number_4_racer_lap_time' => 37.38,
                    'boat_number_4_racer_turn_time' => 5.77,
                    'boat_number_4_racer_straight_time' => 7.90,
                    'boat_number_5_racer_name' => '川島圭司',
                    'boat_number_5_racer_exhibition_time' => 6.69,
                    'boat_number_5_racer_lap_time' => 37.29,
                    'boat_number_5_racer_turn_time' => 5.61,
                    'boat_number_5_racer_straight_time' => 7.85,
                    'boat_number_6_racer_name' => '吉田和仁',
                    'boat_number_6_racer_exhibition_time' => 6.66,
                    'boat_number_6_racer_lap_time' => 37.28,
                    'boat_number_6_racer_turn_time' => 5.62,
                    'boat_number_6_racer_straight_time' => 7.68,
                ],
            ],
            [
                'arguments' => [2, '2024-01-03'],
                'expected' => [
                    'boat_number_1_racer_name' => '松浦博人',
                    'boat_number_1_racer_exhibition_time' => 6.71,
                    'boat_number_1_racer_lap_time' => 36.92,
                    'boat_number_1_racer_turn_time' => 5.25,
                    'boat_number_1_racer_straight_time' => 7.89,
                    'boat_number_2_racer_name' => '藤井徹',
                    'boat_number_2_racer_exhibition_time' => 6.79,
                    'boat_number_2_racer_lap_time' => 37.89,
                    'boat_number_2_racer_turn_time' => 5.61,
                    'boat_number_2_racer_straight_time' => 8.04,
                    'boat_number_3_racer_name' => '鶴本崇文',
                    'boat_number_3_racer_exhibition_time' => 6.75,
                    'boat_number_3_racer_lap_time' => 37.68,
                    'boat_number_3_racer_turn_time' => 5.72,
                    'boat_number_3_racer_straight_time' => 7.90,
                    'boat_number_4_racer_name' => '吉川喜継',
                    'boat_number_4_racer_exhibition_time' => 6.73,
                    'boat_number_4_racer_lap_time' => 37.35,
                    'boat_number_4_racer_turn_time' => 5.68,
                    'boat_number_4_racer_straight_time' => 7.87,
                    'boat_number_5_racer_name' => '渡邉英児',
                    'boat_number_5_racer_exhibition_time' => 6.71,
                    'boat_number_5_racer_lap_time' => 37.36,
                    'boat_number_5_racer_turn_time' => 5.84,
                    'boat_number_5_racer_straight_time' => 7.80,
                    'boat_number_6_racer_name' => '香川陽太',
                    'boat_number_6_racer_exhibition_time' => 6.80,
                    'boat_number_6_racer_lap_time' => 36.71,
                    'boat_number_6_racer_turn_time' => 5.39,
                    'boat_number_6_racer_straight_time' => 8.02,
                ],
            ],
        ];
    }
}
