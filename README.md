# Comment-Only Restrictions in Kanboard

I have no idea the correct way to do this, welcome any edits to installing, or other solutions to making this a true plugin. For now, and for me, this works. I am not a coding ninja, and never could get the smoke screen thing down.

## What does it do?

This plugin, which is more of a code replacement, adds a custom role for "Can only add comments to tasks" in Kanboard. A user will basically only be able to add comments. The catch, in order to add a comment, they have to also be able to update a task, so you cannot take away that role. This code will block any link, dropdown, popup, sidebar, and all the places i could find, where a user can do anything to a task other than add a comment. If they know an exact URL or webhooks or API in order to edit a task, they can. I have this set up for very computer illiterate folks, so I have no worries. If you have worries, don't use it, as it is probably expliotable by ninjas. That being said, I have this running in production environment, and do so with no issues.

## How to install?

Take what I got here, and replace everything you got there. Need step by step commands lines?

* cd /
* mkdir plug_temp
* cd plug_temp
* wget https://github.com/creecros/opencomment/archive/master.zip
* unzip master.zip
* mv /var/www/app/app/Helper/ProjectRoleHelper.php /var/www/app/app/Helper/ProjectRoleHelper.org
* mv /var/www/app/app/Model/ProjectRoleRestrictionModel.php /var/www/app/app/Model/ProjectRoleRestrictionModel.org
* mv /var/www/app/app/Controller/TaskModificationController.php /var/www/app/app/Controller/TaskModificationController.org
* mv /var/www/app/app/Template/task/sidebar.php /var/www/app/app/Template/task/sidebar.org
* mv /var/www/app/app/Template/task/dropdown.php /var/www/app/app/Template/task/dropdown.org
* mv /var/www/app/app/Template/task/show.php /var/www/app/app/Template/task/show.org
* mv /var/www/app/app/Template/task_external_link/table.php /var/www/app/app/Template/task_external_link/table.org
* mv /var/www/app/app/Template/task_file/files.php /var/www/app/app/Template/task_file/files.org
* mv /var/www/app/app/Template/task_file/images.php /var/www/app/app/Template/task_file/images.org
* mv /var/www/app/app/Template/subtask/menu.php /var/www/app/app/Template/subtask/menu.org
* mv /var/www/app/app/Template/subtask/show.php /var/www/app/app/Template/subtask/show.org
* mv opencomment-master/Helper/new_ProjectRoleHelper.php /var/www/app/app/Helper/ProjectRoleHelper.php
* mv opencomment-master/Model/new_ProjectRoleRestrictionModel.php /var/www/app/app/Model/ProjectRoleRestrictionModel.php
* mv opencomment-master/Controller/new_TaskModificationController.php /var/www/app/app/Controller/TaskModificationController.php           
* mv opencomment-master/Template/task/new_sidebar.php /var/www/app/app/Template/task/sidebar.php
* mv opencomment-master/Template/task/new_dropdown.php /var/www/app/app/Template/task/dropdown.php
* mv opencomment-master/Template/task/new_show.php /var/www/app/app/Template/task/show.php
* mv opencomment-master/Template/task_external_link/new_table.php /var/www/app/app/Template/task_external_link/table.php
* mv opencomment-master/Template/task_file/new_file.php /var/www/app/app/Template/task_file/files.php
* mv opencomment-master/Template/task_file/new_images.php /var/www/app/app/Template/task_file/images.php
* mv opencomment-master/Template/subtask/new_menu.php /var/www/app/app/Template/subtask/menu.php
* mv opencomment-master/Template/subtask/new_show.php /var/www/app/app/Template/subtask/show.php
* cd /
* rm -r plug_temp

## Ok, it's installed, now what?

Go to your project board, and then Custom Roles.
Create a new custom role, it doesn't matter what it's called.
Add the following restrictions: This is important, you must not restrict task updating, becuase adding a comment is a task update, duh!
* Task creation is not permitted	
* Task suppression is not permitted	
* Closing or opening a task is not permitted	
* Moving a task is not permitted	
* Changing assignee is not permitted	
* Can only add comments to tasks

Assign this role to a user or group. Have fun being able to do nothing but comment.

## This is BS, how do unistall?

* mv /var/www/app/app/Helper/ProjectRoleHelper.org /var/www/app/app/Helper/ProjectRoleHelper.php
* mv /var/www/app/app/Model/ProjectRoleRestrictionModel.org /var/www/app/app/Model/ProjectRoleRestrictionModel.php
* mv /var/www/app/app/Controller/TaskModificationController.org /var/www/app/app/Controller/TaskModificationController.php
* mv /var/www/app/app/Template/task/sidebar.org /var/www/app/app/Template/task/sidebar.php
* mv /var/www/app/app/Template/task/dropdown.org /var/www/app/app/Template/task/dropdown.php
* mv /var/www/app/app/Template/task/show.org /var/www/app/app/Template/task/show.php
* mv /var/www/app/app/Template/task_external_link/table.org /var/www/app/app/Template/task_external_link/table.php
* mv /var/www/app/app/Template/task_file/files.org /var/www/app/app/Template/task_file/files.php
* mv /var/www/app/app/Template/task_file/images.org /var/www/app/app/Template/task_file/images.php
* mv /var/www/app/app/Template/subtask/menu.org /var/www/app/app/Template/subtask/menu.php
* mv /var/www/app/app/Template/subtask/show.org /var/www/app/app/Template/subtask/show.php




