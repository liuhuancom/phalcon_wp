<?php

class WpTerms extends \Phalcon\Mvc\Model
{

    public function initialize()
    {
        //$this->belongsTo("term_id", "WpTerms", "term_id");
        $this->hasMany("term_id", "WpTermTaxonomy", "term_id");
    }

    /**
     *
     * @var integer
     */
    public $term_id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $slug;

    /**
     *
     * @var integer
     */
    public $term_group;

}
