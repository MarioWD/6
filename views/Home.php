<div class='container'>
    <h2>Meet the Team</h2>
    <br>
    <div class='row'>
        <div class="col-md-12">
            <div class="blockquote-box clearfix">
                <div class="square pull-left">
                    <img src="http://placehold.it/60/8e44ad/FFF&text=B" alt="" class="" />
                </div>
                <h4>6th Sense</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante.
                </p>
            </div>
            <div class="blockquote-box blockquote-primary clearfix">
                <div class="square pull-left">
                    <img src="http://placehold.it/60/8e44ad/FFF&text=B" alt="" class="" />
                </div>
                <h4>Micheal</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante. <a href="http://www.jquery2dotnet.com/search/label/jquery">jquery2dotnet</a>
                </p>
            </div>
            <div class="blockquote-box blockquote-success clearfix">
                <div class="square pull-left">
                    <img src="http://placehold.it/60/8e44ad/FFF&text=B" alt="" class="" />
                </div>
                <h4>Team1</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante.
                </p>
            </div>
            <div class="blockquote-box blockquote-info clearfix">
                <div class="square pull-left">
                    <img src="http://placehold.it/60/8e44ad/FFF&text=B" alt="" class="" />
                </div>
                <h4>Team2</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante.
                </p>
            </div>
            <div class="blockquote-box blockquote-warning clearfix">
                <div class="square pull-left">
                    <img src="http://placehold.it/60/8e44ad/FFF&text=B" alt="" class="" />
                </div>
                <h4>Team3</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante.
                </p>
            </div>
            <div class="blockquote-box blockquote-danger clearfix">
                <div class="square pull-left">
                    <img src="http://placehold.it/60/8e44ad/FFF&text=B" alt="" class="" />
                </div>
                <h4>Team4</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante.
                </p>
            </div>

        </div>
    </div>
    <br><br>
    <h2 id='gal-imgs'>Image Gallery</h2>
    <br>
    <div class='img-row'>
        <div class='column'>
        <?php foreach ($this->gal_imgs as $img) { ?>
            <?php if (!is_file("images/$img")) { continue; } ?>
            <img <?=$this->gal_counter?> src='<?="../images/$img"?>'/>
            <?php if ($this->gal_counter && $this->gal_counter%$this->gal_per_column == 0) { ?>
            </div>
            <div class='column'>
            <?php } ?>
            <?php ++$this->gal_counter; ?>
        <?php } ?>
        </div>
    </div>
</div>

