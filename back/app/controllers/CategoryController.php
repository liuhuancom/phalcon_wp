<?php

use Phalcon\Tag as Tag;

class CategoryController extends ControllerBase
{
    public function initialize()
    {
        //$this->view->setTemplateAfter('admin');
        $this->view->setMainView('katniss');
        $this->view->setLayout('admin');

        //Tag::prependTitle('papp');
        Tag::setTitle(' 分类管理');
        //Tag::appendTitle(' aasaa ');

        //Tag::setTitleSeparator('-');
        parent::initialize();
    }

    public function indexAction()
    {
        //Tag::setTitle(' 后台管理');
        Tag::appendTitle(' | 所有分类 ');
        //Tag::prependTitle('papp');
        //$this->view->pick("admin/admin");
        $this->forward("category/show");


    }

    //显示文章
    //edit.php?post_status=trash&post_type=post
    public function showAction()
    {

        Tag::appendTitle(' | 所有分类 ');
        $this->assets->collection('category_show')
            ->addJs('js/jquery.dataTables.min.js')
            ->addJs('js/jquery-migrate-1.1.1.min.js')
            ->addJs('js/jquery.uniform.min.js');
        $this->assets->collection('category_show')
             ->addCss('css/post_show.css');

        //echo Tag::friendlyTitle('These are big important news', '-');

        //全部的分类
        $categorys = WpTermTaxonomy::find(array("taxonomy='category'"));
        $this->view->setVar('categorys', $categorys);
        //分类父级
        $parents = WpTermTaxonomy::find(array("taxonomy='category'","order"=>"parent"));
        $parentsarr = [];
        foreach($parents as $parent){
            //echo $parent->WpTerms->name;
            $a = $parent->description?'&nbsp&nbsp->&nbsp':'';
            $parentsarr[$parent->WpTerms->term_id] = $parent->WpTerms->name.'('.$parent->WpTerms->slug.')'.$a.$parent->description;
        }
        //$parent = $parents->WpTerms->name;
        //var_dump($parentsarr);
        //$this->view->parentsarrs = $parentsarr;
        $this->view->parentsarrs = $this->categoryParent();
        $this->view->parents =$parents;




        $term = WpTerms::find("term_group = 0");
        $this->view->term = $term;
    }

