<?php

include 'config.inc';

// check if we got an url
if(($pos = strpos($_SERVER['REQUEST_URI'], '?')) !== false) {

    // try to extract the url
    $url = trim(substr($_SERVER['REQUEST_URI'], $pos + 1));

    // if url is set, include the redirect page
    if(!empty($url)) {
    // Show animation to redirect

    echo '<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
	 font-family: \'Lato\', sans-serif;
	 font-weight: 300;
}
 .dots {
	 width: 150px;
	 height: 50px;
	 position: relative;
	 margin: 0 auto;
	 margin-top: 50px;
}
 .dots .dotone, .dots .dottwo, .dots .dotthree {
	 width: 15px;
	 height: 15px;
	 background: #2ba0c7;
	 -webkit-border-radius: 999px;
	 -moz-border-radius: 999px;
	 border-radius: 999px;
	 float: left;
	 margin-left: 15px;
}
 .dots .dotone {
	 -webkit-animation: dotsanimate 1s linear infinite;
	 -moz-animation: dotsanimate 1s linear infinite;
	 -o-animation: dotsanimate 1s linear infinite;
	 animation: dotsanimate 1s linear infinite;
}
 .dots .dottwo {
	 -webkit-animation: dotsanimateopp 1s linear infinite;
	 -moz-animation: dotsanimateopp 1s linear infinite;
	 -o-animation: dotsanimateopp 1s linear infinite;
	 animation: dotsanimateopp 1s linear infinite;
	 -webkit-transform: scale(0.7);
	 -moz-transform: scale(0.7);
	 -ms-transform: scale(0.7);
	 -o-transform: scale(0.7);
	 transform: scale(0.7);
}
 .dots .dotthree {
	 -webkit-animation: dotsanimate 1s linear infinite;
	 -moz-animation: dotsanimate 1s linear infinite;
	 -o-animation: dotsanimate 1s linear infinite;
	 animation: dotsanimate 1s linear infinite;
}
 @-webkit-keyframes dotsanimate {
	 0% {
		 -webkit-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
	 50% {
		 -webkit-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
	 100% {
		 -webkit-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
}
 @-moz-keyframes dotsanimate {
	 0% {
		 -moz-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
	 50% {
		 -moz-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
	 100% {
		 -moz-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
}
 @-o-keyframes dotsanimate {
	 0% {
		 -o-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
	 50% {
		 -o-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
	 100% {
		 -o-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
}
 @keyframes dotsanimate {
	 0% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
	 50% {
		 -webkit-transform: scale(0.7);
		 -moz-transform: scale(0.7);
		 -o-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
	 100% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
}
 @-webkit-keyframes dotsanimateopp {
	 0% {
		 -webkit-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
	 50% {
		 -webkit-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
	 100% {
		 -webkit-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
}
 @-moz-keyframes dotsanimateopp {
	 0% {
		 -moz-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
	 50% {
		 -moz-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
	 100% {
		 -moz-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
}
 @-o-keyframes dotsanimateopp {
	 0% {
		 -o-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
	 50% {
		 -o-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
	 100% {
		 -o-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
}
 @keyframes dotsanimateopp {
	 0% {
		 -webkit-transform: scale(0.7);
		 -moz-transform: scale(0.7);
		 -o-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
	 50% {
		 -webkit-transform: scale(1);
		 -moz-transform: scale(1);
		 -o-transform: scale(1);
		 transform: scale(1);
		 opacity: 1;
	}
	 100% {
		 -webkit-transform: scale(0.7);
		 -moz-transform: scale(0.7);
		 -o-transform: scale(0.7);
		 transform: scale(0.7);
		 opacity: 0.3;
	}
}
 h1 {
	 font-size: 40px;
	 text-align: center;
}
 a {
	 position: relative;
	 display: block;
	 text-align: center;
	 color: #000;
	 text-decoration: none;
}
 
</style>
<meta charset="utf-8">
    ';?>

<title><?php echo urldecode($url); ?> &hellip;
<?php echo '</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
<div align="center">
  <p>';

    echo '<div class="dots">
        <div class="dotone"></div>
        <div class="dottwo"></div>
        <div class="dotthree"></div>
    </div>

    <div class="textedit">
        <h2>Within a few seconds, you are being redirected to:</h2>
    </div>';
    ?>

<?php echo urldecode($url); ?> &hellip;
<?php echo '</p>
</div>			
</body>';?>

<script>

    $(document).ready(function(){
    var domain = "<?php echo $domain; ?>";
    var url = "<?php echo $url; ?>";
    //code here
    setTimeout(function() {
    //Redirect to blankReferrer.php
    window.location.href = domain + '/blankReferrer.php/?' + url;
    }, 3000);
    });

    </script>
    <?php
echo '</html>';

}

    exit;

} else {

// else show the splash page
    include_once 'splash.php';
}


?>
