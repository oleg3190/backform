<?php

namespace App\useCases;

use App\Contracts\DatabaseFeedbackContract;

class DatabaseFeedbackRequestSaver implements DatabaseFeedbackContract
{
    public function save(array $data): bool
    {
        //
        return true;
    }
}
