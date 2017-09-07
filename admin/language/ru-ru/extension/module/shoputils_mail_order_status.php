<?php
/*
 * Shoputils
 *
 * ПРИМЕЧАНИЕ К ЛИЦЕНЗИОННОМУ СОГЛАШЕНИЮ
 *
 * Этот файл связан лицензионным соглашением, которое можно найти в архиве,
 * вместе с этим файлом. Файл лицензии называется: LICENSE.2.3.x.RUS.TXT
 * Так же лицензионное соглашение можно найти по адресу:
 * https://opencart.market/LICENSE.2.3.x.RUS.TXT
 * 
 * =================================================================
 * OPENCART/ocStore 2.3.x ПРИМЕЧАНИЕ ПО ИСПОЛЬЗОВАНИЮ
 * =================================================================
 *  Этот файл предназначен для Opencart/ocStore 2.3.x. Shoputils не
 *  гарантирует правильную работу этого расширения на любой другой 
 *  версии Opencart/ocStore, кроме Opencart/ocStore 2.3.x. 
 *  Shoputils не поддерживает программное обеспечение для других 
 *  версий Opencart/ocStore.
 * =================================================================
*/

// Heading
$_['heading_title']           = 'Шаблоны писем, v3.0.1';

// Tab 
$_['tab_new_order']             = 'Новый заказ';
$_['tab_order_statuses']        = 'Статусы заказов';
$_['tab_customer_register']     = 'Регистрация покупателя';
$_['tab_customer_forgotten']    = 'Восстановление пароля покупателя';
$_['tab_customer_transaction']  = 'Транзакция покупателю';
$_['tab_affiliate_register']    = 'Регистрация партнера';
$_['tab_affiliate_forgotten']   = 'Восстановление пароля партнера';
$_['tab_affiliate_transaction'] = 'Комиссия партнеру';
$_['tab_voucher']               = 'Подарочный сертификат';
$_['tab_settings_ft']           = 'Настройки переменных';

// Button 
$_['button_default']          = 'Восстановить по умолчанию';

// Text 
$_['text_module']             = 'Модули';
$_['text_success']            = 'Шаблоны писем обновлены!';
$_['text_confirm']            = 'Существующие данные в этих полях будут заменены на дефолтные! Вы уверены, что хотите это сделать?';
$_['text_copyright']      	  = 'Модуль "%s" разработан <a href="https://opencartforum.com/profile/3463-shoputils/" target="_blank">ShopUtils</a>. Вопросы по техподдержке и работе модуля отправляйте через сайт <a href="https://opencart.market/index.php?route=information/contact" target="_blank">https://opencart.market</a>.<br />&copy; ShopUtils 2010 &mdash; %s';
$_['text_info']               = 'При добавлении нового статуса заказа ("<a href="%s" target="_blank">Система -> Локализация -> Статусы заказов</a>") новый статус заказа появится здесь автоматически.';

$_['text_new_subject_default']                    = '{store_name} - заказ {order_id}';
$_['text_customer_register_subject_default']      = '{store_name} - регистрация на сайте';
$_['text_customer_forgotten_subject_default']     = '{store_name} - восстановление пароля';
$_['text_customer_transaction_subject_default']   = '{store_name} - на ваш счет начислена транзакция в размере {transaction_amount}';
$_['text_affiliate_register_subject_default']     = '{store_name} - регистрация партнера на сайте';
$_['text_affiliate_forgotten_subject_default']    = '{store_name} - восстановление пароля';
$_['text_affiliate_transaction_subject_default']  = '{store_name} - вам начислена комиссия в размере {transaction_amount} по партнерской программе';
$_['text_voucher_subject_default']                = '{store_name} - {voucher_from_name} отправил Вам подарочный сертификат';

