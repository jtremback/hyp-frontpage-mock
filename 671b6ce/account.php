<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

function account() {
  include('mail_send.php');
  include('database_connection.php');
  include('header_ip.php');
  //Include The Database Connection File

  $userid = is_numeric($_GET['id']) ? $_GET['id'] : 0;
  $auth_code = $_GET['auth'];
  $action = $_GET['action'];

  if (hypothesis_mail_auth_validate($userid, $auth_code)) {
    switch ($action) {
      case 'unsubscribe':
        $sql = sprintf("UPDATE users SET receive_messages=0 WHERE userid='%s'", $userid);
        mysql_query($sql,$bd);

        $return['status'] = 'success';
        if (mysql_affected_rows()) {
          $return['message'] = 'You will not receive emails from Hypothes.is anymore. Thank you.';
        }
        else {
          $return['message'] = 'You have already been unsubscribed. Thank you.';
        }
        break;

      case 'confirm':
      default:
        $header_ip = mysql_escape_string(inet_pton(get_ip_address()));
        $peer_ip = mysql_escape_string(inet_pton($_SERVER['REMOTE_ADDR']));
        $sql = sprintf("UPDATE users SET confirmed=1, con_hdr_ip='%s', con_peer_ip='%s' WHERE userid='%s'",
                       $header_ip, $peer_ip, $userid);
        mysql_query($sql,$bd);

        $return['status'] = 'success';
        if (mysql_affected_rows()) {
          $return['message'] = 'Your email has been confirmed. Thank you.';
        }
        else {
          $return['message'] = 'Your email has already been confirmed. Thank you!';
        }
        break;
    }
  }
  else {
    $return['status'] = 'error';
    $return['message'] = 'Invalid authentication code for this username.Please use the link sent in the verification email.';
  }

  return $return;
}

$result = account();
$message = $result['message'];

$url = 'http://hypothes.is';
$twitter_text = 'I just reserved my @hypothes_is username at http://hypothes.is Check out this new open source project and protect your favorite username!';
$facebook_text = 'I just reserved my Hypothes.is username at http://hypothes.is Check out this new open source project and protect your favorite username!';

?>

<!--
  .uef^"      ..                                       :8      .uef^"                 z`    ^%           @88>    z`    ^%  
:d88E        @L           .d``                u.      .88    :d88E                       .   <k          %8P        .   <k 
`888E       9888i   .dL   @8Ne.   .u    ...ue888b    :888ooo `888E            .u       .@8Ned8"           .       .@8Ned8" 
 888E .z8k  `Y888k:*888.  %8888:u@88N   888R Y888r -*8888888  888E .z8k    ud8888.   .@^%8888"          .@88u   .@^%8888"  
 888E~?888L   888E  888I   `888I  888.  888R I888>   8888     888E~?888L :888'8888. x88:  `)8b.        ''888E` x88:  `)8b. 
 888E  888E   888E  888I    888I  888I  888R I888>   8888     888E  888E d888 '88%" 8888N=*8888          888E  8888N=*8888 
 888E  888E   888E  888I    888I  888I  888R I888>   8888     888E  888E 8888.+"     %8"    R88          888E   %8"    R88 
 888E  888E   888E  888I  uW888L  888' u8888cJ888   .8888Lu=  888E  888E 8888L        @8Wou 9%     .     888E    @8Wou 9%  
 888E  888E  x888N><888' '*88888Nu88P   "*888*P"    ^%888*    888E  888E '8888c. .+ .888888P`    .@8c    888&  .888888P`   
m888N= 888>   "88"  888  ~ '88888F`       'Y"         'Y"    m888N= 888>  "88888%   `   ^"F     '%888"   R888" `   ^"F     
 `Y"   888          88F     888 ^                             `Y"   888     "YP'                  ^*      ""               
      J88"         98"      *8E                                    J88"                                                    
      @%         ./"        '8>                                    @%                                                      
    :"          ~`           "                                   :"                                                        
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
  <meta http-equiv="x-dns-prefetch-control" content="off"/>
  <title><?php print $message; ?> | Hypothes.is</title>

  <!--<link rel="icon" href="http://hypothes.is/images/favicon.gif??" type="image/gif"/> Create-->
  <!--<link rel="apple-touch-icon" href="http://hypothes.is/images/apple_touch_icon.png??"/> Create-->
  <link rel="stylesheet" type="text/css" href="stylesheets/hypothesis.css"/>
  <link rel="stylesheet" type="text/css" href="stylesheets/952_14_10_10.css"/>
  <link rel="stylesheet" type="text/css" href="stylesheets/account.css"/>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/additional-methods.js"></script>
  <script type="text/javascript" src="hypo-user-check.js"></script>
  <script src="javascripts/scrolling/jquery.scrollTo.js" type="text/javascript"></script>
  <script src="javascripts/scrolling/jquery.serialScroll-min.js" type="text/javascript"></script>
  <script src="javascripts/init.js" type="text/javascript"></script>

  <script src="javascripts/runonload.js"></script>
  <script src="javascripts/mailer.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css" /> <!--tooltipstyles -->
  <script src="javascripts/cufon-yui.js" type="text/javascript"></script>
  <script src="javascripts/Myriad_Pro_400-Myriad_Pro_700-Myriad_Pro_italic_400.font.js" type="text/javascript"></script>
  <script type="text/javascript">
  			Cufon.replace('h1, h2, h3');
  			Cufon.replace('#register .three-col p, #register ol');
  			Cufon.replace('#faq .question');
  </script>
</head>
<body id="account">
  <div id="wrapper">
    <div id="logo">
      <a href="index.html"><img src="images/hypothesis_logo.jpg" alt="hypothesis_logo" width="103" height="155" /></a>
    </div>
    <div id="content">
      <h1><?php print $message; ?></h1>
      <h2>Will you help us by telling your friends and followers?</h2>

      <div id="custom-tweet-button"><a href="https://twitter.com/share?text=<?php print addslashes($twitter_text); ?>" target="_blank"><span class="twitter-text">&ldquo;<?php print $twitter_text; ?>&rdquo;</span><br/><span class="twitter-link">Tweet this</span></a></div>

      <div id="custom-facebook-button"><a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php?u=<?php print addslashes($url); ?>&t=' + escape(facebook_text) + '"><span class="facebook-text">&ldquo;<?php print $facebook_text; ?>&rdquo;</span><br/><span class="facebook-link">Post this to Facebook</span></a></div>

      <h2>Would you also help support us with a donation?</h2>

      <div id="donate-button"><a href="http://hypothes.is/#donate"><input type='submit' name='donate' value='Donate Now'></a></div>
    </div>
  </div>
</body>
