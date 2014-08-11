<?php

use Phalcon\Tag as Tag,
    Phalcon\Mvc\View;

class IndexController extends ControllerBase
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

    }

    public function tmpAction()
    {
        Tag::setTitle("黄家医圈");
        echo 'aaa';

    }

}

