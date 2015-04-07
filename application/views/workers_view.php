<div class="main sidebar-minified">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>
                        <i class="fa fa-align-justify"></i>
                        <span class="break"></span>
                        Список работников
                    </h2>
                    <div class="panel-actions">
                        <a href="table.html#" class="btn-minimize">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-edit"></i>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Пол</th>
                                <th>Возраст</th>
                                <th>Зарплата</th>
                                <th>lorem</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
						    	foreach ($data['workers'] as $worker) {
						    		echo '<tr><td>'.$worker -> first_name.'</td>';
						    		echo '<td>'.$worker -> last_name.'</td>';
						    		echo '<td>'.$worker -> birthday.'</td>';
						    		echo '<td>'.$worker -> phone.'</td>';
						    		echo '<td>'.$worker -> email.'</td>';
						    		echo '<td><a href="'.base_url('workers/delete_user/').$worker -> id.'">Удалить</a>/Изменитьы</td></tr>';
								}
							?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



