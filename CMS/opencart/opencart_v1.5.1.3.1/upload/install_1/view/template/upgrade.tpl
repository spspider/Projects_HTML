<?php echo $header; ?>
<h1 style="background: url('view/image/configuration.png') no-repeat;">Обновление</h1>
<div style="width: 100%; display: inline-block;">
  <div style="float: left; width: 569px;">
    <?php if ($error_warning) { ?>
    <div class="warning"><?php echo $error_warning; ?></div>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
      <p><b>Аккуратно выполните следующие шаги!</b></p>
	  <ol>
	    <li>После обновления скрипта, если возникли ошибки или проблемы, то ответы вы найдете на форуме</li>
		<li>После обновления, удалите все cookies в вашем браузере, чтобы избежать попадания в токен ошибку.</li>
		<li>Загрузите страницу администрирования и нажмите Ctrl+F5 два раза, чтобы браузер обновил изменения css.</li>
		<li>Перейдите в админпанели Система >> Пользователи >> Группы пользователей и отредактируйте группу "Главный администратор". Установите галочки для всех значений.</li>
		<li>Перейдите в админпанели Система >> Настройки и отредактируйте основные Параметры Системы. Обновите все поля и нажмите кнопку сохранить, даже если ничего не изменилось.</li>
		<li>Откройте главную страницу магазина и нажмите Ctrl+F5 два раза, чтобы браузер для обновил изменения css.</li>
	  </ol>
      <div style="text-align: right;"><a onclick="document.getElementById('form').submit()" class="button"><span class="button_left button_continue"></span><span class="button_middle">Обновить</span><span class="button_right"></span></a></div>
    </form>
  </div>
  <div style="float: right; width: 205px; height: 400px; padding: 10px; color: #663300; border: 1px solid #FFE0CC; background: #FFF5CC;">
    <ul>
      <li><b>Обновление</b></li>
      <li>Окончание</li>
    </ul>
  </div>
</div>
<?php echo $footer; ?>

