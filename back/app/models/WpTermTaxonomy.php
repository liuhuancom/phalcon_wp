<?php

class WpTermTaxonomy extends \Phalcon\Mvc\Model
{

    public function initialize()
    {
        $this->belongsTo("term_id", "WpTerms", "term_id");
        $this->hasMany("term_taxonomy_id", "WpTermRelationships", "term_taxonomy_id");
    }


    /**
     *
     * @var integer
     */
    public $term_taxonomy_id;

    /**
     *
     * @var integer
     */
    public $term_id;

    /**
     *
     * @var string
     */
    public $taxonomy;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var integer
     */
    public $parent;

    /**
     *
     * @var integer
     */
    public $count;

}
