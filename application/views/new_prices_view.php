<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<strong>Добовление новой цены и времяни.</strong>
					</h2>
				</div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('prices/add_new_price/');?>">
						<div class="form-group">
							<label for="company">Колличество времени</label>
							<input type="text" class="form-control" name="time_amount" placeholder="Колличество времени">
						</div>
						<div class="form-group">
							<label for="vat">Цена</label>
							<input type="text" class="form-control" name="price" placeholder="Цена">
						</div>
						<div class="form-group">
							<label for="street">Категория</label>
							<select class="form-control" name="type_id" >
								<?php
									foreach ($data as $category) {
										echo '<option value="'.$category -> id.'">'.$category -> name.'</option>';
									}								
								?>
							</select>
							<br/>
							<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> sДоавить</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
