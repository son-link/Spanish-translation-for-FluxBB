<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'es',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Error. Este enlace es invalido o antiguo.',
'No view'							=>	'No tienes permisos para ver este foro.',
'No permission'						=>	'No tienes permisos para ver esta pagina.',
'Bad referrer'						=>	'HTTP_REFERER invalido. Ha llegado a este foro desde un sitio no autorizado. Si el problema persiste, asegúrese de que \'Base URL\' esta correctamente configurado en Administración/Opciones y estas visitando el foro desde esta URL. Para mas información, lea la documentación sobre enlaces de referencias en la documentación de FluxBB.',
'No cookie'							=>	'Has entrado perfectamente, pero no se pudo guardar la cookie. Por favor, compruebe la configuración de su navegador.',
'Pun include error'					=>	'No se a podido abrir %s de la plantilla %s. No se encuentra ni en el directorio de las plantillas ni en la del usuario.',

// Miscellaneous
'Announcement'						=>	'Anuncios',
'Options'							=>	'Opciones',
'Submit'							=>	'Enviar', // "Name" of submit buttons
'Ban message'						=>	'Le esta prohibido entrar en el foro.',
'Ban message 2'						=>	'La prohibición se acaba el',
'Ban message 3'						=>	'El administrador o moderador que le denegó el acceso le dejo el siguiente mensaje:',
'Ban message 4'						=>	'Cualquier pregunta deberá de ser enviada al administrador del foro en',
'Never'								=>	'Nunca',
'Today'								=>	'Hoy',
'Yesterday'							=>	'Ayer',
'Info'								=>	'Información', // A common table header
'Go back'							=>	'Volver',
'Maintenance'						=>	'Mantenimiento',
'Redirecting'						=>	'Redirigiendo',
'Click redirect'					=>	'Haga click aquí si no quiere esperar o su navegador no le redirige automaticamente',
'on'								=>	'activado', // As in "BBCode is on"
'off'								=>	'desactivado',
'Invalid email'						=>	'La dirección de corro que introdujo es invalida.',
'Required'							=>	'(Obligatorio)',
'required field'					=>	'is a required field in this form.', // For javascript form validation
'Last post'							=>	'Ultimo mensaje',
'by'								=>	'por', // As in last post by someuser
'New posts'							=>	'Nuevos mensajes', // The link that leads to the first new post
'New posts info'					=>	'Ir al primer mensaje nuevo del tema.', // The popup text for new posts links
'Username'							=>	'Usuario',
'Password'							=>	'Contraseña',
'Email'								=>	'Correo',
'Send email'						=>	'Enviar correo',
'Moderated by'						=>	'Moderado por',
'Registered'						=>	'Registrado',
'Subject'							=>	'Asunto',
'Message'							=>	'Mensaje',
'Topic'								=>	'Titulo',
'Forum'								=>	'Foro',
'Posts'								=>	'Mensajes',
'Replies'							=>	'Respuestas',
'Pages'								=>	'Paginas:',
'Page'								=>	'Pagina %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'Etiqueta [img]:',
'Smilies'							=>	'Emoticonos:',
'and'								=>	'y',
'Image link'						=>	'imagen', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'escribio:', // For [quote]'s
'Mailer'							=>	'Gestor de correo', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Información inportante',
'Write message legend'				=>	'Escribe un mensaje y envielo',
'Previous'							=>	'Anterior',
'Next'								=>	'Siguiente',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titulo',
'Member'							=>	'Usuario', // Default title
'Moderator'							=>	'Moderador',
'Administrator'						=>	'Administrador',
'Banned'							=>	'Acceso restringido',
'Guest'								=>	'Invitado',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] fue encontrado sin su correpondiente [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] fue abierto dentro de [%2$s]. No esta permitido',
'BBCode error invalid self-nesting'	=>	'[%s] se abrió así mismo. No esta permitido',
'BBCode error no closing tag'		=>	'[%1$s] fue encontrado sin su correspondiente [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] Esta etiqueta tiene un atributo vacio',
'BBCode code problem'				=>	'Ocurrió un error con las etiquetas [code]',
'BBCode list size error'			=>	'¡La lista es demasiado larga para analizarla!. Por favor, hazla mas corta',

