<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php $this->start('header');?>
<title>Thorpe Obazee</title>
<meta property="og:site_name" content="Thorpe Obazee"/>
<meta property="og:type" content="blog"/>
<?php $this->end();?>
<?php echo $this->fetch('header');?>
<?php echo $this->Html->css('bootstrap.min'); ?>
<?php echo $this->Html->css('font-awesome.min'); ?>
<?php echo $this->Html->css('font-awesome-ie7.min'); ?>
<?php echo $this->Html->css('prism'); ?>
<?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Alef:400,700'); ?>
<?php echo $this->Html->css('style'); ?>
<?php if ( ! $this->Session->read('Auth.User')):?>
<style type="text/css">
body > .container {
    margin-top: 40px;
}
</style>
<?php endif;?>
<?php echo $this->Html->script('jquery.min'); ?>
</head>
<body>
<!-- end .container_12 -->
<?php echo $this->element('top-navigation');?>
<div class="container header">
  <?php echo $this->element('header', array());?>
  <div class="clearfix">&nbsp;</div>
</div>
<div class="body">
  <div class="container">
      <div class="row-fluid">
          <?php echo $this->fetch('content'); ?>
          <?php echo $this->fetch('sidebar');?>
      </div>
  </div>
</div>
<div class="footer">
  <div class="container">
    <div class="row-fluid">
      <?php echo $this->element('footer', array());?>
    </div>
  </div>
</div>
<!-- end .container_16 -->
<script>
$(function(){
    $('a').tooltip();
});
</script>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Html->script('prism'); ?>
<?php echo $this->fetch('script');?>
</body>
</html>