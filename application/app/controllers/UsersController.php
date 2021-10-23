<?php

use Phalcon\Mvc\Controller;

class UsersController extends Controller
{
    public function indexAction()
    {
        $this->view->users = Users::find();
    }

    public function newAction()
    {

    }

    public function editAction($id)
    {
        $user =  Users::findFirst($id);

        $this->view->id = $user->id;

        $this->tag->setDefault("id", $user->id);
        $this->tag->setDefault("name", $user->name);
        $this->tag->setDefault("lastName", $user->last_name);
        $this->tag->setDefault("email", $user->email);
    }

    public function createAction()
    {
        $user = new Users();

        if($this->request->isPost()) {

            $user->name = $this->request->getPost("name");
            $user->last_name = $this->request->getPost("lastName");
            $user->email = $this->request->getPost("email");

            if ($user->save()) {
                $this->response->redirect("users/index");
            } else {
                echo "Sorry, the following problems were generated: ";

                $messages = $user->getMessages();

                foreach ($messages as $message) {
                    echo $message->getMessage(), "<br/>";
                }
            }
        }

        $this->view->disable();
    }

    public function updateAction()
    {
        $id = $this->request->getPost("id");
        $user =  Users::findFirst($id);

        if($this->request->isPost()) {

            $user->name = $this->request->getPost("name");
            $user->last_name = $this->request->getPost("lastName");
            $user->email = $this->request->getPost("email");

            if ($user->save()) {
                $this->response->redirect("users/index");
            } else {
                echo "Sorry, the following problems were generated: ";

                $messages = $user->getMessages();

                foreach ($messages as $message) {
                    echo $message->getMessage(), "<br/>";
                }
            }
        }

       $this->view->disable();
    }

    public function deleteAction($id)
    {
        $user =  Users::findFirst($id);
        if ($user->delete()) {
            $this->response->redirect("users/index");
        }
    }
}