<?php
    // we sanitize POST/GET
    $_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // if there is a Dogecoin Address on the URL we try to check 
    // if its a mobile device to ask to open the Wallet or other
    // device and we show a QR Code and the Doge Address
    if (isset($_GET["dogecoin"])){
        $useragent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
?>
  <title><?php echo $_GET["dogecoin"]; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <meta name="description" content="<?php echo $_GET["dogecoin"]; ?>">
  <meta name="author" content="All Dogecoin Community!">
  <meta name="generator" content="You!">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $_GET["dogecoin"]; ?>">
  <meta name="twitter:site" content="https://shibe.tips/<?php echo $_GET["dogecoin"]; ?>">
  <meta name="twitter:description" content="Do you like? Tip me in Dogecoin :)">
  <meta name="twitter:image" content="https://Shibe.Tips/img/doge_tips.png">
  <link href="https://Shibe.Tips/img/doge_tips.png" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <form method="get" action="dogecoin:<?php echo $_GET["dogecoin"]; ?>" name="dogecoin">
    <input type="hidden" name="amount" value="1">
  </form>
  <script>
    // the magic to force the browser on Mobile Devices to ask to open a Dogecoin Wallet to recive tips
    window.onload = function(){
      document.forms['dogecoin'].submit();
    }
  </script>
<?php
          exit();
        }else{ // we show the QR code and Doge Address if not mobile
?>
<!DOCTYPE HTML>
<html>
<head>
  <title><?php echo $_GET["dogecoin"]; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <meta name="description" content="<?php echo $_GET["dogecoin"]; ?>">
  <meta name="author" content="All Dogecoin Community!">
  <meta name="generator" content="You!">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $_GET["dogecoin"]; ?>">
  <meta name="twitter:site" content="https://shibe.tips/<?php echo $_GET["dogecoin"]; ?>">
  <meta name="twitter:description" content="Do you like? Tip me in Dogecoin :)">
  <meta name="twitter:image" content="https://Shibe.Tips/img/doge_tips.png">
  <link href="https://Shibe.Tips/img/doge_tips.png" rel="icon" />
  <link href="//fonts.googleapis.com/css2?family=Comic+Neue&amp;display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/doge.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
<body>
<div class="col" style="text-align:center">
  <img src="img/doge_vanity.png" style="max-width:200px; position:relative; bottom:-60px">
  <div class="alert alert-light shibeqr shadow">
    <span><i class="fa-solid fa-paw"></i> Tip Me!</span>
    <div class="alert alert-light shadow" style="border-radius:2rem; background-color:#ffc107;"><a style="cursor:pointer" href="dogecoin:<?php echo $_GET["dogecoin"]; ?>?amount=1" alt="Tip me in Doge"><img style="border-radius:2rem; padding:5px" src="https://api.qrserver.com/v1/create-qr-code/?data=dogecoin:<?php echo $_GET["dogecoin"]; ?>?amount=1"></a></div>
    <div><a id="dogeAddress" onclick="navigator.clipboard.writeText($('#dogeAddress').html());alert('Doge Address Copied!')"><?php echo $_GET["dogecoin"]; ?></a></div>
  </div>  
  <span class="git"><a href="https://github.com/qlpqlp/shibe.tips" target="_blank"><i class="fa-brands fa-github"></i></a> <a href="/" alt="Generate your Dogecoin Sharing URL"><i class="fa-solid fa-paw"></i> Generate your own Dogecoin Tips URL</a></span>
</div>
</body>
</html> 
<?php
        }
    }else{ // we ask a Doge Adress to generate a URL if its the Home Page
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Create your own Easy Dogecoin Tips URL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <meta name="description" content="Create your own Easy Dogecoin Tips URL">
  <meta name="author" content="All Dogecoin Community!">
  <meta name="generator" content="You!">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Shibe Tips">
  <meta name="twitter:site" content="https://shibe.tips/">
  <meta name="twitter:description" content="Create your own Easy Dogecoin Tips URL">
  <meta name="twitter:image" content="https://Shibe.Tips/img/doge_tips.png">
  <link href="https://Shibe.Tips/img/doge_tips.png" rel="icon" />
  <link href="//fonts.googleapis.com/css2?family=Comic+Neue&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/doge.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
<body>

<div class="col" style="text-align:center">
  <img src="img/doge_vanity.png" style="max-width:200px; position:relative; bottom:-80px">
<div class="alert alert-light shibebox shadow">
  <label for="dogecoin" class="form-label"><b><i class="fa-solid fa-paw"></i> Create your own Easy Dogecoin Tips URL</b></label>
  <div class="input-group input-group-lg">
    <span class="input-group-text" id="basic-addon3">https://Shibe.Tips/</span>
    <input type="text" class="form-control dogecoin" name="dogecoin" id="dogecoin" placeholder="DTqAFgNNUgiPEfGmc4HZUkqJ4sz5vADd1n" aria-describedby="basic-addon3 basic-addon4">
    <button class="btn btn-secondary" type="submit" id="paw"><i class="fa-solid fa-paw"></i></button>
  </div>
  <div class="form-text" id="basic-addon4">Add your Dogecoin Address above <i class="fa-solid fa-turn-up"></i></div>
</div>
<div class="row shibetips"></div>
<span class="git"><a href="https://github.com/qlpqlp/shibe.tips" target="_blank"><i class="fa-brands fa-github"></i></a> <a href="/" alt="Generate your Dogecoin Sharing URL"><i class="fa-solid fa-paw"></i> Generate your own Dogecoin Tips URL</a></span>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--
bs58caddr.bundle.min.js

The MIT License (MIT)

Copyright (c) 2023 Patrick Lodder

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->
<script src="js/bs58caddr.bundle.min.js"></script>
<script>
   // Thanks to https://twitter.com/patricklodder we can check if the DogeAddress is valid
    $(document).ready(function() {
      $('#paw').click(function(event) {
        const dogecoinAddress = $( "#dogecoin" ).val();
           if (!bs58caddr.validateCoinAddress('DOGE', dogecoinAddress)) {
                event.preventDefault();
                swal.fire({
                  icon: 'warning',
                  title: 'Much Sad!',
                  showConfirmButton: true,
                  confirmButtonColor: '#666666',
                  html:
                    '<img src="img/sad_doge.gif"><br><br>' +
                    'Sorry Shibe, Doge Address is not valid!',
                })
            }else{
              $( ".shibetips" ).html('<div class="alert alert-warning shibeshare shadow" role="alert" ><i class="fa-solid fa-share-nodes"></i> Copy and Share it: <a href="https://Shibe.Tips/' + $('#dogecoin').val() +'">https://Shibe.Tips/' + $('#dogecoin').val() + '</a></div>');
            }        
      });
    });  
</script>
</body>
</html> 
<?php
   }; 
?>