```php
$date = new DateTime('now');
echo $date->format('Y-m-d H:i:s');
```
This code snippet will output the current date and time. However, if the server's timezone is not correctly configured, the output might be incorrect.  PHP's default timezone is often not what's expected, leading to subtle but crucial errors in date and time calculations.