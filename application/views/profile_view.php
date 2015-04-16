<div class="main ">
	<div class="row profile">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<img class="img-responsive" src="assets/img/gallery/photo9.jpg">
					<h2 class="text-center">
						<strong>
						<?php 
							echo $data['workers'] -> first_name .' '.$data['workers'] -> last_name;
						?>
						</strong>
					</h2>
					<h4 class="text-center">
						<small>
							<i class="fa fa-map-marker"></i>
								Los Angeles, CA
						</small>
					</h4>
					<hr>
					<h4 class="text-center">
						<strong>
							<i class="fa fa-map-marker"></i>
							Дата рождения	
						</strong>
					</h4>
					<p class="text-center">
						<?php 
							echo $data['workers'] -> birthday;
						?>
					</p>
					<hr>		
					<h4>
						<strong>
							Контактная информация
						</strong>
					</h4>
					<ul class="profile-details">
						<li>
							<div>
								<i class="fa fa-tablet"></i> mobile phone
							</div>
							<?php 
								echo $data['workers'] -> phone;
							?>
						</li>
						<li>
							<div>
							<i class="fa fa-envelope"></i> e-mail</div>
							<?php 
								echo $data['workers'] -> email;
							?>
						</li>
					</ul>	
				</div>	
			</div>
		</div>
	</div>
</div>