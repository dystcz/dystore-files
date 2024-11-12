<?php

namespace Modules\DystoreFiles\Domain\Files\JsonApi\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Config;

class UploadFileRequest extends FormRequest
{
    /**
     * Get the validation rules for the resource.
     */
    public function rules(): array
    {
        return [
            Config::get('filepond.input_name') => [
                'required',
                'file',
            ],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            //
        ];
    }
}
