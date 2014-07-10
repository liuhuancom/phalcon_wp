<?php

use Phalcon\Mvc\Model\Validator\Email as EmailValidator;
use Phalcon\Mvc\Model\Validator\Uniqueness as UniquenessValidator;

class WpUsers extends \Phalcon\Mvc\Model
{

    public function validation()
    {
        $this->validate(new EmailValidator(array(
            'field' => 'user_email'
        )));
        $this->validate(new UniquenessValidator(array(
            'field' => 'user_email',
            'message' => 'Sorry, The email was registered by another user'
        )));
        $this->validate(new UniquenessValidator(array(
            'field' => 'user_login',
            'message' => 'Sorry, That username is already taken'
        )));
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }



    /**
     *
     * @var integer
     */
    public $ID;

    /**
     *
     * @var string
     */
    public $user_login;

    /**
     *
     * @var string
     */
    public $user_pass;

    /**
     *
     * @var string
     */
    public $user_nicename;

    /**
     *
     * @var string
     */
    public $user_email;

    /**
     *
     * @var string
     */
    public $user_url;

    /**
     *
     * @var string
     */
    public $user_registered;

    /**
     *
     * @var string
     */
    public $user_activation_key;

    /**
     *
     * @var integer
     */
    public $user_status;

    /**
     *
     * @var string
     */
    public $display_name;

}
