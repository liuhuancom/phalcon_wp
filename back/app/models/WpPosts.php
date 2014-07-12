<?php

class WpPosts extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $ID;

    /**
     *
     * @var integer
     */
    public $post_author;

    /**
     *
     * @var string
     */
    public $post_date;

    /**
     *
     * @var string
     */
    public $post_date_gmt;

    /**
     *
     * @var string
     */
    public $post_content;

    /**
     *
     * @var string
     */
    public $post_title;

    /**
     *
     * @var string
     */
    public $post_excerpt;

    /**
     *
     * @var string
     */
    public $post_status;

    /**
     *
     * @var string
     */
    public $comment_status;

    /**
     *
     * @var string
     */
    public $ping_status;

    /**
     *
     * @var string
     */
    public $post_password;

    /**
     *
     * @var string
     */
    public $post_name;

    /**
     *
     * @var string
     */
    public $to_ping;

    /**
     *
     * @var string
     */
    public $pinged;

    /**
     *
     * @var string
     */
    public $post_modified;

    /**
     *
     * @var string
     */
    public $post_modified_gmt;

    /**
     *
     * @var string
     */
    public $post_content_filtered;

    /**
     *
     * @var integer
     */
    public $post_parent;

    /**
     *
     * @var string
     */
    public $guid;

    /**
     *
     * @var integer
     */
    public $menu_order;

    /**
     *
     * @var string
     */
    public $post_type;

    /**
     *
     * @var string
     */
    public $post_mime_type;

    /**
     *
     * @var integer
     */
    public $comment_count;

}
