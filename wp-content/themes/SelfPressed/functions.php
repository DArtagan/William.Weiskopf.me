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

// Blueprint CSS
function BlueprintCSS() {?>
  <?php $styleDir = get_stylesheet_directory_uri(); ?>
  <link rel="stylesheet" href="<? echo $styleDir; ?>/blueprint/screen.css" type="text/css" media="screen, projection" />
  <link rel="stylesheet" href="<? echo $styleDir; ?>/blueprint/print.css" type="text/css" media="print" /> 
  <!--[if lt IE 8]>
    <link rel="stylesheet" href="<? echo $styleDir; ?>/blueprint/ie.css" type="text/css" media="screen, projection" />
  <![endif]-->
  <?php
}
add_action('wp_head', 'BlueprintCSS', 5);


// WebPutty
function WebPutty() {?>
  <link rel="stylesheet" type="text/css" href="http://www.webputty.net/css/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRiz2iMM" />
  <script type="text/javascript">(function(w,d){if(w.location!=w.parent.location||w.location.search.indexOf('__preview_css__')>-1){var t=d.createElement('script');t.type='text/javascript';t.async=true;t.src='http://www.webputty.net/js/agtzfmNzc2ZpZGRsZXIMCxIEUGFnZRiz2iMM';(d.body||d.documentElement).appendChild(t);}})(window,document);</script>
  <?php
}
add_action('wp_head', 'WebPutty');
?>
