<?php if ($this->projectUserRoleModel->getUserRole($task['project_id'], $this->request->getIntegerParam('user_id')) === Role::PROJECT_VIEWER): ?>
        <li>
            <?= $this->modal->small('comment-o', t('Add a comment'), 'CommentOnly', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
<?php endif ?>
