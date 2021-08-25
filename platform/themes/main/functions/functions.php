<?php

register_page_template([
    'default' => 'Default',
    'introduce' => 'Introduce',
    'posts' =>'Posts',
    'media-newspapers' =>'Media Newspapers',
    'media-detail' => 'Media Detail',
    'media' => 'Media',
    'information-disclosure' => 'Information Disclosure',
    'shareholder-information' => 'Shareholder Information',
    'contact' => 'Contact',
    'media-event' => 'Media Event',
    'media-human' => 'Human',
    'media-message' => 'Message',
    'media-news' => 'News',
    'security-term' => 'Security Term',
    ''
 
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for main theme',
]);

RvMedia::setUploadPathAndURLToPublic();
