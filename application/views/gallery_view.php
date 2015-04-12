<div class="main ">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" data-original-title>
                    <h2>
                        <i class="fa fa-picture-o"></i>
                        Gallery
                    </h2>
                    <div class="panel-actions">
                        <a href="gallery.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
                        <a href="gallery.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="gallery.html#" class="btn-close"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo1.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo2.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo3.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo4.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo5.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo6.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo7.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo8.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo9.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo10.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo11.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo12.jpg" alt="Sample Image">
                        </div>
                        <div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
                            <img class="img-thumbnail" src="assets/img/gallery/photo13.jpg" alt="Sample Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="<?php echo base_url('gallery/upload_photo'); ?>" method="post" enctype="multipart/form-data">   
        <input type="file" name="test" /><br>
        <select name="event" id=""><br>
            <option value="1">event1</option>
            <option value="2">event2</option>
            <option value="3">event3</option>
        </select><br>
        <br><input type="submit" value="Submit me" />  
    </form>
</div>