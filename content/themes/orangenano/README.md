# Barebones Weaponofchoice Starter Project

* [About this template](#about-this-template)
* [Assumptions](#assumptions)
* [Copy the template](#copy-the-template)
* [Getting Started](#getting-started)
* [Deploying](#deploying)

## About this template
This is the to go starting point when you are developing a website for Weaponofchoice or a client of Weaponofchoice. By following this ReadMe you will have everything you need to kickstart a project. This project also includes a simple checklist for deploying the website.

## Assumptions
* You're running Mac OS X & Google Chrome
* You're using [Textmate 2](https://github.com/textmate/textmate) or another powerful editor
* You're using [LiveReload](http://feedback.livereload.com/knowledgebase/articles/67441-how-do-i-start-using-livereload-)
* You are familiar with Git and Github and know basic Terminal commands
* You have [Git Flow](https://github.com/nvie/gitflow) installed
* You also are up to date about our development best practices (see: [wiki](https://github.com/weaponofchoice/barebones/wiki))
* You use [SASS](http://sass-lang.com) (& [Compass](http://compass-style.org/)) and [Coffeescript](http://www.coffeescript.org)
* You have [ImageOptim](http://www.imageoptim.com) installed.
* You are not [fat](http://browserdiet.com/)

## Copy the template

Getting started is as easy as 123. 

1. Create a new repository on Github
Since we use Github for our codebase, create a new *private* repo in the Weaponofchoice Github
![Like this](https://dl.dropbox.com/s/44g7tix9m8k7u4i/Screenshot%202014-01-07%2012.06.17.png)

2. Clone this repository
Clone the barebones project to your hard drive
`git clone git@github.com:weaponofchoice/barebones.git yourprojectfolder`

3. Update remotes
Since you don't want to mess with this template project you need to change your remotes to the remotes of your (future) repository. Like this:
`git remote set-url origin git://url-of-your-remote-repo-here`

## Getting Started

Once you've everything set up, you will notice the following folders:
* coffee  
this folder holds all the coffee script files
* css  
compiled css goes here
* fonts  
font files (myfonts, icon fonts etc) go in here
* img  
images, icons, etc.
* js  
compiled js goes here, external plugins go in the `vendor` subfolder
* sass  
the sass source files and the foundation framework

### CSS & Foundation

Most of this template consists of the CSS structure. We use [Foundation](http://foundation.zurb.com) by Zurb as a framework for all the mobile first layout heavy lifting.

Foundation lives in the `foundation` folder, all other partials live in the `components` folder. Feel free to create subfolders if you feel that your project is becoming very large.

`app.scss` is the beating heart of the CSS structure. This file lists all the components that make up your project. The file is divided in 4 lists of imports. One for frameworks, one for general project files, one for all the elements that make up the site and finally all the pages that hold all the elements. 

By doing so the project becomes very easy to maintain. Ie. all styling for an list item is done in `components/_listitem.scss` and the positioning of that item on the homepage is done in `components/_homepage.scss`. This will make sure that styling specific for each element and page are seperated and that styling that is shared is defined in just one place.

`_settings.scss` holds all Foundation's settings, set up with a default 24 column grid.

*Note:*
Since you usually do not need all the stuff Foundation provides be sure to select the parts you need in `_foundation.scss` (9/10 just the grid) or your CSS will become very bloated!

### The Grid System

Much can be said about using presentational classes in your HTML. But for most projects using the [Foundation Grid](http://foundation.zurb.com/docs/components/grid.html) is the easiest and proven way of quickly scaffolding a mobile first responsive website.


## Deploying

Before deploying your project to the server, different things have to be done. One of the things that have to be done
There are different ways of preparing your project for deployment. Like concatenating and minifying of all the javascript, optimizing all the images and compiling all the sass to one compressed stylesheet.

Some folks like Yeoman, Grunt and Bower for doing all those different kinds of tasks (and more), but in my opinion that is usually a bit of overkill and too much opiniated. In case you want to use those tools, go ahead ;).

Fortunately, this project comes with a nifty [Rakefile](http://en.wikipedia.org/wiki/Rake_(software)) that runs the following tasks automatically:
1. Compiling of all the SASS
2. Concatenating and minifying of all the javascript
3. Committing it all to git

Note:
To make sure the rakefile knows which js files to concatenate you have to define those in app.js.

Rakefile etc.

To Do:
* Find a clever way of serving seperate .js files in development vs. one compressed `app.min.js` in production.
* Add ImageOptim to the rakefile.

=========

TO DO:
* Code styleguide (classnames, soft tabs etc)
* Git flow workflow
* Recommended apps / plugins etc (git autocomplete)
* Add icon font
* Add svg social icons font
* Make sure Typekit & jQuery UI are loaded via google apis
* Favicon instructions
* Apple touch icon instructions
* Google Analytics instructions
* FB meta instructions
* Using SVG's & preparation instructions
* The idea of fixme
* htaccess doc