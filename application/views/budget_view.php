<div class="main sidebar-minified">
	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-6">
				<div class="panel panel-default">
		            <div class="panel-heading">
		                <h2>
		                	<strong>Счета</strong>
		                </h2>
		            </div>
					<div class="panel-body">
						<form method="POST" action="<?php echo base_url('accounting/add_budget/');?>">
							<input type="hidden" name="cat_id" value="1">
							<input type="hidden" name="user_id" value ="<?php echo $_SESSION['user_id']; ?>">
							<div class="form-group">
						    	<label for="price">Цена</label>
						    	<input type="text" class="form-control" name="price" placeholder="10 Euro">
						  	</div>
						  	<div class="form-group">
						    	<label for="target">Цель</label>
						    	<input type="text" class="form-control" name="target" placeholder="Покупка ...">
						  	</div>
						  	<div class="form-group">
						    	<label for="date">Дата</label>
						    	<input type="date" class="form-control" name="date">
						  	</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Добовить</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
			        <div class="panel-heading">
			            <h2>
			            	<strong>Зарплаты</strong>
			            </h2>
			        </div>
					<div class="panel-body">
						<form method="POST" action="<?php echo base_url('accounting/add_budget/');?>">
							<input type="hidden" name="cat_id" value="2">
							<input type="hidden" name="user_id" value ="<?php echo $_SESSION['user_id']; ?>">
							<div class="form-group">
						    	<label for="price">Цена</label>
						    	<input type="text" class="form-control" name="price" placeholder="10 Euro">
						  	</div>
						  	<div class="form-group">
						    	<label for="target">Цель</label>
						    	<input type="text" class="form-control" name="target" placeholder="Покупка ...">
						  	</div>
						  	<div class="form-group">
						    	<label for="date">Дата</label>
						    	<input type="date" class="form-control" name="date">
						  	</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Добовить</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="col-lg-6">
				<div class="panel panel-default">
		            <div class="panel-heading">
		                <h2>
		                	<strong>Оборудование</strong>
		                </h2>
		            </div>
					<div class="panel-body">
						<form method="POST" action="<?php echo base_url('accounting/add_budget/');?>">
							<input type="hidden" name="cat_id" value="3">
							<input type="hidden" name="user_id" value ="<?php echo $_SESSION['user_id']; ?>">
							<div class="form-group">
						    	<label for="price">Цена</label>
						    	<input type="text" class="form-control" name="price" placeholder="10 Euro">
						  	</div>
						  	<div class="form-group">
						    	<label for="target">Цель</label>
						    	<input type="text" class="form-control" name="target" placeholder="Покупка ...">
						  	</div>
						  	<div class="form-group">
						    	<label for="date">Дата</label>
						    	<input type="date" class="form-control" name="date">
						  	</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Добовить</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
		        <div class="panel-heading">
		            <h2>
		            	<strong>Софт</strong>
		            </h2>
		        </div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('accounting/add_budget');?>">
						<form method="POST" action="<?php echo base_url('accounting/add_budget/');?>">
							<input type="hidden" name="cat_id" value="4">
							<input type="hidden" name="user_id" value ="<?php echo $_SESSION['user_id']; ?>">
							<div class="form-group">
						    	<label for="price">Цена</label>
						    	<input type="text" class="form-control" name="price" placeholder="10 Euro">
						  	</div>
						  	<div class="form-group">
						    	<label for="target">Цель</label>
						    	<input type="text" class="form-control" name="target" placeholder="Покупка ...">
						  	</div>
						  	<div class="form-group">
						    	<label for="date">Дата</label>
						    	<input type="date" class="form-control" name="date">
						  	</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Добовить</button>
							</div>
						</form>	
					</form>	
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
		            	<strong>Последнии 5 затрат</strong>
		            </h2>
		        </div>
				<div class="panel-body">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Категория</th>
								<th>Платильщик</th>
								<th>Цель</th>
								<th>Сумма</th>
								<th>Дата</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach ($data['history'] as $history) {
									echo '
										<tr>
											<td>
												'.$history->name.'
											</td>
											<td>
												'.$history->first_name.' '.$history->last_name.'
											</td>
											<td>
												'.$history->target.'
											</td>
											<td>
												'.$history->price.'
											</td>
											<td>
												'.$history->date.'
											</td>
											
											<td>
												<a href="'.base_url('accounting/edit_budget_index/').'?id='.$history->id.'">Изменить</a> /
												<a href="'.base_url('accounting/delete_budget/').'?id='.$history->id.'">Удалить</a>
											</td>
										</tr>
									';
								}
								?>	
			   			</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>