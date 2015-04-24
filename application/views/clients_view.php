<div class="main">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<i class="fa fa-align-justify"></i>
						<span class="break"></span>
						Client type
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
								<th>Имя</th>
								<th>Фамилия</th>
								<th>Телефон</th>
								<th>День рождения</th>
								<th>Емаил</th>
								<th>Дополнительня информация</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($data['clients'] as $client) {
									echo '<tr><td>'.$client -> first_name.'</td>';
									echo '<td>'.$client -> last_name.'</td>';
									echo '<td>'.$client -> phone.'</td>';
									echo '<td>'.$client -> birthday.'</td>';
									echo '<td>'.$client -> email.'</td>';
									echo '<td>'.$client -> info.'</td>';
									echo '<td>
											<a href="'.base_url('clients/delete_client/?id=').$client -> id.'">Удалить</a> / 
											<a href="'.base_url('clients/edit/?id=').$client -> id.'">Изменить</a>
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