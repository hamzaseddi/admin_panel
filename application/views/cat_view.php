<div class="main ">	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2>
						<i class="fa fa-picture-o"></i>
						Документы
					</h2>
					<div class="panel-actions">
						<a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
 						<?php 
							foreach ($data['docs'] as $doc) {
								echo '<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
										<a href=""><img class="img-thumbnail" src="'.base_url('uploads/docs').$doc -> file_name .'" alt=""></a>
						 				<p class="text-center">'.$doc -> file_name .'</p>
						 				<p class="text-center"><a href="'.base_url('gallery/delete_photo/').'?id='.$doc -> id .'">Удалить</a></p>
						   			</div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>