$_['text_products_header']          = 'Шапка товаров';
$_['text_products_count']           = 'Номер товара в списке товаров';
$_['text_products_image']           = 'Изображение товара';
$_['text_products_name']            = 'Название товара';
$_['text_products_href']            = 'href товара (неактивная ссылка)';
$_['text_products_model']           = 'Модель товара';
$_['text_products_sku']             = 'Артикул товара (SKU)';
$_['text_products_upc']             = 'UPC';
$_['text_products_ean']             = 'EAN';
$_['text_products_jan']             = 'JAN';
$_['text_products_isbn']            = 'ISBN';
$_['text_products_mpn']             = 'MPN';
$_['text_products_location']        = 'Расположение (location)';
$_['text_products_manufacturer']    = 'Производитель товара';
$_['text_products_quantity']        = 'Количество товара';
$_['text_products_price']           = 'Цена товара';
$_['text_products_total']           = 'Сумма (Цена * К-во) товара';
$_['text_products_reward']          = 'Бонусные баллы';
$_['text_products_footer']          = 'Подвал товаров';
$_['text_products_warning']         = 'Внимание! Некоторые переменные на версиях Opencart/ocStore 1.5.3.1 и ниже работать не будут';
$_['text_totals_title']             = 'Заголовок';
$_['text_totals_text']              = 'Значение';

$_['entry_other_settings']          = 'Другие настройки';

// Entry/Text FT
$_['entry_main_ft']                 = 'Общие значения';
$_['text_store_name_ft']            = 'Название магазина';
$_['text_store_ft']                 = 'Название магазина с активной ссылкой';
$_['text_logo_ft']                  = 'Логотип магазина';
$_['text_date_time_now_ft']         = 'Текущие дата и время сервера';
$_['text_date_now_ft']              = 'Текущая дата сервера';
$_['text_time_now_ft']              = 'Текущее время сервера';

$_['entry_general_ft']              = 'Основные значения';
$_['text_order_id_ft']              = '№ заказа';
$_['text_order_status_ft']          = 'Статус заказа';
$_['text_order_link_ft']            = 'Ссылка на заказ в личном кабинете покупателя';
$_['text_comment_ft']               = 'Комментарий покупателя к заказу';
$_['text_admin_comment_ft']         = 'Комментарий администратора к заказу';
$_['text_ip_ft']                    = 'IP адрес покупателя';
$_['text_date_added_ft']            = 'Дата и время добавления заказа';
$_['text_date_modified_ft']         = 'Дата и время изменения заказа';
$_['text_firstname_ft']             = 'Имя Отчество покупателя';
$_['text_lastname_ft']              = 'Фамилия покупателя';
$_['text_group_ft']                 = 'Группа покупателя';
$_['text_email_ft']                 = 'e-mail покупателя';
$_['text_telephone_ft']             = 'Телефон покупателя';
$_['text_products_ft']              = 'Список купленных товаров';
$_['text_totals_ft']                = 'Итоговые данные (в учете в заказе)';
$_['text_total_ft']                 = 'Итого';
$_['text_shipping_total_ft']        = 'Стоимость доставки';
$_['text_product_first_ft']         = 'Первый найденный товар в заказе';
$_['text_product_last_ft']          = 'Последний найденный товар в заказе';

$_['entry_payment_ft']              = 'Платежная информация';
$_['text_payment_firstname_ft']     = 'Имя Отчество покупателя';
$_['text_payment_lastname_ft']      = 'Фамилия покупателя';
$_['text_payment_company_ft']       = 'Компания';
$_['text_payment_address_1_ft']     = 'Адрес';
$_['text_payment_address_2_ft']     = 'Адрес (продолжение)';
$_['text_payment_city_ft']          = 'Город';
$_['text_payment_postcode_ft']      = 'Почтовый индекс';
$_['text_payment_country_ft']       = 'Страна';
$_['text_payment_zone_ft']          = 'Регион / Область';
$_['text_payment_method_ft']        = 'Метод оплаты';

$_['entry_shipping_ft']             = 'Данные доставки';
$_['text_shipping_firstname_ft']    = 'Имя Отчество покупателя';
$_['text_shipping_lastname_ft']     = 'Фамилия покупателя';
$_['text_shipping_company_ft']      = 'Компания';
$_['text_shipping_address_1_ft']    = 'Адрес';
$_['text_shipping_address_2_ft']    = 'Дополнительный адрес';
$_['text_shipping_city_ft']         = 'Город';
$_['text_shipping_postcode_ft']     = 'Почтовый индекс';
$_['text_shipping_country_ft']      = 'Страна';
$_['text_shipping_zone_ft']         = 'Регион / Область';
$_['text_shipping_method_ft']       = 'Метод доставки';

