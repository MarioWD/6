<?php if ($this->banner_data) { ?>
<style>
.hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?=$this->banner_data['image']?>");
    background-position: center;
}
</style>
<?php } ?>
<div class='fluid-container'>
    <div class="hero-image row">
      <div class="hero-text">
        <img src='/logo/white_logo.png' style='max-width: 100%;'/>
      </div>
    </div>
</div>
<br><br>
<br><br>
<div class='container'>
    <h2 id='gal-imgs' style='margin-bottom: -50px;'>Blogs</h2>
    <div class='calendar-selector'>
    <?php foreach ($this->months as $key => $array) { ?>
        <a class='js-month-sel <?=$key == date('n')?'active':''?>' data-ajaxflag='month-changer' data-start='<?=$array[0]?>' data-end='<?=$array[1]?>'><?=date('F', mktime(0, 0, 0, $key, 1))?></a>
    <?php } ?>
    </div>
    <br>
    <div class='img-row'>
        <div class='column'>
        <?php foreach ($this->blogs as $counter => $blog) { ?>
            <?php $blog['images'] = unserialize($blog['images'])[0];?>
                <a href='/Blog/?bi=<?=$blog['id']?>' class='js-blog-entry' data-title='<?=$blog['title']?>'><img src='/<?=$blog['images']?>'/></a>
            <?php if ($counter%$this->per_column == 0) { ?>
                </div>
                <div class='column'>
            <?php } ?>
        <?php } ?>
        </div>
    </div>
    <br><br>
</div>
