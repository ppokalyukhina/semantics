# Semantics

This application takes 2 differenc resource files (CSS and HTML in that case), compares all the css elements which are used in HTML
and returns only _unused_ elements from the CSS resource file.
All data used are dummy, made only for the purpose of testing.

## Prerequisits
* Composer
* PHP ^7.0
* PhpUnit ^6.5

## How to use
* Clone the project
* Go to the project directory
* Run ``composer install``

### In web browser:
* In your terminal execute: ``./bin/web-server``
* Open ``http://0.0.0.0:1337`` (localhost) in your browser

## Output:
As the result you should see a list of unused elements e.g.:

*Unused CSS classes in index.html are:* 
- h2
- navbar
- p
