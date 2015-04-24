<div class="main">
	<div class="row">
		<div class="col-lg-12">
			<!-- Today stat-->
			<div class="panel panel-default panel-minimized">
				<div class="panel-heading">
					<h2>
						<i class="fa fa-align-justify"></i>
						<span class="break"></span>
						Статистика за сегодня
					</h2>
					<div class="panel-actions">
						<a href="table.html#" class="btn-minimize">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<h2>Апрель 2015</h2>
						<?php echo Controller_Accounting::show_today_stat(700, 400); ?>
					</div>
					<div class="col-md-6">
						<div class="col-md-12">
							<h2>Lorem ipsum dolor sit.</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Esse saepe odio, distinctio illum consequatur recusandae accusamus!
								Maxime unde eius porro magnam nobis ipsum, nam labore blanditiis id!
								Deleniti, vel, accusantium.
							</p>
						</div>
						<div class="col-md-12">
							<h2>Lorem ipsum dolor sit.</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Esse saepe odio, distinctio illum consequatur recusandae accusamus!
								Maxime unde eius porro magnam nobis ipsum, nam labore blanditiis id!
								Deleniti, vel, accusantium.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Monthly stat-->
			<div class="panel panel-default panel-minimized">
				<div class="panel-heading">
					<h2>
						<i class="fa fa-align-justify"></i>
						<span class="break"></span>
						Статистика за нынешний месяц 
					</h2>
					<div class="panel-actions">
						<a href="table.html#" class="btn-minimize">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<h2>Апрель 2015</h2>
						<?php echo Controller_Accounting::show_month_stat(700, 400); ?>
					</div>
					<div class="col-md-6">
						<div class="col-md-12">
							<h2>Lorem ipsum dolor sit.</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Esse saepe odio, distinctio illum consequatur recusandae accusamus!
								Maxime unde eius porro magnam nobis ipsum, nam labore blanditiis id!
								Deleniti, vel, accusantium.
							</p>
						</div>
						<div class="col-md-12">
							<h2>Lorem ipsum dolor sit.</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Esse saepe odio, distinctio illum consequatur recusandae accusamus!
								Maxime unde eius porro magnam nobis ipsum, nam labore blanditiis id!
								Deleniti, vel, accusantium.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Each month -->
			<div class="panel panel-default panel-minimized">
				<div class="panel-heading">
					<h2>
						<i class="fa fa-align-justify"></i>
						<span class="break"></span>
						По месяцам
					</h2>
					<div class="panel-actions">
						<a href="table.html#" class="btn-minimize">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="panel panel-default">
					<?php echo Controller_Accounting::stats_test(700, 400); ?>
						<!-- <div class="panel-heading">
							<h2>
								<i class="fa fa-align-justify"></i>
								<span class="break"></span>
								2014
							</h2>
							<div class="panel-actions">
								<a href="table.html#" class="btn-minimize">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="panel-body">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2>
										<i class="fa fa-align-justify"></i>
										<span class="break"></span>
										январь
									</h2>
									<div class="panel-actions">
										<a href="table.html#" class="btn-minimize">
											<i class="fa fa-chevron-up"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2>
										<i class="fa fa-align-justify"></i>
										<span class="break"></span>
										Февраль
									</h2>
									<div class="panel-actions">
										<a href="table.html#" class="btn-minimize">
											<i class="fa fa-chevron-up"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>
								<i class="fa fa-align-justify"></i>
								<span class="break"></span>
								2015
							</h2>
							<div class="panel-actions">
								<a href="table.html#" class="btn-minimize">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="panel-body">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2>
										<i class="fa fa-align-justify"></i>
										<span class="break"></span>
										январь
									</h2>
									<div class="panel-actions">
										<a href="table.html#" class="btn-minimize">
											<i class="fa fa-chevron-up"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2>
										<i class="fa fa-align-justify"></i>
										<span class="break"></span>
										Февраль
									</h2>
									<div class="panel-actions">
										<a href="table.html#" class="btn-minimize">
											<i class="fa fa-chevron-up"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Each year -->
			<div class="panel panel-default panel-minimized">
				<div class="panel-heading">
					<h2>
						<i class="fa fa-align-justify"></i>
						<span class="break"></span>
						Статистика по годам
					</h2>
					<div class="panel-actions">
						<a href="table.html#" class="btn-minimize">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<?php echo Controller_Accounting::show_year_stat(700, 400); ?>
					</div>
					<div class="col-md-6">
						<div class="col-md-12">
							<h2>Lorem ipsum dolor sit.</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Esse saepe odio, distinctio illum consequatur recusandae accusamus!
								Maxime unde eius porro magnam nobis ipsum, nam labore blanditiis id!
								Deleniti, vel, accusantium.
							</p>
						</div>
						<div class="col-md-12">
							<h2>Lorem ipsum dolor sit.</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Esse saepe odio, distinctio illum consequatur recusandae accusamus!
								Maxime unde eius porro magnam nobis ipsum, nam labore blanditiis id!
								Deleniti, vel, accusantium.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<script src="<?php echo base_url('assets/js/charts/Chart.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/chart.js-php.js');?>"></script>
<script>
	(function() {
		loadChartJsPhp();
	})();
</script>


