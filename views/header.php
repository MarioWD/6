<header class="">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <?php if ($this->view == 'Home') { ?>
            <li><a href="#gal-imgs">Gallery</a></li>
            <?php } ?>

            <?php if (isset($_SESSION['ui-hash']) && isset($this->verify)) {?>
            <li><a href="/Imager">Imager</a></li>
            <li><a href="/Blogger">Blogger</a></li>
            <?php } else { ?>
            <li><a href="/Login">Login</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

</header>
<main style='padding-top:50px;'>
<?php if ($this->view == 'Home') { ?>
<div class='fluid-container'>
    <div class="hero-image row">
      <div class="hero-text">
        <p>6th Sense Company</p>
      </div>
    </div>
</div>
<br><br>
<?php } elseif($this->view == 'Login') { ?>
<div class='fluid-container'>
    <div class="hero-image-login row">
      <div class="hero-text">
        <p>Login</p>
      </div>
    </div>
</div>
<br>
<br>
<?php } elseif($this->view == 'Blogger') { ?>
<div class='fluid-container'>
    <div class="hero-image-blogger row">
      <div class="hero-text">
        <p>Blogger</p>
      </div>
    </div>
</div>
<br>
<br>
<?php } ?>
