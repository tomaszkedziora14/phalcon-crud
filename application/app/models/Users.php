<?php


use Phalcon\Mvc\Model;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;
use Phalcon\Validation\Validator\Email;

class Users extends Model
{
    public $id;
    public $name;
    public $last_name;
    public $email;

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new Uniqueness(
                [
                    'message' => 'The customer email must be unique',
                ]
            )
        );

        $validator->add('email', new Email(array(
            'message' => 'The e-mail is not valid'
        )));

        return $this->validate($validator);
    }
}
