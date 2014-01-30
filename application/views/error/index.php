<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->_title;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="<?php echo $this->_meta_description;?>">
        <meta name="Keywords" content="<?php echo $this->_meta_keywords;?>">
        <link href="public/css/reset.css" rel="stylesheet" type="text/css">
        <link href="public/css/style.css" rel="stylesheet" type="text/css">
        <script src="public/js/script.js"></script>
    </head>
    <body>
        <div class="header"> 
            <div class="site-name"><?php echo $this->_sitename;?></div> 
        </div>
        <div class="nav">
            <div class="nav-links">
              <a href="./">Home</a>
              <a href="./about">About</a>
              <a href="./contact">Contact</a>
            </div>
        </div>
        <div class="content curve-border5 center"> 
            <h1 class="font32"><?PHP echo $this->_h1;?></h1>
            <p><?PHP echo $this->_content;?></p>
        </div>
    </body>
</html>
