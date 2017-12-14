# BeachBooks - Semester Long Project

## California State University, Long Beach

## CECS - 343 : Intro to Software Engineering

### Group Members:

| Name              | Position                                                    |
|-------------------|:------------------------------------------------------------|
| Harold Agnote     | Team Leader, Backend-Developer, Systems Administrator       |
| Sebastian Adame   | Frontend-Developer, User Interface Designer                 |
| Aimee Threlkeld   | Database Architect, Project Documentation, Organizer        |
| Sergio Perez      | Content Manager, Feedback Specialist, Project Documentation |
| Stephanie Gomez   | Content Provider, Project Documentation                     |


### Description

BeachBooks is a web application that allows students of California State
University, Long Beach to network with each other in order to create a robust
community for students to buy/sell/trade books with one another.

The web application is still under development and in need of **heavy**
refinement, but a prototype test is available for review.

A live demo is available on [http://beachbooks.me](http://beachbooks.me)


### Build Instructions

BeachBooks can be built on a local machine by downloading the available source
code.

- Download the source files in a zip file 

Or use:

```
$ git clone https://github.com/HaroldAgnote/Beachbooks.git
```

in a shell.

#### Windows/Mac OS/Linux

- Install WAMP onto your computer: [http://www.wampserver.com/en/](http://www.wampserver.com/en/)
    - **MAMP**: [https://www.mamp.info/en/](https://www.mamp.info/en/)
    - **LAMP**: [Guide Here]( https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04 )

- Configure WAMP/MAMP as necessary for port access
    - See configuration files for setting up LAMP 

- Disable remote access to your computer from specified ports

- Copy source files onto the WAMP web server directory 
    - **Windows**: C:\wamp\www
    - **Mac OS**: /Applications/MAMP/htdocs
    - **Linux**: /var/www/html

- If prompted to set up MySQL Database, set root password to **beachbooks_prototype**
    - **Linux**: Make sure root password is set at this point after following guide above

- Launch phpMyAdmin on computer
    - Create a new database in phpMyAdmin: **beach_books**
    - Import code from **database/create_table.sql** and **database/insert_data.sql**
    - **Linux**: If using mysql shell run the following commands while in
        BeachBooks folder:
        ```
        [user@localhost /home/user/BeachBooks]
        $ mysql -u root -p
        Enter Password:
        mysql > create database beach_books;
        mysql > use beach_books;
        mysql > source database/create_table.sql;
        mysql > source database/insert_data.sql;
        ```
- Start WAMP/MAMP Server

- Open a browser and access localhost at specified ports from instructions above to demo BeachBooks
