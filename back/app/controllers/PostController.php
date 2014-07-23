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

    //edit.php?post_status=trash&post_type=post
    public function showAction()
    {

        Tag::appendTitle(' | 所有文章 ');
        $this->assets->collection('post_show')
            ->addJs('js/jquery.dataTables.min.js')
            ->addJs('js/jquery-migrate-1.1.1.min.js')
            ->addJs('js/jquery.uniform.min.js');
        $this->assets->collection('post_show')
             ->addCss('css/post_show.css');

        $post_status = $this->request->getQuery('post_status');
        echo $post_status;
        if($post_status == 'publish'){
            $posts = WpPosts::find("post_status='publish' and post_type='post'");
            //$posts = WpPosts::findFirst();
            $this->view->posts = $posts;
        }elseif($post_status == 'trash'){
            $posts = WpPosts::find("post_status='trash' and post_type='post'");
            //$posts = WpPosts::findFirst();
            $this->view->posts = $posts;
            $this->view->action = 'trash';
        }elseif($post_status == 'private'){
            $posts = WpPosts::find("post_status='private' and post_type='post'");
            //$posts = WpPosts::findFirst();
            $this->view->posts = $posts;
        }


        /*$posts = WpPosts::find("post_status='publish' and post_type='post'");
        //$posts = WpPosts::findFirst();
        $this->view->posts = $posts;*/
        //echo var_dump($posts);
        echo 'aa';
        $publish = WpPosts::count("post_status = 'publish'");
        $trash = WpPosts::count("post_status = 'trash'");
        $private = WpPosts::count("post_status = 'private'");
        $this->view->setVar('publish', $publish);
        $this->view->setVar('trash',$trash);
        $this->view->setVar('private',$private);

        echo $trash;



    }

    //编辑
    public function editAction($id)
    {
        Tag::appendTitle(' | 编辑文章 ');
        $this->assets->collection('new_post')
            ->addJs('js/colorpicker.js')
            ->addJs('ckeditor/ckeditor.js')
            ->addJs('ckeditor/adapters/jquery.js');

        $aa = $this->request->getQuery("aa","int");
        echo $aa;

        if (!$this->request->isPost()) {

            $post = WpPosts::findFirst($id);
            if (!$post) {
                $this->flash->error("没有这个文章");

                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "show"
                ));
            }

            //$this->view->id = $post->ID;
            //$this->view->id = 12;

            $this->tag->setDefault("id", $post->ID);
            $this->tag->setDefault("post_title", $post->post_title);
            $this->tag->setDefault("post_content", $post->post_content);
            //$this->tag->setDefault("year", $post->year);

        }

    }

    //编辑后保存
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "show"
            ));
        }

        $id = $this->request->getPost("id");

        $post = WpPosts::findFirst($id);
        if (!$post) {
            $this->flash->error("robot does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "show"
            ));
        }

        $post->post_title = $this->request->getPost("post_title");
        $post->post_content = $this->request->getPost("post_content");
        //$post->year = $this->request->getPost("year");
        //$post->post_password = new Phalcon\Db\RawValue("''");
        if($post->post_password == ''){
            $post->post_password = new Phalcon\Db\RawValue("''");
        }
        if($post->post_excerpt == ''){
            $post->post_excerpt = new Phalcon\Db\RawValue("''");
        }
        if($post->to_ping  == ''){
            $post->to_ping  = new Phalcon\Db\RawValue("''");
        }
        if($post->pinged == ''){
            $post->pinged = new Phalcon\Db\RawValue("''");
        }
        if($post->post_content_filtered  == ''){
            $post->post_content_filtered  = new Phalcon\Db\RawValue("''");
        }
        if($post->post_mime_type == ''){
            $post->post_mime_type = new Phalcon\Db\RawValue("''");
        }







        if (!$post->update()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "edit",
                "params" => array($post->ID)
            ));
        }

        $this->flash->success("robot was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "post",
            "action" => "show"
        ));

    }

    //文章查看
    public function seeAction($id)
    {
        $this->view->setLayout('');
        $this->view->setMainView('');
        Tag::appendTitle(' | 查看文章');


        if (!$this->request->isPost()) {

            $post = WpPosts::findFirst($id);
            if (!$post) {
                $this->flash->error("没有这个文章");

                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "show"
                ));
            }

            //echo $post->post_title;
            foreach($post as $key=>$value){
                echo $key.'=>'.$value.'<hr/>';
            }



        }


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


        Tag::setDefault('post_title', 'demo@phalconphp.com');
        Tag::setDefault('post_content', 'phalcon');
        Tag::setDefault('setde','ffff');

        //echo 'a';
        //echo Tag::friendlyTitle('These are big important news', '-');
    }

    public function categoryAction()
    {
        Tag::appendTitle(' | 分类目录 ');

        //echo 'a';
        //echo Tag::friendlyTitle('These are big important news', '-');
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

    //提交的文章
    public function newpostAction()
    {
        //echo 'ok';

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
            $newpost->post_excerpt = new Phalcon\Db\RawValue("''");

            $newpost->post_modified = date('Y-m-d H:i:s');
            $newpost->post_modified_gmt = date('Y-m-d H:i:s');
            $newpost->post_name = $title;
            $newpost->post_password = new Phalcon\Db\RawValue("''");
            $newpost->post_status = 'publish';
            $newpost->comment_count = 0;
            $newpost->comment_status = 'open';  //open
            $newpost->post_author = '1';        //1
            $newpost->ping_status = 'open';
            $newpost->to_ping = new Phalcon\Db\RawValue("''");
            $newpost->pinged = new Phalcon\Db\RawValue("''");
            $newpost->post_content_filtered = new Phalcon\Db\RawValue("''");
            $newpost->post_parent = '0';
            $newpost->guid = 'aa';
            $newpost->menu_order = '0';         //0
            $newpost->post_type = 'post';
            $newpost->post_mime_type = new Phalcon\Db\RawValue("''");





            if($newpost->save() == false) {
                $this->flash->error('添加失败!');
                foreach ($newpost->getMessages() as $message) {
                    echo $message, "\n";
                }
                //$this->forward('post/new');
            }

            if(!$this->request->getPost('post_category')){
                $post_category = new WpTermRelationships();
                $post_category->object_id = $newpost->ID;
                $post_category->term_taxonomy_id = 1;
                $post_category->term_order = 0;

                $post_category->save();
            }


            $this->flash->success('添加成功');
            $this->forward('post/new2');
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
