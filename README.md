# Islam Project 
---

## Requirements : 

- For Windows - install in order:
    - install XAMPP with php 8.2 - [Download Link](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe/download)
    - Install Composer - [Download Link](https://getcomposer.org/)
    - ![composer1](https://media.geeksforgeeks.org/wp-content/uploads/20211117102854/2.png)
    - ![composer2](https://media.geeksforgeeks.org/wp-content/uploads/20211117102913/3.png)
    
    ### After install the requirements successfully 
    - open XAMPP application and press start on (Apache and mysql)
    - Download the project [from here](https://github.com/IslamMohamedHassan/Islamproject/archive/refs/heads/main.zip)
    - unzip the project file 
    - open your Poweshell 
    - write these commands: 
        
        -install required packages
        ```
        composer install
        ```
        - configure your app by copy file named **.env.example** to same place with name it **.env**
        - open the file and find database configurations and change *database_name* with whatever name you want (avoid using spaces or spicial characters) , change *user_name* with mysql databas password , by deault it's *root* , and put yout database password , by default it have no password 
        ```
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=database_name
        DB_USERNAME=root
        DB_PASSWORD=
        ```
        - then run these comands 
        ````
        php artisan key:generate
        php artisan migrate
        php artisian db:seed
        ````

        - now it's done 
        - to run local server :
        ```
        php artisan serv
        ```
        --now open your browser and go to localhost:8000





