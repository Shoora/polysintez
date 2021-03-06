<?php

// Heading
$_['heading_title'] = '<img width="24" height="24" src="view/image/neoseo.png" style="float: left;"><p style="margin:0;line-height: 24px;">NeoSeo Менеджер Редиректів</p>';
$_['heading_title_raw'] = 'NeoSeo Менеджер Редиректів';

$_['tab_general'] = 'Параметри';
$_['tab_support'] = 'Підтримка';
$_['tab_logs'] = 'Логи';
$_['tab_license'] = 'Ліцензія';
$_['tab_support'] = 'Підтримка';

// Text
$_['text_success'] = 'Налаштування модуля оновлені!';
$_['text_success_clear'] = 'Логи модуля видалені!';
$_['text_module'] = 'Модулі';
$_['text_module_version'] = '';


$_['button_save'] = 'Зберегти';
$_['button_save_and_close'] = 'Зберегти і Закрити';
$_['button_close'] = 'Закрити';
$_['button_recheck'] = 'Проверить еще раз';
$_['button_clear_log'] = 'Видалити логи';

$_['text_description'] = '<p>Таблиця зі списком правил знаходиться в меню Система \ Інструменти \ Менеджер редиректів. Але побачити її зможе тільки той, у кого є права на перегляд \ видалення для цього модуля</p><p>Відповідно, відразу після встановлення ви повинні зайти в Система \ Користувачі \ Групи користувачів і додати права на перегляд \ модифікацію потрібним групам користувачів</p><p>Всі посилання в таблицю редиректів додаються з повним шляхом, наприклад http://mysite.com/information1.html</p>';

// Entry
$_['entry_status'] = 'Статус:';
$_['entry_debug'] = 'Налагодження:';
$_['entry_www_ignore'] = 'Ігнорувати www-частину посилання:';
$_['entry_joomla_status'] = 'Обробка для joomla-посилань:';
$_['entry_joomla_product'] = 'Ознака joomla-посилання продукту:';
$_['entry_joomla_category'] = 'Ознака joomla-посилання категорії:';
$_['entry_oscommerce_status'] = 'Автоматический редирект oscommerce ссылок';
$_['entry_oscommerce_status_desc'] = 'Нужно при переносе данных с движка oscommerce. Если ссылка содержит -m-, например 123-m-apple, то часть ссылки до -m- будет трактоваться как код производителя и будет выполнен автоматический редирект на реальную ссылку по этому производителю';


// Error
$_['error_permission'] = 'У Вас немає прав для керування цим модулем!';
$_['error_supplier_info'] = 'Це поле обов’язкове для заповнення!';
$_['error_ioncube_missing'] = '';
$_['error_license_missing'] = '';
$_['error_other_errors']   = 'Нет нужных компонентов!';

$_['mail_support'] = '';
$_['module_licence'] = '';
$_['text_module_version']='13';
$_['error_license_missing']='<h3 style="color:red">Отсутствует файл лицензии!</h3>

<p>Для получения файла лицензии свяжитесь с разработчиком модуля  по email <a href="mailto:license@neoseo.com.ua">license@neoseo.com.ua</a>, при этом указав:</p>
<ul>
	<li>название сайта, на котором вы купили модуль. Например, opencartforum.com</li>
	<li>название модуля, который вы купили. Например, NeoSeo Обмен с 1с</li>
	<li>ваш ник на этом сайте. Например, alexsoftdev</li>
	<li>номер заказа на этом сайте. Например, 355446</li>
	<li>основной домен сайта для активации лицензии. Например lamoda.ru</li>
	<li>тестовый домен сайта для разработки. Например, lamoda.neoseo.com.ua</li>
</ul>

<p>Полученный файл лицензии положите в корень сайта, т.е. рядом с файлом robots.txt и нажмите кнопку "Проверить еще раз".</p>

<p>Вы можете не переживать что ваш файл лицензии кто-то украдет! Ваш файл лицензии сделан персонально для вас и не будет работать на другом домене</p>';
$_['error_ioncube_missing']='<h3 style="color:red">Отсутствует IonCube Loader!</h3>

<p>Чтобы пользоваться нашим модулем, вам нужно установить IonCube Loader. Ниже приводятся инструкции по установке IonCube Loader для разных случаев:</p>

<ul>
    <li>Если у вас shared-хостинг - <a href="http://neoseo.com.ua/articles/ioncube-loader-shared">http://neoseo.com.ua/articles/ioncube-loader-shared</a></li>
    <li>Если у вас VPS на ubuntu - <a href="http://neoseo.com.ua/articles/ioncube-loader-ubuntu">http://neoseo.com.ua/articles/ioncube-loader-ubuntu</a></li>
    <li>Если у вас VPS на centos - <a href="http://neoseo.com.ua/articles/ioncube-loader-centos">http://neoseo.com.ua/articles/ioncube-loader-centos</a></li>