    //添加标签
    public function addAction()
    {
        Tag::appendTitle(' | 添加分类 ');

        echo 'a';
        echo Tag::friendlyTitle('These are big important news', '-');

        if($this->request->isPost()) {
            $tag_name = $this->request->getPost('tag_name');
            $tag_slug = $this->request->getPost('tag_slug');
            $tag_desc = $this->request->getPost('tag_desc');
            $tag_parent = $this->request->getPost('parent');

            $newtag = new WpTerms();
            $newtag->name = $tag_name ? $tag_name : new Phalcon\Db\RawValue("''");
            $newtag->slug = $tag_slug ? $tag_slug : new Phalcon\Db\RawValue("''");
            $newtag->term_group = 0;

            if($newtag->save() == false){
                $this->flash->error('添加分类失败');
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
            $newtags->taxonomy = 'category';
            $newtags->parent = $tag_parent;
            $newtags->count = 0;
            $newtags->term_id = $term_id->term_id;

            if($newtags->save() == false) {
                $this->flash->error('添加分类失败!');
                foreach ($newtags->getMessages() as $message) {
                    echo $message, "\n";
                }
                //$this->forward('post/tag');
            }


            $this->flash->success('添加标签 '.$term_id->name.' 成功');
            return $this->dispatcher->forward(array(
                "controller" => "category",
                "action" => "show"
            ));
        }

        return $this->dispatcher->forward(array(
            "controller" => "category",
            "action" => "show"
        ));

    }

    //删除


    //编辑
    public function editAction($id)
    {
        Tag::appendTitle(' | 编辑分类 ');
        $this->assets->collection('category_edit')
            ->addJs('js/jquery.dataTables.min.js')
            ->addJs('js/jquery-migrate-1.1.1.min.js')
            ->addJs('js/jquery.uniform.min.js');
        $this->assets->collection('category_edit')
            ->addCss('css/post_show.css');

        $action = $this->request->getQuery("action","alphanum",null);
        //全部的分类
        $this->view->parentsarrs = $this->categoryParent();

        if (!$this->request->isPost()) {
            //编辑
            if( $action=='edit'){
                $tag = WpTerms::findFirst($id);
                //var_dump($tag);
                $tagtax = WpTermTaxonomy::findFirst(array(
                    "term_id=:term_id:",
                    "bind" => array("term_id"=>$tag->term_id)
                ));
                if (!$tag) {
                    $this->flash->error("没有这个分类");
                    return $this->dispatcher->forward(array(
                        "controller" => "category",
                        "action" => "show"
                    ));
                }
                //$this->flash->success("1篇文章已从回收站中恢复。");
                //$this->response->redirect("post/show?post_status=trash&post_type=post");
                //$this->forward('tag/show');
                $this->tag->setDefault("tag_name", $tag->name);
                $this->tag->setDefault("tag_slug", $tag->slug);
                $this->tag->setDefault("tag_desc", $tagtax->description);
                $this->tag->setDefault("term_id", $tag->term_id);
                $this->tag->setDefault("parent", $tagtax->parent);
                //echo "liu".$tagtax->description;
            }
            //删除标签
            if( $action=='delete'){

                $tags = WpTerms::findFirst($id);
                $tagtax = WpTermTaxonomy::findFirst(array(
                    "term_id=:term_id:",
                    "bind" => array("term_id"=> $id)
                ));
                if (!$tags) {
                    $this->flash->error("没有这个分类");
                    return $this->dispatcher->forward(array(
                        "controller" => "category",
                        "action" => "show"
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
                $this->flash->success("成功删除分类 "."(".$tags->name.")");
                //$this->response->redirect("post/show?post_status=trash&post_type=post");
                $this->forward('category/show');

            }
            //$this->view->id = $post->ID;
            //$this->view->id = 12;
            //$this->tag->setDefault("year", $post->year);
            //查询标签
            $tags = WpTermTaxonomy::find(array("taxonomy='category'"));
            $this->view->setVar('tags', $tags);
        }

    }
    //编辑后保存
    public function saveAction()
    {
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "category",
                "action" => "show"
            ));
        }

        $term_id = $this->request->getPost("term_id");
        $tag_name = $this->request->getPost("tag_name");
        $tag_slug = $this->request->getPost("tag_slug");
        $tag_desc = $this->request->getPost("tag_desc");
        $tag_parent = $this->request->getPost("parent");

        $tagtax = WpTermTaxonomy::findFirst(array(
            "term_id=:term_id:",
            "bind" => array("term_id"=>$term_id)
        ));
        //var_dump($tagtax);
        //echo $tagtax->taxonomy;
        $tag = WpTerms::findFirst($term_id);
        if (!$tag) {
            $this->flash->error("分类不存在 " . $tag_name);
            return $this->dispatcher->forward(array(
                "controller" => "category",
                "action" => "show"
            ));
        }

        $tag->name = $tag_name;
        $tag->slug = $tag_slug;
        $tagtax->description = $tag_desc?$tag_desc:new Phalcon\Db\RawValue("''");
        $tagtax->parent = $tag_parent;


        //$post->year = $this->request->getPost("year");
        //$post->post_password = new Phalcon\Db\RawValue("''");
        if ( !$tag->update() ) {

            foreach ($tag->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->error("跟新标签出错了");
            return $this->dispatcher->forward(array(
                "controller" => "category",
                "action" => "show"
            ));
        }
        if ( !$tagtax->update() ) {

            foreach ($tag->getMessages() as $message) {
                $this->flash->error($message);
            }
            $this->flash->error("跟新标签描述出错了");
            return $this->dispatcher->forward(array(
                "controller" => "category",
                "action" => "show"
            ));
        }


        $this->flash->success("修改成功");
        return $this->dispatcher->forward(array(
            "controller" => "category",
            "action" => "show"
        ));
        //return $this->response->redirect("tag/show");

    }
    //标签查看
    public function seeAction($id)
    {
        $this->view->setLayout('');
        $this->view->setMainView('');
        Tag::appendTitle(' | 查看标签');


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

    public function categoryParent(){
        $parents = WpTermTaxonomy::find(array("taxonomy='category'","order"=>"parent"));
        $parentsarr = [];
        foreach($parents as $parent){
            //echo $parent->WpTerms->name;
            $a = $parent->description?'&nbsp&nbsp->&nbsp':'';
            $parentsarr[$parent->WpTerms->term_id] = '('.$parent->term_id.')'.$parent->WpTerms->name.'('.$parent->WpTerms->slug.')'.$a.$parent->description;
        }
        return $parentsarr;

    }





}
