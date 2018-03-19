<?php

namespace Kanboard\Plugin\CommentOnly

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\CommentOnly\Model\***;


class Plugin extends Base
{
  public function initialize()
  {
    $this->template->setTemplateOverride('action_creation/params', 'autoSubtasks:action_creation/params');
    $this->container['projectGanttFormatter'] = $this->container->factory(function ($c) {
            return new ProjectGanttFormatter($c);
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
