<?php

class WpUsermeta extends \Phalcon\Mvc\Model
{

    public function initialize()
    {
        $this->belongsTo("user_id","WpUsers","ID");

    }

    /**
     *
     * @var integer
     */
    public $umeta_id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $meta_key;

    /**
     *
     * @var string
     */
    public $meta_value;

}
