<div class="main ">	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2>
						<i class="fa fa-picture-o"></i>
						Фотографии
					</h2>
					<div class="panel-actions">
						<a href="gallery.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
 						<?php 
							foreach ($data['photos'] as $photo) {
								echo '<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
										<a href=""><img class="img-thumbnail" src="'.base_url('uploads/').$photo -> file_name .'" alt="Image"></a>
						 				<p class="text-center">'.$photo -> file_name .'</p>
						 				<p class="text-center"><a href="'.base_url('gallery/delete_photo/').'?id='.$photo -> id .'">Удалить</a></p>
						   			</div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>