<div class="main ">
	<div class="row">	
		<div class="col-sm-12">
			<div class="panel panel-default">
	            <div class="panel-heading">
	                <h2>
	                	<strong>Изменение информации о сотруднике</strong>
	                </h2>
	            </div>
				<div class="panel-body">
					<form method="POST" action="<?php echo base_url('workers/edit_user/');?>">
					<input type="hidden" name="id" value ="<?php echo $data['worker'] -> id; ?>">
						<div class="form-group">
					    	<label for="company">Имя</label>
					    	<input type="text" class="form-control" name="first_name" placeholder="Имя сотрудника" value="<?php echo $data['worker'] -> first_name; ?>">
					  	</div>
						<div class="form-group">
					    	<label for="vat">Фамилия</label>
					    	<input type="text" class="form-control" name="last_name" placeholder="Фамилия сотрудника" value="<?php echo $data['worker'] -> last_name; ?>">
					  	</div>
						<div class="form-group">
					    	<label for="street">Дата рождения</label>
					    	<input type="text" class="form-control" name="birthday" placeholder="Дата рождения сотрудника" value="<?php echo $data['worker'] -> birthday; ?>">
					  	</div>
					  	<div class="form-group">
					    	<label for="street">Телефон</label>
					    	<input type="text" class="form-control" name="phone" placeholder="Телефон сотрудника" value="<?php echo $data['worker'] -> phone; ?>">
					  	</div>
						<div class="form-group">
					    	<label for="country">Email</label>
					    	<input type="email" class="form-control" name="email" placeholder="Email сорудника" value="<?php echo $data['worker'] -> email; ?>">
					  	</div>
					  	<div class="form-group">
						    <button type="submit" class="btn btn-default pull-right">Изменить</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
<pre>
