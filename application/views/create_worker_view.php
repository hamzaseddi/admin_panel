<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
	            <div class="panel-heading">
	                <h2>
	                	<strong>Доавление нового сотрудника</strong>
	                </h2>
	            </div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('workers/new_user/');?>">
						<div class="form-group">
					    	<label for="company">Имя</label>
					    	<input type="text" class="form-control" name="first_name" placeholder="Имя сотрудника">
					  	</div>
						<div class="form-group">
					    	<label for="vat">Фамилия</label>
					    	<input type="text" class="form-control" name="last_name" placeholder="Фамилия сотрудника">
					  	</div>
						<div class="form-group">
					    	<label for="street">Дата рождения</label>
					    	<input type="text" class="form-control" name="birthday" placeholder="Дата рождения сотрудника">
					  	</div>
					  	<div class="form-group">
					    	<label for="street">Телефон</label>
					    	<input type="text" class="form-control" name="phone" placeholder="Телефон сотрудника">
					  	</div>
						<div class="form-group">
					    	<label for="country">Email</label>
					    	<input type="email" class="form-control" name="email" placeholder="Email сорудника">
					  	</div>
					  	<div class="form-group">
						    <label for="city">Пароль</label>
						    <input type="password" class="form-control" name="password" placeholder="пароль сотрудника">
						    <br>
						    <button type="submit" class="btn btn-default pull-right">Доавить</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>