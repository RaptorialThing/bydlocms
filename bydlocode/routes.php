<?php

return [
    '~^hello/(.*)$~' => [\Bydlocode\Controllers\MainController::class,'sayHello'],
    '~^$~' => [\Bydlocode\Controllers\MainController::class, 'main'],
];