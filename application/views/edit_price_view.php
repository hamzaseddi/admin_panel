<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
	            <div class="panel-heading">
	                <h2>
	                	<strong>Изменение</strong>
	                </h2>
	            </div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('prices/edit_price/');?>">
					<input type="hidden" name="id" value ="<?php echo $data['entry'] -> id; ?>">
						<div class="form-group">
					    	<label for="company">Колличество времени</label>
					    	<input type="text" class="form-control" name="time_amount" placeholder="1 .ч" value="<?php echo $data['entry'] -> time_amount; ?>">
					  	</div>
						<div class="form-group">
					    	<label for="vat">Цена</label>
					    	<input type="text" class="form-control" name="price" placeholder="12 euro" value="<?php echo $data['entry'] -> price; ?>">
					  	</div>
						<div class="form-group">
					    	<label for="street">Категория</label>
					    	<select class="form-control" name="type_id" >
								<?php
									foreach ($data['types'] as $category) {
										echo '<option value="'.$category -> id.'">'.$category -> name.'</option>';
									}								
								?>
							</select>
							<br>
						    <button type="submit" class="btn btn-default pull-right">Изменить</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>