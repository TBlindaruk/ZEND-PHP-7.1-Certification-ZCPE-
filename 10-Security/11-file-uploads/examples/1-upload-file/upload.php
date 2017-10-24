<?php
// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.

$uploaddir = './upload/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo   basename($_FILES['userfile']['name']);

echo '<pre>';
try {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки! {$_FILES["userfile"]["error"]}\n";
    }
}catch (Exception $exception){
    echo $exception->getMessage();
}

echo __DIR__;

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";

?>