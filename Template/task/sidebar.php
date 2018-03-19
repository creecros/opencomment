<?php if ($task['is_active'] == 1): ?>
        <li>
            <?= $this->modal->small('comment-o', t('Add a comment'), 'CommentOnlyController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
<?php endif ?>