$_['entry_voucher_ft']              = 'Данные подарочного сертификата';
$_['text_voucher_code_ft']          = 'Код подарочного сертификата';
$_['text_voucher_from_name_ft']     = 'Имя отправителя';
$_['text_voucher_from_email_ft']    = 'e-mail отправителя';
$_['text_voucher_to_name_ft']       = 'Имя получателя';
$_['text_voucher_to_email_ft']      = 'e-mail получателя';
$_['text_voucher_message_ft']       = 'Сообщение отправителя';
$_['text_voucher_amount_ft']        = 'Сумма подарочного сертификата';
$_['text_voucher_image_ft']         = 'Изображение подарочного сертификата';
$_['text_voucher_name_ft']          = 'Имя подарочного сертификата';
$_['text_voucher_theme_ft']         = 'Тема подарочного сертификата';

$_['entry_simple_fields_ft']        = 'Пользовательские поля SIMPLE ("Регистрация и быстрый заказ Simple")';

$_['entry_others_ft']               = 'Значения сторонних модулей';
$_['text_trackcode_ft']             = 'трек-номер посылки';
$_['text_trackcode_link_ft']        = 'Ссылка на отслеживание посылки по трек-номеру в сервисе gdeposylka.ru';
$_['text_trackcode_link2_ft']       = 'Ссылка на отслеживание посылки по трек-номеру в сервисе moyaposylka.ru';

$_['text_account_link_ft']          = 'Активная ссылка на личный кабинет покупателя';
$_['text_customer_date_added_ft']   = 'Дата и время регистрации покупателя';
$_['text_reset_code_ft']            = 'Код восстановления пароля (используется системой в формировании ссылки на восстановление пароля)';
$_['text_reset_link_ft']            = 'Ссылка на восстановление пароля';
$_['text_password_ft']              = 'Пароль покупателя';
$_['text_fax_ft']                   = 'Факс покупателя';

$_['entry_address_ft']              = 'Основной адрес';
$_['text_company_ft']               = 'Компания';
$_['text_address_1_ft']             = 'Адрес';
$_['text_address_2_ft']             = 'Адрес (продолжение)';
$_['text_city_ft']                  = 'Город';
$_['text_postcode_ft']              = 'Индекс';
$_['text_country_ft']               = 'Страна';
$_['text_zone_ft']                  = 'Регион / Область';

$_['text_affiliate_account_link_ft']  = 'Активная ссылка на личный кабинет партнера';
$_['text_affiliate_ip_ft']            = 'IP адрес партнера';
$_['text_affiliate_date_added_ft']    = 'Дата и время регистрации партнера';
$_['text_affiliate_firstname_ft']     = 'Имя Отчество партнера';
$_['text_affiliate_lastname_ft']      = 'Фамилия партнера';
$_['text_affiliate_password_ft']      = 'Пароль партнера';
$_['text_affiliate_group_ft']         = 'Группа партнера';
$_['text_affiliate_email_ft']         = 'e-mail партнера';
$_['text_affiliate_telephone_ft']     = 'Телефон партнера';
$_['text_affiliate_fax_ft']           = 'Факс партнера';

$_['entry_affiliate_payment_ft']            = 'Платёжные реквизиты';
$_['text_affiliate_website_ft']             = 'Веб-сайт';
$_['text_affiliate_tax_ft']                 = 'ИНН';
$_['text_affiliate_payment_ft']             = 'Метод выплат';
$_['text_affiliate_cheque_ft']              = 'Имя получателя';
$_['text_affiliate_paypal_ft']              = 'PayPal Email аккаунт';
$_['text_affiliate_bank_name_ft']           = 'Наименование банка';
$_['text_affiliate_bank_branch_number_ft']  = 'ABA/BSB номер (номер отделения)';
$_['text_affiliate_bank_swift_code_ft']     = 'SWIFT код';
$_['text_affiliate_bank_account_name_ft']   = 'Имя счета';
$_['text_affiliate_bank_account_number_ft'] = 'Номер счета';

