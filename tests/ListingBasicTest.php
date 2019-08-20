<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    public function canBeCreatedFromIdAndTitleOnly()
    {
        $this->assertInstanceOf(
            ListingBasic::class,
            new ListingBasic(['id' => 5, 'title' => 'My basic listing'])
        );
    }

    /** @test  */
    public function cannotBeCreatedFromEmptyData()
    {
        $this->expectExceptionMessage(
            'Unable to create a listing, data unavailable'
        );

        new ListingBasic();
    }

    /** @test */
    public function cannotBeCreatedWithMissingID()
    {
        $this->expectExceptionMessage(
            'Unable to create a listing, invalid id'
        );
        new ListingBasic([
            'website' => 'www.example.com',
            'email' => 'name@example.com'
        ]);
    }

    /** @test */
    public function cannotBeCreatedWithMissingTitle()
    {
        $this->expectExceptionMessage(
            'Unable to create a listing, invalid title'
        );
        new ListingBasic([
            'id' => 5,
            'website' => 'www.example.com',
            'email' => 'name@example.com'
        ]);
    }
}
