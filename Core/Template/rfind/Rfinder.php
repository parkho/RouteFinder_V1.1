<?php
$pfname = Auth::$userinfo->firstname;
$plname = Auth::$userinfo->lastname;
?>
<ul>
	<li>Welcome to route finder for <?php echo SITE_NAME ;?> <?php echo $pfname.' '.$plname ;?>.</li>
	<li>Just fill out the required fields and you're good to go.
</ul>
<iframe src="http://rfinder.asalink.net/free" frameborder="" name="" width="970px" height="500px" scrolling="yes"></iframe>