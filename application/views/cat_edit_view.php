<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<strong>Изменение категории</strong>
					</h2>
				</div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('storage/edit_cat/');?>">
					<input type="hidden" name="id" value ="<?php echo $data['cat'] -> id; ?>">
						<div class="form-group">
							<label for="album_name">Название категории</label>
							<input type="text" class="form-control" name="cat_name" placeholder="Название альбома" value="<?php echo $data['cat'] -> name; ?>">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Изменить</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>