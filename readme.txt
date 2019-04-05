To adjust the file upload size in PHP, modify the php.ini file's "upload_max_filesize" value. 

You can also adjust this value using PHP's .ini_set() function. ???

The file upload counts towards the hosting environment's $_POST size, 
so you may need to increase the php.ini file's post_max_size value.