$_['entry_transaction_ft']                  = 'Данные о транзакции';
$_['text_transaction_description_ft']       = 'Описание транзакции';
$_['text_transaction_amount_ft']            = 'Сумма транзакции';
$_['text_transaction_total_ft']             = 'Сумма всех транзакций';

// Entry
$_['entry_status']                      = 'Статус:';
$_['entry_admin_status']                = 'Статус:';
$_['entry_chkbox_notify']               = 'Учитывать состояние флажка "Уведомить покупателя" (только в "<a href="%s" target="_blank">Продажи -> Заказы -> Просмотр -> История</a>"):';
$_['entry_subject']                     = 'Тема письма:';
$_['entry_content']                     = 'Шаблон письма:';
$_['entry_current_order_status']        = 'Настройки шаблона писем покупателям для статуса заказов \'%s\'';
$_['entry_admin_current_order_status']  = 'Настройки шаблона писем администратору(-ам) для статуса заказов \'%s\'';
$_['entry_new_order']                   = 'Настройки шаблона писем покупателям для новых заказов';
$_['entry_admin_new_order']             = 'Настройки шаблона писем администратору(-ам) для новых заказов';
$_['entry_customer_register']           = 'Настройки шаблона писем регистрации нового покупателя';
$_['entry_admin_customer_register']     = 'Настройки шаблона писем администратору(-ам) регистрации нового покупателя';
$_['entry_customer_forgotten']          = 'Настройки шаблона писем восстановления пароля покупателя';
$_['entry_admin_customer_forgotten']    = 'Настройки шаблона писем администратору(-ам) восстановления пароля покупателя';
$_['entry_customer_transaction']        = 'Настройки шаблона писем начисления транзакции покупателю';
$_['entry_admin_customer_transaction']  = 'Настройки шаблона писем администратору(-ам) начисления транзакции покупателю';
$_['entry_affiliate_register']          = 'Настройки шаблона писем регистрации нового партнера';
$_['entry_admin_affiliate_register']    = 'Настройки шаблона писем администратору(-ам) регистрации нового партнера';
$_['entry_affiliate_forgotten']         = 'Настройки шаблона писем восстановления пароля партнера';
$_['entry_admin_affiliate_forgotten']   = 'Настройки шаблона писем администратору(-ам) восстановления пароля партнера';
$_['entry_affiliate_transaction']       = 'Настройки шаблона писем начисления транзакции (комиссии) партнеру';
$_['entry_admin_affiliate_transaction'] = 'Настройки шаблона писем администратору(-ам) начисления транзакции (комиссии) партнеру';
$_['entry_voucher']                 = 'Настройки шаблона писем подарочного сертификата';
$_['entry_admin_voucher']           = 'Настройки шаблона писем администратору(-ам) подарочного сертификата';
$_['entry_products_ft']             = 'Структура переменной {products}';
$_['entry_products_header_ft']      = 'Структура суб-переменной {products_header}';
$_['entry_products_footer_ft']      = 'Структура суб-переменной {products_footer}';
$_['entry_totals_ft']               = 'Структура переменной {totals}';
$_['entry_totals_header_ft']        = 'Структура суб-переменной {totals_header}';
$_['entry_totals_footer_ft']        = 'Структура суб-переменной {totals_footer}';
$_['entry_product_first_ft']        = 'Структура переменной {product_first}';
$_['entry_product_last_ft']         = 'Структура переменной {product_last}';
$_['entry_date_time_format_ft']     = 'Формат текущих даты и времени сервера для переменной {date_time_now}';
$_['entry_date_format_ft']          = 'Формат текущей даты сервера для переменной {date_now}';
$_['entry_time_format_ft']          = 'Формат текущего времени сервера для переменной {time_now}';
$_['entry_product_image_w_h']       = 'Размер изображений товаров в письмах (длина / высота), px';
$_['entry_option_lenght']           = 'Количество символов в названии опции товара';

