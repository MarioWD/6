<div class='container'>
    <form class='col-md-6 col-md-offset-3' method='post' enctype='multipart/form-data'>
        <div class='form-group form-group-lg'>
           <label for='title'>Title</label>
           <input type='text' name='title' id='title' placeholder='Post Title' class='form-control'/>
        </div>
        <br>
        <div class='form-group form-group-lg'>
           <label for='images'>Post Images</label>
           <input type='file' name='images[]' id='images' placeholder='Post images' class='form-control' multiple/>
            <div class='help-block'>Note: Supported image format: .jpeg, .jpg, .png, .gif</div>
        </div>
        <br>
        <div class='form-group form-group-lg'>
           <label for='body'>Post Body</label>
           <textarea name='body' id='body' placeholder='Post Body' class='form-control' rows='5'></textarea>
        </div>
        <br>
        <div class='form-group form-group-lg'>
           <input type='submit' class='form-control btn-lg btn btn-primary' value='Upload Post'/>
        </div>

    </form>
</div>
