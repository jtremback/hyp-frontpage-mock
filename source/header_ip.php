<?php
// See stackoverflow #1634782

/**
  * Retrieves the best guess of the client's actual IP address.
  * Takes into account numerous HTTP proxy headers due to variations
  * in how different ISPs handle IP addresses in headers between hops.
  */
function get_ip_address() {
  // check for shared internet/ISP IP
  if (!empty($_SERVER['HTTP_CLIENT_IP']) && validate_ip($_SERVER['HTTP_CLIENT_IP']))
    return $_SERVER['HTTP_CLIENT_IP'];

  // check for IPs passing through proxies
  if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    // check if multiple ips exist in var
    $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    foreach ($iplist as $ip) {
      if (validate_ip($ip))
       return $ip;
    }
  }
  if (!empty($_SERVER['HTTP_X_FORWARDED']) && validate_ip($_SERVER['HTTP_X_FORWARDED']))
    return $_SERVER['HTTP_X_FORWARDED'];
  if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
    return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
  if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
    return $_SERVER['HTTP_FORWARDED_FOR'];
  if (!empty($_SERVER['HTTP_FORWARDED']) && validate_ip($_SERVER['HTTP_FORWARDED']))
    return $_SERVER['HTTP_FORWARDED'];

  // return unreliable ip since all else failed
  return $_SERVER['REMOTE_ADDR'];
}

/**
  * Ensures an ip address is both a valid IP and does not fall within
  * a private network range.
  *
  * @param string $ip
  */
function validate_ip($ip) {
  if (filter_var($ip, FILTER_VALIDATE_IP, 
                      FILTER_FLAG_IPV4 | 
                      FILTER_FLAG_IPV6 |
                      FILTER_FLAG_NO_PRIV_RANGE | 
                      FILTER_FLAG_NO_RES_RANGE) === false) {
    return false;
  }
  return true;
}
?>
