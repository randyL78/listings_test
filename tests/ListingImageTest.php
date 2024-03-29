<?php

/**
 * Created by PhpStorm.
 * User: alena
 * Date: 2019-02-01
 * Time: 14:17
 */

use PHPUnit\Framework\TestCase;

include __DIR__ . '/../inc/config.php';

class ListingImageTest extends TestCase
{
    public function testNoImage()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => '',
        ];
        $listing = new ListingBasic($data);
        $this->assertFalse($listing->getImage());
    }
    public function testFullPathImage()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => 'https://www.cascadiaphp.com/images/logo.svg',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['image'], $listing->getImage());
    }
    public function testBuildPathImage()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'image' => 'images/listings/1.png',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals(BASE_URL . '/' . $data['image'], $listing->getImage());
    }
}
