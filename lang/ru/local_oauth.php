<?php

$string['pluginname'] = 'Поставщик OAuth';
$string['settings'] = 'Настройки поставщика OAuth';
$string['addclient'] = 'Добавить нового клиента';
$string['addotherclient'] = 'Добавить другого клиента';
$string['addnodesclient'] = 'Добавить клиента Àgora-Nodes';
$string['addwordpressclient'] = 'Добавить клиента XTECBlocs';

$string['client_id'] = 'Идентификатор клиента';
$string['client_secret'] = 'Секретный ключ клиента';
$string['redirect_uri'] = 'URL перенаправления';
$string['grant_types'] = 'Типы разрешений';
$string['scope'] = 'Область';
$string['user_id'] = 'Идентификатор пользователя';
$string['wp_url'] = 'URL блога';

$string['auth_question'] = 'Хотите авторизовать <strong>{$a}</strong>?';
$string['auth_question_desc'] = 'Это приложение запрашивает доступ к следующей информации в вашей учетной записи:';
$string['auth_question_login'] = 'Это приложение запрашивает доступ к вашей информации для входа';

$string['oauth:manageclients'] = 'Управление клиентами поставщика OAuth';

$string['client_not_exists'] = 'Клиент не существует';
$string['saveok'] = 'Клиент успешно сохранен';
$string['confirmdeletestr'] = 'Вы уверены, что хотите удалить клиента {$a}?';
$string['delok'] = 'Клиент успешно удален';
$string['client_id_existing_error'] = 'Указанный идентификатор клиента уже существует, выберите другой';
$string['insert_error'] = 'Ошибка при создании клиента';
$string['update_error'] = 'Ошибка при обновлении данных клиента';
$string['delete_error'] = 'Ошибка при удалении клиента';

$string['scope_user_info'] = 'Информация о профиле пользователя';

$string['event_user_not_granted'] = 'Пользователю не предоставлен доступ';
$string['event_user_granted'] = 'Пользователь предоставил доступ';
$string['event_user_info_request'] = 'Запрос информации о пользователе';
$string['event_user_info_request_failed'] = 'Не удалось выполнить запрос информации о пользователе';

$string['client_id_help'] = 'Идентификатор, который будет использоваться в форме клиента для ссылки на этого поставщика. Он должен быть уникальным. Например, допустимым идентификатором может быть "blog1" или "nodes".';
$string['redirect_uri_help'] = 'URI, на который будет перенаправлено после входа. Например, для XTECBlocs или Nodes URI перенаправления выглядят так: <ul><li>XTECBlocs: <i>https://blocs.xtec.cat/nomdelbloc/wp-content/plugins/wordpress-social-login/hybridauth/callbacks/moodle.php</i></li><li>NODES: <i>https://agora.xtec.cat/nomdelcentre/wp-content/plugins/wordpress-social-login/hybridauth/callbacks/moodle.php</i></li></ul>';
