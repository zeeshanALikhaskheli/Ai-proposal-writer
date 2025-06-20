<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Gemini API Key
    |--------------------------------------------------------------------------
    |
    | Your Gemini API key goes here. It will be used to authenticate requests
    | to the Gemini (Google AI) models.
    |
    */

    'api_key' => env('GEMINI_API_KEY', 'AIzaSyDokSFwO4v1hDmud_-qPwBKSc1N502qm4I'),

    /*
    |--------------------------------------------------------------------------
    | Default Model
    |--------------------------------------------------------------------------
    |
    | The default model to use when no model is explicitly specified.
    | Examples: "gemini-pro", "gemini-1.5-pr
    o", "gemini-2.0-flash"
    |
    */

    'model' => env('GEMINI_MODEL', 'gemini-2.0-flash'),

];