// Help
$_['help_status']                   = 'Если статус выключен, то шаблон письма покупателям для этого статуса заказа не будет задействован.';
$_['help_admin_status']             = 'Если статус выключен, то шаблон письма администратору(-ам) для этого статуса заказа не будет задействован.';
$_['help_chkbox_notify']            = 'Когда данная опция включена, то в \'Продажи->Заказы->Просмотр->История\' при смене статуса заказа на статус \'%s\' - письма для данного статуса будут отправляться, если флажок \'Уведомить покупателя\' установлен. В противном случае отправка письма будет проигнорирована. Если опция выключена - отправка письма будет происходить не зависимо от состоянии флажка \'Уведомить покупателя\'.';
$_['help_subject']                  = 'Тема письма для статуса заказа \'%s\'. Поддерживается FastTemplate';
$_['help_content']                  = 'Шаблон письма для статуса заказа \'%s\'. Поддерживается FastTemplate';
$_['help_new_status']               = 'Если статус выключен, то шаблон письма покупателям для новых заказов не будет задействован. Вместо этого будет отправляться стандартное письмо о новом заказе';
$_['help_admin_new_status']         = 'Если статус выключен, то шаблон письма администратору(-ам) для новых заказов не будет задействован. Вместо этого будет отправляться стандартное письмо о новом заказе';
$_['help_new_subject']              = 'Тема письма для новых заказов. Поддерживается FastTemplate';
$_['help_new_content']              = 'Шаблон письма для новых заказов. Поддерживается FastTemplate';
$_['help_customer_register_status']           = 'Если статус выключен, то шаблон письма покупателям о регистрации новых покупателей не будет задействован. Вместо этого будет отправляться стандартное письмо о регистрации нового покупателя';
$_['help_admin_customer_register_status']     = 'Если статус выключен, то шаблон письма администратору(-ам) о регистрации новых покупателей не будет задействован. Вместо этого будет отправляться стандартное письмо о регистрации нового покупателя';
$_['help_customer_register_subject']          = 'Тема письма о регистрации новых покупателей. Поддерживается FastTemplate';
$_['help_customer_register_content']          = 'Шаблон письма о регистрации новых покупателей. Поддерживается FastTemplate';
$_['help_customer_forgotten_status']          = 'Если статус выключен, то шаблон письма покупателям восстановления пароля покупателя не будет задействован. Вместо этого будет отправляться стандартное письмо восстановления пароля покупателя';
$_['help_admin_customer_forgotten_status']    = 'Если статус выключен, то шаблон письма администратору(-ам) восстановления пароля покупателя не будет задействован.';
$_['help_customer_forgotten_subject']         = 'Тема письма восстановления пароля покупателя. Поддерживается FastTemplate';
$_['help_customer_forgotten_content']         = 'Шаблон письма восстановления пароля покупателя. Поддерживается FastTemplate';
$_['help_customer_transaction_status']        = 'Если статус выключен, то шаблон письма покупателям о начислении транзакции покупателю не будет задействован. Вместо этого будет отправляться стандартное письмо о начислении транзакции покупателю';
$_['help_admin_customer_transaction_status']  = 'Если статус выключен, то шаблон письма администратору(-ам) о начислении транзакции покупателю не будет задействован.';
$_['help_customer_transaction_subject']       = 'Тема письма о начислении транзакции покупателю. Поддерживается FastTemplate';
$_['help_customer_transaction_content']       = 'Шаблон письма о начислении транзакции покупателю. Поддерживается FastTemplate';
$_['help_affiliate_register_status']          = 'Если статус выключен, то шаблон письма партнерам о регистрации новых партнерах не будет задействован. Вместо этого будет отправляться стандартное письмо о регистрации нового партнера';
$_['help_admin_affiliate_register_status']    = 'Если статус выключен, то шаблон письма администратору(-ам) о регистрации новых партнерах не будет задействован. Вместо этого будет отправляться стандартное письмо о регистрации нового партнера';
$_['help_affiliate_register_subject']         = 'Тема письма о регистрации новых партнерах. Поддерживается FastTemplate';
$_['help_affiliate_register_content']         = 'Шаблон письма о регистрации новых партнерах. Поддерживается FastTemplate';
$_['help_affiliate_forgotten_status']         = 'Если статус выключен, то шаблон письма партнерам восстановления пароля партнера не будет задействован. Вместо этого будет отправляться стандартное письмо восстановления пароля партнера';
$_['help_admin_affiliate_forgotten_status']   = 'Если статус выключен, то шаблон письма администратору(-ам) восстановления пароля партнера не будет задействован.';
$_['help_affiliate_forgotten_subject']        = 'Тема письма восстановления пароля партнера. Поддерживается FastTemplate';
$_['help_affiliate_forgotten_content']        = 'Шаблон письма восстановления пароля партнера. Поддерживается FastTemplate';
$_['help_affiliate_transaction_status']       = 'Если статус выключен, то шаблон письма партнерам о начислении транзакции (комиссии) партнеру не будет задействован. Вместо этого будет отправляться стандартное письмо о начислении транзакции (комиссии) партнеру';
$_['help_admin_affiliate_transaction_status'] = 'Если статус выключен, то шаблон письма администратору(-ам) о начислении транзакции (комиссии) партнеру не будет задействован.';
$_['help_affiliate_transaction_subject']      = 'Тема письма о начислении транзакции (комиссии) партнеру. Поддерживается FastTemplate';
$_['help_affiliate_transaction_content']      = 'Шаблон письма о начислении транзакции (комиссии) партнеру. Поддерживается FastTemplate';
$_['help_voucher_status']               = 'Если статус выключен, то шаблон письма покупателям о получении подарочного сертификата (ваучера) не будет задействован. Вместо этого будет отправляться стандартное письмо о получении подарочного сертификата (ваучера)';
$_['help_admin_voucher_status']         = 'Если статус выключен, то шаблон письма администратору(-ам) о получении подарочного сертификата (ваучера) не будет задействован.';
$_['help_voucher_subject']              = 'Тема письма о получении подарочного сертификата (ваучера). Поддерживается FastTemplate';
$_['help_voucher_content']              = 'Шаблон письма о получении подарочного сертификата (ваучера). Поддерживается FastTemplate';
$_['help_on_ckeditor']              = 'Двойной клик по полю переведет textarea в визуальный редактор';
$_['help_list_helper']              = 'Показать/скрыть список возможных значений';
$_['help_date_format']              = 'Справку по возможным значениям можно увидеть в <a href="http://www.php.su/date" target="_blank">таблице 1</a>.';
$_['help_products_ft']              = 'Здесь Вы можете настроить вывод переменной {products} в нужном виде. Если Вы добавляете новый столбец в таблице - не забудьте скорректировать соответствующим образом, при необходимости, субпеременные {products_header} и {products_footer} в настройках ниже. Вы в любой момент можете воспользоваться кнопкой \'Восстановить по умолчанию\' для восстановления \'дефолтной настройки\'';
$_['help_products_header_ft']       = 'Здесь Вы можете настроить суб-переменную {products_header}. Она используется для заголовков таблицы товаров переменной {products}. Использование CSS-стилей для таблицы товаров в теге \'style\' и прилинковка css-файлов не рекомендуется, т.к. некоторые почтовые сервисы (например, Яндекс.Почта) с ними не будут работать. Вы в любой момент можете воспользоваться кнопкой \'Восстановить по умолчанию\' для восстановления \'дефолтной настройки\'';
$_['help_products_footer_ft']       = 'Cуб-переменная {products_footer} используется для закрытия таблицы товаров {products}. Вы можете здесь добавить дополнительную информацию, если она необходима в конце таблицы. Вы в любой момент можете воспользоваться кнопкой \'Восстановить по умолчанию\' для восстановления \'дефолтной настройки\'';
$_['help_totals_ft']                = 'Здесь Вы можете настроить вывод переменной {totals} в нужном виде. Если Вы добавляете новый столбец в таблице - не забудьте скорректировать соответствующим образом, при необходимости, субпеременные {totals_header} и {totals_footer} в настройках ниже. Вы в любой момент можете воспользоваться кнопкой \'Восстановить по умолчанию\' для восстановления \'дефолтной настройки\'';
$_['help_totals_header_ft']         = 'Здесь Вы можете настроить суб-переменную {totals_header}. Она используется для заголовков таблицы итоговых данных {totals}. Использование CSS-стилей для таблицы итоговых данных в теге \'style\' и прилинковка css-файлов не рекомендуется, т.к. некоторые почтовые сервисы (например, Яндекс.Почта) с ними не будут работать. Вы в любой момент можете воспользоваться кнопкой \'Восстановить по умолчанию\' для восстановления \'дефолтной настройки\'';
$_['help_totals_footer_ft']         = 'Cуб-переменная {totals_footer} используется для закрытия таблицы итоговых данных {totals}. Вы можете здесь добавить дополнительную информацию, если она необходима в конце таблицы. Вы в любой момент можете воспользоваться кнопкой \'Восстановить по умолчанию\' для восстановления \'дефолтной настройки\'';
$_['help_product_first_ft']         = 'Здесь Вы можете настроить вывод переменной {product_first} в нужном виде. Она используется для вывода в шаблон письма информации о первом найденном в заказе товаре. Вы в любой момент можете воспользоваться кнопкой \'Восстановить по умолчанию\' для восстановления \'дефолтной настройки\'';
$_['help_product_last_ft']          = 'Здесь Вы можете настроить вывод переменной {product_last} в нужном виде. Она используется для вывода в шаблон письма информации о последнем найденном в заказе товаре. Вы в любой момент можете воспользоваться кнопкой \'Восстановить по умолчанию\' для восстановления \'дефолтной настройки\'';
$_['help_date_time_format_ft']      = 'Укажите формат текущих даты и времени сервера.<br />Например: d.m.Y H:i:s';
$_['help_date_format_ft']           = 'Укажите формат текущей даты сервера.<br />Например: d.m.Y';
$_['help_time_format_ft']           = 'Укажите формат текущего времени сервера.<br />Например: H:i:s';
$_['help_button_default']           = 'Восстанавливает значения по умолчанию для этих полей. Не сохраненные изменения этих полей будут утеряны. Данная кнопка полезна, если Вы хотите восстановить значения полей по умолчанию.';

