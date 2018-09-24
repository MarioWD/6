<?php if ($this->banner_data) { ?>
<style>
.hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?=$this->banner_data['image']?>");
    background-position: bottom;
}
</style>
<?php } ?>
<div class='fluid-container'>
    <div class="hero-image row">
      <div class="hero-text">
        <p>Login</p>
      </div>
    </div>
</div>
<br>
<br>
<div class='container'>
    <?php if (isset($this->verify) && !$this->verify) { ?>
    <div class="alert alert-danger alert-dismissible" role="alert" style='margin-bottom: 30px;'>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Danger!</strong> Better check yourself, you're email could not be found in our system.
    </div>
    <?php } ?>
    <div class='row'>
        <form class='col-md-6 col-md-offset-3' method='post'>
            <div class='form-group <?=isset($this->verify) && !$this->verify?'has-error has-feedback':''?> form-group-lg'>
                <label for='authmail'>Email</label>
                <input type='email' class='form-control' id='authmail' aria-describedby="inputError2Status" placeholder='Your Email' name='email' value='<?=$this->post['email']?>'/>
                <?php if (isset($this->verify) && !$this->verify) { ?>
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span>
                <?php } ?>
            </div>
            <br>
            <div class='form-group form-group-lg'>
                <label for='authpass'>Password</label>
                <input type='password' class='form-control' id='authpass' placeholder='Password' name='password'/>
            </div>
            <br><br>
            <div class='form-group form-group-lg'>
                <input type="submit" class="btn btn-lg btn-primary form-control" value='Authorize'/>
            </div>
        </form>
    </div>
</div>
