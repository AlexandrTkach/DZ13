<?php
/**
 * 'postavshiki' - собственная БД.
 * $patch -  mysql patch.
 * (“CRIT”, “ERROR” “DEBUG”, “INFO”) - возможные значения, которые она сможет применить!
 */

mysqli_report(MYSQLI_REPORT_ALL);
$mysqli = mysqli_connect('localhost', 'postavshiki_u', '0000', 'postavshiki');
if (!$mysqli) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
$patch = mysqli_prepare($mysqli, "ALTER TABLE `logs` ADD `log_type` ENUM('INFO','DEBUG','ERROR','CRIT') NOT NULL DEFAULT 'INFO' AFTER `created`;");
$prepare = mysqli_stmt_execute($patch);
if ($prepare) {
    echo 'Ваша таблица успешно заполнена!';
} else{
    echo 'Извините, возникли проблемы с соединением!';
}
