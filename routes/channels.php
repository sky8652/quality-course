<?php

/*
 * This file is part of the hui-ho/quality-course.
 *
 * (c) jiehui <hui-ho@outlook.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
