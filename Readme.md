Installation is done on Windows 10. 

* Install [WampServer](http://www.wampserver.com/en/)
* Open MSSQL 
* Login with default username/password (root / no password)
* Create a database named homework
* Install [Composer](https://getcomposer.org/)
* Open a command prompt 
* ``` SET PATH=%PATH%;C:\wamp64\bin\php\php7.2.4 ```
* ``` SET PATH=%PATH%;C:\composer ```
* ``` composer global require "laravel/installer" ``` 
* ``` git clone https://github.com/royspekreijse/homework-backend.git ```
* ``` cd homework-backend ```
* ``` rename .env.example .env ```
* ``` composer install ```
* ``` php artisan migrate ```
* ``` php artisan serve ```


