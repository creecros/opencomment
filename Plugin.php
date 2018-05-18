<?php

namespace Kanboard\Plugin\CommentOnly;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
use Kanboard\Core\Security\Role;

class Plugin extends Base
{
  public function initialize()
  {
    $this->projectAccessMap->add('CommentController', array('create', 'save', 'edit', 'update', 'confirm', 'remove'), Role::PROJECT_VIEWER);
    $this->projectAccessMap->add('CommentListController', array('save'), Role::PROJECT_VIEWER);
    $this->projectAccessMap->add('CommentMailController', '*', Role::PROJECT_VIEWER);
    $this->template->hook->attach('template:task:sidebar:information', 'CommentOnly:task/sidebar');

  }
  public function getPluginName()
  {
    return 'Comment Only Restrictions for Project Viewers';
  }
  public function getPluginAuthor()
  {
    return 'Craig Crosby';
  }
  public function getPluginVersion()
  {
    return '0.0.2';
  }
  
  public function getPluginDescription()
  {
    return 'Adds Commenting abilities for Project Viewers';
  }
  public function getPluginHomepage()
  {
    return 'https://github.com/creecros/opencomment';
  }
}
