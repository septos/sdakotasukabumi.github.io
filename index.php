<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<!--<div class="content">
	<h2>Home</h2>
	<p>Welcome to the home page!</p>
</div>-->
<div><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/d/embed?mid=1bdElm2UkyIbLJsOLKSb2l2jVY4yvp98&ehbc=2E312F&amp;height=955&amp;hl=en&amp;q=Taman%20Lapang%20Merdeka+(My%20Business%20Name)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="825" height="450" frameborder="0"><a href="https://www.maps.ie/population/">Population calculator map</a></iframe></div>
<!--<center><iframe src="https://www.google.com/maps/d/embed?mid=1bdElm2UkyIbLJsOLKSb2l2jVY4yvp98&ehbc=2E312F" id="iframe" scrolling="yes" width="935" height="555"></iframe></center>-->
<!--<div id="calendar"></div>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script> #default
<script src="kalender.js"></script>
<!--<script src="iframe.js"></script>-->

<?=template_footer()?>