</ul>

<p>Если у вас не выходит установить IonCube Loader самостоятельно, вы также можете попросить помощи у наших специалистов по адресу <a href="mailto:support@neoseo.com.ua">support@neoseo.com.ua</a>, указав где именно вы приобрели модуль, ваш ник на этом ресурсе и номер заказа.</p>';
$_['module_licence']='<h3 style="color:red">Благодарим вас за выбор нашего продукта!</h3>
<p>Все права на программный продукт, далее модуль, принадлежат <a href="http://neoseo.com.ua">Веб студии NeoSeo</a></p>
<p><b>Лицензия на данный модуль дает право на:</b>
    <ul>
        <li>активацию на <b>ОДИН домен</b>. Не на сайт, не на человека, не на студию. У вас несколько доменов подключены к одному сайту - значит вам нужно несколько лицензий.</li>
        <li>на использование на своем магазине или магазине клиента.</li>
        <li>бесплатные апдейты владельцам магазина в течение года после покупки, вне зависимости от того кто был установщиком модуля</li>
    </ul>
</p>
<p><b>Категорически запрещается:</b>
    <ul>
        <li>Публиковать модуль на других сайтах без уведомления автора</li>
        <li>Передавать модуль третьим лицам</li>
        <li>Продавать от своего имени без предварительной договоренности с автором</li>
        <li>Использовать нелицензионные версии модулей ( варез ). В случае нарушения, анулируются все покупки по домену без возврата денег</li>
    </ul>
</p>
<p><b>Отказ от ответственности:</b>
    <ul>
        <li>Автор модуля не несет какой либо ответственности за материальный и нематериальный ущерб, причиненный модулем. Вы используете модуль на свой страх и риск.</li>
        <li>Чтобы значительно минимизировать риски, вы можете <a href="https://opencartforum.com/files/file/1597-neoseo-rezervnye-kopii/" target="_blank">купить модуль NeoSeo Резервные копии</a>, который надежно защитит ваш магазин от потери данных, либо заказать комплексное обслуживание вашего магазина у автора <a href="mailto:info@neoseo.com.ua">info@neoseo.com.ua</a></li>
        <li>Автор оставляет за собой право в любой момент изменить условия лицензионного соглашения, без согласования с конечными пользователями его продуктов.</li>
    </ul>
</p>';
$_['mail_support']='<h3 style="color:red">Благодарим вас за выбор нашего продукта!</h3>
<p><a href="https://neoseo.com.ua">Веб студия NeoSeo</a> прикладывает максимум усилий для того, чтобы наши продукты устанавливались как можно быстрее и проще, не создавая конфликтов с другими модулями и темами оформления, и доставляя клиентам только радость от использования продуктов</p>
<p>Однако это не всегда возможно, учитывая что opencart имеет очень слабые технические возможности для этого, поэтому просим отнестись к этим нюансам с пониманием.</p>
<p>Что <b>мы гарантируем</b>, и обеспечиваем бесплатно:</p>
<ul>
    <li>работу наших модулей на стандартной теме оформления opencart</li>
    <li>работу наших модулей на стандартной админке opencart</li>
</ul>
<p>Если у вас возникла проблема с работой модуля в этом контексте, то вы всегда можете запросить бесплатную техническую поддержку по адресу <a href="mailto:support@neoseo.com.ua">support@neoseo.com.ua</a>.</p>
<p>Что мы стараемся обеспечить, но <b>не гарантируем</b>:</p>
<ul>
    <li>работу наших модулей на НЕ стандартной теме оформления opencart</li>
    <li>работу наших модулей на НЕ стандартной админке opencart</li>
</ul>
<p>Как уже говорилось, заранее нельзя предусмотреть все нюансы чужих тем оформления, поэтому в случае проблем в этом ключе, мы обеспечиваем платную поддержку за символическую стоимость. Запросить ее, а также комплексное техническое обслуживание вашего магазина можно по адресу <a href="mailto:info@neoseo.com.ua">info@neoseo.com.ua</a></p>
<p><b>ВНИМАНИЕ!!!</b> Если вы испытываете трудности с установкой модулей, то вам не обязательно тратить свое драгоценное время на этот рутинный процесс. Позвольте нашим техническим специалистам выполнить это вместо вас за символическую плату, а сэкономленное время вы сможете потратить на развитие своего бизнеса, семью и хобби. Заказать установку и техническое обслуживание можно по адресу <a href="mailto:info@neoseo.com.ua">info@neoseo.com.ua</a></p>';
