<?php

view()->composer(
    [
        'user::admin.partials.permissions',
        'user::admin.partials.permissions',
        'user::admin.roles.edit',
        'user::admin.roles.create',
    ],
    \Modules\User\Composers\PermissionsViewComposer::class
);

