<?php

use PHPUnit\Framework\TestCase;

class ListingBasicFullTest extends TestCase
{

    protected $listing;

    /**
     * Creates an instance of the ListingBasic class to perform tests on.
     * @return void
     */
    protected function setUp(): void
    {
        $data = [
            'id' => 5,
            'title' => 'My Basic Listing',
            'website' => 'www.example.com',
            'email' => 'name@example.com',
            'twitter' => 'myListing123'
        ];

        $this->listing = new ListingBasic($data);
    }

    /** @test */
    public function getStatusReturnsBasic()
    {
        $expected = 'basic';
        $actual = $this->listing->getStatus();
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function hasId()
    {
        $expected = 5;
        $actual = $this->listing->getId();
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function hasTitle()
    {
        $expected = 'My Basic Listing';
        $actual = $this->listing->getTitle();
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function hasWebsite()
    {
        $expected = 'http://www.example.com';
        $actual = $this->listing->getWebsite();
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function hasEmail()
    {
        $expected = 'name@example.com';
        $actual = $this->listing->getEmail();
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function hasTwitter()
    {
        $expected = 'myListing123';
        $actual = $this->listing->getTwitter();
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function toArrayHasAllItems()
    {
        $id = '5';
        $title = 'My Basic Listing';
        $website = 'http://www.example.com';
        $email = 'name@example.com';
        $twitter = 'myListing123';

        $results = $this->listing->toArray();

        $this->assertArrayHasKey('id', $results);
        $this->assertArrayHasKey('title', $results);
        $this->assertArrayHasKey('website', $results);
        $this->assertArrayHasKey('email', $results);
        $this->assertArrayHasKey('twitter', $results);


        $this->assertEquals($id, $results['id']);
        $this->assertEquals($title, $results['title']);
        $this->assertEquals($website, $results['website']);
        $this->assertEquals($email, $results['email']);
        $this->assertEquals($twitter, $results['twitter']);
    }
}