// Stuff for the navigator (top of every page)
'Index'								=>	'Pagina principal',
'User list'							=>	'Lista de usuarios',
'Rules'								=>	'Rules',
'Search'							=>	'Buscar',
'Register'							=>	'Registrarse',
'Login'								=>	'Login',
'Not logged in'						=>	'No estas conectado.',
'Profile'							=>	'Perfil',
'Logout'							=>	'Salir',
'Logged in as'						=>	'Estas conectado como',
'Admin'								=>	'Administración',
'Last visit'						=>	'Ultima visita: %s',
'Show new posts'					=>	'Ver mensajes nuevos desde su ultima visita',
'Mark all as read'					=>	'Marcar todos los temas como leidos',
'Mark forum read'					=>	'Marcar todos los foros como leidos',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Pie de pagina',
'Search links'						=>	'Enlaces de busqueda',
'Show recent posts'					=>	'Mostrar mensajes recientes',
'Show unanswered posts'				=>	'Mostrar temas sin respuesta',
'Show your posts'					=>	'Mostrar tus mensajes',
'Show subscriptions'				=>	'Mostrar temas a los que estas suscrito',
'Jump to'							=>	'Ir a',
'Go'								=>	' Ir ', // Submit button in forum jump
'Moderate topic'					=>	'Moderar tema',
'Move topic'						=>	'Mover tema',
'Open topic'						=>	'Abrir tema',
'Close topic'						=>	'Cerrar tema',
'Unstick topic'						=>	'Despegar tema',
'Stick topic'						=>	'Pegar tema',
'Moderate forum'					=>	'Moderar foro',
'Powered by'						=>	'Desarrollado por %s',

// Debug information
'Debug table'						=>	'Información de los ajustes',
'Querytime'							=>	'Generado en %1$s segundos, %2$s consultas ejecutadas',
'Memory usage'						=>	'Memoria usada: %1$s',
'Peak usage'						=>	'(Maximo: %1$s)',
'Query times'						=>	'Tiempo (s)',
'Query'								=>	'Consultar',
'Total query time'					=>	'Tiempo total de la consulta: %s',

// Email related notifications
'New user notification'				=>	'Alerta - Nuevo registro',
'New user message'					=>	'El usuario \'%s\' se registro en los foros en %s',
'Banned email notification'			=>	'Alerta - Se detecto una dirección de correo denegado',
'Banned email register message'		=>	'El usuario \'%s\' se registro con un correo restringido: %s',
'Banned email change message'		=>	'El usuario \'%s\' cambio su correo a otro denegado: %s',
'Banned email post message'			=>	'El usuario \'%s\' posteo con un correo denegado: %s',
'Duplicate email notification'		=>	'Alerta - Se encontró una dirección de correo duplicada',
'Duplicate email register message'	=>	'El usuario \'%s\' se registro con una dirección de correo que también pertenece a: %s',
'Duplicate email change message'	=>	'El usuario \'%s\' Cambio su dirección de correo a uno que también pertenece a: %s',
'Report notification'				=>	'Reporte(%d) - \'%s\'',
'Report message 1'					=>	'El usuario \'%s\' he reportado lo siguiente: %s',
'Report message 2'					=>	'Razon: %s',

'User profile'						=>	'Perfil del usuario: %s',
'Post URL'							=>	'URL del mensaje: %s',
'Email signature'					=>	'Correo del foro'."\n".'(No responder a este mensaje)',

// For extern.php RSS feed
'RSS description'					=>	'Temas mas recientes en %s.',
'RSS description topic'				=>	'Mensajes mas recientes en%s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS temas activos ',
'Atom active topics feed'			=>	'Atom temas activos',
'RSS forum feed'					=>	'RSS foro',
'Atom forum feed'					=>	'Atom foro',
'RSS topic feed'					=>	'RSS temas',
'Atom topic feed'					=>	'Atom temas',

// Admin related stuff in the header
'New reports'						=>	'No hay nuevos reportes',
'Maintenance mode enabled'			=>	'¡Esta habilitado el sistema de mantenimiento!',

);
