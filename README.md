# PHP Developer Task - Card Dealer and Shuffler

Using PHP and PHP unit for the first time, I worked on an app to satisfy the following scenario:

You have a deck of 52 cards, comprised of 4 suits (hearts, clubs, spades and diamonds) each with 13 values (Ace, two, three, four, five, six, seven, eight, nine, ten, jack, queen and king).
There are four players waiting to play around a table.
The deck arrives in perfect sequence (so, ace of hearts is at the bottom, two of hearts is next, etc. all the way up to king of diamonds on the top).

The task is a simple one- Create a simple command line program that when executed recreates the scenario above and then performs the following two actions:

**Shuffle the cards** - We would like to take the deck that is in sequence and shuffle it so that no two cards are still in sequence.

**Deal the cards** - We would then like to deal seven cards to each player (one card to the each player, then a second card to each player, and so on)

There is no need to necessarily do this in a visual way (for example, simply proving with a test that your deck is shuffled and that the players do now have seven cards will be sufficient)


## Technologies

**PHP** for development

**PHP unit** for testing


## Installation

- Run 'git clone https://github.com/JoshuaJFHolloway/PHP-DeveloperTask' in your terminal 


## Usage

Run 'php src/CardGamePlay.php' in your terminal and it will automatically play for you.

<img align="centre" src="https://preview.ibb.co/etEtES/Screen_Shot_2018_05_01_at_22_49_52.png" width="399"/>

The game continues to show you the perfectly organised deck. At the end it highlights the last
first card for those who are not interested in browsing across the whole deck.

<img align="centre" src="https://image.ibb.co/mQoLuS/Screen_Shot_2018_05_01_at_22_50_36.png" width="399"/>

Afterwards, it creates a shuffled deck with no card in the same position and proceeds to show you it.

<img align="centre" src="https://image.ibb.co/cnjbZS/Screen_Shot_2018_05_01_at_22_50_49.png" width="399"/>

At the end it shows you the first card in the shuffled deck. 

<img align="centre" src="https://image.ibb.co/k8HfuS/Screen_Shot_2018_05_01_at_22_50_57.png" width="399"/>


## Running tests

Run 'vendor/bin/phpunit Tests' to see tests ran.

<img align="centre" src="https://preview.ibb.co/dCgOES/Screen_Shot_2018_05_02_at_00_59_33.png" alt="Screen_Shot_2018_05_02_at_00_59_33" width="399"/>


## Classes

My planning has resulted in me deciding upon 4 classes and their methods

- CardGamePlay (Provides a few strings which explain as the app will shuffle and deal cards)
- Deck (Creates a deck in perfect order, shuffles it so that no card is in the same position and deals them)
- Card (Initialises card objects and converts them to strings)
- Players (Initialises players that have a name, a hand(array) and a method to push cards to the hand)


## Approach

1) Setup PHP Unit to test drive app (X)
2) Draw out provisional model of app structure (which is outlined above in classes section) (X) 
3) Create Card class and its methods (X)
4) Create Deck class and its methods (X)
5) Create Player class and its methods (X) 
6) Create CardGamePlay.php(X)

### IteratorAggregate and ArrayAccess

IteratorAggregate is used so that I can implement a new ArrayIterator on the class Deck. This allows me to
traverse the object using foreach in the CardGamePlay.php file to print to the terminal each card as a string.

In order to use the Deck object as an array I needed to use ArrayAccess in conjunction with IteratorAggregate.
From what I understand, ArrayAccess requires the methods offsetSet, offsetUnset, offsetExists and offsetGet.


## Testing

### Mocking

I have found it **difficult to mock with PHP unit** due to my unfamiliarity with the testing framework and PHP itself.
Having not coded in PHP or used PHP unit up until 2 days ago I have found it troublesome to get it working in the time limit
given. Did not help that getMock no longer works with updated versions of PHP and I had spent many an hour trying to work
out why it was not working in my tests.

Also I tried to use Mockery to mock objects such as the ArrayIterator but as soon as I installed it with the composer
I could no longer run tests. I had continual 'Fatal Error: Allowed memory size' issues, which I could not resolve by
setting the memory limit at the top of the file to a much larger limit. I left the mock I was looking to do still there
commented out.

### Splitting tests up

I would like to know more about how to **organise the tests**. I know in rspec and Jasmine you can use describe and context 
to arrange tests into sections. These sections would relate to the testing of particular methods. I was aware that sometimes
tests were testing too many assertions at once and this would be troublesome in the future if one was to fail. This is
because it would be much more difficult to determine which assertion is failing. 

I tried to keep the tests separate because of what was aforementioned but I would like to know more about php unit
testing organisation conventions. 

I also felt that the names for the tests were becoming a bit too long. This is partially due to the lack of usage of a describe
or context block. However, I felt the need to have them fairly long so that they would describe the test well enough.

### CardGamePlay

I am wondering whether I should have tested CardGamePlay.php. It uses one tested method and accesses indexes of from the Deck
from said class. Everything it is doing is tested in the DeckTest.php. Moreover, what is not tested are strings I have written
and I don't feel testing them is necessary considering that there is no behaviour to examine. I would like to know what the convention
is with these files in php.


## Improvements

If I had more time:

- I would have **refactored** the code more. Especially, methods like createSuit in the Deck class. Methods such
  as this could be replaced with a loop to prevent code multiplication. 
  
- I would have **implemented the dealing method**. I would have created a method in the Deck class that would
  deal the shuffled deck array to 4 of the Player class instantiations. Passing in the dealt card into each Players'
  array(hand) by calling the addCard method commented out in the Player class. The method of passing one at a time to each of the 4
  Players would have been carried out by using a normal loop.
  
- I would have **improved the tests**. I know that they can be more accurate in what they are testing and I feel that I would have
  further refined them if given the time. Mocking would have certainly helped this. Also, I would have liked to implement
  php's equivalent of beforeEach in the tests to remove the duplications of calls to classes.
  
- I would have **improved the shuffle method**. Currently it continues to shuffle until it creates an array unique to the
  perfectly arranged array. While this is created seamlessly, it is computational heavy and a larger array would slow
  down the app. Hence, given more time, I would create a method that can create a unique array with less iterations.
  
- I would have **added a code coverage report**. This would allow me to see more clearly where my tests are lacking.
 

## Authors

Joshua Holloway