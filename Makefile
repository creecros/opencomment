install:
  wget https://github.com/creecros/opencomment/archive/master.zip
  unzip master.zip
  mv /var/www/app/app/Helper/ProjectRoleHelper.php /var/www/app/app/Helper/ProjectRoleHelper.org
  mv /var/www/app/app/Model/ProjectRoleRetrictionModel.php /var/www/app/app/Model/ProjectRoleRetrictionModel.org
  mv /var/www/app/app/Template/task/sidebar.php /var/www/app/app/Template/task/sidebar.org
  mv opencomment-master/Helper/new_ProjectRoleHelper.php /var/www/app/app/Helper/ProjectRoleHelper.php
  mv opencomment-master/Model/new_ProjectRoleRetrictionModel.php /var/www/app/app/Model/ProjectRoleRetrictionModel.php
  mv opencomment-master/Template/task/new_sidebar.php /var/www/app/app/Template/task/sidebar.php
  
uninstall:
  mv /var/www/app/app/Helper/ProjectRoleHelper.org /var/www/app/app/Helper/ProjectRoleHelper.php
  mv /var/www/app/app/Model/ProjectRoleRetrictionModel.org /var/www/app/app/Model/ProjectRoleRetrictionModel.php
  mv /var/www/app/app/Template/task/sidebar.org /var/www/app/app/Template/task/sidebar.php
