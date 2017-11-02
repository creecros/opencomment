<div class="dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa fa-cog"></i><i class="fa fa-caret-down"></i></a>
     <?php if ($this->projectRole->canUpdateTask($task)): ?>
     <?php if ($this->projectRole->canCommentTask($task)): ?>
    <ul>
        <li>
            <?= $this->modal->medium('edit', t('Edit'), 'SubtaskController', 'edit', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'subtask_id' => $subtask['id'])) ?>
        </li>
        <li>
            <?= $this->modal->confirm('trash-o', t('Remove'), 'SubtaskController', 'confirm', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'subtask_id' => $subtask['id'])) ?>
        </li>
        <li>
            <?= $this->modal->confirm('clone', t('Convert to task'), 'SubtaskConverterController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'subtask_id' => $subtask['id'])) ?>
        </li>
    </ul>
    <?php endif ?>
    <?php endif ?>
</div>
