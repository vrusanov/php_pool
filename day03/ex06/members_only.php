<?php
if (($_SERVER['PHP_AUTH_USER'] != "zaz") || ($_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys")){
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="My Realm"');
    echo "<html><body>Sorry. but you don`t have login!</body></html>\n";
    exit;
} else {
    $file = file_get_contents('../image/42.png');
    echo "<html><body>Hello Zaz<br>\n<img src='data:image/jpeg;base64,".base64_encode($file)."'>\n</body></html>\n";
}
?>