	<div class="main ">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				  <div class="panel-heading">
					  <h2><i class="fa fa-calendar"></i><span class="break"></span>Calendar</h2>
				  </div>
				  <div class="panel-body">
						<div class="row">
							<div class="col-lg-3 hidden-phone hidden-tablet">
								<div id="external-events">
									<h2>Список сотрудников</h2>
									<?php
										foreach ($data['workers'] as $worker) {
											echo '<br>
												  <br>
												  <div class="external-event badge">'.$worker->first_name.' '.$worker->last_name.'</div>';
										}
									?>
									
								</div>
							</div>
							<div class="col-lg-9">
								<div id="calendar" class="col-lg-12"></div>	
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>	
	


	<!-- start: JavaScript-->
	<!--[if !IE]>-->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<!--<![endif]-->
	<!--[if IE]>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<![endif]-->
	<!--[if !IE]>-->
	<script type="text/javascript">
		window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
	</script>
	<!--<![endif]-->
	<!--[if IE]>

	<script type="text/javascript">
		window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
	</script>
	<![endif]-->
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- page scripts -->
	<script src="assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
	<script src="assets/plugins/moment/moment.min.js"></script>
	<script src="assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
	<!-- theme scripts -->
	<script src="assets/js/jquery.mmenu.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/calendar.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.min.js"></script>
	<script src="assets/js/demo.min.js"></script>
	<!-- end: JavaScript-->
	</body>
</html>