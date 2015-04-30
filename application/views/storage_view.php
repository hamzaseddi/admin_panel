<div class="main ">	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" data-original-title>
					<h2>
						<i class="fa fa-picture-o"></i>
						Категории документов
					</h2>
					<div class="panel-actions">
						<a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<?php 
							foreach ($data['categories'] as $cat) {
								echo '<div style="margin-bottom:30px" class="col-sm-2 col-xs-6">
										<a href="'.base_url('storage/show_cat/').'?id='.$cat->id.'"><img class="img-thumbnail" src="'.base_url('assets\img\album.jpg').'" alt="Image"></a>
										<p class="text-center">'.$cat->name .'</p>
									  </div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<strong>Доавление нового документа</strong>
					</h2>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url('storage/upload_doc'); ?>" method="POST" enctype="multipart/form-data">  
						<div class="form-group">
							<label for="file">Фаил</label>
							<input type="file" class="form-control"  name="doc">
						</div>
						
						<div class="form-group">
							<select name="cat_id" class="form-control"  >
								<?php 
									foreach ($data['categories'] as $cat) {
										echo '<option value="'.$cat -> id.'">'.$cat -> name.'</option>';
									}
								?>
							</select>
							<br>
							<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Загрузить</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>