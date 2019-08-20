<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturesTest extends TestCase
{

    protected $listing;

    /**
     * Creates an instance of the ListingFeatured class to perform tests on.
     * @return void
     */
    protected function setUp(): void
    {
        $data = [
            'id' => 8,
            'title' => 'My Featured Listing',
            'coc' => '<p><em>Cascadia PHP</em> is dedicated to providing a '
                . 'harassment-free conference experience for everyone.</p>'
        ];

        $this->listing = new ListingFeatured($data);
    }

    /** @test */
    public function getStatusShouldReturnFeatured()
    {
        $expected = 'featured';
        $actual = $this->listing->getStatus();

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function hasCodeOfConductWithFormatting()
    {
        $expected = '<p><em>Cascadia PHP</em> is dedicated to providing a '
            . 'harassment-free conference experience for everyone.</p>';
        $actual = $this->listing->getCoc();

        $this->assertEquals($expected, $actual);
    }
}
