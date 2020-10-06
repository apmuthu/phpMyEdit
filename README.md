# phpMyEdit
* Fixes and Extensions to http://www.phpmyedit.org codebase - [Home](http://platon.sk/projects/phpMyEdit/)
* [Original source code base](http://opensource.platon.sk/upload/_projects/00005/phpMyEdit-5.7.1.tar.gz) v5.7.1 was hitherto frozen on 2007-09-16
* [PHP 7 BugFix](http://opensource.platon.org/projects/bug_view_advanced_page.php?f_bug_id=782) not included here

# Other clones
* [iplayfast](https://github.com/iplayfast/phpmyedit)
* [pilrof](https://github.com/plirof/phpMyEdit-PHP7.0)
* [petrich](https://github.com/petrich/phpMyEdit-PHP7.0)

# Documentation ERRATA
* The file `doc/pdf/phpMyEdit-5.7.1.pdf` in the second line under **Example 4-7**... states that `'P'` is for password field but should actually be `'W'`.
* This is coded in the class file for element `input` in `function password($k)` and in the backward compatible element `options` in `function backward_compatibility()`. 
* The corresponding html doc file that needs to be corrected is `doc/html/configuration.basic-options.html` under **Input settings**

# Minimal Requirements
* Apache 1.3.23
* PHP 4.1.2
* MySQL 3.23.47

The original uses the *php mysql* function set.

This fork may develop the *php mysqli* driver in time to come, but will not exceed the PHP minimal requirement beyond PHP v5.3.3.
