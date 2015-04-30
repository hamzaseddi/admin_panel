<div class="main ">
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="info-box danger">
				<i class="fa fa-dollar"></i>
				<div class="count">€<?php echo Accounting::get_profit_for_today();?></div>
				<div class="title">Доход</div>
				<div class="desc">Дневной доход</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="info-box warning">
				<i class="fa fa-dollar"></i>
				<div class="count">€<?php echo Accounting::get_profit_for_this_monts();?></div>
				<div class="title">Доход</div>
				<div class="desc">Месячный доход</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="info-box info">
				<i class="fa fa-smile-o"></i>
				<div class="count"><?php echo Clients::count();?></div>
				<div class="title">Клиенты</div>
				<div class="desc">Колличество клиентов в системе</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="info-box success">
				<i class="fa fa-smile-o"></i>
				<div class="count"><?php echo User::count();?></div>
				<div class="title">Работники</div>
				<div class="desc">Колличество работников</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2><i class="fa fa-check"></i>Список задач</h2>
					<div class="panel-actions">
						<a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
					</div>
				</div>
				<div class="panel-body no-padding">
					<div class="todo-list">
						<div class="header">Важные</div>
						<ul id="todo-1" class="todo-list-tasks">
							<li>
								<label class="custom-checkbox-item pull-left">
									<input class="custom-checkbox" type="checkbox"/>
									<span class="custom-checkbox-mark"></span>
								</label>
								<span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
							</li>
							<li>
								<label class="custom-checkbox-item pull-left">
									<input class="custom-checkbox" type="checkbox"/>
									<span class="custom-checkbox-mark"></span>
								</label>
								<span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
							</li>
						</ul>
					
						<div class="header">Нормальные</div>
						<ul id="todo-3" class="todo-list-tasks">
							<li>
								<label class="custom-checkbox-item pull-left">
									<input class="custom-checkbox" type="checkbox"/>
									<span class="custom-checkbox-mark"></span>
								</label>
								<span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
							</li>
							<li>
								<label class="custom-checkbox-item pull-left">
									<input class="custom-checkbox" type="checkbox"/>
									<span class="custom-checkbox-mark"></span>
								</label>
								<span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
							</li>
						</ul>
						<div class="header">Не обязательные</div>
						<ul id="todo-2" class="todo-list-tasks">
							<li>
								<label class="custom-checkbox-item pull-left">
									<input class="custom-checkbox" type="checkbox"/>
									<span class="custom-checkbox-mark"></span>
								</label>
								<span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
							</li>
							<li>
								<label class="custom-checkbox-item pull-left">
									<input class="custom-checkbox" type="checkbox"/>
									<span class="custom-checkbox-mark"></span>
								</label>
								<span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Новая задача">
							<br>
							<select name="" id="" style="width: 100%;">
								<option value="1">Важные</option>
								<option value="2">Нормальные</option>
								<option value="3">Не обязательные</option>
							</select>
						</div>

						<div class="pull-right">
							<button type="button" class="btn btn-success">Сохранить</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2><i class="fa fa-check"></i>Календарь событий</h2>
					<div class="panel-actions">
						<a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
					</div>
				</div>
				<div class="panel-body no-padding">
					<br>
					<div id="calendar" class="col-md-12"></div> 
				</div>
			</div>
		</div>
	</div>
</div>