<?php

namespace Kanboard\Plugin\CommentOnly;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\CommentOnly\Controller\new_TaskModificationController;
use Kanboard\Plugin\CommentOnly\Helper\new_ProjectRoleHelper;
use Kanboard\Plugin\CommentOnly\Model\new_ProjectRoleRestrictionModel;


class Plugin extends Base
{
  public function initialize()
  {
    $this->template->setTemplateOverride('board/tooltip_subtasks', 'commentOnly:board/new_tooltip_subtasks');
    $this->template->setTemplateOverride('subtask/menu', 'commentOnly:subtask/new_menu');
    $this->template->setTemplateOverride('subtask/show', 'commentOnly:subtask/new_show');
    $this->template->setTemplateOverride('task/dropdown', 'commentOnly:task/new_dropdown');
    $this->template->setTemplateOverride('task/show', 'commentOnly:task/new_show');
    $this->template->setTemplateOverride('task/sidebar', 'commentOnly:task/new_sidebar');
    $this->template->setTemplateOverride('task_external_link/table', 'commentOnly:task_external_link/new_table');
    $this->template->setTemplateOverride('task_file/file', 'commentOnly:task_file/new_file');
    $this->template->setTemplateOverride('task_file/images', 'commentOnly:task_file/new_images');
    $this->container['TaskModificationController'] = $this->container->factory(function ($c) {
            return new new_TaskModificationController($c);
        });
    $this->container['ProjectRoleHelper'] = $this->container->factory(function ($c) {
            return new new_ProjectRoleHelper($c);
        });
    $this->container['ProjectRoleRestrictionModel'] = $this->container->factory(function ($c) {
            return new new_ProjectRoleRestrictionModel($c);
        });
  }
  public function getPluginName()
  {
    return 'Comment Only Resctrictions';
  }
  public function getPluginAuthor()
  {
    return 'Craig Crosby';
  }
  public function getPluginVersion()
  {
    return '0.0.1';
  }
  
  public function getPluginDescription()
  {
    return 'Add Comment Only Roles';
  }
  public function getPluginHomepage()
  {
    return 'https://github.com/creecros/opencomment';
  }
}
