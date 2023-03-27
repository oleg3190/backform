<?php

namespace App\Contracts;

interface FeedbackRequestFactoryContract
{
    public static function save(array $data, string $destination): bool;
}
