<?php

register_page_template([
    'default' => 'Default',
    'introduce' => 'Introduce',
    'posts' =>'Posts',
    'media-newspapers' =>'Media Newspapers',
    'media-detail' => 'Media Detail',
    'media' => 'Media',
    'infomation' => 'Infomation',
    'contact' => 'Contact',
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for main theme',
]);

RvMedia::setUploadPathAndURLToPublic();
