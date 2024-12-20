<?php

return [
    'acl' => [
        'leads'           => 'Clientes potenciales',
        'lead'            => 'Cliente potencial',
        'quotes'          => 'Cotizaciones',
        'mail'            => 'Correo',
        'inbox'           => 'Bandeja de entrada',
        'draft'           => 'Borradores',
        'outbox'          => 'Bandeja de salida',
        'sent'            => 'Enviados',
        'trash'           => 'Papelera',
        'activities'      => 'Actividades',
        'webhook'         => 'Webhook',
        'contacts'        => 'Contactos',
        'persons'         => 'Personas',
        'organizations'   => 'Organizaciones',
        'products'        => 'Productos',
        'settings'        => 'Configuraciones',
        'groups'          => 'Grupos',
        'roles'           => 'Roles',
        'users'           => 'Usuarios',
        'user'            => 'Usuario',
        'automation'      => 'Automatización',
        'attributes'      => 'Atributos',
        'pipelines'       => 'Canales',
        'sources'         => 'Fuentes',
        'types'           => 'Tipos',
        'email-templates' => 'Plantillas de correo electrónico',
        'workflows'       => 'Flujos de trabajo',
        'other-settings'  => 'Otras configuraciones',
        'tags'            => 'Etiquetas',
        'configuration'   => 'Configuración',
        'campaigns'       => 'Campañas',
        'event'           => 'Evento',
        'create'          => 'Crear',
        'edit'            => 'Editar',
        'view'            => 'Ver',
        'print'           => 'Imprimir',
        'delete'          => 'Eliminar',
        'export'          => 'Exportar',
        'mass-delete'     => 'Eliminar en masa',
    ],

    'users' => [
        'activate-warning' => 'Tu cuenta aún no está activada. Por favor, contacta al administrador.',
        'login-error'      => 'Las credenciales no coinciden con nuestros registros.',
        'not-permission'   => 'No tienes permiso para acceder al panel de administración.',

        'login' => [
            'email'                => 'Dirección de correo electrónico',
            'forget-password-link' => '¿Olvidaste tu contraseña?',
            'password'             => 'Contraseña',
            'submit-btn'           => 'Iniciar sesión',
            'title'                => 'Iniciar sesión',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'Correo electrónico registrado',
                'email-not-exist' => 'El correo electrónico no existe',
                'page-title'      => 'Olvidé mi contraseña',
                'reset-link-sent' => 'Enlace para restablecer la contraseña enviado',
                'sign-in-link'    => '¿Volver a iniciar sesión?',
                'submit-btn'      => 'Restablecer',
                'title'           => 'Recuperar contraseña',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => '¿Volver a iniciar sesión?',
            'confirm-password' => 'Confirmar contraseña',
            'email'            => 'Correo electrónico registrado',
            'password'         => 'Contraseña',
            'submit-btn'       => 'Restablecer contraseña',
            'title'            => 'Restablecer contraseña',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'Regresar',
            'change-password'   => 'Cambiar contraseña',
            'confirm-password'  => 'Confirmar contraseña',
            'current-password'  => 'Contraseña actual',
            'email'             => 'Correo electrónico',
            'general'           => 'General',
            'invalid-password'  => 'La contraseña actual que ingresaste es incorrecta.',
            'name'              => 'Nombre',
            'password'          => 'Contraseña',
            'profile-image'     => 'Imagen de perfil',
            'save-btn'          => 'Guardar cuenta',
            'title'             => 'Mi cuenta',
            'update-success'    => 'Cuenta actualizada con éxito',
            'upload-image-info' => 'Sube una imagen de perfil (110 px × 110 px) en formato PNG o JPG',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'Correo',
                    'title'        => 'Redactar correo',
                    'to'           => 'Para',
                    'enter-emails' => 'Presiona Enter para agregar direcciones de correo electrónico',
                    'cc'           => 'CC',
                    'bcc'          => 'CCO',
                    'subject'      => 'Asunto',
                    'send-btn'     => 'Enviar',
                    'message'      => 'Mensaje',
                ],

                'file' => [
                    'btn'           => 'Archivo',
                    'title'         => 'Agregar archivo',
                    'title-control' => 'Título',
                    'name'          => 'Nombre',
                    'description'   => 'Descripción',
                    'file'          => 'Archivo',
                    'save-btn'      => 'Guardar archivo',
                ],

                'note' => [
                    'btn'      => 'Nota',
                    'title'    => 'Agregar nota',
                    'comment'  => 'Comentario',
                    'save-btn' => 'Guardar nota',
                ],

                'activity' => [
                    'btn'           => 'Actividad',
                    'title'         => 'Agregar actividad',
                    'title-control' => 'Título',
                    'description'   => 'Descripción',
                    'schedule-from' => 'Programar desde',
                    'schedule-to'   => 'Programar hasta',
                    'location'      => 'Ubicación',
                    'call'          => 'Llamada',
                    'meeting'       => 'Reunión',
                    'lunch'         => 'Almuerzo',
                    'save-btn'      => 'Guardar actividad',

                    'participants' => [
                        'title'       => 'Participantes',
                        'placeholder' => 'Escribe para buscar participantes',
                        'users'       => 'Usuarios',
                        'persons'     => 'Personas',
                        'no-results'  => 'No se encontraron resultados...',
                    ],
                ],
            ],

            'index' => [
                'from'         => 'De',
                'to'           => 'A',
                'cc'           => 'CC',
                'bcc'          => 'CCO',
                'all'          => 'Todo',
                'planned'      => 'Planificado',
                'calls'        => 'Llamadas',
                'meetings'     => 'Reuniones',
                'lunches'      => 'Almuerzos',
                'files'        => 'Archivos',
                'quotes'       => 'Cotizaciones',
                'notes'        => 'Notas',
                'emails'       => 'Correos electrónicos',
                'change-log'   => 'Registros de cambios',
                'by-user'      => 'Por :user',
                'scheduled-on' => 'Programado en',
                'location'     => 'Ubicación',
                'participants' => 'Participantes',
                'mark-as-done' => 'Marcar como hecho',
                'delete'       => 'Eliminar',
                'edit'         => 'Editar',
                'view'         => 'Ver',
                'unlink'       => 'Desvincular',
                'empty'        => 'Vacío',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'No se encontraron actividades',
                        'description' => 'No se encontraron actividades para esto. Puedes agregar actividades haciendo clic en el botón en el panel lateral.',
                    ],

                    'planned' => [
                        'title'       => 'No se encontraron actividades planificadas',
                        'description' => 'No se encontraron actividades planificadas para esto. Puedes agregar actividades planificadas haciendo clic en el botón en el panel lateral.',
                    ],

                    'notes' => [
                        'title'       => 'No se encontraron notas',
                        'description' => 'No se encontraron notas para esto. Puedes agregar notas haciendo clic en el botón en el panel lateral.',
                    ],

                    'calls' => [
                        'title'       => 'No se encontraron llamadas',
                        'description' => 'No se encontraron llamadas para esto. Puedes agregar llamadas haciendo clic en el botón en el panel lateral.',
                    ],

                    'meetings' => [
                        'title'       => 'No se encontraron reuniones',
                        'description' => 'No se encontraron reuniones para esto. Puedes agregar reuniones haciendo clic en el botón en el panel lateral.',
                    ],

                    'lunches' => [
                        'title'       => 'No se encontraron almuerzos',
                        'description' => 'No se encontraron almuerzos para esto. Puedes agregar almuerzos haciendo clic en el botón en el panel lateral.',
                    ],

                    'files' => [
                        'title'       => 'No se encontraron archivos',
                        'description' => 'No se encontraron archivos para esto. Puedes agregar archivos haciendo clic en el botón en el panel lateral.',
                    ],

                    'emails' => [
                        'title'       => 'No se encontraron correos electrónicos',
                        'description' => 'No se encontraron correos electrónicos para esto. Puedes agregar correos electrónicos haciendo clic en el botón en el panel lateral.',
                    ],

                    'system' => [
                        'title'       => 'No se encontraron registros de cambios',
                        'description' => 'No se encontraron registros de cambios para esto.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'Agregar imagen',
                'ai-add-image-btn'  => 'Inteligencia artificial mágica',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'Solo se aceptan archivos de imagen (.jpeg, .jpg, .png, ..)',

                'placeholders' => [
                    'front'     => 'Frontal',
                    'next'      => 'Siguiente',
                    'size'      => 'Tamaño',
                    'use-cases' => 'Casos de uso',
                    'zoom'      => 'Acercar',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'Agregar video',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'Solo se aceptan archivos de video (.mp4, .mov, .ogg ..)',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'No se han seleccionado registros.',
                'must-select-a-mass-action-option' => 'Debes seleccionar una opción de acción en masa.',
                'must-select-a-mass-action'        => 'Debes seleccionar una acción en masa.',
            ],

            'toolbar' => [
                'length-of' => ':length de',
                'of'        => 'de',
                'per-page'  => 'Por Página',
                'results'   => ':total Resultados',
                'delete'    => 'Eliminar',
                'selected'  => ':total Elementos Seleccionados',

                'mass-actions' => [
                    'submit'        => 'Enviar',
                    'select-option' => 'Seleccionar Opción',
                    'select-action' => 'Seleccionar Acción',
                ],

                'filter' => [
                    'apply-filters-btn' => 'Aplicar Filtros',
                    'back-btn'          => 'Regresar',
                    'create-new-filter' => 'Crear Nuevo Filtro',
                    'custom-filters'    => 'Filtros Personalizados',
                    'delete-error'      => 'Hubo un error al eliminar el filtro, por favor intente de nuevo.',
                    'delete-success'    => 'Filtro eliminado con éxito.',
                    'empty-description' => 'No hay filtros seleccionados disponibles para guardar. Por favor, seleccione filtros para guardar.',
                    'empty-title'       => 'Agregar Filtros para Guardar',
                    'name'              => 'Nombre',
                    'quick-filters'     => 'Filtros Rápidos',
                    'save-btn'          => 'Guardar',
                    'save-filter'       => 'Guardar Filtro',
                    'saved-success'     => 'Filtro guardado con éxito.',
                    'selected-filters'  => 'Filtros Seleccionados',
                    'title'             => 'Filtro',
                    'update'            => 'Actualizar',
                    'update-filter'     => 'Actualizar Filtro',
                    'updated-success'   => 'Filtro actualizado con éxito.',
                ],

                'search' => [
                    'title' => 'Buscar',
                ],
            ],

            'filters' => [
                'select' => 'Seleccionar',
                'title'  => 'Filtros',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'Escribe al menos 2 caracteres...',
                        'no-results'         => 'No se encontraron resultados...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'Borrar Todo',
                    'title'     => 'Filtros Personalizados',
                ],

                'boolean-options' => [
                    'false' => 'Falso',
                    'true'  => 'Verdadero',
                ],

                'date-options' => [
                    'last-month'        => 'Mes Pasado',
                    'last-six-months'   => 'Últimos 6 Meses',
                    'last-three-months' => 'Últimos 3 Meses',
                    'this-month'        => 'Este Mes',
                    'this-week'         => 'Esta Semana',
                    'this-year'         => 'Este Año',
                    'today'             => 'Hoy',
                    'yesterday'         => 'Ayer',
                ],
            ],

            'table' => [
                'actions'              => 'Acciones',
                'no-records-available' => 'No hay Registros Disponibles.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'Aceptar',
                'disagree-btn' => 'Rechazar',
                'message'      => '¿Estás seguro de que quieres realizar esta acción?',
                'title'        => '¿Estás seguro?',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'Etiquetas',
                'added-tags'     => 'Etiquetas Agregadas',
                'save-btn'       => 'Guardar Etiqueta',
                'placeholder'    => 'Escribe para buscar etiquetas',
                'add-tag'        => 'Agregar \":term\"...',
                'aquarelle-red'  => 'Rojo Aquarelle',
                'crushed-cashew' => 'Anacardo Triturado',
                'beeswax'        => 'Cera de Abejas',
                'lemon-chiffon'  => 'Chiffon de Limón',
                'snow-flurry'    => 'Tormenta de Nieve',
                'honeydew'       => 'Melón',
            ],
        ],

        'layouts' => [
            'powered-by' => [
                'description' => 'Desarrollado por :krayin, un proyecto de código abierto de :webkul.',
            ],

            'header' => [
                'mega-search' => [
                    'title'   => 'Buscar',

                    'tabs' => [
                        'leads'    => 'Oportunidades',
                        'quotes'   => 'Cotizaciones',
                        'persons'  => 'Personas',
                        'products' => 'Productos',
                    ],

                    'explore-all-products'          => 'Explorar todos los Productos',
                    'explore-all-leads'             => 'Explorar todas las Oportunidades',
                    'explore-all-contacts'          => 'Explorar todos los Contactos',
                    'explore-all-quotes'            => 'Explorar todas las Cotizaciones',
                    'explore-all-matching-products' => 'Explorar todos los productos que coinciden con ":query" (:count)',
                    'explore-all-matching-leads'    => 'Explorar todas las oportunidades que coinciden con ":query" (:count)',
                    'explore-all-matching-contacts' => 'Explorar todos los contactos que coinciden con ":query" (:count)',
                    'explore-all-matching-quotes'   => 'Explorar todas las cotizaciones que coinciden con ":query" (:count)',
                ],
            ],
        ],

        'attributes' => [
            'edit'   => [
                'delete' => 'Eliminar',
            ],

            'lookup' => [
                'click-to-add'    => 'Haz clic para agregar',
                'search'          => 'Buscar',
                'no-result-found' => 'No se encontraron resultados',
                'search'          => 'Buscar...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'Haz clic para agregar',
            'no-results'   => 'No se encontraron resultados',
            'add-as-new'   => 'Agregar como nuevo',
            'search'       => 'Buscar...',
        ],

        'flash-group' => [
            'success' => 'Éxito',
            'error'   => 'Error',
            'warning' => 'Advertencia',
            'info'    => 'Información',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'Cotizaciones',
            'create-btn'     => 'Crear Cotización',
            'create-success' => 'Cotización creada con éxito.',
            'update-success' => 'Cotización actualizada con éxito.',
            'delete-success' => 'Cotización eliminada con éxito.',
            'delete-failed'  => 'No se puede eliminar la cotización.',

            'datagrid' => [
                'subject'        => 'Asunto',
                'sales-person'   => 'Vendedor',
                'expired-at'     => 'Vence en',
                'created-at'     => 'Creado en',
                'expired-quotes' => 'Cotización Expirada',
                'person'         => 'Persona',
                'subtotal'       => 'Subtotal',
                'discount'       => 'Descuento',
                'tax'            => 'Impuesto',
                'adjustment'     => 'Ajuste',
                'grand-total'    => 'Total General',
                'edit'           => 'Editar',
                'delete'         => 'Eliminar',
                'print'          => 'Imprimir',
            ],

            'pdf' => [
                'title'            => 'Cotización',
                'grand-total'      => 'Total General',
                'adjustment'       => 'Ajuste',
                'discount'         => 'Descuento',
                'tax'              => 'Impuesto',
                'sub-total'        => 'Subtotal',
                'amount'           => 'Monto',
                'quantity'         => 'Cantidad',
                'price'            => 'Precio',
                'product-name'     => 'Nombre del Producto',
                'sku'              => 'SKU',
                'shipping-address' => 'Dirección de Envío',
                'billing-address'  => 'Dirección de Facturación',
                'expired-at'       => 'Vence en',
                'sales-person'     => 'Vendedor',
                'date'             => 'Fecha',
                'quote-id'         => 'ID de Cotización',
            ],
        ],

        'create' => [
            'title'             => 'Crear Cotización',
            'save-btn'          => 'Guardar Cotización',
            'quote-info'        => 'Información de la Cotización',
            'quote-info-info'   => 'Introduce la información básica de la cotización.',
            'address-info'      => 'Información de la Dirección',
            'address-info-info' => 'Información sobre la dirección relacionada con la cotización.',
            'quote-items'       => 'Artículos de la Cotización',
            'search-products'   => 'Buscar Productos',
            'link-to-lead'      => 'Vincular a cliente potencial',
            'quote-item-info'   => 'Agregar Solicitud de Producto para esta cotización.',
            'quote-name'        => 'Nombre de la Cotización',
            'quantity'          => 'Cantidad',
            'price'             => 'Precio',
            'discount'          => 'Descuento',
            'tax'               => 'Impuesto',
            'total'             => 'Total',
            'amount'            => 'Monto',
            'add-item'          => '+ Agregar Artículo',
            'sub-total'         => 'Subtotal (:symbol)',
            'total-discount'    => 'Descuento (:symbol)',
            'total-tax'         => 'Impuesto (:symbol)',
            'total-adjustment'  => 'Ajuste (:symbol)',
            'grand-total'       => 'Total General (:symbol)',
            'discount-amount'   => 'Monto del Descuento',
            'tax-amount'        => 'Monto del Impuesto',
            'adjustment-amount' => 'Monto del Ajuste',
            'product-name'      => 'Nombre del Producto',
            'action'            => 'Acción',
        ],

        'edit' => [
            'title'             => 'Editar Cotización',
            'save-btn'          => 'Guardar Cotización',
            'quote-info'        => 'Información de la Cotización',
            'quote-info-info'   => 'Introduce la información básica de la cotización.',
            'address-info'      => 'Información de la Dirección',
            'address-info-info' => 'Información sobre la dirección relacionada con la cotización.',
            'quote-items'       => 'Artículos de la Cotización',
            'link-to-lead'      => 'Vincular a cliente potencial',
            'quote-item-info'   => 'Agregar Solicitud de Producto para esta cotización.',
            'quote-name'        => 'Nombre de la Cotización',
            'quantity'          => 'Cantidad',
            'price'             => 'Precio',
            'search-products'   => 'Buscar Productos',
            'discount'          => 'Descuento',
            'tax'               => 'Impuesto',
            'total'             => 'Total',
            'amount'            => 'Monto',
            'add-item'          => '+ Agregar Artículo',
            'sub-total'         => 'Subtotal (:symbol)',
            'total-discount'    => 'Descuento (:symbol)',
            'total-tax'         => 'Impuesto (:symbol)',
            'total-adjustment'  => 'Ajuste (:symbol)',
            'grand-total'       => 'Total General (:symbol)',
            'discount-amount'   => 'Monto del Descuento',
            'tax-amount'        => 'Monto del Impuesto',
            'adjustment-amount' => 'Monto del Ajuste',
            'product-name'      => 'Nombre del Producto',
            'action'            => 'Acción',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'Personas',
                'create-btn'     => 'Crear Persona',
                'create-success' => 'Persona creada con éxito.',
                'update-success' => 'Persona actualizada con éxito.',
                'delete-success' => 'Persona eliminada con éxito.',
                'delete-failed'  => 'No se puede eliminar la persona.',

                'datagrid' => [
                    'contact-numbers'   => 'Números de Contacto',
                    'delete'            => 'Eliminar',
                    'edit'              => 'Editar',
                    'emails'            => 'Correos Electrónicos',
                    'id'                => 'ID',
                    'view'              => 'Ver',
                    'name'              => 'Nombre',
                    'organization-name' => 'Nombre de la Organización',
                ],
            ],

            'view' => [
                'title'              => ':name',
                'about-person'       => 'Sobre la Persona',
                'about-organization' => 'Acerca de la organización',

                'activities' => [
                    'index' => [
                        'all'          => 'Todos',
                        'calls'        => 'Llamadas',
                        'meetings'     => 'Reuniones',
                        'lunches'      => 'Almuerzos',
                        'files'        => 'Archivos',
                        'quotes'       => 'Cotizaciones',
                        'notes'        => 'Notas',
                        'emails'       => 'Correos Electrónicos',
                        'by-user'      => 'Por :user',
                        'scheduled-on' => 'Programado para',
                        'location'     => 'Ubicación',
                        'participants' => 'Participantes',
                        'mark-as-done' => 'Marcar como Hecho',
                        'delete'       => 'Eliminar',
                        'edit'         => 'Editar',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'Correo',
                            'title'    => 'Redactar Correo',
                            'to'       => 'Para',
                            'cc'       => 'CC',
                            'bcc'      => 'CCO',
                            'subject'  => 'Asunto',
                            'send-btn' => 'Enviar',
                            'message'  => 'Mensaje',
                        ],

                        'file' => [
                            'btn'           => 'Archivo',
                            'title'         => 'Agregar Archivo',
                            'title-control' => 'Título',
                            'name'          => 'Nombre del Archivo',
                            'description'   => 'Descripción',
                            'file'          => 'Archivo',
                            'save-btn'      => 'Guardar Archivo',
                        ],

                        'note' => [
                            'btn'      => 'Nota',
                            'title'    => 'Agregar Nota',
                            'comment'  => 'Comentario',
                            'save-btn' => 'Guardar Nota',
                        ],

                        'activity' => [
                            'btn'           => 'Actividad',
                            'title'         => 'Agregar Actividad',
                            'title-control' => 'Título',
                            'description'   => 'Descripción',
                            'schedule-from' => 'Programar Desde',
                            'schedule-to'   => 'Programar Hasta',
                            'location'      => 'Ubicación',
                            'call'          => 'Llamada',
                            'meeting'       => 'Reunión',
                            'lunch'         => 'Almuerzo',
                            'save-btn'      => 'Guardar Actividad',
                        ],
                    ],
                ],
            ],

            'create' => [
                'title'    => 'Crear Persona',
                'save-btn' => 'Guardar Persona',
            ],

            'edit' => [
                'title'    => 'Editar Persona',
                'save-btn' => 'Guardar Persona',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'Organizaciones',
                'create-btn'     => 'Crear Organización',
                'create-success' => 'Organización creada con éxito.',
                'update-success' => 'Organización actualizada con éxito.',
                'delete-success' => 'Organización eliminada con éxito.',
                'delete-failed'  => 'No se puede eliminar la organización.',

                'datagrid' => [
                    'delete'        => 'Eliminar',
                    'edit'          => 'Editar',
                    'id'            => 'ID',
                    'name'          => 'Nombre',
                    'persons-count' => 'Número de Personas',
                ],
            ],

            'create' => [
                'title'    => 'Crear Organización',
                'save-btn' => 'Guardar Organización',
            ],

            'edit' => [
                'title'    => 'Editar Organización',
                'save-btn' => 'Guardar Organización',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'Productos',
            'create-btn'     => 'Crear Producto',
            'create-success' => 'Producto creado con éxito.',
            'update-success' => 'Producto actualizado con éxito.',
            'delete-success' => 'Producto eliminado con éxito.',
            'delete-failed'  => 'No se puede eliminar el producto.',

            'datagrid'   => [
                'allocated' => 'Asignado',
                'delete'    => 'Eliminar',
                'edit'      => 'Editar',
                'id'        => 'ID',
                'in-stock'  => 'En Stock',
                'name'      => 'Nombre',
                'on-hand'   => 'Disponible',
                'price'     => 'Precio',
                'sku'       => 'SKU',
                'view'      => 'Ver',
            ],
        ],

        'create' => [
            'save-btn'  => 'Guardar Productos',
            'title'     => 'Crear Productos',
            'general'   => 'General',
            'price'     => 'Precio',
        ],

        'edit' => [
            'title'     => 'Editar Productos',
            'save-btn'  => 'Guardar Productos',
            'general'   => 'General',
            'price'     => 'Precio',
        ],

        'view' => [
            'sku'         => 'SKU',
            'all'         => 'Todos',
            'notes'       => 'Notas',
            'files'       => 'Archivos',
            'inventories' => 'Inventario',
            'change-logs' => 'Registros de Cambios',

            'attributes' => [
                'about-product' => 'Sobre el Producto',
            ],

            'inventory' => [
                'source'     => 'Fuente',
                'in-stock'   => 'En Stock',
                'allocated'  => 'Asignado',
                'on-hand'    => 'Disponible',
                'actions'    => 'Acciones',
                'assign'     => 'Asignar',
                'add-source' => 'Agregar Fuente',
                'location'   => 'Ubicación',
                'add-more'   => 'Agregar Más',
                'save'       => 'Guardar',
            ],
        ],
    ],

    'settings' => [
        'title' => 'Configuraciones',

        'groups' => [
            'index' => [
                'create-btn'        => 'Crear Grupo',
                'title'             => 'Grupos',
                'create-success'    => 'Grupo creado con éxito.',
                'update-success'    => 'Grupo actualizado con éxito.',
                'destroy-success'   => 'Grupo eliminado con éxito.',
                'delete-failed'     => 'No se puede eliminar el grupo.',

                'datagrid'   => [
                    'delete'      => 'Eliminar',
                    'description' => 'Descripción',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nombre',
                ],

                'edit' => [
                    'title' => 'Editar Grupo',
                ],

                'create' => [
                    'name'        => 'Nombre',
                    'title'       => 'Crear Grupo',
                    'description' => 'Descripción',
                    'save-btn'    => 'Guardar Grupo',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'El rol no se puede eliminar, ya que está siendo utilizado por un usuario administrador.',
                'create-btn'                => 'Crear Roles',
                'create-success'            => 'Rol creado con éxito.',
                'current-role-delete-error' => 'No se puede eliminar el rol asignado al usuario actual.',
                'delete-failed'             => 'No se puede eliminar el rol.',
                'delete-success'            => 'Rol eliminado con éxito.',
                'last-delete-error'         => 'Se requiere al menos un rol.',
                'settings'                  => 'Configuraciones',
                'title'                     => 'Roles',
                'update-success'            => 'Rol actualizado con éxito.',
                'user-define-error'         => 'No se puede eliminar el rol del sistema.',

                'datagrid'   => [
                    'all'             => 'Todos',
                    'custom'          => 'Personalizado',
                    'delete'          => 'Eliminar',
                    'description'     => 'Descripción',
                    'edit'            => 'Editar',
                    'id'              => 'ID',
                    'name'            => 'Nombre',
                    'permission-type' => 'Tipo de Permiso',
                ],
            ],

            'create' => [
                'access-control' => 'Control de Acceso',
                'all'            => 'Todos',
                'back-btn'       => 'Volver',
                'custom'         => 'Personalizado',
                'description'    => 'Descripción',
                'general'        => 'General',
                'name'           => 'Nombre',
                'permissions'    => 'Permisos',
                'save-btn'       => 'Guardar Rol',
                'title'          => 'Crear Rol',
            ],

            'edit' => [
                'access-control' => 'Control de Acceso',
                'all'            => 'Todos',
                'back-btn'       => 'Volver',
                'custom'         => 'Personalizado',
                'description'    => 'Descripción',
                'general'        => 'General',
                'name'           => 'Nombre',
                'permissions'    => 'Permisos',
                'save-btn'       => 'Guardar Rol',
                'title'          => 'Editar Rol',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'Crear Tipo',
                'create-success' => 'Tipo creado con éxito.',
                'delete-failed'  => 'No se puede eliminar el tipo.',
                'delete-success' => 'Tipo eliminado con éxito.',
                'title'          => 'Tipos',
                'update-success' => 'Tipo actualizado con éxito.',

                'datagrid' => [
                    'delete'      => 'Eliminar',
                    'description' => 'Descripción',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nombre',
                ],

                'create' => [
                    'name'     => 'Nombre',
                    'save-btn' => 'Guardar Tipo',
                    'title'    => 'Crear Tipo',
                ],

                'edit' => [
                    'title' => 'Editar Tipo',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'Crear Fuente',
                'create-success' => 'Fuente creada con éxito.',
                'delete-failed'  => 'No se puede eliminar la fuente.',
                'delete-success' => 'Fuente eliminada con éxito.',
                'title'          => 'Fuentes',
                'update-success' => 'Fuente actualizada con éxito.',

                'datagrid' => [
                    'delete' => 'Eliminar',
                    'edit'   => 'Editar',
                    'id'     => 'ID',
                    'name'   => 'Nombre',
                ],

                'create' => [
                    'name'     => 'Nombre',
                    'save-btn' => 'Guardar fuente',
                    'title'    => 'Crear fuente',
                ],

                'edit' => [
                    'title' => 'Editar fuente',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'Flujos de Trabajo',
                'create-btn'     => 'Crear Flujo de Trabajo',
                'create-success' => 'Flujo de trabajo creado con éxito.',
                'update-success' => 'Flujo de trabajo actualizado con éxito.',
                'delete-success' => 'Flujo de trabajo eliminado con éxito.',
                'delete-failed'  => 'No se puede eliminar el flujo de trabajo.',
                'datagrid'       => [
                    'delete'      => 'Eliminar',
                    'description' => 'Descripción',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nombre',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'Actualizar leads relacionados',
                'send-email-to-sales-owner'  => 'Enviar correo al propietario de ventas',
                'send-email-to-participants' => 'Enviar correo a los participantes',
                'add-webhook'                => 'Agregar Webhook',
                'update-lead'                => 'Actualizar Lead',
                'update-person'              => 'Actualizar Persona',
                'send-email-to-person'       => 'Enviar correo a la persona',
                'add-tag'                    => 'Agregar Etiqueta',
                'add-note-as-activity'       => 'Agregar Nota como Actividad',
                'update-quote'               => 'Actualizar cotización',
            ],

            'create' => [
                'title'                  => 'Crear Flujo de Trabajo',
                'event'                  => 'Evento',
                'back-btn'               => 'Volver',
                'save-btn'               => 'Guardar Flujo de Trabajo',
                'name'                   => 'Nombre',
                'basic-details'          => 'Detalles Básicos',
                'description'            => 'Descripción',
                'actions'                => 'Acciones',
                'basic-details-info'     => 'Coloque la información básica del flujo de trabajo.',
                'event-info'             => 'Un evento desencadena, verifica, condiciones y realiza acciones predefinidas.',
                'conditions'             => 'Condiciones',
                'conditions-info'        => 'Las condiciones son reglas que verifican escenarios, desencadenadas en ocasiones específicas.',
                'actions-info'           => 'Una acción no solo reduce la carga de trabajo, sino que también facilita la automatización de CRM.',
                'value'                  => 'Valor',
                'condition-type'         => 'Tipo de Condición',
                'all-condition-are-true' => 'Todas las condiciones son verdaderas',
                'any-condition-are-true' => 'Cualquiera de las condiciones es verdadera',
                'add-condition'          => 'Agregar Condición',
                'add-action'             => 'Agregar Acción',
                'yes'                    => 'Sí',
                'no'                     => 'No',
                'email'                  => 'Correo Electrónico',
                'is-equal-to'            => 'Es igual a',
                'is-not-equal-to'        => 'No es igual a',
                'equals-or-greater-than' => 'Es igual o mayor que',
                'equals-or-less-than'    => 'Es igual o menor que',
                'greater-than'           => 'Mayor que',
                'less-than'              => 'Menor que',
                'type'                   => 'Tipo',
                'contain'                => 'Contiene',
                'contains'               => 'Contiene',
                'does-not-contain'       => 'No contiene',
            ],

            'edit' => [
                'title'                  => 'Editar Flujo de Trabajo',
                'event'                  => 'Evento',
                'back-btn'               => 'Volver',
                'save-btn'               => 'Guardar Flujo de Trabajo',
                'name'                   => 'Nombre',
                'basic-details'          => 'Detalles Básicos',
                'description'            => 'Descripción',
                'actions'                => 'Acciones',
                'type'                   => 'Tipo',
                'basic-details-info'     => 'Coloque la información básica del flujo de trabajo.',
                'event-info'             => 'Un evento desencadena, verifica, condiciones y realiza acciones predefinidas.',
                'conditions'             => 'Condiciones',
                'conditions-info'        => 'Las condiciones son reglas que verifican escenarios, desencadenadas en ocasiones específicas.',
                'actions-info'           => 'Una acción no solo reduce la carga de trabajo, sino que también facilita la automatización de CRM.',
                'value'                  => 'Valor',
                'condition-type'         => 'Tipo de Condición',
                'all-condition-are-true' => 'Todas las condiciones son verdaderas',
                'any-condition-are-true' => 'Cualquiera de las condiciones es verdadera',
                'add-condition'          => 'Agregar Condición',
                'add-action'             => 'Agregar Acción',
                'yes'                    => 'Sí',
                'no'                     => 'No',
                'email'                  => 'Correo Electrónico',
                'is-equal-to'            => 'Es igual a',
                'is-not-equal-to'        => 'No es igual a',
                'equals-or-greater-than' => 'Es igual o mayor que',
                'equals-or-less-than'    => 'Es igual o menor que',
                'greater-than'           => 'Mayor que',
                'less-than'              => 'Menor que',
                'contain'                => 'Contiene',
                'contains'               => 'Contiene',
                'does-not-contain'       => 'No contiene',
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'Webforms',
                'create-btn'     => 'Crear Webform',
                'create-success' => 'Webform creado con éxito.',
                'update-success' => 'Webform actualizado con éxito.',
                'delete-success' => 'Webform eliminado con éxito.',
                'delete-failed'  => 'No se puede eliminar el Webform.',

                'datagrid'       => [
                    'id'     => 'ID',
                    'title'  => 'Título',
                    'edit'   => 'Editar',
                    'delete' => 'Eliminar',
                ],
            ],

            'create' => [
                'title'                    => 'Crear formulario web',
                'add-attribute-btn'        => 'Agregar Botón de Atributo',
                'attribute-label-color'    => 'Color de Etiqueta del Atributo',
                'attributes'               => 'Atributos',
                'attributes-info'          => 'Agregue atributos personalizados al formulario.',
                'background-color'         => 'Color de Fondo',
                'create-lead'              => 'Crear Lead',
                'customize-webform'        => 'Personalizar Webform',
                'customize-webform-info'   => 'Personalice su formulario web con los colores de los elementos de su elección.',
                'description'              => 'Descripción',
                'display-custom-message'   => 'Mostrar mensaje personalizado',
                'form-background-color'    => 'Color de Fondo del Formulario',
                'form-submit-btn-color'    => 'Color del Botón de Enviar del Formulario',
                'form-submit-button-color' => 'Color del Botón de Enviar del Formulario',
                'form-title-color'         => 'Color del Título del Formulario',
                'general'                  => 'General',
                'leads'                    => 'Leads',
                'person'                   => 'Persona',
                'save-btn'                 => 'Guardar Webform',
                'submit-button-label'      => 'Etiqueta del Botón de Enviar',
                'submit-success-action'    => 'Acción en caso de éxito de envío',
                'redirect-to-url'          => 'Redirigir a la URL',
                'choose-value'             => 'Elige un valor',
                'select-file'              => 'Seleccionar archivo',
                'select-image'             => 'Seleccionar imagen',
                'enter-value'              => 'Introducir valor',
            ],

            'edit' => [
                'title'                     => 'Editar formulario web',
                'add-attribute-btn'         => 'Agregar Botón de Atributo',
                'attribute-label-color'     => 'Color de Etiqueta del Atributo',
                'attributes'                => 'Atributos',
                'attributes-info'           => 'Agregue atributos personalizados al formulario.',
                'background-color'          => 'Color de Fondo',
                'code-snippet'              => 'Fragmento de Código',
                'copied'                    => 'Copiado',
                'copy'                      => 'Copiar',
                'create-lead'               => 'Crear Lead',
                'customize-webform'         => 'Personalizar Webform',
                'customize-webform-info'    => 'Personalice su formulario web con los colores de los elementos de su elección.',
                'description'               => 'Descripción',
                'display-custom-message'    => 'Mostrar mensaje personalizado',
                'embed'                     => 'Incrustar',
                'form-background-color'     => 'Color de Fondo del Formulario',
                'form-submit-btn-color'     => 'Color del Botón de Enviar del Formulario',
                'form-submit-button-color'  => 'Color del Botón de Enviar del Formulario',
                'form-title-color'          => 'Color del Título del Formulario',
                'general'                   => 'General',
                'preview'                   => 'Vista Previa',
                'person'                    => 'Persona',
                'public-url'                => 'URL Pública',
                'save-btn'                  => 'Guardar Webform',
                'submit-button-label'       => 'Etiqueta del Botón de Enviar',
                'submit-success-action'     => 'Acción en caso de éxito de envío',
                'redirect-to-url'           => 'Redirigir a la URL',
                'choose-value'              => 'Elige un valor',
                'select-file'               => 'Seleccionar archivo',
                'select-image'              => 'Seleccionar imagen',
                'enter-value'               => 'Introducir valor',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'Crear Plantilla de Correo Electrónico',
                'title'          => 'Plantillas de Correo Electrónico',
                'create-success' => 'Plantilla de Correo Electrónico creada exitosamente.',
                'update-success' => 'Plantilla de Correo Electrónico actualizada exitosamente.',
                'delete-success' => 'Plantilla de Correo Electrónico eliminada exitosamente.',
                'delete-failed'  => 'No se puede eliminar la Plantilla de Correo Electrónico.',

                'datagrid'   => [
                    'delete'       => 'Eliminar',
                    'edit'         => 'Editar',
                    'id'           => 'ID',
                    'name'         => 'Nombre',
                    'subject'      => 'Asunto',
                ],
            ],

            'create'     => [
                'title'                => 'Crear Plantilla de Correo Electrónico',
                'save-btn'             => 'Guardar Plantilla de Correo Electrónico',
                'email-template'       => 'Plantilla de Correo Electrónico',
                'subject'              => 'Asunto',
                'content'              => 'Contenido',
                'subject-placeholders' => 'Marcadores de Posición del Asunto',
                'general'              => 'General',
                'name'                 => 'Nombre',
            ],

            'edit' => [
                'title'                => 'Editar Plantilla de Correo Electrónico',
                'save-btn'             => 'Guardar Plantilla de Correo Electrónico',
                'email-template'       => 'Plantilla de Correo Electrónico',
                'subject'              => 'Asunto',
                'content'              => 'Contenido',
                'subject-placeholders' => 'Marcadores de Posición del Asunto',
                'general'              => 'General',
                'name'                 => 'Nombre',
            ],
        ],

        'marketing' => [
            'events' => [
                'index' => [
                    'create-btn'          => 'Crear Evento',
                    'title'               => 'Eventos',
                    'create-success'      => 'Evento creado con éxito.',
                    'update-success'      => 'Evento actualizado con éxito.',
                    'delete-success'      => 'Evento eliminado con éxito.',
                    'delete-failed'       => 'No se puede eliminar el evento.',
                    'mass-delete-success' => 'Eventos eliminados con éxito',

                    'datagrid'   => [
                        'delete'       => 'Eliminar',
                        'edit'         => 'Editar',
                        'id'           => 'ID',
                        'name'         => 'Nombre',
                        'description'  => 'Descripción',
                        'date'         => 'Fecha',
                    ],

                    'create'     => [
                        'title'       => 'Crear Evento',
                        'name'        => 'Nombre',
                        'date'        => 'Fecha',
                        'description' => 'Descripción',
                    ],

                    'edit' => [
                        'title' => 'Editar Evento',
                    ],
                ],
            ],

            'campaigns' => [
                'index' => [
                    'create-btn'          => 'Crear Campaña',
                    'title'               => 'Campañas',
                    'create-success'      => 'Campaña creada con éxito.',
                    'update-success'      => 'Campaña actualizada con éxito.',
                    'delete-success'      => 'Campaña eliminada con éxito.',
                    'delete-failed'       => 'No se puede eliminar la campaña.',
                    'mass-delete-success' => 'Campañas eliminadas con éxito.',

                    'datagrid'   => [
                        'id'       => 'ID',
                        'name'     => 'Nombre',
                        'subject'  => 'Asunto',
                        'status'   => 'Estado',
                        'active'   => 'Activo',
                        'inactive' => 'Inactivo',
                        'edit'     => 'Editar',
                        'delete'   => 'Eliminar',
                    ],

                    'create'     => [
                        'title'          => 'Crear Campaña',
                        'name'           => 'Nombre',
                        'type'           => 'Tipo',
                        'subject'        => 'Asunto',
                        'event'          => 'Evento',
                        'email-template' => 'Plantilla de Correo',
                        'status'         => 'Estado',
                    ],

                    'edit' => [
                        'title' => 'Editar Campaña',
                    ],
                ],
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'Crear Etiqueta',
                'title'          => 'Etiquetas',
                'create-success' => 'Etiqueta creada exitosamente.',
                'update-success' => 'Etiqueta actualizada exitosamente.',
                'delete-success' => 'Etiqueta eliminada exitosamente.',
                'delete-failed'  => 'No se puede eliminar la Etiqueta.',

                'datagrid' => [
                    'delete'      => 'Eliminar',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nombre',
                    'users'       => 'Usuarios',
                    'created-at'  => 'Creado En',
                ],

                'create' => [
                    'name'     => 'Nombre',
                    'save-btn' => 'Guardar Etiqueta',
                    'title'    => 'Crear Etiqueta',
                    'color'    => 'Color',
                ],

                'edit' => [
                    'title' => 'Editar Etiqueta',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'Crear Usuario',
                'create-success'      => 'Usuario creado exitosamente.',
                'delete-failed'       => 'No se puede eliminar el Usuario.',
                'delete-success'      => 'Usuario eliminado exitosamente.',
                'last-delete-error'   => 'Se requiere al menos un usuario.',
                'mass-delete-failed'  => 'No se pueden eliminar los Usuarios.',
                'mass-delete-success' => 'Usuarios eliminados exitosamente.',
                'mass-update-failed'  => 'No se pueden actualizar los Usuarios.',
                'mass-update-success' => 'Usuarios actualizados exitosamente.',
                'title'               => 'Usuarios',
                'update-success'      => 'Usuario actualizado exitosamente.',
                'user-define-error'   => 'No se puede eliminar el usuario del sistema.',
                'active'              => 'Activo',
                'inactive'            => 'Inactivo',

                'datagrid' => [
                    'active'        => 'Activo',
                    'created-at'    => 'Creado En',
                    'delete'        => 'Eliminar',
                    'edit'          => 'Editar',
                    'email'         => 'Correo Electrónico',
                    'id'            => 'ID',
                    'inactive'      => 'Inactivo',
                    'name'          => 'Nombre',
                    'status'        => 'Estado',
                    'update-status' => 'Actualizar Estado',
                    'users'         => 'Usuarios',
                ],

                'create' => [
                    'confirm-password' => 'Confirmar Contraseña',
                    'email'            => 'Correo Electrónico',
                    'general'          => 'General',
                    'global'           => 'Global',
                    'group'            => 'Grupo',
                    'individual'       => 'Individual',
                    'name'             => 'Nombre',
                    'password'         => 'Contraseña',
                    'permission'       => 'Permiso',
                    'role'             => 'Rol',
                    'save-btn'         => 'Guardar Usuario',
                    'status'           => 'Estado',
                    'title'            => 'Crear Usuario',
                    'view-permission'  => 'Ver Permiso',
                ],

                'edit' => [
                    'title' => 'Editar Usuario',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'Canales',
                'create-btn'           => 'Crear Canal',
                'create-success'       => 'Canal creado exitosamente.',
                'update-success'       => 'Canal actualizado exitosamente.',
                'delete-success'       => 'Canal eliminado exitosamente.',
                'delete-failed'        => 'No se puede eliminar el Canal.',
                'default-delete-error' => 'No se puede eliminar el canal predeterminado.',

                'datagrid' => [
                    'delete'      => 'Eliminar',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'is-default'  => 'Es Predeterminado',
                    'name'        => 'Nombre',
                    'no'          => 'No',
                    'rotten-days' => 'Días de Pudrición',
                    'yes'         => 'Sí',
                ],
            ],

            'create' => [
                'title'                => 'Crear Canal',
                'save-btn'             => 'Guardar Canal',
                'name'                 => 'Nombre',
                'rotten-days'          => 'Días de Pudrición',
                'mark-as-default'      => 'Marcar como Predeterminado',
                'general'              => 'General',
                'probability'          => 'Probabilidad (%)',
                'new-stage'            => 'Nuevo',
                'won-stage'            => 'Ganado',
                'lost-stage'           => 'Perdido',
                'stage-btn'            => 'Añadir Etapa',
                'stages'               => 'Etapas',
                'duplicate-name'       => 'El campo "Nombre" no puede ser duplicado',
                'delete-stage'         => 'Eliminar Etapa',
                'add-new-stages'       => 'Añadir Nuevas Etapas',
                'add-stage-info'       => 'Añadir nueva etapa para tu Canal',
                'newly-added'          => 'Añadido Recientemente',
                'stage-delete-success' => 'Etapa Eliminada Exitosamente',
            ],

            'edit'  => [
                'title'                => 'Editar Canal',
                'save-btn'             => 'Guardar Canal',
                'name'                 => 'Nombre',
                'rotten-days'          => 'Días de Pudrición',
                'mark-as-default'      => 'Marcar como Predeterminado',
                'general'              => 'General',
                'probability'          => 'Probabilidad (%)',
                'new-stage'            => 'Nuevo',
                'won-stage'            => 'Ganado',
                'lost-stage'           => 'Perdido',
                'stage-btn'            => 'Añadir Etapa',
                'stages'               => 'Etapas',
                'duplicate-name'       => 'El campo "Nombre" no puede ser duplicado',
                'delete-stage'         => 'Eliminar Etapa',
                'add-new-stages'       => 'Añadir Nuevas Etapas',
                'add-stage-info'       => 'Añadir nueva etapa para tu Canal',
                'stage-delete-success' => 'Etapa Eliminada Exitosamente',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'Webhooks',
                'create-btn'     => 'Crear Webhook',
                'create-success' => 'Webhook creado exitosamente.',
                'update-success' => 'Webhook actualizado exitosamente.',
                'delete-success' => 'Webhook eliminado exitosamente.',
                'delete-failed'  => 'No se puede eliminar el Webhook.',

                'datagrid' => [
                    'id'          => 'ID',
                    'delete'      => 'Eliminar',
                    'edit'        => 'Editar',
                    'name'        => 'Nombre',
                    'entity-type' => 'Tipo de Entidad',
                    'end-point'   => 'Punto Final',
                ],
            ],

            'create' => [
                'title'                 => 'Crear Webhook',
                'save-btn'              => 'Guardar Webhook',
                'info'                  => 'Ingrese los detalles del webhook',
                'url-and-parameters'    => 'URL Y Parámetros',
                'method'                => 'Método',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Punto Final de URL',
                'parameters'            => 'Parámetros',
                'add-new-parameter'     => 'Añadir Nuevo Parámetro',
                'url-preview'           => 'Vista Previa de URL:',
                'headers'               => 'Encabezados',
                'add-new-header'        => 'Añadir Nuevo Encabezado',
                'body'                  => 'Cuerpo',
                'default'               => 'Predeterminado',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Clave y Valor',
                'add-new-payload'       => 'Añadir nueva carga',
                'raw'                   => 'Crudo',
                'general'               => 'General',
                'name'                  => 'Nombre',
                'entity-type'           => 'Tipo de Entidad',
                'insert-placeholder'    => 'Insertar Marcador de Posición',
                'description'           => 'Descripción',
                'json'                  => 'Json',
                'text'                  => 'Texto',
            ],

            'edit' => [
                'title'                 => 'Editar Webhook',
                'edit-btn'              => 'Guardar Webhook',
                'save-btn'              => 'Guardar Webhook',
                'info'                  => 'Ingrese los detalles del webhook',
                'url-and-parameters'    => 'URL Y Parámetros',
                'method'                => 'Método',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Punto Final de URL',
                'parameters'            => 'Parámetros',
                'add-new-parameter'     => 'Añadir Nuevo Parámetro',
                'url-preview'           => 'Vista Previa de URL:',
                'headers'               => 'Encabezados',
                'add-new-header'        => 'Añadir Nuevo Encabezado',
                'body'                  => 'Cuerpo',
                'default'               => 'Predeterminado',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Clave y Valor',
                'add-new-payload'       => 'Añadir nueva carga',
                'raw'                   => 'Crudo',
                'general'               => 'General',
                'name'                  => 'Nombre',
                'entity-type'           => 'Tipo de Entidad',
                'insert-placeholder'    => 'Insertar Marcador de Posición',
                'description'           => 'Descripción',
                'json'                  => 'Json',
                'text'                  => 'Texto',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'Almacenes',
                'create-btn'     => 'Crear Almacén',
                'create-success' => 'Almacén creado con éxito.',
                'name-exists'    => 'El nombre del almacén ya existe.',
                'update-success' => 'Almacén actualizado con éxito.',
                'delete-success' => 'Almacén eliminado con éxito.',
                'delete-failed'  => 'No se puede eliminar el almacén.',

                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => 'Nombre',
                    'contact-name'    => 'Nombre del Contacto',
                    'delete'          => 'Eliminar',
                    'edit'            => 'Editar',
                    'view'            => 'Ver',
                    'created-at'      => 'Creado En',
                    'products'        => 'Productos',
                    'contact-emails'  => 'Correos Electrónicos de Contacto',
                    'contact-numbers' => 'Números de Teléfono de Contacto',
                ],
            ],

            'create' => [
                'title'         => 'Crear Almacén',
                'save-btn'      => 'Guardar Almacén',
                'contact-info'  => 'Información de Contacto',
            ],

            'edit' => [
                'title'         => 'Editar Almacén',
                'save-btn'      => 'Guardar Almacén',
                'contact-info'  => 'Información de Contacto',
            ],

            'view' => [
                'all'         => 'Todos',
                'notes'       => 'Notas',
                'files'       => 'Archivos',
                'location'    => 'Ubicación',
                'change-logs' => 'Registros de Cambios',

                'locations' => [
                    'action'         => 'Acción',
                    'add-location'   => 'Agregar Ubicación',
                    'create-success' => 'Ubicación creada con éxito.',
                    'delete'         => 'Eliminar',
                    'delete-failed'  => 'No se puede eliminar la ubicación.',
                    'delete-success' => 'Ubicación eliminada con éxito.',
                    'name'           => 'Nombre',
                    'save-btn'       => 'Guardar',
                ],

                'general-information' => [
                    'title' => 'Información General',
                ],

                'contact-information' => [
                    'title' => 'Información de Contacto',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'Atributos',
                'create-btn'         => 'Crear Atributo',
                'create-success'     => 'Atributos creados con éxito.',
                'update-success'     => 'Atributos actualizados con éxito.',
                'delete-success'     => 'Atributos eliminados con éxito.',
                'delete-failed'      => 'No se pueden eliminar los atributos.',
                'user-define-error'  => 'No se puede eliminar el atributo del sistema.',
                'mass-delete-failed' => 'No se pueden eliminar los atributos del sistema.',

                'datagrid' => [
                    'yes'         => 'Sí',
                    'no'          => 'No',
                    'id'          => 'ID',
                    'code'        => 'Código',
                    'name'        => 'Nombre',
                    'entity-type' => 'Tipo de Entidad',
                    'type'        => 'Tipo',
                    'is-default'  => 'Es Predeterminado',
                    'edit'        => 'Editar',
                    'delete'      => 'Eliminar',
                ],
            ],

            'create'  => [
                'title'                 => 'Crear Atributo',
                'save-btn'              => 'Guardar Atributo',
                'code'                  => 'Código',
                'name'                  => 'Nombre',
                'entity-type'           => 'Tipo de Entidad',
                'type'                  => 'Tipo',
                'validations'           => 'Validaciones',
                'is-required'           => 'Es Requerido',
                'input-validation'      => 'Validación de Entrada',
                'is-unique'             => 'Es Único',
                'labels'                => 'Etiquetas',
                'general'               => 'General',
                'numeric'               => 'Numérico',
                'decimal'               => 'Decimal',
                'url'                   => 'Url',
                'options'               => 'Opciones',
                'option-type'           => 'Tipo de Opción',
                'lookup-type'           => 'Tipo de Búsqueda',
                'add-option'            => 'Agregar Opción',
                'save-option'           => 'Guardar Opción',
                'option-name'           => 'Nombre de Opción',
                'add-attribute-options' => 'Agregar Opciones de Atributo',
                'text'                  => 'Texto',
                'textarea'              => 'Área de Texto',
                'price'                 => 'Precio',
                'boolean'               => 'Booleano',
                'select'                => 'Seleccionar',
                'multiselect'           => 'Selección Múltiple',
                'email'                 => 'Correo Electrónico',
                'address'               => 'Dirección',
                'phone'                 => 'Teléfono',
                'datetime'              => 'Fecha y Hora',
                'date'                  => 'Fecha',
                'image'                 => 'Imagen',
                'file'                  => 'Archivo',
                'lookup'                => 'Búsqueda',
                'entity_type'           => 'Tipo de Entidad',
                'checkbox'              => 'Casilla de Verificación',
                'is_required'           => 'Es Requerido',
                'is_unique'             => 'Es Único',
                'actions'               => 'Acciones',
            ],

            'edit'  => [
                'title'                 => 'Editar Atributo',
                'save-btn'              => 'Guardar Atributo',
                'code'                  => 'Código',
                'name'                  => 'Nombre',
                'labels'                => 'Etiquetas',
                'entity-type'           => 'Tipo de Entidad',
                'type'                  => 'Tipo',
                'validations'           => 'Validaciones',
                'is-required'           => 'Es Requerido',
                'input-validation'      => 'Validación de Entrada',
                'is-unique'             => 'Es Único',
                'general'               => 'General',
                'numeric'               => 'Numérico',
                'decimal'               => 'Decimal',
                'url'                   => 'Url',
                'options'               => 'Opciones',
                'option-type'           => 'Tipo de Opción',
                'lookup-type'           => 'Tipo de Búsqueda',
                'add-option'            => 'Agregar Opción',
                'save-option'           => 'Guardar Opción',
                'option-name'           => 'Nombre de Opción',
                'add-attribute-options' => 'Agregar Opciones de Atributo',
                'text'                  => 'Texto',
                'textarea'              => 'Área de Texto',
                'price'                 => 'Precio',
                'boolean'               => 'Booleano',
                'select'                => 'Seleccionar',
                'multiselect'           => 'Selección Múltiple',
                'email'                 => 'Correo Electrónico',
                'address'               => 'Dirección',
                'phone'                 => 'Teléfono',
                'datetime'              => 'Fecha y Hora',
                'date'                  => 'Fecha',
                'image'                 => 'Imagen',
                'file'                  => 'Archivo',
                'lookup'                => 'Búsqueda',
                'entity_type'           => 'Tipo de Entidad',
                'checkbox'              => 'Casilla de Verificación',
                'is_required'           => 'Es Requerido',
                'is_unique'             => 'Es Único',
                'actions'               => 'Acciones',
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'Actividades',

            'datagrid' => [
                'comment'       => 'Comentario',
                'created_at'    => 'Creado En',
                'created_by'    => 'Creado Por',
                'edit'          => 'Editar',
                'id'            => 'ID',
                'done'          => 'Completado',
                'not-done'      => 'No Completado',
                'lead'          => 'Oportunidad',
                'mass-delete'   => 'Eliminación Masiva',
                'mass-update'   => 'Actualización Masiva',
                'schedule-from' => 'Programar Desde',
                'schedule-to'   => 'Programar Hasta',
                'schedule_from' => 'Programar Desde',
                'schedule_to'   => 'Programar Hasta',
                'title'         => 'Título',
                'is_done'       => 'Completado',
                'type'          => 'Tipo',
                'update'        => 'Actualizar',
                'call'          => 'Llamada',
                'meeting'       => 'Reunión',
                'lunch'         => 'Almuerzo',
            ],
        ],

        'edit' => [
            'title'           => 'Editar Actividad',
            'back-btn'        => 'Volver',
            'save-btn'        => 'Guardar Actividad',
            'type'            => 'Tipo de Actividad',
            'call'            => 'Llamada',
            'meeting'         => 'Reunión',
            'lunch'           => 'Almuerzo',
            'schedule_to'     => 'Programar Hasta',
            'schedule_from'   => 'Programar Desde',
            'location'        => 'Ubicación',
            'comment'         => 'Comentario',
            'lead'            => 'Oportunidad',
            'participants'    => 'Participantes',
            'general'         => 'General',
            'persons'         => 'Personas',
            'no-result-found' => 'No se encontraron registros.',
            'users'           => 'Usuarios',
        ],

        'updated'              => 'Actualizado :attribute',
        'created'              => 'Creado',
        'duration-overlapping' => 'Los participantes tienen otra reunión en este momento. ¿Deseas continuar?',
        'create-success'       => 'Actividad creada con éxito.',
        'update-success'       => 'Actividad actualizada con éxito.',
        'overlapping-error'    => 'Los participantes tienen otra reunión en este momento.',
        'destroy-success'      => 'Actividad eliminada con éxito.',
        'delete-failed'        => 'No se puede eliminar la actividad.',
        'mass-update-success'  => 'Actividades actualizadas con éxito.',
        'mass-destroy-success' => 'Actividades eliminadas con éxito.',
        'mass-delete-failed'   => 'No se pueden eliminar las actividades.',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'Redactar',
            'draft'             => 'Borrador',
            'inbox'             => 'Bandeja de entrada',
            'outbox'            => 'Bandeja de salida',
            'sent'              => 'Enviados',
            'trash'             => 'Papelera',
            'compose-mail-btn'  => 'Redactar Correo',
            'btn'               => 'Correo',
            'mail'              => [
                'title'         => 'Redactar Correo',
                'to'            => 'Para',
                'enter-emails'  => 'Presiona enter para añadir correos',
                'cc'            => 'CC',
                'bcc'           => 'BCC',
                'subject'       => 'Asunto',
                'send-btn'      => 'Enviar',
                'message'       => 'Mensaje',
                'draft'         => 'Borrador',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => 'De',
                'to'            => 'Para',
                'subject'       => 'Asunto',
                'tag-name'      => 'Nombre de la etiqueta',
                'created-at'    => 'Creado En',
                'move-to-inbox' => 'Mover a Bandeja de Entrada',
                'edit'          => 'Editar',
                'view'          => 'Ver',
                'delete'        => 'Eliminar',
            ],
        ],

        'create-success'      => 'Correo enviado con éxito.',
        'update-success'      => 'Correo actualizado con éxito.',
        'mass-update-success' => 'Correos actualizados con éxito.',
        'delete-success'      => 'Correo eliminado con éxito.',
        'delete-failed'       => 'No se puede eliminar el correo.',

        'view' => [
            'title'                      => 'Correos',
            'subject'                    => ':subject',
            'link-mail'                  => 'Enlace de Correo',
            'to'                         => 'Para',
            'cc'                         => 'CC',
            'bcc'                        => 'BCC',
            'reply'                      => 'Responder',
            'reply-all'                  => 'Responder a Todos',
            'forward'                    => 'Reenviar',
            'delete'                     => 'Eliminar',
            'enter-mails'                => 'Ingresar id de correo',
            'rotten-days'                => 'El lead está en estado crítico por :days días',
            'search-an-existing-lead'    => 'Buscar un lead existente',
            'search-an-existing-contact' => 'Buscar un contacto existente',
            'message'                    => 'Mensaje',
            'add-attachments'            => 'Añadir Archivos Adjuntos',
            'discard'                    => 'Descartar',
            'send'                       => 'Enviar',
            'no-result-found'            => 'No se encontraron resultados',
            'add-new-contact'            => 'Añadir Nuevo Contacto',
            'description'                => 'Descripción',
            'search'                     => 'Buscar...',
            'add-new-lead'               => 'Añadir Nuevo Lead',
            'create-new-contact'         => 'Crear Nuevo Contacto',
            'save-contact'               => 'Guardar Contacto',
            'create-lead'                => 'Crear Lead',
            'linked-contact'             => 'Contacto Vinculado',
            'link-to-contact'            => 'Vincular a Contacto',
            'link-to-lead'               => 'Vincular a Lead',
            'linked-lead'                => 'Lead Vinculado',
            'lead-details'               => 'Detalles del Lead',
            'contact-person'             => 'Persona de Contacto',
            'product'                    => 'Producto',

            'tags' => [
                'create-success'  => 'Etiqueta creada con éxito.',
                'destroy-success' => 'Etiqueta eliminada con éxito.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'select-country' => 'Seleccionar País',
            'select-state'   => 'Seleccionar Estado',
            'state'          => 'Estado',
            'city'           => 'Ciudad',
            'postcode'       => 'Código Postal',
            'work'           => 'Trabajo',
            'home'           => 'Hogar',
            'add-more'       => 'Añadir Más',
            'select'         => 'Seleccionar',
            'country'        => 'País',
            'address'        => 'Dirección',
        ],
    ],

    'leads' => [
        'create-success'    => 'Lead creado exitosamente.',
        'update-success'    => 'Lead actualizado exitosamente.',
        'update-failed'     => 'No se pueden eliminar los clientes potenciales.',
        'destroy-success'   => 'Lead eliminado exitosamente.',
        'destroy-failed'    => 'No se puede eliminar el lead.',

        'index' => [
            'title'      => 'Leads',
            'create-btn' => 'Crear Lead',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => 'Persona de Ventas',
                'subject'             => 'Asunto',
                'source'              => 'Fuente',
                'lead-value'          => 'Valor del Lead',
                'lead-type'           => 'Tipo de cliente potencial',
                'tag-name'            => 'Nombre de la etiqueta',
                'contact-person'      => 'Persona de Contacto',
                'stage'               => 'Etapa',
                'rotten-lead'         => 'Lead Podrido',
                'expected-close-date' => 'Fecha de Cierre Esperada',
                'created-at'          => 'Creado En',
                'no'                  => 'No',
                'yes'                 => 'Sí',
                'delete'              => 'Eliminar',
                'mass-delete'         => 'Eliminar en Masa',
                'mass-update'         => 'Actualizar en Masa',
            ],

            'kanban' => [
                'rotten-days'            => 'El lead está podrido desde hace :days días',
                'empty-list'             => 'Tu lista de leads está vacía',
                'empty-list-description' => 'Crea un lead para organizar tus objetivos.',
                'create-lead-btn'        => 'Crear Lead',

                'columns' => [
                    'contact-person'      => 'Persona de Contacto',
                    'id'                  => 'ID',
                    'lead-type'           => 'Tipo de Lead',
                    'lead-value'          => 'Valor del Lead',
                    'sales-person'        => 'Persona de Ventas',
                    'source'              => 'Fuente',
                    'title'               => 'Título',
                    'tags'                => 'Etiquetas',
                    'expected-close-date' => 'Fecha de Cierre Esperada',
                    'created-at'          => 'Creado En',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Buscar',
                    ],

                    'filters' => [
                        'apply-filters' => 'Aplicar Filtros',
                        'clear-all'     => 'Limpiar Todo',
                        'filter'        => 'Filtrar',
                        'filters'       => 'Filtros',
                        'select'        => 'Seleccionar',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'Todos los Canales',
                'create-new-pipeline' => 'Crear Nuevo Canal',
            ],
        ],

        'create' => [
            'title'          => 'Crear Lead',
            'save-btn'       => 'Guardar',
            'details'        => 'Detalles',
            'details-info'   => 'Introduce la Información Básica del Lead',
            'contact-person' => 'Persona de Contacto',
            'contact-info'   => 'Información Sobre la Persona de Contacto',
            'products'       => 'Productos',
            'products-info'  => 'Información Sobre los Productos',
        ],

        'edit' => [
            'title'          => 'Editar Lead',
            'save-btn'       => 'Guardar',
            'details'        => 'Detalles',
            'details-info'   => 'Introduce la Información Básica del Lead',
            'contact-person' => 'Persona de Contacto',
            'contact-info'   => 'Información Sobre la Persona de Contacto',
            'products'       => 'Productos',
            'products-info'  => 'Información Sobre los Productos',
        ],

        'common' => [
            'contact' => [
                'name'           => 'Nombre',
                'email'          => 'Correo Electrónico',
                'contact-number' => 'Número de Contacto',
                'organization'   => 'Organización',
            ],

            'products' => [
                'product-name' => 'Nombre del Producto',
                'quantity'     => 'Cantidad',
                'price'        => 'Precio',
                'amount'       => 'Monto',
                'action'       => 'Acción',
                'add-more'     => 'Agregar Más',
                'total'        => 'Total',
            ],
        ],

        'view' => [
            'title'       => 'Lead: :title',
            'rotten-days' => ':days Días',

            'tabs'        => [
                'description' => 'Descripción',
                'products'    => 'Productos',
                'quotes'      => 'Cotizaciones',
            ],

            'attributes' => [
                'title' => 'Sobre el Lead',
            ],

            'quotes'=> [
                'subject'         => 'Asunto',
                'expired-at'      => 'Expirado En',
                'sub-total'       => 'Subtotal',
                'discount'        => 'Descuento',
                'tax'             => 'Impuesto',
                'adjustment'      => 'Ajuste',
                'grand-total'     => 'Total General',
                'delete'          => 'Eliminar',
                'edit'            => 'Editar',
                'download'        => 'Descargar',
                'destroy-success' => 'Cotización eliminada exitosamente.',
                'empty-title'     => 'No se Encontraron Cotizaciones',
                'empty-info'      => 'No se Encontraron Cotizaciones para este Lead',
                'add-btn'         => 'Agregar Cotización',
            ],

            'products' => [
                'product-name' => 'Nombre del Producto',
                'quantity'     => 'Cantidad',
                'price'        => 'Precio',
                'amount'       => 'Monto',
                'action'       => 'Acción',
                'add-more'     => 'Agregar Más',
                'total'        => 'Total',
                'empty-title'  => 'No se Encontraron Productos',
                'empty-info'   => 'No se Encontraron Productos para este Lead',
                'add-product'  => 'Agregar Producto',
            ],

            'persons' => [
                'title'     => 'Sobre las Personas',
                'job-title' => ':job_title en :organization',
            ],

            'stages' => [
                'won-lost'       => 'Ganado/Perdido',
                'won'            => 'Ganado',
                'lost'           => 'Perdido',
                'need-more-info' => 'Necesita Más Información',
                'closed-at'      => 'Cerrado En',
                'won-value'      => 'Valor Ganado',
                'lost-reason'    => 'Razón de la Pérdida',
                'save-btn'       => 'Guardar',
            ],

            'tags' => [
                'create-success'  => 'Etiqueta creada con éxito.',
                'destroy-success' => 'Etiqueta eliminada con éxito.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'         => 'Volver',
            'save-btn'     => 'Guardar Configuración',
            'save-success' => 'Configuración Guardada Exitosamente.',
            'search'       => 'Buscar',
            'title'        => 'Configuración',

            'general'  => [
                'title'   => 'General',
                'info'    => 'Configuración General',

                'general' => [
                    'title'           => 'General',
                    'info'            => 'Actualiza tus ajustes generales aquí.',
                    'locale-settings' => [
                        'title'       => 'Configuración Regional',
                        'title-info'  => 'Define el idioma utilizado en la interfaz de usuario, como árabe (ar), inglés (en), español (es), persa (fa) y turco (tr).',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'Tablero',

            'revenue' => [
                'lost-revenue' => 'Ingresos Perdidos',
                'won-revenue'  => 'Ingresos Ganados',
            ],

            'over-all' => [
                'average-lead-value'    => 'Valor Promedio de Lead',
                'total-leads'           => 'Total de Leads',
                'average-leads-per-day' => 'Leads Promedio por Día',
                'total-quotations'      => 'Total de Cotizaciones',
                'total-persons'         => 'Total de Personas',
                'total-organizations'   => 'Total de Organizaciones',
            ],

            'total-leads' => [
                'title' => 'Leads',
                'total' => 'Total de Leads',
                'won'   => 'Leads Ganados',
                'lost'  => 'Leads Perdidos',
            ],

            'revenue-by-sources' => [
                'title'       => 'Ingresos por Fuentes',
                'empty-title' => 'No Hay Datos Disponibles',
                'empty-info'  => 'No hay datos disponibles para el intervalo seleccionado',
            ],

            'revenue-by-types' => [
                'title'       => 'Ingresos por Tipos',
                'empty-title' => 'No Hay Datos Disponibles',
                'empty-info'  => 'No hay datos disponibles para el intervalo seleccionado',
            ],

            'top-selling-products' => [
                'title'       => 'Productos Más Vendidos',
                'empty-title' => 'No Se Encontraron Productos',
                'empty-info'  => 'No hay productos disponibles para el intervalo seleccionado',
            ],

            'top-persons' => [
                'title'       => 'Personas Más Destacadas',
                'empty-title' => 'No Se Encontraron Personas',
                'empty-info'  => 'No hay personas disponibles para el intervalo seleccionado',
            ],

            'open-leads-by-states' => [
                'title'       => 'Leads Abiertos por Estados',
                'empty-title' => 'No Hay Datos Disponibles',
                'empty-info'  => 'No hay datos disponibles para el intervalo seleccionado',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'Versión: :version',
        'dashboard'            => 'Tablero',
        'leads'                => 'Leads',
        'quotes'               => 'Cotizaciones',
        'quote'                => 'Cotización',
        'mail'                 => [
            'title'   => 'Correo',
            'compose' => 'Redactar',
            'inbox'   => 'Bandeja de Entrada',
            'draft'   => 'Borradores',
            'outbox'  => 'Enviados',
            'sent'    => 'Enviados',
            'trash'   => 'Papelera',
            'setting' => 'Configuración',
        ],
        'activities'           => 'Actividades',
        'contacts'             => 'Contactos',
        'persons'              => 'Personas',
        'person'               => 'Persona',
        'organizations'        => 'Organizaciones',
        'organization'         => 'Organización',
        'products'             => 'Productos',
        'product'              => 'Producto',
        'settings'             => 'Configuraciones',
        'user'                 => 'Usuario',
        'user-info'            => 'Administra todos tus usuarios y sus permisos en el CRM, lo que están autorizados a hacer.',
        'groups'               => 'Grupos',
        'groups-info'          => 'Agregar, editar o eliminar grupos del CRM',
        'roles'                => 'Roles',
        'role'                 => 'Rol',
        'roles-info'           => 'Agregar, editar o eliminar roles del CRM',
        'users'                => 'Usuarios',
        'users-info'           => 'Agregar, editar o eliminar usuarios del CRM',
        'lead'                 => 'Lead',
        'lead-info'            => 'Administra todas las configuraciones relacionadas con los leads en el CRM',
        'pipelines'            => 'Pipelines',
        'pipelines-info'       => 'Agregar, editar o eliminar pipelines del CRM',
        'sources'              => 'Fuentes',
        'sources-info'         => 'Agregar, editar o eliminar fuentes del CRM',
        'types'                => 'Tipos',
        'types-info'           => 'Agregar, editar o eliminar tipos del CRM',
        'automation'           => 'Automatización',
        'automation-info'      => 'Administra todas las configuraciones relacionadas con la automatización en el CRM',
        'attributes'           => 'Atributos',
        'attribute'            => 'Atributo',
        'attributes-info'      => 'Agregar, editar o eliminar atributos del CRM',
        'email-templates'      => 'Plantillas de Correo',
        'email'                => 'Correo',
        'email-templates-info' => 'Agregar, editar o eliminar plantillas de correo del CRM',
        'events'               => 'Eventos',
        'events-info'          => 'Agregar, editar o eliminar eventos del CRM',
        'campaigns'            => 'Campañas',
        'campaigns-info'       => 'Agregar, editar o eliminar campañas del CRM',
        'workflows'            => 'Flujos de Trabajo',
        'workflows-info'       => 'Agregar, editar o eliminar flujos de trabajo del CRM',
        'webhooks'             => 'Webhooks',
        'webhooks-info'        => 'Agregar, editar o eliminar webhooks desde CRM',
        'other-settings'       => 'Otras Configuraciones',
        'other-settings-info'  => 'Administra todas tus configuraciones adicionales en el CRM',
        'tags'                 => 'Etiquetas',
        'tags-info'            => 'Agregar, editar o eliminar etiquetas del CRM',
        'my-account'           => 'Mi Cuenta',
        'sign-out'             => 'Cerrar Sesión',
        'back'                 => 'Volver',
        'name'                 => 'Nombre',
        'configuration'        => 'Configuración',
        'activities'           => 'Actividades',
        'howdy'                => '¡Hola!',
        'warehouses'           => 'Almacenes',
        'warehouse'            => 'Almacén',
        'warehouses-info'      => 'Agregar, editar o eliminar almacenes del CRM',
    ],

    'user' => [
        'account' => [
            'name'                  => 'Nombre',
            'email'                 => 'Correo Electrónico',
            'password'              => 'Contraseña',
            'my_account'            => 'Mi cuenta',
            'update_details'        => 'Actualizar Detalles',
            'current_password'      => 'Contraseña Actual',
            'confirm_password'      => 'Confirmar Contraseña',
            'password-match'        => 'La contraseña actual no coincide.',
            'account-save'          => 'Cambios en la cuenta guardados exitosamente.',
            'permission-denied'     => 'Permiso Denegado',
            'remove-image'          => 'Eliminar Imagen',
            'upload_image_pix'      => 'Sube una Imagen de Perfil (100px x 100px)',
            'upload_image_format'   => 'en formato PNG o JPG',
            'image_upload_message'  => 'Solo se permiten imágenes (.jpeg, .jpg, .png, ..).',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'Estimado/a :name',
            'cheers' => 'Saludos,</br>Equipo :app_name',

            'user' => [
                'dear'           => 'Estimado/a :username',
                'create-subject' => 'Has sido agregado como miembro.',
                'create-body'    => '¡Felicidades! Ahora eres miembro de nuestro equipo.',

                'forget-password' => [
                    'subject'           => 'Restablecimiento de Contraseña del Cliente',
                    'dear'              => 'Estimado/a :username',
                    'reset-password'    => 'Restablecer Contraseña',
                    'info'              => 'Estás recibiendo este correo porque recibimos una solicitud de restablecimiento de contraseña para tu cuenta',
                    'final-summary'     => 'Si no solicitaste el restablecimiento de contraseña, no se requiere ninguna acción adicional',
                    'thanks'            => '¡Gracias!',
                ],
            ],
        ],
    ],

    'errors' => [
        'dashboard' => 'Tablero',
        'go-back'   => 'Volver',
        'support'   => 'Si el problema persiste, contáctanos en <a href=":link" class=":class">:email</a> para obtener ayuda.',

        '404' => [
            'description' => '¡Ups! La página que estás buscando está de vacaciones. Parece que no pudimos encontrar lo que estabas buscando.',
            'title'       => '404 Página No Encontrada',
        ],

        '401' => [
            'description' => '¡Ups! Parece que no tienes permiso para acceder a esta página. Parece que te faltan las credenciales necesarias.',
            'title'       => '401 No Autorizado',
        ],

        '403' => [
            'description' => '¡Ups! Esta página está fuera de límites. Parece que no tienes los permisos necesarios para ver este contenido.',
            'title'       => '403 Prohibido',
        ],

        '500' => [
            'description' => '¡Ups! Algo salió mal. Parece que tenemos problemas para cargar la página que estás buscando.',
            'title'       => '500 Error Interno del Servidor',
        ],

        '503' => [
            'description' => '¡Ups! Parece que estamos temporalmente fuera de servicio por mantenimiento. Vuelve a intentarlo en un rato.',
            'title'       => '503 Servicio No Disponible',
        ],
    ],
];
