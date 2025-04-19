<?php

namespace Api;

use Validation\Validator;
use Response\ApiResponse;

class FormHandler
{
    public function handleForm(array $data)
    {
        $validator = new Validator();
        $response = new ApiResponse();

        // Validate required fields
        if (!$validator->validateRequiredFields($data, ['name', 'email'])) {
            return $response->error('Required fields are missing.');
        }

        // Validate email
        if (!$validator->validateEmail($data['email'])) {
            return $response->error('Invalid email format.');
        }

        // If all validations pass
        return $response->success('Form data is valid.');
    }
}