<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<strong>Изменение информации о затрате</strong>
					</h2>
				</div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('accounting/edit_budget/');?>">
					<input type="hidden" name="id" value ="<?php echo $data['budget'] -> id; ?>">
					<input type="hidden" name="user_id" value ="<?php echo $_SESSION['user_id'];?>">
						<div class="form-group">
							<label for="price">Цена</label>
							<input type="text" class="form-control" name="price" placeholder="10 Euro" value="<?php echo $data['budget'] -> price; ?>">
						</div>
						<div class="form-group">
							<label for="target">Цель</label>
							<input type="text" class="form-control" name="target" placeholder="Покупка/зарплата/..." value="<?php echo $data['budget'] -> target; ?>">
						</div>
						<div class="form-group">
							<label for="date">Дата</label>
							<input type="date" class="form-control" name="date"  value="<?php echo $data['budget'] -> date; ?>">
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