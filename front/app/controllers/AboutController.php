<?php

use Phalcon\Tag as Tag,
    Phalcon\Mvc\View;

class NewsController extends ControllerBase
{
    public function initialize()
    {
        //$this->view->setTemplateAfter('admin');
        $this->view->setMainView('index');
        $this->view->setLayout('front');

        Tag::setTitle('前台');
        //parent::initialize();
    }

    public function indexAction()
    {
        Tag::setTitle("黄家医圈");

        $cat = $this->request->getQuery('cat');
        $this->view->cat = $cat?$cat:'';
        //echo $cat;
        if(!$cat){
            /*$posts = WpPosts::find(array(
                "post_status = 'publish' and post_type = 'post'"
            ));
            $this->view->posts = $posts;*/

            /*$posts = WpTermRelationships::find(array(
                "term_taxonomy_id=:term_taxonomy_id:",
                "bind" => array("term_taxonomy_id" => 1)
            ));*/

            $posts = WpTermRelationships::find();
            $currentPage = $this->request->getQuery('page','int');
            $paginator = new \Phalcon\Paginator\Adapter\Model(
                array(
                    "data" => $posts,
                    "limit"=> 10,
                    "page" => $currentPage
                )
            );

            $this->view->posts = $paginator->getPaginate();

            //$this->view->posts = $posts;
        }else{
            $cat = WpTermTaxonomy::findFirst(array(
                "term_id=:term_id:",
                "bind" => array("term_id"=>$cat)
            ));
            //echo $cat->term_taxonomy_id;

            /*$posts = WpPosts::find(array(
                "post_status = 'publish' and post_type = 'post' and"
            ));*/
            $posts = WpTermRelationships::find(array(
                "term_taxonomy_id=:term_taxonomy_id:",
                "bind" => array("term_taxonomy_id" => $cat->term_taxonomy_id)
            ));
            //$posts = $cat->WpTermRelationships->WpPosts;
            //$posts = $p->WpPosts;

            /*foreach($posts as $ps){
                echo $ps->object_id.'----';
                //if(!isset($ps->WpPosts->ID))break;
                echo $ps->WpPosts->ID.'--<br/>--';

            }*/
            //echo count($posts);
            $auth = $this->session->get('auth');
            //var_dump($auth);

            //$currentPage = (int) $_GET["page"];
            $currentPage = $this->request->getQuery('page','int');
            $paginator = new \Phalcon\Paginator\Adapter\Model(
                array(
                    "data" => $posts,
                    "limit"=> 5,
                    "page" => $currentPage
                )
            );

            $this->view->posts = $paginator->getPaginate();

        }



    }

    public function infoAction($id='')
    {
        Tag::setTitle("黄家医圈");
        //echo 'aaa';
        $cat = $this->request->getQuery('cat');
        echo $cat;
        $posts = WpPosts::findFirst($id);
        $this->view->posts = $posts;
        $auth = $this->session->get('auth');
        //var_dump($auth);
        $this->view->auth = $auth;
        $this->view->user = $posts->WpUsers->user_nicename;

    }

    public function tmpAction()
    {
        Tag::setTitle("黄家医圈");
        echo 'aaa';
        $posts = WpPosts::findFirst(1);
        /*foreach($posts->WpUsers as $psot){
            echo $psot->user_nicename;
        }*/
        echo $posts->WpUsers->user_nicename;
        //echo $users->WpUsermeta->count();


    }

}

