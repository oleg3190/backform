<?php

namespace App\useCases;

use App\Contracts\FeedbackRequestFactoryContract;
use Illuminate\Support\Facades\Log;

class FeedbackRequestFactory implements FeedbackRequestFactoryContract
{
    public static function save(array $data, string  $destination): bool
    {
        $destination = 'App\useCases\\' . ucfirst($destination) . 'FeedbackRequestSaver';

        try {
            $saver = new $destination();
            return $saver->save($data);
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }
}
