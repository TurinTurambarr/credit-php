<?php
require_once 'db.php';

if ($_POST) {// если мы отправили данные с формы, то вызываем контроллер, который и=
    require_once 'controller.php';

    $userData = createUserData($dbConnection); //вызываем функцию вставки данных в таблицу
    $monthlyPayment = getMonthlyPay();//получаем ежемесячный платеж
}

?>

<h1>Кредитный калькулятор</h1>

<form method="post" name="credit_values" action="/index.php">
    <input class="input-field" type="text" required id="amountCredit" name="amountCredit" placeholder="Сумма кредита.">
    <input class="input-field" type="text" required id="timeCredit" name="timeCredit" placeholder="Срок в годах.">
    <input class="input-field" type="text" required id="percentRate" name="percentRate" placeholder="Процентная ставка, % в год.">
    <input class="input-field" type="text" required id="fullName" name="fullName" placeholder="ФИО">
    <input class="input-field" type="tel" maxlength="11" required id="tel" name="tel" placeholder="Номер телефона">
    <input type="submit" value="Рассчитать">
</form>
    <div>
        <p>Ежемесячный платеж: <? echo $monthlyPayment?></p>
        <p>Сумма выплаченных процентов: <? echo $percentSumm?></p>
        <p>Дата последнего платежа: <? echo $lastPayDate?> </p>
    </div>
