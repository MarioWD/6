<div class='container'>
    <h1>Sections</h1>
    <hr>
    <div class='row'>
    <?php foreach ($this->sections as $sec) { ?>
        <div class='col-sm-4 section-panel' style='margin-top: 10px;'>
            <span class='thumbnail'><img src='<?=$sec['image']?>'/></span>
            <h4><?=$sec['name']?></h4>
            <form action='' method='post' enctype='multipart/form-data'>
                <input type='hidden' value='<?=$sec['id']?>' name='id'/> 
                <div class='form-group'>
                    <input type='file' name='image' class='form-control'/>
                    <div class='help-block'>*Upload new image to update section banner</div>
                </div>
                <input type='submit' value='update' class='btn btn-primary'/>
            </form>
        </div> 
    <?php } ?>
    </div>
</div>
