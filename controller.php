<?php

//передаем в функцию переменную нашего соединения
function createUserData ($dbConnection) {
    $userName = $_POST["fullName"];
    $userTel = (int)$_POST["tel"];
    $userSum = (int)$_POST["amountCredit"];
    $userTime = (int)$_POST["timeCredit"];
    $userPerc = (int)$_POST["percentRate"];// (int) это приведение типа данных к числу, почитаешь, поконтролируешь

    $query =
        "INSERT INTO `credit_data` (`id`, `fullName`, `phone`, `creditSum`, `creditTime`, `percent`)
           VALUES (NULL, '$userName', '$userTel', '$userSum', '$userTime', '$userPerc')";

    $result = mysqli_query($dbConnection, $query);
    if(!$result) {//проверяем, прошла ли вставка
        die('не получилось вставить данные');
    }

    return $result;
};

//здесь ты напишешь функцию, которая посчитает и вернет ежемесячный платеж
function getMonthlyPay () {
    $result = 11111;//это у меня просто заглушка, чтобы увидел, что данные приходят

    return $result;//здесь должна оказаться платеж потому что ты ее вставишь в index.php
};

//здесь ты напишешь функцию, которая посчитает и вернет сумму процентов
function getPercentSumm () {


    return $result;//здесь должна оказаться сумма потому что ты ее вставишь в index.php
};

//здесь ты напишешь функцию, которая посчитает и вернет дату последнего платежа
function getLastPayDate () {


    return $result;//здесь должна оказаться дата, именно дата! потому что ты ее вставишь в index.php
};
