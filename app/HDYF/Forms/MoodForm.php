<?php namespace HDYF\Forms;

use Laracasts\Validation\FormValidator;

class MoodForm extends FormValidator {

    protected $rules = [
        'type' => 'required',
    ];

} 