<div class="tooltip-large">
    <table class="table-small">
       <?php if (! $this->projectRole->canCommentTask($task)): ?>
        <tr>
            <th class="column-70"><?= t('Subtask') ?></th>
            <?= $this->hook->render('template:board:tooltip:subtasks:header:before-assignee') ?>
            <th><?= t('Assignee') ?></th>
        </tr>
        <?php foreach ($subtasks as $subtask): ?>
        <tr>
            <td>
                <?= $this->subtask->renderToggleStatus($task, $subtask) ?>
            </td>
            <?php endif ?>
            <?= $this->hook->render('template:board:tooltip:subtasks:rows', array('subtask' => $subtask)) ?>
            <td>
                <?php if (! empty($subtask['username'])): ?>
                    <?= $this->text->e($subtask['name'] ?: $subtask['username']) ?>
                <?php else: ?>
                    <?= t('Not assigned') ?>
                <?php endif ?>
            </td>
        </tr>
        <?php endforeach ?>
        <?php endif ?>
    </table>
</div>
