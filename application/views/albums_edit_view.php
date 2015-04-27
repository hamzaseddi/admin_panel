<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<strong>Изменение альбома</strong>
					</h2>
				</div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('gallery/edit_alb/');?>">
					<input type="hidden" name="id" value ="<?php echo $data['album'] -> id; ?>">
						<div class="form-group">
							<label for="album_name">Нащвание альбома</label>
							<input type="text" class="form-control" name="album_name" placeholder="Название альбома" value="<?php echo $data['album'] -> name; ?>">
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