<?php

namespace App\Services;

use App\Contacts\FormContract;
use App\useCases\FeedbackRequestFactory;

class FormService implements FormContract
{
    public function save(array $data): bool
    {
        FeedbackRequestFactory::save($request->validated(), 'file');

        return true;
    }
}
