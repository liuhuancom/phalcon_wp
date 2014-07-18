<?php

use Phalcon\Tag as Tag;

class PostController extends ControllerBase
{
    public function initialize()
    {
        //$this->view->setTemplateAfter('admin');
        $this->view->setMainView('katniss');
        $this->view->setLayout('admin');

        //Tag::prependTitle('papp');
        Tag::setTitle(' 文章管理');
        //Tag::appendTitle(' aasaa ');

        //Tag::setTitleSeparator('-');
        parent::initialize();
    }

    public function indexAction()
    {
        //Tag::setTitle(' 后台管理');
        Tag::appendTitle(' | 所有文章 ');
        //Tag::prependTitle('papp');
        //$this->view->pick("admin/admin");


    }

    public function showAction()
    {

        Tag::appendTitle(' | 所有文章 ');
        $this->assets->collection('post_show')
            ->addJs('js/jquery.dataTables.min.js')
            ->addJs('js/jquery-migrate-1.1.1.min.js')
            ->addJs('js/jquery.uniform.min.js');

        $posts = WpPosts::find("post_status='publish'");
        //$posts = WpPosts::findFirst();
        $this->view->posts = $posts;
        //echo var_dump($posts);







        echo 'a';
    }

    public function newAction()
    {
        Tag::appendTitle(' | 写文章 ');
        $this->assets->collection('new_post')
                     ->addJs('js/colorpicker.js')
                     ->addJs('ckeditor/ckeditor.js')
                     ->addJs('ckeditor/adapters/jquery.js');


        echo 'a';
        echo Tag::friendlyTitle('These are big important news', '-');
    }

    public function new2Action()
    {
        Tag::appendTitle(' | 写文章 ');
        $this->assets->collection('new_post')
            ->addJs('js/colorpicker.js')
            ->addJs('ckeditor/ckeditor.js')
            ->addJs('ckeditor/adapters/jquery.js');


        echo 'a';
        echo Tag::friendlyTitle('These are big important news', '-');
    }

    public function categoryAction()
    {
        Tag::appendTitle(' | 分类目录 ');

        echo 'a';
        echo Tag::friendlyTitle('These are big important news', '-');
    }

    public function tagAction($a)
    {
        Tag::appendTitle(' | 标签 ');

        echo 'a';
        echo Tag::friendlyTitle('These are big important news', '-');
        echo $a;
    }

    public function fileAction()
    {
        //Tag::appendTitle(' | 标签 ');
        $this->view->disable();

        $type = $this->request->get('type');

        if($type == 'img'){
            $fn = $this->request->get('CKEditorFuncNum');
            $message = $fn;
            if($this->request->hasFiles() == true){
                foreach($this->request->getUploadedFiles() as $file){
                    //echo $file->getName();
                    $fileurl = 'http://localhost/php/phalcon/invowp2.0/git/back/public/files/img/'.$file->getName();

                    $out = '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction('.$fn.', \''.$fileurl.'\', \''.$message.'\');</script>';
                    echo $out;
                    $file->moveTo('files/img/'.$file->getName());
                    echo 'ok';
                }
            }

        }
    }

    //写文章
    public function newpostAction()
    {
        echo 'ok';
        if($this->request->isPost()) {
            $title = $this->request->getPost('post_title');
            $content = $this->request->getPost('post_content');

            $newpost = new WpPosts();
            $newpost->post_title = $title;
            $newpost->post_content = $content;
            $newpost->post_content_filtered = 'a';
            //$newpost->post_date = '2014-06-27 18:36:58.000000';
            $newpost->post_date = date('Y-m-d H:i:s');
            $newpost->post_date_gmt = date('Y-m-d H:i:s');
            $newpost->post_excerpt = ' ';

            $newpost->post_modified = date('Y-m-d H:i:s');
            $newpost->post_modified_gmt = date('Y-m-d H:i:s');
            $newpost->post_name = $title;
            $newpost->post_password = new Phalcon\Db\RawValue("''");
            $newpost->post_status = 'publish';
            $newpost->comment_count = 0;
            $newpost->comment_status = 'open';  //open
            $newpost->post_author = '1';        //1
            $newpost->ping_status = 'open';
            $newpost->to_ping = ' ';
            $newpost->pinged = ' ';
            $newpost->post_content_filtered = ' ';
            $newpost->post_parent = '0';
            $newpost->guid = 'aa';
            $newpost->menu_order = '0';         //0
            $newpost->post_type = 'post';
            $newpost->post_mime_type = ' ';




            if($newpost->save() == false) {
                $this->flash->success('添加失败!');
                foreach ($newpost->getMessages() as $message) {
                    echo $message, "\n";
                }
                //$this->forward('post/new');
            }

            //$this->forward('post/index');
        }

        //$this->forward('post/new');

    }

    public function tmppostAction()
    {

        if($this->request->isPost()) {
            $title = $this->request->getPost('post_title');
            $content = $this->request->getPost('post_content');

            $newpost = new Tmp();
            //$newpost->name = $title;
            $newpost->name = '';
            $newpost->info = $content;

            if($newpost->create() == false) {
                $this->flash->success('添加失败!');
                foreach ($newpost->getMessages() as $message) {
                    echo $message, "\n";
                }
                //$this->forward('post/new');
                //echo 'no';
            }

            //$this->forward('post/index');
        }

        //$this->forward('post/new');

    }





}
