<?php

class ListingBasic
{
    private $id, $title, $website, $email, $twitter;
    private $image;
    protected $status = 'basic';

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

    /**
     * ListingBasic constructor.
     * @param array $data Initial data to set from user or database
     */
    public function __construct($data = [])
    {
        if (empty($data)) {
            throw new Exception('Unable to create a listing, data unavailable');
        }
        $this->setValues($data);
    }

    /**
     * Calls individual methods to set values for object properties.
     * @param array $data Data to set from user or database
     */
    public function setValues($data = [])
    {
        if (!isset($data['id'])) {
            throw new Exception('Unable to create a listing, invalid id');
        }
        $this->setId($data['id']);
        if (!isset($data['title'])) {
            throw new Exception('Unable to create a listing, invalid title');
        }
        $this->setTitle($data['title']);
        if (isset($data['website'])) {
            $this->setWebsite($data['website']);
        }
        if (isset($data['email'])) {
            $this->setEmail($data['email']);
        }
        if (isset($data['twitter'])) {
            $this->setTwitter($data['twitter']);
        }
        if (isset($data['status'])) {
            $this->setStatus($data['status']);
        }
        if (isset($data['image'])) {
            $this->setImage($data['image']);
        }
    }

    /**
     * Gets the local property $id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Cleans up and sets the local property $id
     * @param int $value Data may be from database or user
     */
    public function setId($value)
    {
        $this->id = trim(filter_var($value, FILTER_SANITIZE_NUMBER_INT));
    }

    /**
     * Gets the listing's image
     * @return string the image's url.
     */
    public function getImage()
    {
        if (empty($this->image)) {
            return false;
        }
        return $this->image;
    }

    /**
     * Set's the listing's image     *
     * @param string $image
     * @return void
     */
    public function setImage($image)
    {
        $image = trim(filter_var($image, FILTER_SANITIZE_STRING));
        if (empty($image)) {
            $this->website = null;
            return;
        }
        if (substr($image, 0, 4) != 'http') {
            $image = BASE_URL . '/' . $image;
        }
        $this->image = $image;
    }

    /**
     * Gets the local property $title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Cleans up and sets the local property $title
     * @param string $value to set property
     */
    public function setTitle($value)
    {
        $this->title = trim(filter_var($value, FILTER_SANITIZE_STRING));
    }

    /**
     * Gets the local property $website
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Cleans up and sets the local property $website
     * @param string $value to set property
     */
    public function setWebsite($value)
    {
        $value = trim(filter_var($value, FILTER_SANITIZE_STRING));
        if (empty($value)) {
            $this->website = null;
            return;
        }
        if (substr($value, 0, 4) != 'http') {
            $value = 'http://' . $value;
        }
        $this->website = $value;
    }

    /**
     * Gets the local property $email
     * @return string email address
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Cleans up and sets the local property $email
     * @param string $value to set property
     */
    public function setEmail($value)
    {
        $this->email = trim(filter_var($value, FILTER_SANITIZE_STRING));
    }

    /**
     * Gets the local property $twitter
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Cleans up and sets the local property $twitter
     * @param string $value to set property
     */
    public function setTwitter($value)
    {
        $this->twitter = str_replace('@', '', trim(filter_var($value, FILTER_SANITIZE_STRING)));
    }

    /**
     * Gets the local property $status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Cleans up and sets the local property $status
     * @param string $value to set property
     */
    public function setStatus($value)
    {
        if (empty($value)) {
            $this->status = 'basic';
            return;
        }
        $this->status = trim(filter_var($value, FILTER_SANITIZE_STRING));
    }

    /**
     * Convert the current object to an associative array of parameters
     * @return array of object parameters
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}
