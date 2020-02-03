<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Технотрейд Сервис</title>
<meta name='viewport' content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="style.css">
	<!--Стили fancybox--><link rel="stylesheet" href="JS/jquery.fancybox.min.css" type="text/css" media="screen" >
</head>
<body>

	<div class='burger_menu'></div>
			<div class='header'>
				<div class='b-block'>

					<div class='header_top'>
						<div class='header_burger'><img src='menu.svg' class='header_burger-image'><div class="header_burger-text">Меню</div></div>
						<a href='#' class='header_mention_image'><img src='log.png' class='header_image'></a>						
						<div class='header_b-menu'>
							<ul class='header_menu'>
								<li><a href='#' class='header_mention'>Услуги</a></li>
								<li><a href='#' class='header_mention'>О компании</a></li>
								<li><a href='#' class='header_mention'>Сотрудничество</a></li>
								<li><a href='#' class='header_mention'>Контакты</a></li>
							</ul>
						</div>
						<div class='header_b-contact'>
							<div class='header_number'>
								<a href='tel:+7(3822) 90-13-32' class='header_number-link'>+7 (3822) 90-13-32</a>
							</div>
							<a href='#' class='header_mention call' id='call'>Заказать звонок</a>
						</div>
					</div>

					<div class='header_title'><h1 class='header_maintitle'>Эффективное снабжение</h1>
						<div class='header_title-after'>Индивидуальный подход и внедрение<br> высокоэффективных процессов снабжения</div>
					</div>
					<a href='#id' class='header_button'><img src='Mouseicon.svg' class='header_button-image'></a>
				</div>
			</div>
			
			
		<div class='content'>
				<div class='b-block'>
					<div class='b-block_content-left'>
						<div class='content-left_title' ><h3 class='content-left_title-service'>Технотрейд Сервис</h3></div>
						<div class='content-left_aftertitle'>– более 6 лет на рынке снабжения</div>
						<div class='content-left_text-box'>
							<p class='content-left_text'>Основное направление деятельности компании - организация всего процесса поставки запасных частей
								и оборудования для предприятий нефтегазодобывающей отрасли, строительных компаний, автотранспортных и сервисных предприятий.
							</p>
							<p class='content-left_text'>Нашими специалистами была разработана уникальная система снабжения, которая позволяет упростить документооборот,
								установить требуемый контроль над бюджетом, уменьшить штат без потери эффективности. Благодаря индивидуальному подходу к каждому 
								клиету и глубокому анализу снабжения предприятия,
								снижаются дополнительные затраты, что в свою очередь приводит к очень существенной экономии средств.
							</p>
							<p><a href='#' class='content-lef_button'>Начать экономить</a></p>
						</div>
						
					</div>

					<div class='content-right'>
						<div class='b-block_content-right'>
							<div class='content-right_image-box'><img class='content-right_image' src='1.png'><div class='content-right_numbers'><span class='content-right_title'>2012</span> <br><div class='content-right_text'>Год основания</div></div></div>
							<div class='content-right_image-box'><img class='content-right_image' src='2.png'><div class='content-right_numbers'><span class='content-right_title'>81 </span> <br><div class='content-right_text'>Оснащенных объектов</div></div></div>
							<div class='content-right_image-box'><img class='content-right_image' src='3.png'><div class='content-right_numbers'><span class='content-right_title'>3100 </span> <br><div class='content-right_text'>Наименований поставляется в год</div></div></div>
							<div class='content-right_image-box'><img class='content-right_image' src='4.png'><div class='content-right_numbers'><span class='content-right_title'>271 </span> <br><div class='content-right_text'>Контрактов с заводами и дилерами</div></div></div>
						</div>
					</div>

				</div>
			</div>
		<div class='shadow'>
	    </div>
	    <!-- Всплывающее окно popup-->
			<div class='block-popup' id='popup1'>
				<div class='popup'>
					<br><div class='block-popup_title' >Обратный звонок</div>
					<div class='block-popup_text'>Вы можете оставить заявку на обратный звонок,  и наш менеджер свяжется с Вами в ближайшее время</div>
					<form id='popup_form'>
						<div class='block-popup_name_number'>
						<div class='block-popup_name'>
							<div class='block-popup_name-text'>Ваше имя</div>
							<input  type='text' placeholder="Ива Иванович" name="popup_name" class='block-popup_input' id='popup_name'>
							<p></p>
						</div>	
						<div class='block-popup_number'>
							<div class='block-popup_name-text'>Ваш телефон</div>
							<input type='text' placeholder="8(999)-999-99-99" id='popup_phone' name='popup_number' class='block-popup_input' >
						</div>
					</div>
						<input type='submit' class='popup_button' value='Отправить   →'>
						<p><div class='popup_message'>Ваша форма отправлена</div></p>
					</form>

					<div class='block-popup_bottom-text'>Отправляя запрос, Вы подтверждаете согласие на обработку персональных данных</div>
				</div>	
			</div>
			<!-- Всплывающее окно popup при отправке формы-->
			<div class='block-popup1' id='popup2'>
				<div class='block-popup1_title' >Спасибо мы с вами свяжемся!</div>
			</div>


	    



<!--Библиотека  jquery--><script type="text/javascript" src="JS/jquery.js"></script>
<!--Плагин для маски--><script type="text/javascript" src="JS/jquery.maskedinput.min.js"></script>
<!--Код для плагина с маской--><script type="text/javascript" src="JS/masknumber.js"></script>
<!--Код для popup без плагина<script type="text/javascript" src="popup.js"></script>--><
<!--Плагин fancybox--><script type="text/javascript" src="JS/jquery.fancybox-1.3.4.js"></script>
<!--Код для плагина fancybox--><script type="text/javascript" src="JS/popup.js"></script>
<!--Плагин для валидации--><script type="text/javascript" src="JS/jquery.validate.min.js"></script>
<!--Код для плагина валидации--><script type="text/javascript" src="JS/receive.js"></script>
<!--Код для ajax--><script type="text/javascript" src="JS/ajax.js"></script>
</body>
</html>