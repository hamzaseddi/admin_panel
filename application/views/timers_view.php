<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<div class="main">
	<div class="row">
		<?php 
			foreach ($data['spots'] as $spot) {
				echo'<div class="col-lg-6">
						<div class="info-box '.$spot->status.'">
							<div class="title">
								'.$spot->name.' № '.$spot->number.'
							</div>
							<div class="desc">';
				if($spot->status == 'danger') {
					foreach ($data['time'] as $time ) {
						if($time->user_id == $spot->user_on_spot && $time->spot_id == $spot -> id) {
							echo '<form  method="POST" action="'.base_url('spot/untake_spot').'">
							<div class="clock" data-countdown="'.$time->time_end.'"></div>
							<input type="hidden" name="time_id" value="'.$time->id.'">';
						}
					}
				} else {
					echo '<p>Свободно</p><br>';
				}
				echo '</div>
						<input type="hidden" name="id" value="'.$spot->number.'">';
				if($spot->status == 'info') {
					echo'<center>
							<button class="btn btn-success" data-toggle="modal" data-target="#myModal-'.$spot->number.'">Занять</button>
						</center>';
				}
				if($spot->status == 'danger') {
					echo'
						<input type="hidden" name="spot_id" value="'.$spot->id.'">
						<div class="col-md-3">
							<button type="submit" class="btn btn-success" name="end">Закончить</button>
						</div>
						<div class="col-md-3">
							<center>
								<button type="button" class="btn btn-success pause">Остановить</button>
							</center>
						</div>
						<div class="col-md-3">
							<center>
								<button type="button" class="btn btn-success resume">Запустить</button>
							</center>
						</div>
						<div class="col-md-3">
							<center>	
								<button type="button" class="btn btn-success">Сохранить</button>
							</center>
						</div>
					</form>';
				}
				echo'</div>
				</div>
				<div class="modal modal-success fade in" id="myModal-'.$spot->id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Занять компьютер № '.$spot->number.'</h4>
							</div>
							<form method="post" action="'.base_url('spot/take_spot/').'"> 
								<div class="modal-body">
									<input type="hidden" name="spot_id" value="'.$spot->id.'">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, cumque!</p>
									<select name="client_id">';
										foreach ($data['clients']  as $client) {
											echo '<option value="'.$client->id.'">'.$client->first_name.' '.$client->last_name.'</option>';
										}
							echo '</select><br>
									<select name="price_id">';
									foreach ($data['prices']  as $price) {
											echo '<option value="'.$price->id.'">'.$price->time_amount.'</option>';
									}
						echo '</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
									<button type="submit" class="btn btn-primary">Занять</button>
								</div>
							</form>
						</div>
					</div>
				</div>';
			}
		?>
	</div>
</div>
<script src="<?php echo base_url('assets/js/countdown.js');?>"></script>
<script>
	$('.clock').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
	 	$this.countdown(finalDate, function(event) {
			$this.html(event.strftime('осталось %H часов %M минут %S'));
		});
		$('.pause',$this.parent().parent()).click(function() {
    		$this.countdown('pause');
  		});

	  	$('.resume',$this.parent().parent()).click(function() {
	    	$this.countdown('resume');
	  	});
	})
</script>