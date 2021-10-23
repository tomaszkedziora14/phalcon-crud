<?php


use Phalcon\Mvc\Model;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;

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

        $validator->add('name', new PresenceOf(array(
            'message' => 'The name is required'
        )));

        $validator->add('last_name', new PresenceOf(array(
            'message' => 'The last name is required'
        )));

        $validator->add('email', new Email(array(
            'message' => 'The e-mail is not valid'
        )));

        return $this->validate($validator);
    }
}
