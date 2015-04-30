<div class="main">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
	            <div class="panel-heading">
	                <h2>
	                	<strong>Создание новой категории</strong>
	                </h2>
	            </div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('storage/create_cat/');?>">
						<div class="form-group">
					    	<label for="album_name">Название категории</label>
					    	<input type="text" class="form-control" name="cat_name" placeholder="Название категории">
					    	<br>
						    <button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i>Доавить</button>
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
						Список созданных категорий
					</h2>
					<div class="panel-actions">
						<a href="#" class="btn-minimize">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Название категории</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($data['categories'] as $cat) {
									echo '<tr>
											<td>'.$cat -> name.'</td>';
									echo '<td>
											<a href="'.base_url('storage/delete_cat/?id=').$cat -> id.'">Удалить</a> / 
											<a href="'.base_url('storage/edit_cat_index/?id=').$cat -> id.'">Изменить</a>
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