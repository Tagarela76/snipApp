<?php

require_once ('../extensions/meekrodb.2.2.class.php');
require_once ('../../config/config.php');
$name = $_POST['name'];
$value = $_POST['value'];

//check if user use link before
$sql = "SELECT * FROM referral WHERE user='" . $name . "' AND coockie_id='" . $value . "'";
$results = DB::query($sql);
if (!empty($results)) {
    echo 'Ссылка уже использовалась';
    die();
} else {
    //save user refer
    $id = DB::insert('referral', array(
                'user' => $name,
                'coockie_id' => $value
    ));
    //get current user experation
    $results = DB::query("SELECT expiration_date, id FROM users WHERE email=%s", $name);
    if (empty($results)) {
        echo 'Неверная ссылка';
        die();
    } else {
        $exp_date = $results[0]['expiration_date'];
	$now = time();
        if ($exp_date < $now) {
            $exp_date = $now;
        }
        $userId = $results[0]['id'];
        //add one day;
        $exp_date = strtotime('+1 day', $exp_date);
        //update user
        DB::update('users', array(
            'expiration_date' => $exp_date
                ), "id=%s", $userId);

        echo 'true';
    }
}
?>
