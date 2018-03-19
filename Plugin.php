<?php

namespace Kanboard\Plugin\CommentOnly;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
  public function initialize()
  {
    $this->projectAccessMap->add('CommentOnly', array("create", "save"), Role::PROJECT_VIEWER);
    $this->template->hook->attach('template:task:sidebar:actions', 'CommentOnly:task/sidebar');

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
