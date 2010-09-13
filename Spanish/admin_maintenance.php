<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Mantenimiento del foro',
'Rebuild index subhead'			=>	'Reconstruir índice de búsqueda',
'Rebuild index info'			=>	'Si has añadido, editado o eliminado mensajes manualmente en la base de datos o si estás teniendo problemas con la búsqueda, deberías reconstruir el índice de búsqueda. Para un mejor rendimiento, deberías poner el foro en %s durante la reconstrucción. <strong>Reconstruir el índice de búsqueda puede tomar un largo rato e incrementará la carga del servidor durante el proceso de reconstrucción!</strong>',
'Posts per cycle label'			=>	'Mensajes por ciclo',
'Posts per cycle help'			=>	'El número de mensajes a procesar por cada vista de página. Por ejemplo, si introduces 300, se procesarán trescientos mensajes y entonces la página se recargará. Esto es para evitar que el script haga timeout durante el proceso de reconstrucción.',
'Starting post label'			=>	'ID del mensaje de inicio',
'Starting post help'			=>	'El ID del mensaje en el que empezar a reconstruir. El valor por defecto es el primer ID disponible en la base de datos. Normalmente no querrías cambiar esto.',
'Empty index label'				=>	'Vaciar índice',
'Empty index help'				=>	'Selecciona esto si quieres que el índice de búsqueda sea vaciado antes de reconstruir (mira debajo).',
'Rebuild completed info'		=>	'Una vez el proceso sea completado, serás redirigido de vuelta a esta página. Es recomendable que tengas activado JavaScript en tu navegador durante la reconstrucción (para la redirección automática cada vez que un ciclo se complete). Si tienes que parar el proceso de reconstrucción, toma nota del ID del último mensaje procesado e introduce ese ID+1 en "ID del mensaje de inicio" cuando/si quieras continuar ("Vaciar índice" no debe ser seleccionado).',
'Rebuild index'					=>	'Reconstruir índice',
'Rebuilding search index'		=>	'Reconstruyendo índice de búsqueda',
'Rebuilding index info'			=>	'Reconstruyendo el índice. Éste podría ser un buen momento para tomarse un café :-)',
'Processing post'				=>	'Procesando el mensaje <strong>%s</strong>...',
'Click here'					=>	'Haz clic aquí',
'Javascript redirect failed'	=>	'Error al redirigir con JavaScript. %s para continuar...',

);
