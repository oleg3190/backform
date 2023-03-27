<?php

namespace App\Contracts;

interface DatabaseFeedbackContract
{
    public function save(array $data): bool;
}
