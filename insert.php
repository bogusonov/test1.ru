<?php
  include("include/db_connect.php");
   include("functions/functions.php");
?>
<html>
  <head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Тестовое задание</title>
  </head>
  <body>
    <div id="block-body">
    <?php
        include("include/block-header.php");
    ?>
    </div>
    <div id="block-content">
      <h2 class="h2_title" align="center">Добавление сотрудника</h2>
      <form method="post" id="form_add" action="/include/handler_add.php">
        <p id="add_message"></p>
        <div id="block_form_add">
            <ul id="form_add" style="list-style-type: none;">
                <li>
                    <label class="label_add">Заголовок</label>
                    <span class="star">*</span>
                    <input type="text" name="add_title" class="input_add" id="add_title"/>
                </li>
                <li>
                    <label class="label_add">Картинка</label>
                    <span class="star">*</span>
                    <input type="text" name="add_image" class="input_add" id="add_image"/>
                </li>
                <li>
                    <label class="label_add">Должность</label>
                    <span class="star">*</span>
                    <input type="text" name="add_job" class="input_add" id="add_job"/>
                </li>
                <li>
                    <label class="label_add">Возраст</label>
                    <span class="star">*</span>
                    <input type="text" name="add_years" class="input_add" id="add_years"/>
                </li>
                <li>
                    <label class="label_add">Телефон</label>
                    <span class="star">*</span>
                    <input type="text" name="add_phone" class="input_add" id="add_phone"/>
                </li>
            </ul>
        </div>
        <p align="center"><input type="submit" name="form_submit" id="form_submit" value="Добавление"/></p>
    </form>
    </div>
  </body>
</html>
﻿
