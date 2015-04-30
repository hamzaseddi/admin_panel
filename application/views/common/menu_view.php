<body>
	<div id="theme-settings" class="hidden-sm hidden-xs">
		<div id="open-close">
			<i class="fa fa-cog"></i>
		</div>
		<h4>Options</h4>
		<ul id="options">
			<li>
				<label class="custom-checkbox-item pull-left">
					<input id="sm" class="custom-checkbox" type="checkbox"/>
					<span class="custom-checkbox-mark"></span>
				</label>
				<span class="desc">Sidebar Minified</span>
			</li>
			<li>
				<label class="custom-checkbox-item pull-left">
					<input id="sh" class="custom-checkbox" type="checkbox"/>
					<span class="custom-checkbox-mark"></span>
				</label>
				<span class="desc">Sidebar Hidden</span>
			</li>
			<li>
				<label class="custom-checkbox-item pull-left">
					<input id="rtl" class="custom-checkbox" type="checkbox"/>
					<span class="custom-checkbox-mark"></span>
				</label>
				<span class="desc">Right to Left</span>
			</li>
			<li>
				<label class="custom-checkbox-item pull-left">
					<input id="she" class="custom-checkbox" type="checkbox"/>
					<span class="custom-checkbox-mark"></span>
				</label>
				<span class="desc">Static Header</span>
			</li>
		</ul>

		<hr>

		<h4>Themes</h4>
		<ul id="themes">
			<li>
				<label class="custom-checkbox-item pull-left">
					<input id="default" class="custom-checkbox" type="checkbox"/>
					<span class="custom-checkbox-mark"></span>
				</label>
				<span class="desc">Default</span>
			</li>
			<li>
				<label class="custom-checkbox-item pull-left">
					<input id="elegant" class="custom-checkbox" type="checkbox"/>
					<span class="custom-checkbox-mark"></span>
				</label>
				<span class="desc">Elegant</span>
			</li>
			<li>
				<label class="custom-checkbox-item pull-left">
					<input id="sky" class="custom-checkbox" type="checkbox"/>
					<span class="custom-checkbox-mark"></span>
				</label>
				<span class="desc">Sky</span>
			</li>
		</ul>

		<hr>

		<button type="button" class="btn btn-success btn-block" id="restore">factory settings</button>

	</div>

	<div class="navbar" role="navigation">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('login/logout');?>"><i class="fa fa-power-off"></i></a></li>
			</ul>
		</div>
	</div>

	<div class="sidebar ">
		<div class="sidebar-collapse">
			<div class="sidebar-header">
				<img src="<?php echo base_url('assets/img/avatar.jpg');?>">
				<h2>
					<a href="<?php echo base_url('profile/show/').'?id='.$_SESSION['user_id'] ;?>">
						<?php 
							echo $_SESSION['user_first_name'].' '.$_SESSION['user_last_name'] ;
						?>
					</a>
				</h2>
				<h3>
					<?php 
						echo $_SESSION['user_email'];
					?>
				</h3>
			</div>

			<div class="sidebar-menu">
				<ul class="nav nav-sidebar">
					<li>
						<a href="<?php echo base_url('index');?>">
							<i class="fa fa-bar-chart-o"></i>
							<span class="text"> Dashboard </span>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-edit"></i><span class="text">Работники</span> <span class="indicator"></span></a>
						<ul>
							<li><a href="<?php echo base_url('schedule');?>"><i class="fa fa-edit"></i><span class="text">Рабочий график</span></a></li>
							<li><a href="<?php echo base_url('workers');?>"><i class="fa fa-edit"></i><span class="text"> Список работников</span></a></li>
							<li><a href="<?php echo base_url('workers/create');?>"><i class="fa fa-edit"></i><span class="text"> Новый работник</span></a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url('saved_time');?>">
							<i class="fa fa-dashboard"></i>
							<span class="text">Сохранённое время</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('timers');?>">
							<i class="fa fa-dashboard"></i>
							<span class="text">Таймеры</span>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-edit"></i><span class="text">Клиенты</span> <span class="indicator"></span></a>
						<ul>
							<li><a href="<?php echo base_url('clients');?>"><i class="fa fa-edit"></i><span class="text">Список клиентов</span></a></li>
							<li><a href="<?php echo base_url('clients/create');?>"><i class="fa fa-edit"></i><span class="text"> Новый клиет</span></a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-edit"></i><span class="text">Бухгалтерия</span> <span class="indicator"></span></a>
						<ul>
							<li><a href="<?php echo base_url('accounting');?>"><i class="fa fa-edit"></i><span class="text">Графики прибыли</span></a></li>
							<li><a href="<?php echo base_url('accounting/tables');?>"><i class="fa fa-edit"></i><span class="text">Сводные таблицы</span></a></li>
							<li><a href="<?php echo base_url('accounting/budget');?>"><i class="fa fa-edit"></i><span class="text">Затраты</span></a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-edit"></i><span class="text">Цены</span> <span class="indicator"></span></a>
						<ul>
							<li><a href="<?php echo base_url('prices');?>"><i class="fa fa-edit"></i><span class="text">Таблица цен</span></a></li>
							<li><a href="<?php echo base_url('prices/new_price');?>"><i class="fa fa-edit"></i><span class="text">Добавление цены</span></a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-edit"></i><span class="text">Документы</span> <span class="indicator"></span></a>
						<ul>
							<li><a href="<?php echo base_url('storage');?>"><i class="fa fa-edit"></i><span class="text">Архив документов</span></a></li>
							<li><a href="<?php echo base_url('storage/categories');?>"><i class="fa fa-edit"></i><span class="text">Категории</span></a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-edit"></i><span class="text">Галлерея</span> <span class="indicator"></span></a>
						<ul>
							<li><a href="<?php echo base_url('gallery');?>"><i class="fa fa-edit"></i><span class="text">Галлерея</span></a></li>
							<li><a href="<?php echo base_url('gallery/albums');?>"><i class="fa fa-edit"></i><span class="text">Альбомы</span></a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
		<div class="sidebar-footer">
			<ul class="sidebar-footer-menu">
				<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
				<li><a href="<?php echo base_url('login/logout');?>"><i class="fa fa-sign-out"></i> Logout</a></li>
			</ul>
			<div class="sidebar-brand">
				Cell Game Club
			</div>
		</div>
	</div>
