<?php

return [
    [
        'name' => 'Post activity fields',
        'flag' => 'post-activity-field.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'post-activity-field.create',
        'parent_flag' => 'post-activity-field.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'post-activity-field.edit',
        'parent_flag' => 'post-activity-field.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'post-activity-field.destroy',
        'parent_flag' => 'post-activity-field.index',
    ],
];
