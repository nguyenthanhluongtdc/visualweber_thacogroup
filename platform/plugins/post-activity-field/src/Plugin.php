<?php

namespace Platform\PostActivityField;

use Illuminate\Support\Facades\Schema;
use Platform\PluginManagement\Abstracts\PluginOperationAbstract;

class Plugin extends PluginOperationAbstract
{
    public static function remove()
    {
        Schema::dropIfExists('app_post_activity_fields');
    }
}
