cd /
mkdir plug_temp
cd plug_temp
wget https://github.com/creecros/opencomment/archive/master.zip
unzip master.zip
mv /var/www/app/app/Template/board/tooltip_subtasks.php /var/www/app/app/Template/board/tooltip_subtasks.org
mv /var/www/app/app/Helper/ProjectRoleHelper.php /var/www/app/app/Helper/ProjectRoleHelper.org
mv /var/www/app/app/Model/ProjectRoleRestrictionModel.php /var/www/app/app/Model/ProjectRoleRestrictionModel.org
mv /var/www/app/app/Controller/TaskModificationController.php /var/www/app/app/Controller/TaskModificationController.org
mv /var/www/app/app/Template/task/sidebar.php /var/www/app/app/Template/task/sidebar.org
mv /var/www/app/app/Template/task/dropdown.php /var/www/app/app/Template/task/dropdown.org
mv /var/www/app/app/Template/task/show.php /var/www/app/app/Template/task/show.org
mv /var/www/app/app/Template/task_external_link/table.php /var/www/app/app/Template/task_external_link/table.org
mv /var/www/app/app/Template/task_file/files.php /var/www/app/app/Template/task_file/files.org
mv /var/www/app/app/Template/task_file/images.php /var/www/app/app/Template/task_file/images.org
mv /var/www/app/app/Template/subtask/menu.php /var/www/app/app/Template/subtask/menu.org
mv /var/www/app/app/Template/subtask/show.php /var/www/app/app/Template/subtask/show.org
mv opencomment-master/Template/board/new_tooltip_subtasks.php /var/www/app/app/Template/board/tooltip_subtasks.php
mv opencomment-master/Helper/new_ProjectRoleHelper.php /var/www/app/app/Helper/ProjectRoleHelper.php
mv opencomment-master/Model/new_ProjectRoleRestrictionModel.php /var/www/app/app/Model/ProjectRoleRestrictionModel.php
mv opencomment-master/Controller/new_TaskModificationController.php /var/www/app/app/Controller/TaskModificationController.php           
mv opencomment-master/Template/task/new_sidebar.php /var/www/app/app/Template/task/sidebar.php
mv opencomment-master/Template/task/new_dropdown.php /var/www/app/app/Template/task/dropdown.php
mv opencomment-master/Template/task/new_show.php /var/www/app/app/Template/task/show.php
mv opencomment-master/Template/task_external_link/new_table.php /var/www/app/app/Template/task_external_link/table.php
mv opencomment-master/Template/task_file/new_file.php /var/www/app/app/Template/task_file/files.php
mv opencomment-master/Template/task_file/new_images.php /var/www/app/app/Template/task_file/images.php
mv opencomment-master/Template/subtask/new_menu.php /var/www/app/app/Template/subtask/menu.php
mv opencomment-master/Template/subtask/new_show.php /var/www/app/app/Template/subtask/show.php
cd /
rm -r plug_temp
