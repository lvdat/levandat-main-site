# Install require component

```
composer install
```

# Edit config

Create file config.php (can use template from config.php.example) and edit:

```
// edit database info
$host = '';
$user = '';
$pass = '';
$db = '';

...

// edit PATH after install component with composer
define('BOOTSTRAP_FOLDER_PATH', '/vendor/twbs/bootstrap/dist');

```