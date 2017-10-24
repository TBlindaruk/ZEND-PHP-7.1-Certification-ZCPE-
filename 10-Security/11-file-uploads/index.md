### File uploads
http://php.net/manual/en/features.file-upload.php

#### 1. $FILES structure
 - `$_FILES['userfile']['name']` - The original name of the file on the client machine.
 - `$_FILES['userfile']['type']` - The mime type of the file, if the browser provided this information. An example would be "image/gif". This mime type is however not checked on the PHP side and therefore don't take its value for granted.
 - `$_FILES['userfile']['size']` - The size, in bytes, of the uploaded file.
 - `$_FILES['userfile']['tmp_name']` - The temporary filename of the file in which the uploaded file was stored on the server.
 - `$_FILES['userfile']['error']` - The error code associated with this file upload.    
 
 ##### Example
 ```PHP
 Array(
     [userfile] => Array
         (
             [name] => Untitled.png
             [type] => image/png
             [tmp_name] => /tmp/phpekB8SR
             [error] => 0
             [size] => 142225
         )
 
 )
 ```   


#### 2. ERROR Codes for `move_uploaded_file`

http://php.net/manual/ru/features.file-upload.errors.php


#### 3. Common Issues

http://php.net/manual/en/features.file-upload.common-pitfalls.php


#### 4. Multiple File Upload

##### Links
http://php.net/manual/en/features.file-upload.multiple.php

##### Structure

```PHP
(
    [userfile] => Array
        (
            [name] => Array
                (
                    [0] => Untitled.pdf
                )

            [type] => Array
                (
                    [0] => application/pdf
                )

            [tmp_name] => Array
                (
                    [0] => /tmp/phpq3DzyD
                )

            [error] => Array
                (
                    [0] => 0
                )

            [size] => Array
                (
                    [0] => 701817
                )

        )

    [file] => Array
        (
            [name] => Array
                (
                    [0] => screenshot_173002.png
                )

            [type] => Array
                (
                    [0] => image/png
                )

            [tmp_name] => Array
                (
                    [0] => /tmp/phpOubWrB
                )

            [error] => Array
                (
                    [0] => 0
                )

            [size] => Array
                (
                    [0] => 330697
                )

        )

)
```

or
```PHP
(
    [userfile] => Array
        (
            [name] => Array
                (
                    [0] => ЄП_ЧАстина_2.pdf
                    [1] => Untitled 1.odt
                )

            [type] => Array
                (
                    [0] => application/pdf
                    [1] => application/vnd.oasis.opendocument.text
                )

            [tmp_name] => Array
                (
                    [0] => /tmp/phpcAOLWj
                    [1] => /tmp/phpdy1JWR
                )

            [error] => Array
                (
                    [0] => 0
                    [1] => 0
                )

            [size] => Array
                (
                    [0] => 116611
                    [1] => 9489
                )

        )

)
```


#### 5. PUT method support

http://php.net/manual/en/features.file-upload.put-method.php


#### 6. Security
 - http://php.net/manual/en/security.filesystem.php