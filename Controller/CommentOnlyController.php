<?php

namespace Kanboard\Plugin\CommentOnly\Controller;

use Kanboard\Controller\BaseController;
use Kanboard\Core\Controller\AccessForbiddenException;

class CommentOnlyController extends BaseController
{
    public function create()
    {
       $task = $this->getTask();
       $values = $this->request->getValues();
       $values['task_id'] = $task['id'];
       $values['user_id'] = $this->userSession->getId();
       if ($this->projectPermissionModel->isUserAllowed($values['project_id'], $values['user_id'])) {
       return true;
       } else {
       return false;
       }
    }
   public function save()
    {
        $task = $this->getTask();
        $values = $this->request->getValues();
        $values['task_id'] = $task['id'];
        $values['user_id'] = $this->userSession->getId();
        list($valid, $errors) = $this->commentValidator->validateCreation($values);
        if ($valid) {
            if ($this->commentModel->create($values) !== false) {
                $this->flash->success(t('Comment added successfully.'));
            } else {
                $this->flash->failure(t('Unable to create your comment.'));
            }
            $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), 'comments'), true);
        } else {
            $this->create($values, $errors);
        }
    }
}
