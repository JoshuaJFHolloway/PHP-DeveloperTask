# PHP Developer Task - Card Dealer and Shuffler

The scenario is as follows:

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



## Running tests

- Run 'vendor/bin/phpunit Tests' to see tests being ran.
(- Run 'vendor/bin/phpunit —coverage-html' to create coverage report.) - Will be added


## Classes

My planning has resulted in me deciding upon 5 classes and their methods

- CardGamePlay (Provides a few strings which explain as the app will shuffle and deal cards)
- Deck (Shuffler, Dealer and creates a deck of all 4 arrays combined in order)
- Card (Creates 4 arrays, each array being 13 cards of each one suit)
- Players (Initialises players that have a name and a hand(array))

This is only provisional and I am likely to change it as I adapt it to what I feel is most necessary



## Approach

1) Setup PHP Unit to test drive app (X)
2) Draw out provisional model of app structure (X) 
3) Create Player class and its methods (X)
4) Create Card class and its methods (X)
5) Create Deck class and its methods (X)
6) Create CardGamePlay.php(X)


## Objectives

1) Deck created in perfect sequence (X)
2) Shuffle deck so that no card is in the same position (X)
3) Deal seven cards to each one of the 4 players in sequence ()


## Mocking

I have found it difficult to mock with PHP unit due to my unfamiliarity with the testing framework and PHP itself.
Having not coded in PHP or used PHP unit up until 2 days ago I have found it troublesome to get it working in the time limit
given. Did not help that getMock no longer works with updated versions of PHP and I had spent many an hour trying to work
out why it was not working in my tests.


