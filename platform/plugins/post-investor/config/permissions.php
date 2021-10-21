<?php

return [
    [
        'name' => 'Post investors',
        'flag' => 'post-investor.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'post-investor.create',
        'parent_flag' => 'post-investor.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'post-investor.edit',
        'parent_flag' => 'post-investor.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'post-investor.destroy',
        'parent_flag' => 'post-investor.index',
    ],
    [
        'name'        => 'Is Author',
        'flag'        => 'post-investor.current',
        'parent_flag' => 'post-investor.index',
    ],
    [
        'name'        => 'Approve',
        'flag'        => 'post-investor.approve',
        'parent_flag' => 'post-investor.index',
    ],
];
