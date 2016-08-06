<?php
/*
When using PHP as an Apache module, you can also change the configuration settings
using directives in Apache configuration files (e.g. httpd.conf) and .htaccess files.
You will need "AllowOverride Options" or "AllowOverride All" privileges to do so.

There are several Apache directives that allow you to change the PHP configuration
from within the Apache configuration files. For a listing of which directives
are PHP_INI_ALL, PHP_INI_PERDIR, or PHP_INI_SYSTEM, have a look at the List of php.ini directives appendix.

php_value name value
Sets the value of the specified directive. Can be used only with PHP_INI_ALL and
PHP_INI_PERDIR type directives. To clear a previously set value use none as the value.

Note: Don't use php_value to set boolean values. php_flag (see below) should be used instead.
php_flag name on|off
Used to set a boolean configuration directive. Can be used only with
PHP_INI_ALL and PHP_INI_PERDIR type directives.

php_admin_value name value
Sets the value of the specified directive. This can not be used in .htaccess files.
Any directive type set with php_admin_value can not be overridden by .htaccess
or ini_set(). To clear a previously set value use none as the value.

php_admin_flag name on|off
Used to set a boolean configuration directive. This can not be used in .htaccess files.
Any directive type set with php_admin_flag can not be overridden by .htaccess or ini_set().
*/
