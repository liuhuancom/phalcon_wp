<?php

use Phalcon\Tag as Tag;

class DashboardController extends ControllerBase
{
    public function initialize()
    {
        //$this->view->setTemplateAfter('admin');
        $this->view->setMainView('katniss');
        $this->view->setLayout('admin');

        Tag::setTitle('后台管理');
        parent::initialize();
    }

    public function indexAction()
    {
        //$this->view->pick("admin/admin");
        $time = time();
        $date = date('Y-m-d h:i a l');
        $this->view->setVar("date",$date);

    }

    public function indexaAction()
    {
        $this->view->pick("admin/admin");
        echo 'a';
    }





}
