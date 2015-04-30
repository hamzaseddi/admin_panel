<div class="main sidebar-minified">
	<?php 
	foreach ($data['types'] as $category) {
		echo '<div class="row">
				<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>
							<i class="fa fa-align-justify"></i>
							<span class="break"></span>
							'.$category -> name.'
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
									<th>Колличество времени</th>
									<th>Цена</th>
									<th>Действие</th>
								</tr>
							</thead>
							<tbody>';
								foreach ($data['prices'] as $price_row) {
								   if( ($price_row -> type_id) == $category-> id ) {
										echo ' 
										<tr>
											<td>'.$price_row -> time_amount.'.ч</td>
											<td>'.$price_row -> price.' euro</td>
											<td>
												<a href="'.base_url('prices/delete_price_entry/?id=').$price_row -> id.'">Удалить</a> /
												<a href="'.base_url('prices/edit/?id=').$price_row -> id.'">Изменить</a> 
											</td>
										</tr>';
									}
								}
						echo '</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>';
		}
	?>
</div>