<?php
$content = base64_encode(file_get_contents('./gamephp/act/init-write.php'));
echo $content;
//file_put_contents('./gamephp/act/init.php', base64_decode($content));
