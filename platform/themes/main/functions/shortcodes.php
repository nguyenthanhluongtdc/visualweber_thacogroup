<?php

app()->booted(function () {
    add_shortcode('google-map', __('Google map'), __('Custom map'), function ($shortCode) {
        return Theme::partial('shortcodes.google-map', ['address' => $shortCode->content]);
    });

    shortcode()->setAdminConfig('google-map', Theme::partial('shortcodes.google-map-admin-config'));

    add_shortcode('youtube', __('Youtube'), __('Add youtube video'), function ($shortCode) {
        $url = rtrim($shortCode->content, '/');
        if (str_contains($url, 'watch?v=')) {
            $url = str_replace('watch?v=', 'embed/', $url);
        } else {
            $exploded = explode('/', $url);

            if (count($exploded) > 1) {
                $url = 'https://www.youtube.com/embed/' . Arr::last($exploded);
            }
        }

        return Theme::partial('shortcodes.youtube', compact('url'));
    });

    shortcode()->setAdminConfig('youtube', Theme::partial('shortcodes.youtube-admin-config'));
    add_shortcode('filter-media', __('Filter Media'), __('Filter Media'), function ($shortCode) {
        return Theme::partial('shortcodes.filter-media');
    });
    add_shortcode('contact-form', __('Contact Form'), __('Contact Form'), function ($shortCode) {
        return Theme::partial('shortcodes.contact-form');
    });
    add_shortcode('field-activity', __('Field Activity'), __('Field Activity'), function ($shortCode) {
        return Theme::partial('shortcodes.field-activity');
    });
    add_shortcode('news-home', __('News Home'), __('News Home'), function ($shortCode) {
        return Theme::partial('shortcodes.news-home');
    });
    add_shortcode('media-home', __('Media Home'), __('Media Home'), function ($shortCode) {
        return Theme::partial('shortcodes.media-home');
    });
    add_shortcode('recruitment', __('Recruitment'), __('Recruitment'), function ($shortCode) {
        return Theme::partial('shortcodes.recruitment');
    });

});
