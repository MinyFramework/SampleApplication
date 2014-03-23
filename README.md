Installation
============

Clone this repository into a directory accessible by your webserver.

If the destination directory is not your web root, you should set the directory relative to your web root in the config.dev.php and config.php files.

```php
<?php

// These configurations are active only in the development environment.

return array(
    'router' => array(
        'prefix' => '/path/to/directory/'
    )
);
```

If your web server does not support URL rewrite, set the short_urls option to false in config.common.php.

To install dependencies, run `composer install`.
