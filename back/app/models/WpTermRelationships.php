<?php

class WpTermRelationships extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $object_id;

    /**
     *
     * @var integer
     */
    public $term_taxonomy_id;

    /**
     *
     * @var integer
     */
    public $term_order;

}
