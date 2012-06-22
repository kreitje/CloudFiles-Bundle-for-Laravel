#Cloudfiles Bundle

A Laravel Rackspace Cloudfiles bundle

To get a CloudFiles instance:

<pre>
$cloudfiles = Ioc::resolve('cloudfiles')
</pre>

The **username** and **API key** are stored in the config/cloudfiles.php

Includes Cloudfiles from [Rackspace](https://github.com/rackspace/php-cloudfiles)