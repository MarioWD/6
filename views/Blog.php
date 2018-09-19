<div class='container'>
    <h1 class='text-center'><?=$this->blog['title']?></h1>
    <br><br>
    <div id="myCarousel" class="carousel" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php for ($i = 0; $i <= $this->blog_count; ++$i) { ?>
            <li data-target="#myCarousel" data-slide-to="<?=$i?>" class="<?=$i?'':'active'?>"></li>
            <?php } ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
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
</div>
