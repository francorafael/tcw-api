<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PostValidator.
 *
 * @package namespace App\Validators;
 */
class PostValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'title'              =>  'required|min:3|max:255',
            'content'           =>  'required',
            'code'              =>  'required|numeric|min:1'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'title'             =>  'required|min:3|max:255',
            'content'           =>  'required',
            'code'              =>  'required|numeric|min:1'
        ]
    ];
    
    protected $messages = [
        'title.required'            => 'O título é obrigatório.',
        'title.min'                 => 'O campo título deve ter pelo menos :min caracteres.',
        'title.max'                 => 'O campo título deve ter no máximo :max caracteres.',
        'content.required'          => 'O conteudo é obrigatório.',
        'code.required'          => 'O código de usuário é obrigatório.'
    ];
}
