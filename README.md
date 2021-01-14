# Remote_OS
Remotely login into the server to run linux commands or programs(Like AWS).
## NOTE
### 1. If anyone is running this project, they need to change the port number in client/database.php to default port number of thier MySQL Server.
### 2. Code from 'client' directory is for web-server.
### 3. Code from 'server' directory is for linux server to run command on.
### 4. This project does not have any firewall rules/security rules for client to access the server.
### 5. Before running this project, temparary disable the firewall security(systemctl stop firewalld) and SElinux security(setenforce 0).
### 6. Make sure you configure apache server on linux server.
       1. Download httpd package.(yum install httpd)
       2. Start web-services.(systemctl start httpd)
### 7. Give file permissions to the directory /var/www/html using chmod 777 command.
### 8. Finally, change the ip address in site.php file to the ip address of your linux server.
