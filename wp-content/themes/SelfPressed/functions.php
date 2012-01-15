<?php
// Insert OpenID Stuff
function openIdInfo() {
  ?>
  <link rel="openid.server" href="http://www.myopenid.com/server" />
      <link rel="openid.delegate" href="http://whweiskopf.myopenid.com/" />
      <link rel="openid2.local_id" href="http://whweiskopf.myopenid.com" />
      <link rel="openid2.provider" href="http://www.myopenid.com/server" />
      <meta http-equiv="X-XRDS-Location" content="http://www.myopenid.com/xrds?username=whweiskopf.myopenid.com" />
  <?php
  }
add_action('wp_head', 'openIdInfo', 4);
?>