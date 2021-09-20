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
    'financial-report' => 'Financial Report',
    'rules-regulation' => 'Rules Regulation',
    'annual-report' => 'Annual Report',
    'media-event' => 'Media Event',
    'media-human' => 'Human',
    'media-message' => 'Message',
    'media-news' => 'Media News',
    'security-term' => 'Security Term',
    'media-gallery' => 'Media Gallery',
    'contact' => 'Contact',
    'field-activity' => 'Field Activity',
    'field-of-activity' => 'Field Of Activity'

]);

Menu::addMenuLocation('menu-investor-relations', 'Quan hệ cổ đông');
Menu::addMenuLocation('photo-gallery-menu', 'Menu bộ lọc hình ảnh');
Menu::addMenuLocation('video-gallery-menu', 'Menu bộ lọc video');

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for main theme',
]);

RvMedia::setUploadPathAndURLToPublic();

if (is_plugin_active('blog')) {
    register_post_format(
        [
            ''        => [
                'key'  => '',
                'icon' => null,
                'name' => 'Default',
            ],
            'gallery' => [
                'key'  => 'gallery',
                'icon' => 'fa fa-image',
                'name' => 'Gallery',
            ],
            'video'   => [
                'key'  => 'video',
                'icon' => 'fa fa-camera',
                'name' => 'Video',
            ],
        ]
    );
}
