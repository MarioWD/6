<header class="">
</header>
<main style='padding-top:50px;'>
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
            <li><a href="#gal-imgs">Gallery</a></li>
            <?php if ($this->code && $_COOKIE['m_lia'] && $_COOKIE['m_lia'] == $this->code) {?>
            <li><a href="/Imager">Imager</a></li>
            <li><a href="/Blogger">Blogger</a></li>
            <?php } else { ?>
            <li><a href="/Login">Login</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

