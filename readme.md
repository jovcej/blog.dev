# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Overview

	Sample web site made as a basic for e-advertising (adding, modifying and/or deleting entries).

>app/Http/routes.php are the routes of the project
>app/Http/Controllers are the controllers of the project
>app/Article.php is the model of the project
>database/migrations are the migrations of the project
>rosources/views are the views of the projest
>.env are the database settings

## DB structure

CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL  AUTO_INCREMENT,
  `title` varchar(255)	utf8_unicode_ci	 NOT NULL,
  `text` varchar(255)	utf8_unicode_ci	 NOT NULL,
  `name` varchar(255)	utf8_unicode_ci	 NOT NULL,
  `email` varchar(255)	utf8_unicode_ci	 NOT NULL,
  `number` varchar(255)	utf8_unicode_ci	 NOT NULL,
  `published_at` datetime	 NOT NULL,
  `picture` varchar(255)	utf8_unicode_ci	 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
