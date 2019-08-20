# Listings Test

Project for creating and working with Unit Tests

## Instructions

- [X] Use Composer to install PHP Unit ONLY for dev. Put all tests in the "tests" directory.
- [X] Write tests for the ListingBasic class to ensure that all three Exception messages are returned as expected.
- [X] Write a test for the ListingBasic class to ensure that an Object is created when passing the minimum, id and title.
- [X] Write a test for the ListingBasic class to ensure that getStatus method returns 'basic'.
- [X] Write a test for the ListingBasic class to ensure that the get method for each property is returning the expected results: id, title, website, email, twitter.
- [X] Write a test for the ListingBasic class to ensure that the toArray method returns an array where each item equals the expected results: id, title, website, email, twitter.
- [X] Write a test for the ListingPremium class to ensure that getStatus method returns 'premium'.
- [X] Write a test for the ListingPremium class to ensure that getDescription method returns the expected results.
- [X] Write a test for the ListingFeatured class to ensure that getStatus method returns 'featured'.
- [X] Write a test for the ListingFeatured class to ensure that getCoc method returns the expected results.
- [X] Add a new image feature using the tests in the ListingImageTest.php file as a guide. When the feature has been added properly, all tests should pass

## Extra Credit

- [ ] Create test for the Collection class by mocking a database