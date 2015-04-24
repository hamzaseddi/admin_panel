<?php
	class View {
		/*
		$content_file - view of controller
		$data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
		*/
		function load($content_view, $data = null) {
			/*
			if(is_array($data)) {
				
				// преобразуем элементы массива в переменные
				extract($data);
			}
			*/
			
			/*
			динамически подключаем общий шаблон (вид),
			внутри которого будет встраиваться вид
			для отображения контента конкретной страницы.
			*/
			include 'application/views/'.$content_view.'.php';
		}
	}
