### READ ME ###

## Visionnaries PHP Framework ##

* Based on https://www.codecourse.com/lessons *

# Introduction #

* This is a framework has been designed to be incredibly lightweight. Base on the MVC created by
* Influence by frameworks such as CakePHP, Lithium & Zend

## Git Clone ##

* ```git clone git@github.com:Typekoce/minimal-php-framework.git```


## Set-up Linux ##
* Edit /etc/hosts

``` 127.0.0.1 visionnaries.dev ``` 


## Set-up Nginx ##

* cd /etc/nginx/sites-available/

* nano visionnaries.dev

* Add

```Server {

    listen 80;
    root /var/www/visionnaries.dev/public/;
    index index.html index.php;
    server_name visionnaries.base;
	

}```




