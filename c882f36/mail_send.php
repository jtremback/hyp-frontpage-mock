<?php

/**
 * Template for the registration email message.
 */
function hypothesis_mail_template($variables) {
  $message = array();

  $message['subject'] = 'Hypothes.is username confirmation: ' . $variables['username'];
  $message['body'] = <<<MESSAGE
Welcome to Hypothes.is

You've just reserved the username: {$variables['username']}

Please click the link below to confirm:

{$variables['confirm_link']}

We'll notify you when our beta period begins!

We may also send you (very) occasional updates. If you prefer not to receive ANY emails from us, then also click the link below. (Or opt out any time in the future).

{$variables['unsubscribe_link']}

If you have interest in helping as a designer, developer or in another role, please tell us a little more at join@hypothes.is

Thanks for your interest!  We're excited to be moving forward.

Dan Whaley
Hypothes.is
MESSAGE;

  return $message;
}

/**
 * Send confirmation email message.
 */
function hypothesis_mail_send($email_address, $username, $userid) {
  $variables['username'] = $username;
  $variables['confirm_link'] = hypothesis_mail_build_link('confirm', $userid);
  $variables['unsubscribe_link'] = hypothesis_mail_build_link('unsubscribe', $userid);

  $headers[] = 'From: Hypothes.is <reg@hypothes.is>';

  $message = hypothesis_mail_template($variables);
  mail($email_address, $message['subject'], $message['body'],implode("\r\n", $headers));
  mail('reg@hypothes.is', $message['subject'], $message['body'],implode("\r\n", $headers));
}

/**
 * Generate a confirmation link.
 */
function hypothesis_mail_build_link($action, $userid) {
  $server = $_SERVER['HTTP_HOST'];

  $path = explode('/', $_SERVER['PHP_SELF']);
  array_pop($path);
  $path[] = 'account.php';
  $path = implode('/', $path);

  return 'http://' . $server . $path . '?id=' . $userid . '&auth=' . hypothesis_mail_auth_code($userid) . '&action=' . $action;
}

/**
 * Generate authentication code.
 *
 * This code is necessary to avoid users confirms and unsubscribes accounts
 * for another users guessing the userid.
 */
function hypothesis_mail_auth_code($userid) {
  $salt = 'hypothesis authentication for userid: ';
  // Do not change this, or all auth codes will need to be regenerated.

  return substr(md5($salt . $userid), 0, 10);
}

/**
 * Validate authentication code against a userid.
 */
function hypothesis_mail_auth_validate($userid, $auth_code) {
  return ($auth_code == hypothesis_mail_auth_code($userid));
}
