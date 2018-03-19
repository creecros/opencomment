<?php if ($this->user->hasProjectAccess('TaskViewController', 'show', $project['id'])): ?>
        <li>
            <?= $this->modal->small('comment-o', t('Add a comment'), 'CommentController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
<?php endif ?>
