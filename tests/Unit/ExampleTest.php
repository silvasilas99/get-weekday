<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Carbon;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_weekday_function()
    {
        $weekMap = [
            0 => 'Ok',
            1 => 'Okk',
            2 => 'Okkk',
            3 => 'Okkkk',
            4 => 'Okkkkk',
            5 => 'Okkkkkk',
            6 => 'Okkkkkkk'
        ];
        $dayOfWeek = Carbon::createFromFormat('Y-m-d', '2021-09-07')->dayOfWeek;
        $message = $weekMap[$dayOfWeek];
        
        if ($message == 'Okkk') {
            $this->assertTrue(true);
            var_dump($message);
        } else {
            $this->assertTrue(false);
        }
    }
}
