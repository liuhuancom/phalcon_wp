<?php

use Phalcon\Tag as Tag;
use Phalcon\Mvc\Model\Query as Query;

class LookingController extends ControllerBase
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

    //显示文章
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

        /*$auth = $this->session->get('auth');
        var_dump($auth);*/

        $post_status = $this->request->getQuery('post_status');
        echo $post_status;
        if($post_status == 'publish'){
            //$posts = WpPosts::find("post_status='publish' and post_type='post'");
            $posts = WpPosts::find(array(
                "post_status='publish' and post_type='post'",
                "order" => "post_date desc"
            ));
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
        }else{
            $posts = WpPosts::find(array(
                "post_status='publish' and post_type='post'",
                "order" => "post_date desc"
            ));
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

    //添加文章
    public function addAction()
    {
        Tag::appendTitle(' | 添加文章 ');
        $this->assets->collection('new_post')
            ->addJs('js/colorpicker.js')
            ->addJs('ckeditor/ckeditor.js')
            ->addJs('ckeditor/adapters/jquery.js');


        Tag::setDefault('post_title', '');
        Tag::setDefault('post_content', 'phalcon');
        Tag::setDefault('setde','ffff');
        //文章的分类
        $this->view->parents = $this->categoryParent();

        //分类目录
        //$taxonomy = WpTermTaxonomy::find();

        //echo 'a';
        //echo Tag::friendlyTitle('These are big important news', '-');
    }

    //添加新文章保存
    public function savenewAction()
    {
        if($this->request->isPost()) {
            $title = $this->request->getPost('post_title');
            $content = $this->request->getPost('post_content');
            //文章分类单选
            $parent = $this->request->getPost('parent');
            $term_taxonomy_id = WpTermTaxonomy::findFirst(array(
                "term_id=:term_id: and taxonomy = 'category'",
                "bind" => array("term_id"=>$parent)
            ));

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

            $post_category = new WpTermRelationships();
            $post_category->object_id = $newpost->ID;
            $post_category->term_taxonomy_id = $term_taxonomy_id->term_taxonomy_id;
            $post_category->term_order = 0;

            if($post_category->save() == false) {
                $this->flash->error('添加分类失败!');
                foreach ($post_category->getMessages() as $message) {
                    echo $message, "\n";
                }
                //$this->forward('post/new');
            }




            $this->flash->success('添加成功');
            $this->forward('post/add');
        }

        //$this->forward('post/new');
        $this->response->redirect('post/add');

    }

    //编辑
    public function editAction($id)
    {
        Tag::appendTitle(' | 编辑文章 ');
        $this->assets->collection('new_post')
            ->addJs('js/colorpicker.js')
            ->addJs('ckeditor/ckeditor.js')
            ->addJs('ckeditor/adapters/jquery.js');


        $action = $this->request->getQuery("action","alphanum",null);
        echo $action;
        //var_dump($str);


        if (!$this->request->isPost()) {

            //放到回收站
            if( $action=='trash'){
                $post = WpPosts::findFirst($id);
                if (!$post) {
                    $this->flash->error("没有这个文章");
                    return $this->dispatcher->forward(array(
                        "controller" => "post",
                        "action" => "show"
                    ));
                }
                $post->post_status = 'trash';
                if(!$post->update()){
                    foreach ($post->getMessages() as $message) {
                        $this->flash->error($message);
                    }

                }
                $this->flash->success("已移动1篇文章到回收站。");


                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "show"
                ));
            }

            //还原
            if( $action=='untrash'){
                $post = WpPosts::findFirst($id);
                if (!$post) {
                    $this->flash->error("没有这个文章");
                    return $this->dispatcher->forward(array(
                        "controller" => "post",
                        "action" => "show"
                    ));
                }
                $post->post_status = 'publish';
                if(!$post->update()){
                    foreach ($post->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                }
                //$this->flash->success("1篇文章已从回收站中恢复。");
                $this->response->redirect("post/show?post_status=trash&post_type=post");

            }

            //永久删除
            if( $action=='delete'){

                $post = WpPosts::findFirst($id);
                if (!$post) {
                    $this->flash->error("没有这个文章");
                    return $this->dispatcher->forward(array(
                        "controller" => "post",
                        "action" => "show"
                    ));
                }

                if(!$post->delete()){
                    foreach ($post->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                }
                //$this->flash->success("已永久删除1篇文章。");
                $this->response->redirect("post/show?post_status=trash&post_type=post");

            }

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
            $this->tag->setDefault("parent", $post->post_content);
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

        //分类目录
        //$taxonomy = WpTermTaxonomy::find();


        //echo 'a';
        //echo Tag::friendlyTitle('These are big important news', '-');
    }

    public function categoryAction()
    {
        Tag::appendTitle(' | 分类目录 ');

        //echo 'a';
        //echo Tag::friendlyTitle('These are big important news', '-');

        $taxonomys = WpTermTaxonomy::find(array(
            "taxonomy= 'category'"
        ));
        foreach($taxonomys as $taxonomy){
            echo $taxonomy->WpTerms->name."--".$taxonomy->WpTerms->slug."<br/>";
        }




    }


    //文章标签
    public function tagAction($t="")
    {
        Tag::appendTitle(' | 标签 ');

        echo 'a';
        echo Tag::friendlyTitle('These are big important news', '-');
        echo $t."<hr/>";
        $action = $this->request->getQuery("action","alphanum",null);
        echo  $action;
        //tag删除
        if( $action == 'delete'){

            $tags = WpTerms::findFirst($t);
            $tagtax = WpTermTaxonomy::findFirst(array(
                "term_id=:term_id:",
                "bind" => array("term_id"=> $t)
            ));
            if (!$tags) {
                $this->flash->error("没有这个标签");
                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "tag"
                ));
            }

            if(!$tagtax->delete()){
                foreach ($tags->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }

            if(!$tags->delete()){
                foreach ($tags->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
            $this->flash->success("成功删除标签 "."(".$tags->name.")");
            //$this->response->redirect("post/show?post_status=trash&post_type=post");
            //$this->forward('post/tags');

        }


        $tags = WpTermTaxonomy::find(array("taxonomy='post_tag'"));
        $this->view->setVar('tags', $tags);
        //$this->view->tags = $tags;
        /*foreach($tags as $tag){
            echo $tag->WpTerms->name.'<br/>';
        }*/




    }

    //添加文章标签
    public function tagaddAction()
    {
        Tag::appendTitle(' | 标签 ');

        echo 'a';
        echo Tag::friendlyTitle('These are big important news', '-');

        if($this->request->isPost()) {
            $tag_name = $this->request->getPost('tag_name');
            $tag_slug = $this->request->getPost('tag_slug');
            $tag_desc = $this->request->getPost('tag_desc');

            $newtag = new WpTerms();
            $newtag->name = $tag_name ? $tag_name : new Phalcon\Db\RawValue("''");
            $newtag->slug = $tag_slug ? $tag_slug : new Phalcon\Db\RawValue("''");
            $newtag->term_group = 0;

            if($newtag->save() == false){
                $this->flash->error('添加标签失败');
                foreach($newtag->getMessages() as $message){
                    echo $message, "\n";
                }
            }

            $term_id = WpTerms::findFirst(array(
                "name=:name:",
                "bind" =>array("name" => $tag_name)
            ));
            //echo $term_id->term_id;

            $newtags = new WpTermTaxonomy();
            $newtags->description = $tag_desc ? $tag_desc : new Phalcon\Db\RawValue("''");
            $newtags->taxonomy = 'post_tag';
            $newtags->parent = 0;
            $newtags->count = 0;
            $newtags->term_id = $term_id->term_id;

            if($newtags->save() == false) {
                $this->flash->error('添加标签失败!');
                foreach ($newtags->getMessages() as $message) {
                    echo $message, "\n";
                }
                //$this->forward('post/tag');
            }


            //$this->flash->success('标签添加成功');
            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "tag"
            ));
        }

        return $this->dispatcher->forward(array(
            "controller" => "post",
            "action" => "show"
        ));



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

    public function phqlAction()
    {
        /*$phql = "SELECT * FROM WpPosts";
        $query = new Query($phql);
        $posts = $query->execute();*/
        $phql = "SELECT * FROM WpTermRelationships as wtr join WpTermTaxonomy as wtt where object_id = 60";
        $posts = $this->modelsManager->executeQuery($phql);
        foreach($posts as $post){
            //echo $post->WpTermRelationships->WpTermTaxonomy->taxonomy.'<br/>';
            echo $post->wtr->term_taxonomy.'<br/>';
        }


    }

    public function gettagAction($id)
    {
        $posts = WpPosts::findFirst($id);
        //$tag = $posts->WpTermRelationships->getWpTermTaxonomy("taxonomy='post_tag'");
        foreach($posts->WpTermRelationships as $tag){

            echo $tag->getWpTermTaxonomy("taxonomy='post_tag'")->name;
        }

    }

    public function tmppostAction($id)
    {

        //$posts = WpTermTaxonomy::findFirst($id);

        $post = WpTermRelationships::find(array("term_taxonomy_id=$id"));
        foreach($post as $p){
            echo $p->WpPosts->post_title.'<br>';
        }
        //WpTermRelationships::
        //WpTermTaxonomy::
        //WpTerms::
        //$pn = $posts->WpTermRelationships->WpTermTaxonomy;
        //echo
        /*$en = base64_encode($id);
        $de = base64_decode($en);
        echo $en.'<hr>';
        echo $de;*/
        //var_dump($posts->WpTerms->name);



    }

    //以下为内部方法
    //全部的分类
    public function categoryParent(){
        $parents = WpTermTaxonomy::find(array("taxonomy='category'","order"=>"parent"));
        $parentsarr = [];
        foreach($parents as $parent){
            //echo $parent->WpTerms->name;
            $a = $parent->description?'&nbsp&nbsp->&nbsp':'';
            $parentsarr[$parent->WpTerms->term_id] = $parent->WpTerms->name.'('.$parent->WpTerms->slug.')'.$a.$parent->description;
        }
        return $parentsarr;

    }





}
