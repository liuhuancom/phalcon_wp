<?php

use Phalcon\Tag as Tag,
    Phalcon\Mvc\View;

class AdminController extends ControllerBase
{
    public function initialize()
    {
        //$this->view->setTemplateAfter('admin');
        $this->view->setMainView('katniss');
        $this->view->setLayout('admin');

        Tag::setTitle('Sign Up/Sign In');
        parent::initialize();
    }

    public function indexAction()
    {



        if (!$this->request->isPost()) {
            Tag::setDefault('email', 'demo@phalconphp.com');
            Tag::setDefault('password', 'phalcon');
        }
        echo 'a';
    }

    public function loginAction()
    {
        //$this->view->disable();
        //$this->view->setMainView('');
        //Tag::setTitle('Sign In');
        $this->view->setLayout('login');
        //$this->view->disableLevel(View::LEVEL_LAYOUT);
        if (!$this->request->isPost()) {
            Tag::setDefault('email', 'demo@phalconphp.com');
            Tag::setDefault('password', 'phalcon');
        }

        //$this->flash->success('Hello! Sign in to get you started!' );
        //$this->flashSession->success("Your information was stored correctly!");


        //echo 'a';
    }

    public function registerAction()
    {
        $request = $this->request;
        if ($request->isPost()) {

            $name = $request->getPost('name', array('string', 'striptags'));
            $username = $request->getPost('username', 'alphanum');
            $email = $request->getPost('email', 'email');
            $password = $request->getPost('password');
            $repeatPassword = $this->request->getPost('repeatPassword');

            if ($password != $repeatPassword) {
                $this->flash->error('Passwords are diferent');
                return false;
            }

            $user = new WpUsers();
            $user->user_login = $username;
            $user->user_pass = sha1($password);
            $user->user_nicename = $name;
            $user->user_email = $email;
            $user->user_registered = new Phalcon\Db\RawValue('now()');
            $user->user_status = 0;
            if ($user->save() == false) {
                foreach ($user->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                Tag::setDefault('email', '');
                Tag::setDefault('password', '');

                $this->flash->success('Thanks for sign-up, please log-in to start generating invoices');
                return $this->forward('admin/index');
            }
        }
    }

    /**
     * Register authenticated user into session data
     *
     * @param Users $user
     */
    private function _registerSession($user)
    {
        $this->session->set('auth', array(
            //'id' => $user->id,
            //'name' => $user->name
            'id' => $user->ID,
            'name' => $user->user_login
        ));
    }

    /**
     * This actions receive the input from the login form
     *
     */
    public function startAction()
    {
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email', 'email');

            $password = $this->request->getPost('password');
            $password = sha1($password);

            //$user = Users::findFirst("email='$email' AND password='$password' AND active='Y'");
            //wp的数据表
            $user = WpUsers::findFirst("user_email='$email' AND user_pass='$password' AND user_status=0");
            if ($user != false) {
                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->user_login.'<button type="button" class="close" data-dismiss="alert">×</button>');
                //return $this->forward('invoices/index');
                return $this->forward('dashboard/index');
            }

            $username = $this->request->getPost('email', 'alphanum');
            //$user = Users::findFirst("username='$username' AND password='$password' AND active='Y'");

            $user = WpUsers::findFirst("user_login='$username' AND user_pass='$password' AND user_status=0");
            if ($user != false) {
                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->name);
                //return $this->forward('invoices/index');
                return $this->forward('dashboard/index');
            }

            $this->flash->error('好像有哪里不对啊');
        }

        return $this->forward('admin/login');
    }

    /**
     * Finishes the active session redirecting to the index
     *
     * @return unknown
     */
    public function endAction()
    {
        $this->session->remove('auth');
        $this->flash->success('Goodbye!');
        return $this->forward('admin/login');
    }

    /**
     * 测试
     *
     */

    public function testAction()
    {
        $mod = WpUsers::findFirst(1);
        //var_dump($mod) ;
        echo $mod->user_login;
    }



}
