<?php

namespace Kiner\PhilippinesHolidays\Tests;

use Kiner\PhilippinesHolidays\Holidays;
use PHPUnit\Framework\TestCase;

class HolidaysTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Set the holidays configuration directly for testing
        Holidays::setHolidays([
            'January' => [
                'New Year\'s Day' => 'January 1',
                'Chinese New Year' => 'Movable (based on the Lunar calendar)',
            ],
            'April' => [
                'Araw ng Kagitingan' => 'April 9',
            ],
            'December' => [
                'Christmas Day' => 'December 25',
                'Rizal Day' => 'December 30',
            ],
        ]);
    }

    /** @test */
    public function it_returns_all_holidays()
    {
        $holidays = Holidays::all();
        
        $this->assertIsArray($holidays);
        $this->assertArrayHasKey('January', $holidays);
        $this->assertArrayHasKey('April', $holidays);
        $this->assertArrayHasKey('December', $holidays);
    }

    /** @test */
    public function it_returns_holidays_for_a_given_month_name()
    {
        $januaryHolidays = Holidays::month('January');

        $this->assertIsArray($januaryHolidays);
        $this->assertArrayHasKey('New Year\'s Day', $januaryHolidays);
        $this->assertArrayHasKey('Chinese New Year', $januaryHolidays);
    }

    /** @test */
    public function it_returns_holidays_for_a_given_month_number()
    {
        $decemberHolidays = Holidays::month(12);

        $this->assertIsArray($decemberHolidays);
        $this->assertArrayHasKey('Christmas Day', $decemberHolidays);
        $this->assertArrayHasKey('Rizal Day', $decemberHolidays);
    }

    /** @test */
    public function it_returns_an_empty_array_for_invalid_month()
    {
        $invalidHolidays = Holidays::month('InvalidMonth');

        $this->assertIsArray($invalidHolidays);
        $this->assertEmpty($invalidHolidays);
    }
}
