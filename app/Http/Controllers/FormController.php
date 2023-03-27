<?php

namespace App\Http\Controllers;

use App\Contracts\FeedbackRequestFactoryContract;
use App\Http\Requests\FeedbackRequest;

class FormController extends Controller
{
    private $formService;
    public function __construct(FeedbackRequestFactoryContract $formService)
    {
        $this->formService = $formService;
    }
    public function saveForm(FeedbackRequest $request)
    {
        $data = $this->formService::save($request->validated(), 'file');

        if ($data) {
            return back()->with('message', 'created successfully');
        }

        return back()->with('message', 'something went wrong');
    }
}
