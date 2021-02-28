# symfony-issue-40235


https://github.com/symfony/symfony/issues/40235


# How to reproduce the issue

- composer install
- symfony server:start
- open 127.0.0.1:8000/admin with username: "john_user" and password "123456"
- Since that user has only ROLE_USER should not be able to access the route... but because there is an empty line in access_control "by mistake" it is possible.

