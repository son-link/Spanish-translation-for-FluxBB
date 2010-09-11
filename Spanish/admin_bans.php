<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'No hay ningún usuario registrado con ese nombre.Si no desea banear a un usuario por su nombre, dejelo en blanco.',
'No user ID message'		=>	'No hay ningún usuario registrado con este ID.',
'User is admin message'		=>	'El usuario %s es un administrador y no puede ser baneado. Si buscar banear un administrador, antes tendrás que relegarlo a moderador o usuario normal.',
'Must enter message'		=>	'Puedes introducir un nombre de usuario, dirección IP o correo.',
'Cannot ban guest message'	=>	'El usuario invitado no puede ser baneado.',
'Invalid IP message'		=>	'Has introducido una dirección IP invalida.',
'Invalid e-mail message'	=>	'La dirección de correo introducida es invalida.',
'Invalid date message'		=>	'La fecha de caducidad es invalida.',
'Invalid date reasons'		=>	'El formato de la fecha debe de ser YYYY-MM-DD y al menos un día antes de la fecha actual.',
'Ban added redirect'		=>	'Banneo añadido. Redirigiendo …' ,
'Ban edited redirect'		=>	'Banneo actualizado. Redirigiendo …',
'Ban removed redirect'		=>	'Banneo borrado. Redirigiendo …',

'New ban head'				=>	'Nuevo baneo',
'Add ban subhead'			=>	'Añadir baneo',
'Username label'			=>	'Nombre de usuario',
'Username help'				=>	'El nombre de usuario a banear.',
'Username advanced help'	=>	'El nombre de usuario a banear. En la próxima pagina podrá introducir una dirección de correo o una dirección/rango de IP. Si solo quieres una dirección o rango de IP especifico, dejalo en blanco.',

'Ban search head'			=>	'Buscar usuarios baneados',
'Ban search subhead'		=>	'Introduzca palabras a buscar',
'Ban search info'			=>	'Buscar baneados en la BD. Puedes introducir una o mas palabras a buscar.Puedes usar el carácter especial *.',
'Date help'					=>	'(yyyy-mm-dd)',
'Message label'				=>	'Mensaje',
'Expire after label'		=>	'Expira después de',
'Expire before label'		=>	'Expira antes de',
'Order by label'			=>	'Ordenar por',
'Order by username'			=>	'Nombre del usuario',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'Correo',
'Order by expire'			=>	'Fecha de expiración',
'Ascending'					=>	'Ascendente',
'Descending'				=>	'Descendente',
'Submit search'				=>	'Buscar',

'E-mail label'				=>	'Correo',
'E-mail help'				=>	'El correo o dominio del correo a banear (P.E. algo@algo.com o algo.com). Consulte la sección "Permitir baneos de correo" en Permisos para mas información.',
'IP label'					=>	'Dirección/Rangos IP',
'IP help'					=>	'La dirección o rango de IP a banear (P.E. 150.11.110.1 o 150.11.110). Separa las IP por espacios. Compruebe que la dirección dada es la que esta registrada en la BD al usuario a banear.',
'IP help link'				=>	'Pulse %s para ver las estadísticas IP del usuario.',
'Ban advanced head'			=>	'Configuración avanzada de baneo',
'Ban advanced subhead'		=>	'Banear por IP y dirección de correo',
'Ban message label'			=>	'Mensaje de baneo',
'Ban message help'			=>	'Es el mensaje que se mostrara al usuario baneado cuando entre.',
'Message expiry subhead'	=>	'Mensaje de baneo y expiración',
'Ban IP range info'			=>	'Debes de ser muy cuidadoso con los rangos de direcciones IP, ya que podrías banear a otros usuarios que estén en el mismo rango.',
'Expire date label'			=>	'Fecha de expiración',
'Expire date help'			=>	'La fecha en la que el baneo expirara automáticamente (formato: yyyy-mm-dd). Dejalo en blanco para hacerlo manuelmente.',

'Results head'				=>	'Resultados de la búsqueda',
'Results username head'		=>	'Nombre del usuario',
'Results e-mail head'		=>	'Correo',
'Results IP address head'	=>	'Dirección/Rangos IP ',
'Results expire head'		=>	'Expira',
'Results message head'		=>	'Mensaje',
'Results banned by head'	=>	'Baneado por',
'Results actions head'		=>	'Acciones',
'No match'					=>	'No hay resultados',
'Unknown'					=>	'Desconocido',

);
