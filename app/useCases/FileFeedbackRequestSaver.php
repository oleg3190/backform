<?php

namespace App\useCases;

use App\Contracts\DatabaseFeedbackContract;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class FileFeedbackRequestSaver implements DatabaseFeedbackContract
{
    public function save(array $data): bool
    {
        try {
            $str = '';

            foreach ($data as $k => $value) {
                $str .=sprintf('%s: %s ', $k, $value);
            }

            Storage::disk('local')->append('form.txt', $str);
            return true;
        } catch(\Exception $e) {
            Log::error($e);

            return false;
        }
    }
}
