<div class="main">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
	            <div class="panel-heading">
	                <h2>
	                	<strong>Создание нового альбома</strong>
	                </h2>
	            </div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('gallery/create_album/');?>">
						<div class="form-group">
					    	<label for="album_name">Название альбома</label>
					    	<input type="text" class="form-control" name="album_name" placeholder="Название альбома">
					    	<br>
						    <button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Доавить</button>
					  	</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<i class="fa fa-align-justify"></i>
						<span class="break"></span>
						Список созданных альбомов
					</h2>
					<div class="panel-actions">
						<a href="table.html#" class="btn-minimize">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Название альбома</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($data['albums'] as $album) {
									echo '<tr>
											<td>'.$album -> name.'</td>';
									echo '<td>
											<a href="'.base_url('gallery/delete_album/?id=').$album -> id.'">Удалить</a> / 
											<a href="'.base_url('gallery/edit_album/?id=').$album -> id.'">Изменить</a>
											</td>
										</tr>';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>