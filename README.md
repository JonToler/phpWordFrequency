{PHP Word Frequency}

{An application for manage the many to many relationships in a shoe store}

By Jon Toler

Description

{An application for a Brand inventory management. The owner can add Brand brands, and store, which carry each brand.}

Setup/Installation Requirements

Clone this repository to your desktop Run composer install in Terminal start a server in web directory (php -S localhost:8000) change name of src file change name of tests file change name of src file change sourcing to tests You must host this webpage locally

Behavior Driven Development SPECS

Specifications

User can input a word, and it will be recognized regardless of case, whitespaces, and punctuation marks Then returned in lowercase.

Input: Wow!
output: wow


User can enter multiple words, which will be recognized regardless of case, whitespaces, and punctuation marks Then all returned in lowercase.

Input: Wow, this is how one learns to code!
Output: as string [wow, this, how, one, learns, to, code]

The User will get an Output of the Frequency that a word is used.

Input: Wow, this is how one learns to code! Wow, is it starting to rain again?
Output: 2


Known Bugs

isn't passing yet will continue to work on functionality

Support and contact details

Jon Toler: tolerjonathan@gmail.com.

Technologies Used

HTML, PHP, TWIG 1.0, SILEX 1.1

License

This webpage is licensed under the GPL license.

Copyright (c) 2016 Jon Toler
