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

        $posts = WpPosts::find(array(
            "post_status = 'publish' and post_type = 'post'"
        ));
        $this->view->posts = $posts;

    }

    public function infoAction($id='')
    {
        Tag::setTitle("黄家医圈");
        //echo 'aaa';
        $cat = $this->request->getQuery('cat');
        echo $cat;
        $posts = WpPosts::findFirst($id);
        $this->view->posts = $posts;

    }

    public function tmpAction()
    {
        Tag::setTitle("黄家医圈");
        echo 'aaa';

    }

}

