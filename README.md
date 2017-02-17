# _Word Finder_

#### _Finds a given word in a string, 2/17/2017_

#### By _**Jake Campa**_

## Specs

_Program will output a number base on how many times a given word is found in a string. Case and punctuation will be ignored._

Behavior | Input | Output
--- | --- | ---
Tests two words to see if they match regardless of case and punctuation |Find Word:"foo" Find In Word: "Foo!"| 1
Tests two words to see if they match regardless of case and punctuation |Find Word:"foo" Find In Word: "Bar!"| 0
Find a given word in a string |Find Word:"bar" Find In Word: "The word is BaR."| 1
Find a given word multiple times in a string |Find Word:"foo" Find In Word: "The word is FOO. It is common for the FOO the live in a cave near the FOO mountains."| 3
Find a given word multiple times in a string (partial matches do not count)|Find Word:"foo" Find In Word: "The word is FOO. It is common for the FOO the live in a cave near the FOOBAR mountains."| 2

## Setup/Installation Requirements

*REQUIRES COMPOSER AND PHP TO BE INSTALLED ON YOUR COMPUTER
* _Clone repo_
* _In terminal cd to root folder_
* _In terminal enter the follow in terminal and press enter: composer install_
* _In terminal cd to web folder_
* _In terminal enter the follow in terminal and press enter: php -S localhost:8000_
* _In browser enter the following into the address bar and press enter: localhost:8000_

## Known Bugs

_None at the moment_

## Support and contact details

_Support and contact info pending_

## Technologies Used

* _Silex_
* _Twig_
* _jQuery_
* _php_

### License

*MIT Licensing applies*

Copyright © 2017 **_Jake Campa_**
