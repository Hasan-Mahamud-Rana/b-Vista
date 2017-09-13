<?php
defined('_JEXEC') or die;
// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
// Add current user information
$user = JFactory::getUser();
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage()); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<jdoc:include type="head" />
<link rel="icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/favicon.ico">
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/template.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Main Booststrap JS -->
</head>
<body>
<!-- Menu Module -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="top row">
    <div class="custom wcb">
      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 pull-right"><jdoc:include type="modules" name="language-switcher" style="none" /></div>
      <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 pull-right"><jdoc:include type="modules" name="quick-contact" style="none" /></div>
    </div>
  </div>
  <div class="custom wcb">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><div class="navbar-header"><a class="navbar-brand" href="/"><span class="logo"></span></a></div></div>
    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8"><div id="navbar" class="navbar-collapse pull-right"><jdoc:include type="modules" name="main-menu" style="none" /></div></div>
  </div>
</nav>
<!--Body Content--><div class="container"><div class="glass1">&nbsp;</div><div class="row"><?php	echo $doc->getBuffer('modules', '404Page', array('style' => 'none')); ?></div></div><!-- End Body Container --> 
<!--Footer Content-->
<footer><!--Featured box--><div class="container footer"><div class="row"><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="footer-box-1" style="xhtml" /></div><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="footer-box-2" style="xhtml" /></div><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="footer-box-3" style="xhtml" /></div></div></div><!--End Featured box--></footer>
<div class="container-fluid copyright">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-md-7 col-lg-7">&copy; <a href="http://www.bordingvista.com">BordingVista</a>, ltd, 2008-2014. All rights reserved.</div>
      <div class="col-xs-12 col-sm-2 col-md-5 col-lg-5"><a class="monogram" href="http://www.bordingvista.com"></a></div>
      <jdoc:include type="modules" name="copyright" style="xhtml" />
    </div>
  </div>
</div>
<!--End Footer Content--> 
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/jquery.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/bootstrap.js"></script> 
</body>
</html>