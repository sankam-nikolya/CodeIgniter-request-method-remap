# CodeIgniter Request Method Remap
This file should be stored inside application/core. This controller will allow you to append the http method request to your controllers method.

Before

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExampleController extends CI_Controller {

	public function hello()
	{
		echo 'Hello world!';
	}

}
```

After 

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExampleController extends MY_Controller {

	public function hello_get()
	{
		echo 'Hello world GET!';
	}
    
    public function hello_post()
    {
    	echo 'Hello world POST!';

}
```
