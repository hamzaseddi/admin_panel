<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<strong>Изменение информации о клиенте</strong>
					</h2>
				</div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('clients/edit_client/');?>">
					<input type="hidden" name="id" value ="<?php echo $data['client'] -> id; ?>">
						<div class="form-group">
							<label for="first_name">Имя</label>
							<input type="text" class="form-control" name="first_name" placeholder="Имя сотрудника" value="<?php echo $data['client'] -> first_name; ?>">
						</div>
						<div class="form-group">
							<label for="last_name">Фамилия</label>
							<input type="text" class="form-control" name="last_name" placeholder="Фамилия сотрудника" value="<?php echo $data['client'] -> last_name; ?>">
						</div>
						<div class="form-group">
							<label for="birthday">Дата рождения</label>
							<input type="text" class="form-control" name="birthday" placeholder="Дата рождения сотрудника" value="<?php echo $data['client'] -> birthday; ?>">
						</div>
						<div class="form-group">
							<label for="phone">Телефон</label>
							<input type="text" class="form-control" name="phone" placeholder="Телефон сотрудника" value="<?php echo $data['client'] -> phone; ?>">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Email сорудника" value="<?php echo $data['client'] -> email; ?>">
						</div>
						<div class="form-group">
							<label for="info">Дополнительная информация</label>
							<input type="text" class="form-control" name="info" placeholder="Дополнительная информация о клиенте" value="<?php echo $data['client'] -> info; ?>">
						</div>
						<div class="form-group">
							<label for="type_id">Тип клиента</label>
							<input type="text" class="form-control" name="type_id" placeholder="Тип клиента">
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