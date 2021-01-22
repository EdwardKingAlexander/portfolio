<?php

return [
    'enabled' => env('HONEYPOT_ENABLED', true),
    'field_name' => 'address',
    'field_timer_name' => 'timer',
    'minimum_time' => 3,
];