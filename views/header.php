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
            <?php if (isset($_SESSION['ui-hash']) && isset($this->verify)) {?>
            <li><a href="/Blogger">Blogs</a></li>
            <li><a href="/Sections">Sections</a></li>
            <?php } else { ?>
            <li><a href="/Login">Login</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
</header>
<main style='padding-top:50px;'>

