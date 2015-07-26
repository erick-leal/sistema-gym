SemanticYii
===========

An extension for Yii Framework for [SemanticUI](http://semantic-ui.com/).

## Getting started

### Requirements 

Tested with Yii 1.1.14

### Download

Please get the latest version here: [master.zip](https://github.com/vad-oparin/SemanticYii/archive/master.zip)

### Setup

Unzip the contents of the package under `protected/extensions/semantic-yii`. The folder structure should now be the following:

```
protected
  └── extensions
      └── semantic-yii
          ├── assets
          │   ├── css
          │   ├── fonts
          │   ├── images
          │   └── javascript
          ├── form
          ├── helpers
          └── widgets
```

Open your application configuration in `protected/config/main.php` and modify it according to the following example:

```php
<?php
// main configuration file
return array(
	...
    // preloading components
    'preload'        => array(
        ...
        'SemanticYii',
    ),
    // path aliases
    'aliases' => array(
        ...
        // SemanticYii path alias
        'semantic-yii' => realpath(__DIR__ . '/../extensions/semantic-yii'),
    ),
    // application components
    'components' => array(
        ...
        // SemanticYii configuration
        'SemanticYii'     => array(
            'class' => 'semantic-yii.SemanticYii',
        ),
    ),
);
```

### What's included

#### Semantic UI Elements

*Elements are the basic building blocks of a website.*

* [Button](http://semantic-ui.com/elements/button.html)
*Buttons indicate a possible user action.*
* [Divider](http://semantic-ui.com/elements/divider.html)
*A divider visually segments content into separate groups.*
* [Header](http://semantic-ui.com/elements/header.html)
*Headers provide a short summary of content.*
* [Icon](http://semantic-ui.com/elements/icon.html)
*An icon is a glyph used to represent another concept more simply.*
* [Image](http://semantic-ui.com/elements/image.html)
*An image is a graphic representation of something.*
* [Input](http://semantic-ui.com/elements/input.html)
*Inputs allow a user to enter information.*
* [Label](http://semantic-ui.com/elements/label.html)
*Labels give descriptions to pieces of content.*
* [Loader](http://semantic-ui.com/elements/loader.html)
*Loaders lets a user know to wait for activity to finish.*
* [Progress](http://semantic-ui.com/elements/progress.html)
*Progress bars show the percent of a task complete.*
* [Reveal](http://semantic-ui.com/elements/reveal.html)
*A reveal is an element that shows different content below it when hovered.*
* [Segment](http://semantic-ui.com/elements/segment.html)
*A segment is used to create a grouping of related content.*
* [Step](http://semantic-ui.com/elements/step.html)
*Steps show the current activity in a series of consecutive activities.*

Read about the [UI Elements](http://semantic-ui.com/element.html) at the site.

#### Semantic UI Collections

*UI collections are elements which contain other elements which often appear together.*

* Breadcrumb
* Form
* Grid
* Menu
* Message
* Table

Read about the [UI Collections](http://semantic-ui.com/collection.html) at the site.

#### Semantic UI Views

* Comment
* Feed
* Item
* Link

#### Semantic UI Modules

*Modules are interface elements whose behavior is an essential part of their definition.*

* Accordion
* Checkbox
* Dimmer
* DropdownModal
* Popup
* Rating
* Shape
* Sidebar
* Transition

Read about the [UI Modules](http://semantic-ui.com/module.html) at the site.

