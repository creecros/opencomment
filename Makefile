all: static

install:
           @ mv /var/www/app/app/Helper/ProjectRoleHelper.php /var/www/app/app/Helper/ProjectRoleHelper.org
           @ mv /var/www/app/app/Model/ProjectRoleRestrictionModel.php /var/www/app/app/Model/ProjectRoleRestrictionModel.org
           @ mv /var/www/app/app/Controller/TaskModificationController.php /var/www/app/app/Controller/TaskModificationController.org
           @ mv /var/www/app/app/Template/task/sidebar.php /var/www/app/app/Template/task/sidebar.org
           @ mv /var/www/app/app/Template/task/dropdown.php /var/www/app/app/Template/task/dropdown.org
           @ mv /var/www/app/app/Template/task/show.php /var/www/app/app/Template/task/show.org
           @ mv /var/www/app/app/Template/task_external_link/table.php /var/www/app/app/Template/task_external_link/table.org
           @ mv /var/www/app/app/Template/task_file/files.php /var/www/app/app/Template/task_file/files.org
           @ mv /var/www/app/app/Template/task_file/images.php /var/www/app/app/Template/task_file/images.org
           @ mv /var/www/app/app/Template/subtask/menu.php /var/www/app/app/Template/subtask/menu.org
           @ mv /var/www/app/app/Template/subtask/show.php /var/www/app/app/Template/subtask/show.org
           @ mv opencomment-master/Helper/new_ProjectRoleHelper.php /var/www/app/app/Helper/ProjectRoleHelper.php
           @ mv opencomment-master/Model/new_ProjectRoleRestrictionModel.php /var/www/app/app/Model/ProjectRoleRestrictionModel.php
           @ mv opencomment-master/Controller/new_TaskModificationController.php /var/www/app/app/Controller/TaskModificationController.php           
           @ mv opencomment-master/Template/task/new_sidebar.php /var/www/app/app/Template/task/sidebar.php
           @ mv opencomment-master/Template/task/new_dropdown.php /var/www/app/app/Template/task/dropdown.php
           @ mv opencomment-master/Template/task/new_show.php /var/www/app/app/Template/task/show.php
           @ mv opencomment-master/Template/task_external_link/new_table.php /var/www/app/app/Template/task_external_link/table.php
           @ mv opencomment-master/Template/task_file/new_file.php /var/www/app/app/Template/task_file/files.php
           @ mv opencomment-master/Template/task_file/new_images.php /var/www/app/app/Template/task_file/images.php
           @ mv opencomment-master/Template/subtask/new_menu.php /var/www/app/app/Template/subtask/menu.php
           @ mv opencomment-master/Template/subtask/new_show.php /var/www/app/app/Template/subtask/show.php
  
uninstall:
           @ mv /var/www/app/app/Helper/ProjectRoleHelper.org /var/www/app/app/Helper/ProjectRoleHelper.php
           @ mv /var/www/app/app/Model/ProjectRoleRestrictionModel.org /var/www/app/app/Model/ProjectRoleRestrictionModel.php
           @ mv /var/www/app/app/Controller/TaskModificationController.org /var/www/app/app/Controller/TaskModificationController.php
           @ mv /var/www/app/app/Template/task/sidebar.org /var/www/app/app/Template/task/sidebar.php
           @ mv /var/www/app/app/Template/task/dropdown.org /var/www/app/app/Template/task/dropdown.php
           @ mv /var/www/app/app/Template/task/show.org /var/www/app/app/Template/task/show.php
           @ mv /var/www/app/app/Template/task_external_link/table.org /var/www/app/app/Template/task_external_link/table.php
           @ mv /var/www/app/app/Template/task_file/files.org /var/www/app/app/Template/task_file/files.php
           @ mv /var/www/app/app/Template/task_file/images.org /var/www/app/app/Template/task_file/images.php
           @ mv /var/www/app/app/Template/subtask/menu.org /var/www/app/app/Template/subtask/menu.php
           @ mv /var/www/app/app/Template/subtask/show.org /var/www/app/app/Template/subtask/show.php
