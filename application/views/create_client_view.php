<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
	            <div class="panel-heading">
	                <h2>
	                	<strong>Доавление нового клиента</strong>
	                </h2>
	            </div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('clients/new_client/');?>">
						<div class="form-group">
					    	<label for="first_name">Имя</label>
					    	<input type="text" class="form-control" name="first_name" placeholder="Имя клиента">
					  	</div>
						<div class="form-group">
					    	<label for="last_name">Фамилия</label>
					    	<input type="text" class="form-control" name="last_name" placeholder="Фамилия клиента">
					  	</div>
						<div class="form-group">
					    	<label for="birthday">Дата рождения</label>
					    	<input type="date" class="form-control" name="birthday" placeholder="Дата рождения клиента">
					  	</div>
					  	<div class="form-group">
					    	<label for="phone">Телефон</label>
					    	<input type="text" class="form-control" name="phone" placeholder="Телефон клиенты">
					  	</div>
						<div class="form-group">
					    	<label for="email">Email</label>
					    	<input type="email" class="form-control" name="email" placeholder="Email клиента">
					  	</div>
					  	<div class="form-group">
					    	<label for="info">Дополнительная информация</label>
					    	<input type="text" class="form-control" name="info" placeholder="Дополнительная информация о клиенте">
					  	</div>
					  	<div class="form-group">
					    	<label for="type_id">Дополнительная информация</label>
					    	<input type="text" class="form-control" name="type_id" placeholder="Тип клиента">
					    	<br>
						    <button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-dot-circle-o"></i> Доавить</button>
					  	</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>