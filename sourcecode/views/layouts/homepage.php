<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<title>SimpleEvent</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/theme/screen.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<body>
<div id="layout">
  <div id="header">
    <h1 id="logo"><a href="http://all-free-download.com/free-website-templates/">SimpleEvent</a></h1>
    <span id="slogan">Your slogan goes here</span>
    <hr class="noscreen" />
    <p class="noscreen noprint"> <em>Rychlá navigace: <a href="http://all-free-download.com/free-website-templates/">obsah</a>, <a href="http://all-free-download.com/free-website-templates/">navigace</a>.</em></p>
    <div id="quicknav"> <a href="http://all-free-download.com/free-website-templates/">Home</a> <a href="http://all-free-download.com/free-website-templates/">Contact</a> <a href="http://all-free-download.com/free-website-templates/">Sitemap</a> </div>
    <div id="search">
      <form href="http://all-free-download.com/free-website-templates/" method="post">
        <fieldset>
        <input type="text" id="phrase" name="phrase" value="search phrase" onfocus="if(this.value=='search phrase')this.value=''" />
        <input type="submit" id="submit" value="SEARCH" />
        </fieldset>
      </form>
    </div>
  </div>
  <hr class="noscreen" />
  <div id="nav" class="box">
  	<!--menu-->
    <ul>
      <li id="active"><a href="<?php echo Yii::app()->request->baseUrl;?>">Home</a></li>
      <li><a href="<?php echo $this->createUrl('page/contact',array('id'=>4));?>">Our products</a></li>
      <li><a href="<?php echo Yii::app()->request->baseUrl;?>/page/product">Our products</a></li>
      <li><a href="<?php echo Yii::app()->request->baseUrl;?>/page/about">About us</a></li>
      <li><a href="<?php echo Yii::app()->request->baseUrl;?>/page/portfolio">Portfolio</a></li>
      <li><a href="<?php echo Yii::app()->request->baseUrl;?>/page/contact" class="nosep">Contacts</a></li>
    </ul>
    <!--end menu-->
    <hr class="noscreen" />
  </div>
  <div id="container" class="box">
    <div id="obsah" class="content box">
      <?php echo $content;?>
    </div>
    <div id="panel-right" class="box panel">
      <div id="bottom">
        <div class="in"> <strong class="title">About me</strong>
          <div class="f-left about-img"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/theme/tmp/about.jpg" alt="" />
            <div></div>
          </div>
          <p class="f-left about-me"> <em>Name Surname</em> "Lorem ipsum dolor sit amet, consectetuer adip iscing elit, sed diam non ummy nibh euismod tincidunt u”</p>
          <div class="clear"></div>
          <br />
          <strong class="title">Categories</strong>
          <ul>
            <li><a href="http://all-free-download.com/free-website-templates/">Business</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Art &amp; Photography</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Communications</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Fashion</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Hosting</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Interior &amp; Furniture</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Music</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Real Estate</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Sport</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Travel</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Web design</a></li>
          </ul>
          <strong class="title">Entries by month</strong>
          <ul>
            <li><a href="http://all-free-download.com/free-website-templates/">August 2008 (38)</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">July 2008 (81)</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">June 2008 (58)</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">May 2008 (60)</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">April 2008 (68)</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">March 2008 (82)</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">February 2008 (36)</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div id="foot">
    <div id="page-bottom"> <a href="#header">Go up</a> </div>
    <p class="f-left">&copy; 2008 - <a href="http://all-free-download.com/free-website-templates/">SimpleEvent</a></p>
    <p class="f-right"><a href="http://www.tvorimestranky.cz" id="webdesign">Webdesign</a>: <a href="http://www.tvorimestranky.cz">TvorimeStranky.cz</a> | Sponsored by: <a href="http://www.topas-tachlovice.cz/topas-tachlovice.aspx">Tachlovice</a></p>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
