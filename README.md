# Install require component

```
composer install
```

# Edit config

Open file config.php and edit:

```
// edit database info
$host = '';
$user = '';
$pass = '';
$db = '';

$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    echo 'Khong the ket noi CSDL';
    die();
}

// edit PATH after install component with composer

define('BOOTSTRAP_FOLDER_PATH', '/vendor/twbs/bootstrap/dist');

```