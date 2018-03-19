<?php if ($this->projectRole->canCommentTask($task)): ?>
<?php else: ?>
        <li>
            <?= $this->modal->small('comment-o', t('Add a comment'), 'CommentController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
<?php endif ?>
