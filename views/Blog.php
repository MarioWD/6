<div class='container'>
    <h1 class='text-center'><?=$this->blog['title']?></h1>
    <br><br>
    <div id="myCarousel" class="carousel" data-ride="carousel">
        <?php if ($this->blog_count > 1) { ?>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php for ($i = 1; $i <= $this->blog_count; ++$i) { ?>
            <li data-target="#myCarousel" data-slide-to="<?=$i?>" class="<?=$i?'':'active'?>"></li>
            <?php } ?>
        </ol>
        <?php } ?>

        <!-- Wrapper for slides -->
        <div class="carousel-inner text-center">
            <?php foreach ($this->blog['images'] as $i => $image) { ?>
            <div class='item <?=$i?'':'active'?>'><img src='/<?=$image?>'/></div>
            <?php } ?>
        </div>

        <?php if ($this->blog_count > 1) { ?> 
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        <?php } ?>
    </div>
    <br><br>
    <p class='text-center'><?= $this->blog['body']?></p>
    <br><br>
    <?php if ($this->verify) { ?>
    <form method='post' actions='' class='form'>
        <input type='hidden' name="blog_id" value='<?=$this->get['bi']?>'/>
        <input type='hidden' name='action' value='delete'/>
        <input type='submit' class='btn btn-danger' value='Delete' style='display: block;margin: auto;'/>
    </form>
    <?php } ?>
</div>
