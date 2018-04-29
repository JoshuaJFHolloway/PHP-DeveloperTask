# PHP Developer Task - Card Dealer and Shuffler

The scenario is as follows:

You have a deck of 52 cards, comprised of 4 suits (hearts, clubs, spades and diamonds) each with 13 values (Ace, two, three, four, five, six, seven, eight, nine, ten, jack, queen and king).
There are four players waiting to play around a table.
The deck arrives in perfect sequence (so, ace of hearts is at the bottom, two of hearts is next, etc. all the way up to king of diamonds on the top).
The task is a simple one. Please create a simple command line program that when executed recreates the scenario above and then performs the following two actions:
Shuffle the cards - We would like to take the deck that is in sequence and shuffle it so that no two cards are still in sequence.
Deal the cards - We would then like to deal seven cards to each player (one card to the each player, then a second card to each player, and so on)
There is no need to necessarily do this in a visual way (for example, simply proving with a test that your deck is shuffled and that the players do now have seven cards will be sufficient)


## Technologies

**PHP** for development
**PHP unit** for testing


## Installation

- run 'git clone https://github.com/JoshuaJFHolloway/PHP-DeveloperTask' in your terminal 


## Running tests

- Run vendor/bin/phpunit


## Approach

1) Setup PHP Unit to test drive app
2) Draw out provisional model of app structure 
3) Create classes for Card suits.