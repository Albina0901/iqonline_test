<?php 
    // переменные
    $date = $_POST['date']; 
    list($day, $month, $year) = explode('.', $date);
    $years = $_POST['years'];
    $radio = $_POST['radio'];
    $sum_vklad = $_POST['sum'];
    $sum_vklad1 = $_POST['sum1'];

    if (!isset($_POST['submit']) && $sum_vklad !== '' && $date !== '') 
    {
        // количество дней в месяце
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        // формула для рассчетов на один месяц
        $result = $sum_vklad + ($sum_vklad + $sum_vklad1) * $days * (0.1 / 365);
        for ($i = 1; $i < $years * 12; $i++ ) {
            $month++;
            $result = $result + ($result + $sum_vklad1) * $days * (0.1 / 365);
        }
        // вывод результата
        echo ceil($result);
    } 
    else 
    {
        echo 'error';
    }

?>