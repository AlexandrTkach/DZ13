<?php
$mysqli = mysqli_connect('localhost', 'postavshiki_u', '0000', 'postavshiki');
if (!$mysqli) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
