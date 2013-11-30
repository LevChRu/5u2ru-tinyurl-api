<?php
$tinyurl = file_get_contents("http://5u2.ru/api.php?url=http://example.com"); // Создаём короткую ссылку для сайта http://example.com
echo $tinyurl;
?>
