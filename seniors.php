<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Photography</title>
<style type="text/css">
@import url("css/styles.css");
</style>
<script src="js/common.js" type="text/javascript"></script>
</head>
<body id="portfolio" class="seniors">
<div id="wrapper">
  <?php include("includes/header.php") ?>
  <div id="content">
    <h2>Portfolio</h2>
    <?php include("includes/subnav.php") ?>
    <div id="flash">
      <div id="flashContent"> </div>
      <script type="text/javascript">
		var so = new SWFObject("flash/seniors.swf", "mymovie", "802", "582", "9", "#000");
		so.useExpressInstall('flash/expressinstall.swf');
		so.addParam("quality", "high");
		so.addParam("wmode", "transparent");
		so.addParam("salign", "t");
		so.write("flashContent");
 </script>
    </div>
  </div>
</div>
<?php include("includes/footer.php") ?>
</body>
</html>
