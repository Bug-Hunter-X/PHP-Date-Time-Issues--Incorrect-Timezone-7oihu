```php
date_default_timezone_set('UTC'); // Set your desired timezone
$date = new DateTime('now');
echo $date->format('Y-m-d H:i:s');
```
By explicitly setting the timezone using `date_default_timezone_set()`, we eliminate the dependency on the potentially incorrect server default.  Replace 'UTC' with the appropriate timezone identifier for your application.