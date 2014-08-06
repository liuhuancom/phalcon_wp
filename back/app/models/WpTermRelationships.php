<?php

class WpTermRelationships extends \Phalcon\Mvc\Model
{

    public function initialize()
    {
        //wp_posts
        $this->belongsTo("object_id", "WpPosts", "ID");
        //wp_term_taxonomy
        $this->belongsTo("term_taxonomy_id", "WpTermTaxonomy", "term_taxonomy_id");
        //wp_link
        //$this->belongsTo("object_id", "WpLink", "ID");

    }

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
