<?php 

if (isset($_POST['submit'])){
    $create_birthday_date = $_POST["date"];
    $create_current_date = date("Y-m-d");

    $birthday = date_create($create_birthday_date);
    $curent_date = date_create($create_current_date);
    $interval = date_diff($birthday, $curent_date);
    $diff = $interval->format('%y Years %m Months %d Days');

    echo "<script>console.log('$diff' );</script>";
}
