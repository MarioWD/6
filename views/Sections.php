<div class='container'>
    <h1>Sections</h1>
    <hr>
    <div class='row'>
    <?php foreach ($this->sections as $sec) { ?>
        <div class='col-sm-4'>
            <span class='thumbnail'><img src='<?=$sec['image']?>'/></span>
            <h4><?=$sec['name']?></h4>
            <form action='' method='post'>
                <input type='hidden' value='<?=$sec['id']?>' name='id'/> 
                <div class='form-group'>
                    <input type='file' name='image' class='form-control'/>
                </div>
            </form>
        </div> 
    <?php } ?>
    </div>
</div>
