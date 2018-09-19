<div class='container'><h2 id='titlerewrite'>Blog post preview</h2></div>
<div class="container" id='slideshow_container' style='display:none;'>
    <div id="myCarousel" class="carousel" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner"></div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br><br>
<div id='blogbody' class='container text-center'></div>
<br><br>
<div class='container'>
    <form class='col-md-6 col-md-offset-3' method='post' enctype='multipart/form-data'>
        <div class='form-group form-group-lg'>
           <label for='title'>Title</label>
           <input type='text' name='title' id='title' data-target='#titlerewrite' placeholder='Post Title' class='form-control'/>
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
           <textarea name='body' id='body' data-target='#blogbody' placeholder='Post Body' class='form-control' rows='5'></textarea>
        </div>
        <br>
        <div class='form-group form-group-lg'>
           <input type='submit' class='form-control btn-lg btn btn-primary' value='Upload Post'/>
        </div>
    </form>
</div>