//lic
$_['text_get_key']  = 'Если Вы не знаете как получить лицензионный ключ - прочтите <a href="https://opencart.market/license_key" target="_blank">инструкцию на нашем официальном сайте</a>.';
$_['text_ok']               = ' - OK';
$_['text_error']            = ' - <span style="color:red;">ERROR</span>';
$_['text_domain']           = 'Ваш домен: <b>%s</b>';
$_['text_loader']           = 'Версия IonCube Loader: <b>%s</b>. Требуется IonCube Loader не ниже v<b>%s</b>';
$_['text_php']              = 'Версия PHP: <b>%s</b>. Требуется PHP не ниже v<b>%s</b>';
$_['entry_key']             = 'Введите лицензионный ключ:';
$_['error_loader']          = '<span style="color:red;">Отсутствует IonCube Loader!</span><br />Обратитесь к Вашему хостеру с просьбой установить IonCube Loader не ниже версии %s';
$_['error_loader_version']  = '<span style="color:red;">Не корректная версия IonCube Loader!</span><br />Обратитесь к Вашему хостеру с просьбой установить IonCube Loader не ниже версии %s';
$_['error_php_version']     = '<span style="color:red;">Не корректная версия PHP!</span>';
$_['error_key']             = 'Недействительный лицензионный ключ!';
$_['error_dir_perm']        = 'Директория "%s" не доступна для записи. Установите необходимые права!';

//Error
$_['error_permission']    = 'У Вас нет прав для управления модулем "%s"!';
$_['error_mkdir']         = 'Невозможно создать директорию "%s"! Пожалуйста, проверьте права или создайте ее вручную.';
$_['error_form']          = 'Необходимо заполнить поле "%s" для статуса заказов "%s"!';
?>