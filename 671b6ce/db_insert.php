<?php
include('database_connection.php');
include('header_ip.php');

$username = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email']);
$header_ip = mysql_real_escape_string(inet_pton(get_ip_address()));
$peer_ip = mysql_real_escape_string(inet_pton($_SERVER['REMOTE_ADDR']));

$sql = sprintf("INSERT INTO users (username, email, reg_hdr_ip, reg_peer_ip)
        VALUES
        ('%s','%s','%s','%s')",
        $username,
        $email,
        $header_ip,
        $peer_ip);

if (!mysql_query($sql,$bd))
  {
  die('Error: ' . mysql_error());
  }
echo "Congratulations! Your username has been saved.";

$result = mysql_fetch_array(mysql_query(sprintf("SELECT userid FROM users WHERE username='%s' AND email='%s'", $username, $email), $bd));

include('mail_send.php');
//Send email confirmation

hypothesis_mail_send($_POST['email'], $_POST['username'], $result['userid']);

mysql_close($bd);
?>
