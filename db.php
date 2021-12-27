<?php
$dbConnection = mysqli_connect('127.0.0.1', 'root', '', 'creditCalc');
if ($dbConnection == false) {
    echo 'Не удалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
}
//$makeDbTable = mysqli_query($connection, "CREATE TABLE IF NOT EXISTS credit_data(
//    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
//    `fullName` VARCHAR(100) NOT NULL,
//    `phone` VARCHAR(32) NOT NULL,
//    `creditSum` INT NOT NULL,
//    `creditTime` INT NOT NULL,
//    `percent` INT NOT NULL,
//    PRIMARY KEY(`id`)
//) ENGINE = InnoDB;");
