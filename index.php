<?php defined( '_JEXEC' ) or die( 'Restricted access' ); $this->setMetaData('generator','Bording Vista');?><!DOCTYPE html><html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" ><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><jdoc:include type="head" /><link rel="icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/favicon.ico"><link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/apple-touch-icon-iphone.png" /><link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/apple-touch-icon-ipad.png" /><link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/apple-touch-icon-iphone-retina-display.png" /><link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/bootstrap.css" rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css'><link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/template.css" rel="stylesheet"><!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--></head><body><nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"><div class="top row"><div class="custom wcb"><?php if ($this->countModules( 'language-switcher' )) : ?><div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 pull-right"><jdoc:include type="modules" name="language-switcher" style="none" /></div><?php endif; ?><?php if ($this->countModules( 'quick-contact' )) : ?><div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 pull-right"><jdoc:include type="modules" name="quick-contact" style="none" /></div><?php endif; ?></div></div><div class="custom wcb"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="navbar-header"><a class="navbar-brand" href="<?php echo $this->baseurl ?>"><span class="logo"></span></a><!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> --></div></div><div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"><div id="navbar" class="navbar-collapse pull-right"><jdoc:include type="modules" name="main-menu" style="none" /></div></div><!--/.navbar-collapse --> </div></nav><?php if ($this->countModules( 'showcase' )) : ?><jdoc:include type="modules" name="showcase" style="xhtml" /><?php endif; ?><?php if ($this->countModules( 'custom-showcase' )) : ?><div class="container-fluid custom-showcase"><jdoc:include type="modules" name="custom-showcase" style="xhtml" /></div><?php endif; ?><div class="container featured"><div class="row"><?php if ($this->countModules( 'featured-box-1' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="featured-box-1" style="xhtml" /></div><?php endif; ?><?php if ($this->countModules( 'featured-box-2' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="featured-box-2" style="xhtml" /></div><?php endif; ?><?php if ($this->countModules( 'featured-box-3' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="featured-box-3" style="xhtml" /></div><?php endif; ?></div></div><div class="container"><div class="row"><jdoc:include type="modules" name="top" /><jdoc:include type="component" /><jdoc:include type="modules" name="bottom" /></div></div><div class="container featured bottom"><div class="row"><?php if ($this->countModules( 'featured-box-4' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="featured-box-4" style="xhtml" /></div><?php endif; ?><?php if ($this->countModules( 'featured-box-5' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="featured-box-5" style="xhtml" /></div><?php endif; ?><?php if ($this->countModules( 'featured-box-6' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="featured-box-6" style="xhtml" /></div><?php endif; ?></div></div><?php if ($this->countModules( 'featured-bottom' )) : ?><div class="container-fluid featured-bottom"><jdoc:include type="modules" name="featured-bottom" style="xhtml" /></div><?php endif; ?><?php if ($this->countModules( 'content-bottom' )) : ?><div class="container content-bottom"><jdoc:include type="modules" name="content-bottom" style="xhtml" /></div><?php endif; ?><?php if ($this->countModules( 'bottom-showcase' )) : ?><div class="container-fluid bottom-showcase"><jdoc:include type="modules" name="bottom-showcase" style="xhtml" /></div><?php endif; ?><footer><div class="container footer"><div class="row"><?php if ($this->countModules( 'footer-box-1' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="footer-box-1" style="xhtml" /></div><?php endif; ?><?php if ($this->countModules( 'footer-box-2' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="footer-box-2" style="xhtml" /></div><?php endif; ?><?php if ($this->countModules( 'footer-box-3' )) : ?><div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><jdoc:include type="modules" name="footer-box-3" style="xhtml" /></div><?php endif; ?></div></div></footer><div class="container-fluid copyright"><div class="container"><div class="row"><div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">© <a href="http://www.bordingvista.com">BordingVista</a> ltd, 2008-2014. All rights reserved.</div><div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><a class="monogram" href="http://www.bordingvista.com"></a></div><div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style="text-align: right;"><a id="back-top" onClick="jQuery('html, body').animate({scrollTop : 0},800);"><span class="glyphicon glyphicon-arrow-up to-top"></span></a></div><jdoc:include type="modules" name="copyright" style="xhtml" /></div></div></div><script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/bootstrap.js"></script></body></html>