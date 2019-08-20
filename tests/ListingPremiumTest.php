<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{

    protected $listing;

    /**
     * Creates an instance of the ListingPremium class to perform tests on.
     * @return void
     */
    protected function setUp(): void
    {
        $data = [
            'id' => 8,
            'title' => 'My Premium Listing',
            'description' => 'The conference has something for every level of '                . 'PHP developer.'
        ];

        $this->listing = new ListingPremium($data);
    }

    /** @test */
    public function hasDescription()
    {
        $expected = 'The conference has something for every level of '                    . 'PHP developer.';
        $actual = $this->listing->getDescription();

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function getStatusReturnsPremium()
    {
        $expected = 'premium';
        $actual = $this->listing->getStatus();
        $this->assertEquals($expected, $actual);
    }
}
