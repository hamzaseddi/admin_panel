<div class="main ">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2>
						<i class="fa fa-picture-o"></i>
						Галлерея
					</h2>
					<div class="panel-actions">
						<a href="gallery.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<?php 
							foreach ($data['all_images'] as $image) {
								echo '<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
										<img class="img-thumbnail" src="'.base_url('uploads/'.$image->file_name).'" alt="Sample Image">
									  </div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
	    <div class="panel-heading">
	        <h2>
	        	<strong>Доавление новой фотографии</strong>
	        </h2>
	    </div>
		<div class="panel-body">
			<form action="<?php echo base_url('gallery/upload_photo'); ?>" method="post" enctype="multipart/form-data">  
				<div class="form-group">
			    	<label for="company">Фаил</label>
			    	<input type="file" class="form-control"  name="image">
			  	</div>
				
			  	<div class="form-group">
					<select name="album_id" class="form-control"  >
						<option value="1">event1</option>
						<option value="2">event2</option>
						<option value="3">event3</option>
					</select>
				    <br>
				    <button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Загрузить</button>
				</div>
			</form>	
		</div>
	</div>
</div>