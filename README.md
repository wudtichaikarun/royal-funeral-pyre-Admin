# royal-funeral-pyre

PHP royal funeral pyre

## Resource

### Front-End

#### CSS Framework

[Bootstrap v4](http://getbootstrap.com/)

#### CSS Resource

[Flex box by CSS Trick](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)

[CSS Grid En by CSS Trick](https://css-tricks.com/snippets/css/complete-guide-grid/)

[CSS Grid TH by Babelcoder](https://www.babelcoder.com/blog/posts/css-grid-layout)

#### jQuery Plugin

Plugin for 3d Rotation from Picture

[3dEye](https://github.com/VoidCanvas/3dEye)

#### Template Admin

Admin Template in Bootstrap 4 version

[SB Admin 1 & 2](https://startbootstrap.com/template-categories/admin-dashboard/)

### Back-End

#### PHP Article

[Using PHP with MySQL - the right way](https://www.binpress.com/tutorial/using-php-with-mysql-the-right-way/17)

## REF website

[Bangkok National Museum](http://www.virtualmuseum.finearts.go.th/bangkoknationalmuseums/index.php/th/)

[The Royal Cremation Ceremony](http://kingrama9.th/Crematory)

## Environment

### Docker

[install docker osx](https://docs.docker.com/docker-for-mac/install/)

[install docker windows](https://docs.docker.com/docker-for-windows/install/#install-docker-for-windows)

[install docker toolbox](https://www.docker.com/products/docker-toolbox)

[How to use docker(TH version)](https://medium.com/yii2-learning/%E0%B8%A1%E0%B8%B2%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87-lemp-stack-%E0%B8%87%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B9%86-%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2-docker-%E0%B8%81%E0%B8%B1%E0%B8%99-part2-6692c9c33c5f)

#### Docker-compose 

Create Evelonment LAMP(Linux, Apache, Mysql, PHP and PHPadmin)

1. Create Folders and files
```
⇒  tree
.
├── docker-compose.yml
├── html
│   └── index.php
└── mysql
    ├── backup
    ├── data
    └── initdb
```

 * docker-compose.yml code
 ```
 version: '2'
services:

  php:
    image: php:5-apache
    container_name: php5_apache
    restart: always
    volumes:
      - ./html/:/var/www/html
    ports:
      - 80:80

  db:
    image: mysql
    container_name: mysql_php5
    restart: always
    volumes:
        - ./mysql/initdb/:/docker-entrypoint-initdb.d
        - ./mysql/data/:/var/lib/mysql
    environment:
      - MYSQL_ROOT_PASSWORD=123132123
      - MYSQL_DATABASE=test_php5
      - MYSQL_USER=php5
      - MYSQL_PASSWORD=123456

  pma:
    image: phpmyadmin/phpmyadmin
    container_name: phpmyadmin_for_php5
    restart: always
    ports:
      - "8000:80"
  ```
  
   * index.php code
   ```
   <?php phpinfo(); ?>
   ```
   
   2. Type in the terminal<code>docker-compose up -d</code> 
   
   3. Now open your browser and go to: localhost in your browser you should see a PHP 5 info page, and localhost:8000 shold see phpmyadmin page
   


