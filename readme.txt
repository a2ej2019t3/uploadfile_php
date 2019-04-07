Setup:
    To adjust the file upload size in PHP, modify the php.ini file's "upload_max_filesize" value. 

    #You can also adjust this value using PHP's .ini_set() function. HOW???

    The file upload counts towards the hosting environment's $_POST size, 
    so you may need to increase the php.ini file's post_max_size value.

Options for '$_FILES':
    $_FILES['userfile']['name']
    The original name of the file on the client machine.

    $_FILES['userfile']['type']
    The mime type of the file, if the browser provided this information. An example would be "image/gif". This mime type is however not checked on the PHP side and therefore don't take its value for granted.

    $_FILES['userfile']['size']
    The size, in bytes, of the uploaded file.

    $_FILES['userfile']['tmp_name']
    The temporary filename of the file in which the uploaded file was stored on the server.

    $_FILES['userfile']['error']
    The error code associated with this file upload.

Note:
    The seller id in upload.php is pre-defined to 1.
    the uploading to Database support only the first file for now.