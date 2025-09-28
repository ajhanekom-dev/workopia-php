### Setup & Installation

## Current Environment
- Windows 11
- Ubunto 20.4
- WSL 2
- VsCode 1.104.1
- PhPStorm (alternate IDE)
- git

## Runtime Environment
- WSL 2: Ubuntu-20.04 
- VsCode IDE


## Packages to Install
# VsCode additional packages
- php intelephense (code hinting, param handling, autocomplete)
- php DocBlocker (multiline comments select for documenting code)

# homebrew Package Manager
~bash
- /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

#php
~bash
- brew install php
- php -v  (this will return PHP 8.4.12 (cli) -- confirms php install succesful) 
- brew upgrade php (only if your php version is not at least version 8.0.0 thats installed, this will install latest version)

#create project directory
~bash
- mkdir workopia
- cd workopia
- mkdir public
- mkdir views

# MySQL 
~bash
- sudo apt update
- brew install mysql
- brew mysql -V (this will confirm installation succesful ver 9.4.0)
- brew services start mysql
- mysql_secure_installation (secure your installation)
- mysql -u root -p 

~mysql
- CREATE USER 'someuser'@'localhost' IDENTIFIED BY 'somepassword';
- GRANT ALL PRIVILEGES ON * . * TO 'someuser'@'localhost';
- FLUSH PRIVILEGES;
- SELECT User, Host FROM mysql.user;   (show users)
- CREATE DATABASE MYDB; (create project mysql database)
- SHOW DATABASES (confirm your project DB has been created)
- USE MYDB;
-CREATE TABLE users(
id INT AUTO_INCREMENT,
   id VARCHAR(100) NOT NULL,
   title VARCHAR(100) NOT NULL,
   description VARCHAR(255) NOT NULL,
   salary VARCHAR(20) NOT NULL,
   location VARCHAR(100) NOT NULL,
   tags VARCHAR(100) NOT NULL,
   is_admin TINYINT(1),
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

#mysql workbench
- URL https://dev.mysql.com/downloads/workbench/
- download & install mysql-workbench-community-8.0.43.msi (windows version for GUI)

##git commit code to github repository
create file .gitignore in project home DIR

~txt (add these into .gitignore file)
/vendor
/node_modules
/config/db.php
.env 
.vscode  
.DS_Store

~bash
- git init
- git add .
- git commit -m 'Initial Commit to Repository started home view'

##from github (https://github.com/ajhanekom-dev/)
create repository workopia-php
make private

 ~bash
 - git remote add origin https://github.com/ajhanekom-dev/workopia-php.git
- git branch -M main 
- git push -u origin main 

#hereafter all commits to github
- git add .
- git commit -m 'comments to add in'
- git push

#start Host server
~bash
cd 'projectDIR'/public
- php -S localhost:8000 -t public 
