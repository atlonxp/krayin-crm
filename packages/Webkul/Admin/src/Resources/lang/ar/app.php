<?php

return [
    'acl' => [
        'leads'           => 'العملاء المحتملون',
        'lead'            => 'عميل محتمل',
        'quotes'          => 'العروض',
        'mail'            => 'البريد',
        'inbox'           => 'الوارد',
        'draft'           => 'المسودات',
        'outbox'          => 'الصادر',
        'sent'            => 'المرسلة',
        'trash'           => 'المهملات',
        'activities'      => 'الأنشطة',
        'webhook'         => 'Webhook',
        'contacts'        => 'جهات الاتصال',
        'persons'         => 'الأشخاص',
        'organizations'   => 'المنظمات',
        'products'        => 'المنتجات',
        'settings'        => 'الإعدادات',
        'groups'          => 'المجموعات',
        'roles'           => 'الأدوار',
        'users'           => 'المستخدمون',
        'user'            => 'مستخدم',
        'automation'      => 'التشغيل الآلي',
        'attributes'      => 'السمات',
        'pipelines'       => 'خطوط الأنابيب',
        'sources'         => 'المصادر',
        'types'           => 'الأنواع',
        'email-templates' => 'قوالب البريد الإلكتروني',
        'workflows'       => 'سير العمل',
        'other-settings'  => 'إعدادات أخرى',
        'tags'            => 'العلامات',
        'configuration'   => 'التكوين',
        'campaigns'       => 'الحملات',
        'event'           => 'الحدث',
        'create'          => 'إنشاء',
        'edit'            => 'تعديل',
        'view'            => 'عرض',
        'print'           => 'طباعة',
        'delete'          => 'حذف',
        'export'          => 'تصدير',
        'mass-delete'     => 'حذف جماعي',
    ],

    'users' => [
        'activate-warning' => 'حسابك لم يتم تفعيله بعد. يرجى الاتصال بالمسؤول.',
        'login-error'      => 'بيانات الاعتماد لا تتطابق مع سجلاتنا.',
        'not-permission'   => 'ليس لديك إذن للوصول إلى لوحة الإدارة.',

        'login' => [
            'email'                => 'عنوان البريد الإلكتروني',
            'forget-password-link' => 'نسيت كلمة المرور؟',
            'password'             => 'كلمة المرور',
            'submit-btn'           => 'تسجيل الدخول',
            'title'                => 'تسجيل الدخول',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'البريد الإلكتروني المسجل',
                'email-not-exist' => 'البريد الإلكتروني غير موجود',
                'page-title'      => 'نسيت كلمة المرور',
                'reset-link-sent' => 'تم إرسال رابط إعادة تعيين كلمة المرور',
                'sign-in-link'    => 'العودة إلى تسجيل الدخول؟',
                'submit-btn'      => 'إعادة تعيين',
                'title'           => 'استعادة كلمة المرور',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'العودة إلى تسجيل الدخول؟',
            'confirm-password' => 'تأكيد كلمة المرور',
            'email'            => 'البريد الإلكتروني المسجل',
            'password'         => 'كلمة المرور',
            'submit-btn'       => 'إعادة تعيين كلمة المرور',
            'title'            => 'إعادة تعيين كلمة المرور',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'رجوع',
            'change-password'   => 'تغيير كلمة المرور',
            'confirm-password'  => 'تأكيد كلمة المرور',
            'current-password'  => 'كلمة المرور الحالية',
            'email'             => 'البريد الإلكتروني',
            'general'           => 'عام',
            'invalid-password'  => 'كلمة المرور الحالية التي أدخلتها غير صحيحة.',
            'name'              => 'الاسم',
            'password'          => 'كلمة المرور',
            'profile-image'     => 'صورة الملف الشخصي',
            'save-btn'          => 'حفظ الحساب',
            'title'             => 'حسابي',
            'update-success'    => 'تم تحديث الحساب بنجاح',
            'upload-image-info' => 'قم بتحميل صورة الملف الشخصي (110px X 110px) بتنسيق PNG أو JPG',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'بريد',
                    'title'        => 'كتابة بريد',
                    'to'           => 'إلى',
                    'enter-emails' => 'اضغط Enter لإضافة عناوين البريد الإلكتروني',
                    'cc'           => 'نسخة',
                    'bcc'          => 'نسخة مخفية',
                    'subject'      => 'الموضوع',
                    'send-btn'     => 'إرسال',
                    'message'      => 'رسالة',
                ],

                'file' => [
                    'btn'           => 'ملف',
                    'title'         => 'إضافة ملف',
                    'title-control' => 'عنوان',
                    'name'          => 'اسم',
                    'description'   => 'وصف',
                    'file'          => 'ملف',
                    'save-btn'      => 'حفظ الملف',
                ],

                'note' => [
                    'btn'      => 'ملاحظة',
                    'title'    => 'إضافة ملاحظة',
                    'comment'  => 'تعليق',
                    'save-btn' => 'حفظ الملاحظة',
                ],

                'activity' => [
                    'btn'           => 'نشاط',
                    'title'         => 'إضافة نشاط',
                    'title-control' => 'عنوان',
                    'description'   => 'وصف',
                    'schedule-from' => 'الجدولة من',
                    'schedule-to'   => 'الجدولة إلى',
                    'location'      => 'موقع',
                    'call'          => 'مكالمة',
                    'meeting'       => 'اجتماع',
                    'lunch'         => 'غداء',
                    'save-btn'      => 'حفظ النشاط',

                    'participants' => [
                        'title'       => 'المشاركون',
                        'placeholder' => 'اكتب للبحث عن المشاركين',
                        'users'       => 'المستخدمون',
                        'persons'     => 'الأشخاص',
                        'no-results'  => 'لم يتم العثور على نتائج...',
                    ],
                ],
            ],

            'index' => [
                'from'         => 'من',
                'to'           => 'إلى',
                'cc'           => 'نسخة',
                'bcc'          => 'نسخة مخفية',
                'all'          => 'الكل',
                'planned'      => 'مخطط له',
                'calls'        => 'المكالمات',
                'meetings'     => 'الاجتماعات',
                'lunches'      => 'الغداء',
                'files'        => 'الملفات',
                'quotes'       => 'الاقتباسات',
                'notes'        => 'الملاحظات',
                'emails'       => 'البريد الإلكتروني',
                'change-log'   => 'سجلات التغيير',
                'by-user'      => 'بواسطة :user',
                'scheduled-on' => 'مجدول في',
                'location'     => 'موقع',
                'participants' => 'المشاركون',
                'mark-as-done' => 'وضع علامة تم',
                'delete'       => 'حذف',
                'edit'         => 'تعديل',
                'view'         => 'عرض',
                'unlink'       => 'إلغاء الارتباط',
                'empty'        => 'فارغ',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'لم يتم العثور على أنشطة',
                        'description' => 'لم يتم العثور على أنشطة لهذا. يمكنك إضافة أنشطة بالنقر على الزر في اللوحة اليسرى.',
                    ],

                    'planned' => [
                        'title'       => 'لم يتم العثور على أنشطة مخططة',
                        'description' => 'لم يتم العثور على أنشطة مخططة لهذا. يمكنك إضافة أنشطة مخططة بالنقر على الزر في اللوحة اليسرى.',
                    ],

                    'notes' => [
                        'title'       => 'لم يتم العثور على ملاحظات',
                        'description' => 'لم يتم العثور على ملاحظات لهذا. يمكنك إضافة ملاحظات بالنقر على الزر في اللوحة اليسرى.',
                    ],

                    'calls' => [
                        'title'       => 'لم يتم العثور على مكالمات',
                        'description' => 'لم يتم العثور على مكالمات لهذا. يمكنك إضافة مكالمات بالنقر على الزر في اللوحة اليسرى.',
                    ],

                    'meetings' => [
                        'title'       => 'لم يتم العثور على اجتماعات',
                        'description' => 'لم يتم العثور على اجتماعات لهذا. يمكنك إضافة اجتماعات بالنقر على الزر في اللوحة اليسرى.',
                    ],

                    'lunches' => [
                        'title'       => 'لم يتم العثور على غداء',
                        'description' => 'لم يتم العثور على غداء لهذا. يمكنك إضافة غداء بالنقر على الزر في اللوحة اليسرى.',
                    ],

                    'files' => [
                        'title'       => 'لم يتم العثور على ملفات',
                        'description' => 'لم يتم العثور على ملفات لهذا. يمكنك إضافة ملفات بالنقر على الزر في اللوحة اليسرى.',
                    ],

                    'emails' => [
                        'title'       => 'لم يتم العثور على بريد إلكتروني',
                        'description' => 'لم يتم العثور على بريد إلكتروني لهذا. يمكنك إضافة بريد إلكتروني بالنقر على الزر في اللوحة اليسرى.',
                    ],

                    'system' => [
                        'title'       => 'لم يتم العثور على سجلات التغيير',
                        'description' => 'لم يتم العثور على سجلات التغيير لهذا.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'إضافة صورة',
                'ai-add-image-btn'  => 'الذكاء الاصطناعي السحري',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'فقط ملفات الصور (.jpeg, .jpg, .png) مسموح بها.',

                'placeholders' => [
                    'front'     => 'الأمام',
                    'next'      => 'التالي',
                    'size'      => 'الحجم',
                    'use-cases' => 'حالات الاستخدام',
                    'zoom'      => 'تكبير',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'إضافة فيديو',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'فقط ملفات الفيديو (.mp4, .mov, .ogg) مسموح بها.',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'لم يتم اختيار أي سجلات.',
                'must-select-a-mass-action-option' => 'يجب أن تختار خيارًا للإجراء الجماعي.',
                'must-select-a-mass-action'        => 'يجب أن تختار إجراءً جماعيًا.',
            ],

            'toolbar' => [
                'length-of' => ':length من',
                'of'        => 'من',
                'per-page'  => 'لكل صفحة',
                'results'   => ':total نتائج',
                'delete'    => 'حذف',
                'selected'  => ':total عناصر مختارة',

                'mass-actions' => [
                    'submit'        => 'إرسال',
                    'select-option' => 'اختر خيارًا',
                    'select-action' => 'اختر إجراءً',
                ],

                'filter' => [
                    'apply-filters-btn' => 'تطبيق الفلاتر',
                    'back-btn'          => 'رجوع',
                    'create-new-filter' => 'إنشاء فلتر جديد',
                    'custom-filters'    => 'فلاتر مخصصة',
                    'delete-error'      => 'حدث خطأ أثناء حذف الفلتر، يرجى المحاولة مرة أخرى.',
                    'delete-success'    => 'تم حذف الفلتر بنجاح.',
                    'empty-description' => 'لا توجد فلاتر محددة للحفظ. يرجى اختيار الفلاتر للحفظ.',
                    'empty-title'       => 'أضف فلاتر للحفظ',
                    'name'              => 'الاسم',
                    'quick-filters'     => 'الفلاتر السريعة',
                    'save-btn'          => 'حفظ',
                    'save-filter'       => 'حفظ الفلتر',
                    'saved-success'     => 'تم حفظ الفلتر بنجاح.',
                    'selected-filters'  => 'الفلاتر المحددة',
                    'title'             => 'فلتر',
                    'update'            => 'تحديث',
                    'update-filter'     => 'تحديث الفلتر',
                    'updated-success'   => 'تم تحديث الفلتر بنجاح.',
                ],

                'search' => [
                    'title' => 'بحث',
                ],
            ],

            'filters' => [
                'select' => 'اختر',
                'title'  => 'فلاتر',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'اكتب حرفين على الأقل...',
                        'no-results'         => 'لم يتم العثور على نتائج...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'مسح الكل',
                    'title'     => 'فلاتر مخصصة',
                ],

                'boolean-options' => [
                    'false' => 'خاطئ',
                    'true'  => 'صحيح',
                ],

                'date-options' => [
                    'last-month'        => 'الشهر الماضي',
                    'last-six-months'   => 'آخر 6 أشهر',
                    'last-three-months' => 'آخر 3 أشهر',
                    'this-month'        => 'هذا الشهر',
                    'this-week'         => 'هذا الأسبوع',
                    'this-year'         => 'هذا العام',
                    'today'             => 'اليوم',
                    'yesterday'         => 'الأمس',
                ],
            ],

            'table' => [
                'actions'              => 'الإجراءات',
                'no-records-available' => 'لا توجد سجلات متاحة.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'موافق',
                'disagree-btn' => 'غير موافق',
                'message'      => 'هل أنت متأكد أنك تريد تنفيذ هذا الإجراء؟',
                'title'        => 'هل أنت متأكد؟',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'الوسوم',
                'added-tags'     => 'الوسوم المضافة',
                'save-btn'       => 'حفظ الوسم',
                'placeholder'    => 'اكتب للبحث عن الوسوم',
                'add-tag'        => 'إضافة ":term"...',
                'aquarelle-red'  => 'أحمر مائي',
                'crushed-cashew' => 'كاجو مطحون',
                'beeswax'        => 'شمع العسل',
                'lemon-chiffon'  => 'شيفون الليمون',
                'snow-flurry'    => 'زوبعة ثلجية',
                'honeydew'       => 'شمام',
            ],
        ],

        'layouts' => [
            'header' => [
                'mega-search' => [
                    'title'   => 'بحث',

                    'tabs' => [
                        'leads'    => 'العملاء المحتملين',
                        'quotes'   => 'عروض الأسعار',
                        'persons'  => 'الأشخاص',
                        'products' => 'المنتجات',
                    ],

                    'explore-all-products'          => 'استكشاف جميع المنتجات',
                    'explore-all-leads'             => 'استكشاف جميع العملاء المحتملين',
                    'explore-all-contacts'          => 'استكشاف جميع جهات الاتصال',
                    'explore-all-quotes'            => 'استكشاف جميع عروض الأسعار',
                    'explore-all-matching-products' => 'استكشاف جميع المنتجات المطابقة لـ ":query" (:count)',
                    'explore-all-matching-leads'    => 'استكشاف جميع العملاء المحتملين المطابقين لـ ":query" (:count)',
                    'explore-all-matching-contacts' => 'استكشاف جميع جهات الاتصال المطابقة لـ ":query" (:count)',
                    'explore-all-matching-quotes'   => 'استكشاف جميع عروض الأسعار المطابقة لـ ":query" (:count)',
                ],
            ],
        ],

        'attributes' => [
            'edit'   => [
                'delete' => 'حذف',
            ],

            'lookup' => [
                'click-to-add'    => 'انقر للإضافة',
                'search'          => 'بحث',
                'no-result-found' => 'لم يتم العثور على نتائج',
                'search'          => 'بحث...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'انقر للإضافة',
            'no-results'   => 'لم يتم العثور على نتائج',
            'add-as-new'   => 'إضافة كجديد',
            'search'       => 'بحث...',
        ],

        'flash-group' => [
            'success' => 'نجاح',
            'error'   => 'خطأ',
            'warning' => 'تحذير',
            'info'    => 'معلومات',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'عروض الأسعار',
            'create-btn'     => 'إنشاء عرض سعر',
            'create-success' => 'تم إنشاء عرض السعر بنجاح.',
            'update-success' => 'تم تحديث عرض السعر بنجاح.',
            'delete-success' => 'تم حذف عرض السعر بنجاح.',
            'delete-failed'  => 'لا يمكن حذف عرض السعر.',

            'datagrid' => [
                'subject'        => 'الموضوع',
                'sales-person'   => 'مندوب المبيعات',
                'expired-at'     => 'تاريخ الانتهاء',
                'created-at'     => 'تاريخ الإنشاء',
                'expired-quotes' => 'عرض السعر المنتهي',
                'person'         => 'الشخص',
                'subtotal'       => 'المجموع الفرعي',
                'discount'       => 'الخصم',
                'tax'            => 'الضريبة',
                'adjustment'     => 'التعديل',
                'grand-total'    => 'المجموع الكلي',
                'edit'           => 'تعديل',
                'delete'         => 'حذف',
                'print'          => 'طباعة',
            ],

            'pdf' => [
                'title'            => 'عرض السعر',
                'grand-total'      => 'المجموع الكلي',
                'adjustment'       => 'التعديل',
                'discount'         => 'الخصم',
                'tax'              => 'الضريبة',
                'sub-total'        => 'المجموع الفرعي',
                'amount'           => 'المبلغ',
                'quantity'         => 'الكمية',
                'price'            => 'السعر',
                'product-name'     => 'اسم المنتج',
                'sku'              => 'رمز المنتج',
                'shipping-address' => 'عنوان الشحن',
                'billing-address'  => 'عنوان الفوترة',
                'expired-at'       => 'تاريخ الانتهاء',
                'sales-person'     => 'مندوب المبيعات',
                'date'             => 'التاريخ',
                'quote-id'         => 'رقم عرض السعر',
            ],
        ],

        'create' => [
            'title'             => 'إنشاء عرض سعر',
            'save-btn'          => 'حفظ عرض السعر',
            'quote-info'        => 'معلومات عرض السعر',
            'quote-info-info'   => 'أدخل المعلومات الأساسية لعرض السعر.',
            'address-info'      => 'معلومات العنوان',
            'address-info-info' => 'معلومات عن العنوان المتعلق بعرض السعر.',
            'quote-items'       => 'بنود عرض السعر',
            'search-products'   => 'البحث عن المنتجات',
            'link-to-lead'      => 'ربط بالعميل المحتمل',
            'quote-item-info'   => 'أضف طلب المنتج لهذا العرض.',
            'quote-name'        => 'اسم عرض السعر',
            'quantity'          => 'الكمية',
            'price'             => 'السعر',
            'discount'          => 'الخصم',
            'tax'               => 'الضريبة',
            'total'             => 'المجموع',
            'amount'            => 'المبلغ',
            'add-item'          => '+ إضافة بند',
            'sub-total'         => 'المجموع الفرعي (:symbol)',
            'total-discount'    => 'الخصم (:symbol)',
            'total-tax'         => 'الضريبة (:symbol)',
            'total-adjustment'  => 'التعديل (:symbol)',
            'grand-total'       => 'المجموع الكلي (:symbol)',
            'discount-amount'   => 'مبلغ الخصم',
            'tax-amount'        => 'مبلغ الضريبة',
            'adjustment-amount' => 'مبلغ التعديل',
            'product-name'      => 'اسم المنتج',
            'action'            => 'الإجراء',
        ],

        'edit' => [
            'title'             => 'تعديل عرض السعر',
            'save-btn'          => 'حفظ عرض السعر',
            'quote-info'        => 'معلومات عرض السعر',
            'quote-info-info'   => 'أدخل المعلومات الأساسية لعرض السعر.',
            'address-info'      => 'معلومات العنوان',
            'address-info-info' => 'معلومات عن العنوان المتعلق بعرض السعر.',
            'quote-items'       => 'بنود عرض السعر',
            'link-to-lead'      => 'ربط بالعميل المحتمل',
            'quote-item-info'   => 'أضف طلب المنتج لهذا العرض.',
            'quote-name'        => 'اسم عرض السعر',
            'quantity'          => 'الكمية',
            'price'             => 'السعر',
            'search-products'   => 'البحث عن المنتجات',
            'discount'          => 'الخصم',
            'tax'               => 'الضريبة',
            'total'             => 'المجموع',
            'amount'            => 'المبلغ',
            'add-item'          => '+ إضافة بند',
            'sub-total'         => 'المجموع الفرعي (:symbol)',
            'total-discount'    => 'الخصم (:symbol)',
            'total-tax'         => 'الضريبة (:symbol)',
            'total-adjustment'  => 'التعديل (:symbol)',
            'grand-total'       => 'المجموع الكلي (:symbol)',
            'discount-amount'   => 'مبلغ الخصم',
            'tax-amount'        => 'مبلغ الضريبة',
            'adjustment-amount' => 'مبلغ التعديل',
            'product-name'      => 'اسم المنتج',
            'action'            => 'الإجراء',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'الأشخاص',
                'create-btn'     => 'إنشاء شخص',
                'create-success' => 'تم إنشاء الشخص بنجاح.',
                'update-success' => 'تم تحديث الشخص بنجاح.',
                'delete-success' => 'تم حذف الشخص بنجاح.',
                'delete-failed'  => 'لا يمكن حذف الشخص.',

                'datagrid' => [
                    'contact-numbers'   => 'أرقام الاتصال',
                    'delete'            => 'حذف',
                    'edit'              => 'تعديل',
                    'emails'            => 'البريد الإلكتروني',
                    'id'                => 'المعرف',
                    'view'              => 'عرض',
                    'name'              => 'الاسم',
                    'organization-name' => 'اسم المؤسسة',
                ],
            ],

            'view' => [
                'title'              => ':name',
                'about-person'       => 'عن الشخص',
                'about-organization' => 'حول المؤسسة',

                'activities' => [
                    'index' => [
                        'all'          => 'الكل',
                        'calls'        => 'المكالمات',
                        'meetings'     => 'الاجتماعات',
                        'lunches'      => 'الغداء',
                        'files'        => 'الملفات',
                        'quotes'       => 'عروض الأسعار',
                        'notes'        => 'الملاحظات',
                        'emails'       => 'رسائل البريد الإلكتروني',
                        'by-user'      => 'بواسطة :user',
                        'scheduled-on' => 'مجدول في',
                        'location'     => 'الموقع',
                        'participants' => 'المشاركون',
                        'mark-as-done' => 'وضع علامة كمنتهي',
                        'delete'       => 'حذف',
                        'edit'         => 'تعديل',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'بريد',
                            'title'    => 'إنشاء بريد',
                            'to'       => 'إلى',
                            'cc'       => 'نسخة',
                            'bcc'      => 'نسخة مخفية',
                            'subject'  => 'الموضوع',
                            'send-btn' => 'إرسال',
                            'message'  => 'الرسالة',
                        ],

                        'file' => [
                            'btn'           => 'ملف',
                            'title'         => 'إضافة ملف',
                            'title-control' => 'العنوان',
                            'name'          => 'اسم الملف',
                            'description'   => 'الوصف',
                            'file'          => 'الملف',
                            'save-btn'      => 'حفظ الملف',
                        ],

                        'note' => [
                            'btn'      => 'ملاحظة',
                            'title'    => 'إضافة ملاحظة',
                            'comment'  => 'التعليق',
                            'save-btn' => 'حفظ الملاحظة',
                        ],

                        'activity' => [
                            'btn'           => 'نشاط',
                            'title'         => 'إضافة نشاط',
                            'title-control' => 'العنوان',
                            'description'   => 'الوصف',
                            'schedule-from' => 'مجدول من',
                            'schedule-to'   => 'مجدول إلى',
                            'location'      => 'الموقع',
                            'call'          => 'مكالمة',
                            'meeting'       => 'اجتماع',
                            'lunch'         => 'غداء',
                            'save-btn'      => 'حفظ النشاط',
                        ],
                    ],
                ],
            ],

            'create' => [
                'title'    => 'إنشاء شخص',
                'save-btn' => 'حفظ الشخص',
            ],

            'edit' => [
                'title'    => 'تعديل الشخص',
                'save-btn' => 'حفظ الشخص',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'المؤسسات',
                'create-btn'     => 'إنشاء مؤسسة',
                'create-success' => 'تم إنشاء المؤسسة بنجاح.',
                'update-success' => 'تم تحديث المؤسسة بنجاح.',
                'delete-success' => 'تم حذف المؤسسة بنجاح.',
                'delete-failed'  => 'لا يمكن حذف المؤسسة.',

                'datagrid' => [
                    'delete'        => 'حذف',
                    'edit'          => 'تعديل',
                    'id'            => 'المعرف',
                    'name'          => 'الاسم',
                    'persons-count' => 'عدد الأشخاص',
                ],
            ],

            'create' => [
                'title'    => 'إنشاء مؤسسة',
                'save-btn' => 'حفظ المؤسسة',
            ],

            'edit' => [
                'title'    => 'تعديل المؤسسة',
                'save-btn' => 'حفظ المؤسسة',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'المنتجات',
            'create-btn'     => 'إنشاء منتج',
            'create-success' => 'تم إنشاء المنتج بنجاح.',
            'update-success' => 'تم تحديث المنتج بنجاح.',
            'delete-success' => 'تم حذف المنتج بنجاح.',
            'delete-failed'  => 'لا يمكن حذف المنتج.',

            'datagrid'   => [
                'allocated' => 'مخصص',
                'delete'    => 'حذف',
                'edit'      => 'تعديل',
                'id'        => 'المعرف',
                'in-stock'  => 'في المخزون',
                'name'      => 'الاسم',
                'on-hand'   => 'متوفر',
                'price'     => 'السعر',
                'sku'       => 'رمز المنتج',
                'view'      => 'عرض',
            ],
        ],

        'create' => [
            'save-btn'  => 'حفظ المنتجات',
            'title'     => 'إنشاء منتجات',
            'general'   => 'عام',
            'price'     => 'السعر',
        ],

        'edit' => [
            'title'     => 'تعديل المنتجات',
            'save-btn'  => 'حفظ المنتجات',
            'general'   => 'عام',
            'price'     => 'السعر',
        ],

        'view' => [
            'sku'         => 'رمز المنتج',
            'all'         => 'الكل',
            'notes'       => 'الملاحظات',
            'files'       => 'الملفات',
            'inventories' => 'المخزون',
            'change-logs' => 'سجلات التغيير',

            'attributes' => [
                'about-product' => 'عن المنتج',
            ],

            'inventory' => [
                'source'     => 'المصدر',
                'in-stock'   => 'في المخزون',
                'allocated'  => 'مخصص',
                'on-hand'    => 'متوفر',
                'actions'    => 'الإجراءات',
                'assign'     => 'تعيين',
                'add-source' => 'إضافة مصدر',
                'location'   => 'الموقع',
                'add-more'   => 'إضافة المزيد',
                'save'       => 'حفظ',
            ],
        ],
    ],

    'settings' => [
        'title' => 'الإعدادات',

        'groups' => [
            'index' => [
                'create-btn'        => 'إنشاء مجموعة',
                'title'             => 'المجموعات',
                'create-success'    => 'تم إنشاء المجموعة بنجاح.',
                'update-success'    => 'تم تحديث المجموعة بنجاح.',
                'destroy-success'   => 'تم حذف المجموعة بنجاح.',
                'delete-failed'     => 'لا يمكن حذف المجموعة.',

                'datagrid'   => [
                    'delete'      => 'حذف',
                    'description' => 'الوصف',
                    'edit'        => 'تعديل',
                    'id'          => 'المعرف',
                    'name'        => 'الاسم',
                ],

                'edit' => [
                    'title' => 'تعديل المجموعة',
                ],

                'create' => [
                    'name'        => 'الاسم',
                    'title'       => 'إنشاء مجموعة',
                    'description' => 'الوصف',
                    'save-btn'    => 'حفظ المجموعة',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'لا يمكن حذف الدور، حيث أنه قيد الاستخدام في مستخدم الإدارة.',
                'create-btn'                => 'إنشاء الأدوار',
                'create-success'            => 'تم إنشاء الدور بنجاح.',
                'current-role-delete-error' => 'لا يمكن حذف الدور المخصص للمستخدم الحالي.',
                'delete-failed'             => 'لا يمكن حذف الدور.',
                'delete-success'            => 'تم حذف الدور بنجاح.',
                'last-delete-error'         => 'مطلوب دور واحد على الأقل.',
                'settings'                  => 'الإعدادات',
                'title'                     => 'الأدوار',
                'update-success'            => 'تم تحديث الدور بنجاح.',
                'user-define-error'         => 'لا يمكن حذف دور النظام.',

                'datagrid'   => [
                    'all'             => 'الكل',
                    'custom'          => 'مخصص',
                    'delete'          => 'حذف',
                    'description'     => 'الوصف',
                    'edit'            => 'تعديل',
                    'id'              => 'المعرف',
                    'name'            => 'الاسم',
                    'permission-type' => 'نوع الإذن',
                ],
            ],

            'create' => [
                'access-control' => 'التحكم في الوصول',
                'all'            => 'الكل',
                'back-btn'       => 'رجوع',
                'custom'         => 'مخصص',
                'description'    => 'الوصف',
                'general'        => 'عام',
                'name'           => 'الاسم',
                'permissions'    => 'الأذونات',
                'save-btn'       => 'حفظ الدور',
                'title'          => 'إنشاء دور',
            ],

            'edit' => [
                'access-control' => 'التحكم في الوصول',
                'all'            => 'الكل',
                'back-btn'       => 'رجوع',
                'custom'         => 'مخصص',
                'description'    => 'الوصف',
                'general'        => 'عام',
                'name'           => 'الاسم',
                'permissions'    => 'الأذونات',
                'save-btn'       => 'حفظ الدور',
                'title'          => 'تعديل الدور',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'إنشاء نوع',
                'create-success' => 'تم إنشاء النوع بنجاح.',
                'delete-failed'  => 'لا يمكن حذف النوع.',
                'delete-success' => 'تم حذف النوع بنجاح.',
                'title'          => 'الأنواع',
                'update-success' => 'تم تحديث النوع بنجاح.',

                'datagrid' => [
                    'delete'      => 'حذف',
                    'description' => 'الوصف',
                    'edit'        => 'تعديل',
                    'id'          => 'المعرف',
                    'name'        => 'الاسم',
                ],

                'create' => [
                    'name'     => 'الاسم',
                    'save-btn' => 'حفظ النوع',
                    'title'    => 'إنشاء نوع',
                ],

                'edit' => [
                    'title' => 'تعديل النوع',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'إنشاء مصدر',
                'create-success' => 'تم إنشاء المصدر بنجاح.',
                'delete-failed'  => 'لا يمكن حذف المصدر.',
                'delete-success' => 'تم حذف المصدر بنجاح.',
                'title'          => 'المصادر',
                'update-success' => 'تم تحديث المصدر بنجاح.',

                'datagrid' => [
                    'delete' => 'حذف',
                    'edit'   => 'تعديل',
                    'id'     => 'المعرف',
                    'name'   => 'الاسم',
                ],

                'create' => [
                    'name'     => 'اسم',
                    'save-btn' => 'حفظ المصدر',
                    'title'    => 'إنشاء مصدر',
                ],

                'edit' => [
                    'title' => 'تعديل المصدر',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'سير العمل',
                'create-btn'     => 'إنشاء سير عمل',
                'create-success' => 'تم إنشاء سير العمل بنجاح.',
                'update-success' => 'تم تحديث سير العمل بنجاح.',
                'delete-success' => 'تم حذف سير العمل بنجاح.',
                'delete-failed'  => 'لا يمكن حذف سير العمل.',
                'datagrid'       => [
                    'delete'      => 'حذف',
                    'description' => 'الوصف',
                    'edit'        => 'تعديل',
                    'id'          => 'المعرف',
                    'name'        => 'الاسم',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'تحديث العملاء المحتملين ذوي الصلة',
                'send-email-to-sales-owner'  => 'إرسال بريد إلكتروني إلى مسؤول المبيعات',
                'send-email-to-participants' => 'إرسال بريد إلكتروني إلى المشاركين',
                'add-webhook'                => 'إضافة Webhook',
                'update-lead'                => 'تحديث العميل المحتمل',
                'update-person'              => 'تحديث الشخص',
                'send-email-to-person'       => 'إرسال بريد إلكتروني إلى الشخص',
                'add-tag'                    => 'إضافة علامة',
                'add-note-as-activity'       => 'إضافة ملاحظة كنشاط',
                'update-quote'               => 'تحديث العرض',
            ],

            'create' => [
                'title'                  => 'إنشاء سير عمل',
                'event'                  => 'الحدث',
                'back-btn'               => 'رجوع',
                'save-btn'               => 'حفظ سير العمل',
                'name'                   => 'الاسم',
                'basic-details'          => 'التفاصيل الأساسية',
                'description'            => 'الوصف',
                'actions'                => 'الإجراءات',
                'basic-details-info'     => 'ضع المعلومات الأساسية لسير العمل.',
                'event-info'             => 'يقوم الحدث بتشغيل والتحقق من الشروط وتنفيذ الإجراءات المحددة مسبقًا.',
                'conditions'             => 'الشروط',
                'conditions-info'        => 'الشروط هي قواعد تتحقق من السيناريوهات، ويتم تشغيلها في مناسبات محددة.',
                'actions-info'           => 'الإجراء لا يقلل فقط من عبء العمل ولكنه يجعل أتمتة CRM أسهل بكثير',
                'value'                  => 'القيمة',
                'condition-type'         => 'نوع الشرط',
                'all-condition-are-true' => 'جميع الشروط صحيحة',
                'any-condition-are-true' => 'أي شرط صحيح',
                'add-condition'          => 'إضافة شرط',
                'add-action'             => 'إضافة إجراء',
                'yes'                    => 'نعم',
                'no'                     => 'لا',
                'email'                  => 'البريد الإلكتروني',
                'is-equal-to'            => 'يساوي',
                'is-not-equal-to'        => 'لا يساوي',
                'equals-or-greater-than' => 'يساوي أو أكبر من',
                'equals-or-less-than'    => 'يساوي أو أقل من',
                'greater-than'           => 'أكبر من',
                'less-than'              => 'أقل من',
                'type'                   => 'النوع',
                'contain'                => 'يحتوي',
                'contains'               => 'يحتوي',
                'does-not-contain'       => 'لا يحتوي',
            ],

            'edit' => [
                'title'                  => 'تعديل سير العمل',
                'event'                  => 'الحدث',
                'back-btn'               => 'رجوع',
                'save-btn'               => 'حفظ سير العمل',
                'name'                   => 'الاسم',
                'basic-details'          => 'التفاصيل الأساسية',
                'description'            => 'الوصف',
                'actions'                => 'الإجراءات',
                'type'                   => 'النوع',
                'basic-details-info'     => 'ضع المعلومات الأساسية لسير العمل.',
                'event-info'             => 'يقوم الحدث بتشغيل والتحقق من الشروط وتنفيذ الإجراءات المحددة مسبقًا.',
                'conditions'             => 'الشروط',
                'conditions-info'        => 'الشروط هي قواعد تتحقق من السيناريوهات، ويتم تشغيلها في مناسبات محددة.',
                'actions-info'           => 'الإجراء لا يقلل فقط من عبء العمل ولكنه يجعل أتمتة CRM أسهل بكثير',
                'value'                  => 'القيمة',
                'condition-type'         => 'نوع الشرط',
                'all-condition-are-true' => 'جميع الشروط صحيحة',
                'any-condition-are-true' => 'أي شرط صحيح',
                'add-condition'          => 'إضافة شرط',
                'add-action'             => 'إضافة إجراء',
                'yes'                    => 'نعم',
                'no'                     => 'لا',
                'email'                  => 'البريد الإلكتروني',
                'is-equal-to'            => 'يساوي',
                'is-not-equal-to'        => 'لا يساوي',
                'equals-or-greater-than' => 'يساوي أو أكبر من',
                'equals-or-less-than'    => 'يساوي أو أقل من',
                'greater-than'           => 'أكبر من',
                'less-than'              => 'أقل من',
                'contain'                => 'يحتوي',
                'contains'               => 'يحتوي',
                'does-not-contain'       => 'لا يحتوي',
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'نماذج الويب',
                'create-btn'     => 'إنشاء نموذج ويب',
                'create-success' => 'تم إنشاء نموذج الويب بنجاح.',
                'update-success' => 'تم تحديث نموذج الويب بنجاح.',
                'delete-success' => 'تم حذف نموذج الويب بنجاح.',
                'delete-failed'  => 'لا يمكن حذف نموذج الويب.',

                'datagrid'       => [
                    'id'     => 'المعرف',
                    'title'  => 'العنوان',
                    'edit'   => 'تعديل',
                    'delete' => 'حذف',
                ],
            ],

            'create' => [
                'title'                    => 'إنشاء استمارة ويب',
                'add-attribute-btn'        => 'زر إضافة سمة',
                'attribute-label-color'    => 'لون تسمية السمة',
                'attributes'               => 'السمات',
                'attributes-info'          => 'أضف سمات مخصصة إلى النموذج.',
                'background-color'         => 'لون الخلفية',
                'create-lead'              => 'إنشاء عميل محتمل',
                'customize-webform'        => 'تخصيص نموذج الويب',
                'customize-webform-info'   => 'خصص نموذج الويب الخاص بك بألوان العناصر التي تختارها.',
                'description'              => 'الوصف',
                'display-custom-message'   => 'عرض رسالة مخصصة',
                'form-background-color'    => 'لون خلفية النموذج',
                'form-submit-btn-color'    => 'لون زر إرسال النموذج',
                'form-submit-button-color' => 'لون زر إرسال النموذج',
                'form-title-color'         => 'لون عنوان النموذج',
                'general'                  => 'عام',
                'leads'                    => 'العملاء المحتملون',
                'person'                   => 'شخص',
                'save-btn'                 => 'حفظ نموذج الويب',
                'submit-button-label'      => 'تسمية زر الإرسال',
                'submit-success-action'    => 'إجراء نجاح الإرسال',
                'redirect-to-url'          => 'إعادة التوجيه إلى الرابط',
                'choose-value'             => 'اختر قيمة',
                'select-file'              => 'اختر ملف',
                'select-image'             => 'اختر صورة',
                'enter-value'              => 'أدخل القيمة',
            ],

            'edit' => [
                'title'                     => 'تعديل استمارة ويب',
                'add-attribute-btn'         => 'زر إضافة سمة',
                'attribute-label-color'     => 'لون تسمية السمة',
                'attributes'                => 'السمات',
                'attributes-info'           => 'أضف سمات مخصصة إلى النموذج.',
                'background-color'          => 'لون الخلفية',
                'code-snippet'              => 'مقتطف الكود',
                'copied'                    => 'تم النسخ',
                'copy'                      => 'نسخ',
                'create-lead'               => 'إنشاء عميل محتمل',
                'customize-webform'         => 'تخصيص نموذج الويب',
                'customize-webform-info'    => 'خصص نموذج الويب الخاص بك بألوان العناصر التي تختارها.',
                'description'               => 'الوصف',
                'display-custom-message'    => 'عرض رسالة مخصصة',
                'embed'                     => 'تضمين',
                'form-background-color'     => 'لون خلفية النموذج',
                'form-submit-btn-color'     => 'لون زر إرسال النموذج',
                'form-submit-button-color'  => 'لون زر إرسال النموذج',
                'form-title-color'          => 'لون عنوان النموذج',
                'general'                   => 'عام',
                'preview'                   => 'معاينة',
                'person'                    => 'شخص',
                'public-url'                => 'الرابط العام',
                'redirect-to-url'           => 'إعادة التوجيه إلى الرابط',
                'save-btn'                  => 'حفظ نموذج الويب',
                'submit-button-label'       => 'تسمية زر الإرسال',
                'submit-success-action'     => 'إجراء نجاح الإرسال',
                'choose-value'              => 'اختر القيمة',
                'select-file'               => 'اختر ملف',
                'select-image'              => 'اختر صورة',
                'enter-value'               => 'أدخل القيمة',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'إنشاء قالب بريد إلكتروني',
                'title'          => 'قوالب البريد الإلكتروني',
                'create-success' => 'تم إنشاء قالب البريد الإلكتروني بنجاح.',
                'update-success' => 'تم تحديث قالب البريد الإلكتروني بنجاح.',
                'delete-success' => 'تم حذف قالب البريد الإلكتروني بنجاح.',
                'delete-failed'  => 'لا يمكن حذف قالب البريد الإلكتروني.',

                'datagrid'   => [
                    'delete'       => 'حذف',
                    'edit'         => 'تعديل',
                    'id'           => 'المعرف',
                    'name'         => 'الاسم',
                    'subject'      => 'الموضوع',
                ],
            ],

            'create'     => [
                'title'                => 'إنشاء قالب بريد إلكتروني',
                'save-btn'             => 'حفظ قالب البريد الإلكتروني',
                'email-template'       => 'قالب البريد الإلكتروني',
                'subject'              => 'الموضوع',
                'content'              => 'المحتوى',
                'subject-placeholders' => 'العناصر النائبة للموضوع',
                'general'              => 'عام',
                'name'                 => 'الاسم',
            ],

            'edit' => [
                'title'                => 'تعديل قالب البريد الإلكتروني',
                'save-btn'             => 'حفظ قالب البريد الإلكتروني',
                'email-template'       => 'قالب البريد الإلكتروني',
                'subject'              => 'الموضوع',
                'content'              => 'المحتوى',
                'subject-placeholders' => 'العناصر النائبة للموضوع',
                'general'              => 'عام',
                'name'                 => 'الاسم',
            ],
        ],

        'marketing' => [
            'events' => [
                'index' => [
                    'create-btn'          => 'إنشاء حدث',
                    'title'               => 'الأحداث',
                    'create-success'      => 'تم إنشاء الحدث بنجاح.',
                    'update-success'      => 'تم تحديث الحدث بنجاح.',
                    'delete-success'      => 'تم حذف الحدث بنجاح.',
                    'delete-failed'       => 'لا يمكن حذف الحدث.',
                    'mass-delete-success' => 'تم حذف الأحداث بنجاح',

                    'datagrid'   => [
                        'delete'       => 'حذف',
                        'edit'         => 'تحرير',
                        'id'           => 'المعرف',
                        'name'         => 'الاسم',
                        'description'  => 'الوصف',
                        'date'         => 'التاريخ',
                    ],

                    'create'     => [
                        'title'       => 'إنشاء حدث',
                        'name'        => 'الاسم',
                        'date'        => 'التاريخ',
                        'description' => 'الوصف',
                    ],

                    'edit' => [
                        'title' => 'تحرير الحدث',
                    ],
                ],
            ],

            'campaigns' => [
                'index' => [
                    'create-btn'          => 'إنشاء حملة',
                    'title'               => 'الحملات',
                    'create-success'      => 'تم إنشاء الحملة بنجاح.',
                    'update-success'      => 'تم تحديث الحملة بنجاح.',
                    'delete-success'      => 'تم حذف الحملة بنجاح.',
                    'delete-failed'       => 'لا يمكن حذف الحملة.',
                    'mass-delete-success' => 'تم حذف الحملات بنجاح.',

                    'datagrid'   => [
                        'id'       => 'المعرف',
                        'name'     => 'الاسم',
                        'subject'  => 'الموضوع',
                        'status'   => 'الحالة',
                        'active'   => 'نشط',
                        'inactive' => 'غير نشط',
                        'edit'     => 'تحرير',
                        'delete'   => 'حذف',
                    ],

                    'create'     => [
                        'title'          => 'إنشاء حملة',
                        'name'           => 'الاسم',
                        'type'           => 'النوع',
                        'subject'        => 'الموضوع',
                        'event'          => 'الحدث',
                        'email-template' => 'نموذج البريد الإلكتروني',
                        'status'         => 'الحالة',
                    ],

                    'edit' => [
                        'title' => 'تحرير الحملة',
                    ],
                ],
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'إنشاء وسم',
                'title'          => 'الوسوم',
                'create-success' => 'تم إنشاء الوسم بنجاح.',
                'update-success' => 'تم تحديث الوسم بنجاح.',
                'delete-success' => 'تم حذف الوسم بنجاح.',
                'delete-failed'  => 'لا يمكن حذف الوسم.',

                'datagrid' => [
                    'delete'      => 'حذف',
                    'edit'        => 'تعديل',
                    'id'          => 'المعرف',
                    'name'        => 'الاسم',
                    'users'       => 'المستخدمون',
                    'created-at'  => 'تم الإنشاء في',
                ],

                'create' => [
                    'name'     => 'الاسم',
                    'save-btn' => 'حفظ الوسم',
                    'title'    => 'إنشاء وسم',
                    'color'    => 'اللون',
                ],

                'edit' => [
                    'title' => 'تعديل الوسم',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'إنشاء مستخدم',
                'create-success'      => 'تم إنشاء المستخدم بنجاح.',
                'delete-failed'       => 'لا يمكن حذف المستخدم.',
                'delete-success'      => 'تم حذف المستخدم بنجاح.',
                'last-delete-error'   => 'مطلوب مستخدم واحد على الأقل.',
                'mass-delete-failed'  => 'لا يمكن حذف المستخدمين.',
                'mass-delete-success' => 'تم حذف المستخدمين بنجاح.',
                'mass-update-failed'  => 'لا يمكن تحديث المستخدمين.',
                'mass-update-success' => 'تم تحديث المستخدمين بنجاح.',
                'title'               => 'المستخدمون',
                'update-success'      => 'تم تحديث المستخدم بنجاح.',
                'user-define-error'   => 'لا يمكن حذف مستخدم النظام.',
                'active'              => 'نشط',
                'inactive'            => 'غير نشط',

                'datagrid' => [
                    'active'        => 'نشط',
                    'created-at'    => 'تم الإنشاء في',
                    'delete'        => 'حذف',
                    'edit'          => 'تعديل',
                    'email'         => 'البريد الإلكتروني',
                    'id'            => 'المعرف',
                    'inactive'      => 'غير نشط',
                    'name'          => 'الاسم',
                    'status'        => 'الحالة',
                    'update-status' => 'تحديث الحالة',
                    'users'         => 'المستخدمون',
                ],

                'create' => [
                    'confirm-password' => 'تأكيد كلمة المرور',
                    'email'            => 'البريد الإلكتروني',
                    'general'          => 'عام',
                    'global'           => 'عالمي',
                    'group'            => 'مجموعة',
                    'individual'       => 'فردي',
                    'name'             => 'الاسم',
                    'password'         => 'كلمة المرور',
                    'permission'       => 'الصلاحية',
                    'role'             => 'الدور',
                    'save-btn'         => 'حفظ المستخدم',
                    'status'           => 'الحالة',
                    'title'            => 'إنشاء مستخدم',
                    'view-permission'  => 'عرض الصلاحية',
                ],

                'edit' => [
                    'title' => 'تعديل المستخدم',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'خطوط الأنابيب',
                'create-btn'           => 'إنشاء خط أنابيب',
                'create-success'       => 'تم إنشاء خط الأنابيب بنجاح.',
                'update-success'       => 'تم تحديث خط الأنابيب بنجاح.',
                'delete-success'       => 'تم حذف خط الأنابيب بنجاح.',
                'delete-failed'        => 'لا يمكن حذف خط الأنابيب.',
                'default-delete-error' => 'لا يمكن حذف خط الأنابيب الافتراضي.',

                'datagrid' => [
                    'delete'      => 'حذف',
                    'edit'        => 'تعديل',
                    'id'          => 'المعرف',
                    'is-default'  => 'افتراضي',
                    'name'        => 'الاسم',
                    'no'          => 'لا',
                    'rotten-days' => 'أيام التعفن',
                    'yes'         => 'نعم',
                ],
            ],

            'create' => [
                'title'                => 'إنشاء خط أنابيب',
                'save-btn'             => 'حفظ خط الأنابيب',
                'name'                 => 'الاسم',
                'rotten-days'          => 'أيام التعفن',
                'mark-as-default'      => 'تعيين كافتراضي',
                'general'              => 'عام',
                'probability'          => 'الاحتمالية (%)',
                'new-stage'            => 'جديد',
                'won-stage'            => 'فاز',
                'lost-stage'           => 'خسر',
                'stage-btn'            => 'إضافة مرحلة',
                'stages'               => 'المراحل',
                'duplicate-name'       => 'لا يمكن تكرار حقل "الاسم"',
                'delete-stage'         => 'حذف المرحلة',
                'add-new-stages'       => 'إضافة مراحل جديدة',
                'add-stage-info'       => 'أضف مرحلة جديدة لخط الأنابيب الخاص بك',
                'newly-added'          => 'تمت الإضافة حديثًا',
                'stage-delete-success' => 'تم حذف المرحلة بنجاح',
            ],

            'edit'  => [
                'title'                => 'تعديل خط الأنابيب',
                'save-btn'             => 'حفظ خط الأنابيب',
                'name'                 => 'الاسم',
                'rotten-days'          => 'أيام التعفن',
                'mark-as-default'      => 'تعيين كافتراضي',
                'general'              => 'عام',
                'probability'          => 'الاحتمالية (%)',
                'new-stage'            => 'جديد',
                'won-stage'            => 'فاز',
                'lost-stage'           => 'خسر',
                'stage-btn'            => 'إضافة مرحلة',
                'stages'               => 'المراحل',
                'duplicate-name'       => 'لا يمكن تكرار حقل "الاسم"',
                'delete-stage'         => 'حذف المرحلة',
                'add-new-stages'       => 'إضافة مراحل جديدة',
                'add-stage-info'       => 'أضف مرحلة جديدة لخط الأنابيب الخاص بك',
                'stage-delete-success' => 'تم حذف المرحلة بنجاح',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'الويب هوكس',
                'create-btn'     => 'إنشاء ويب هوك',
                'create-success' => 'تم إنشاء الويب هوك بنجاح.',
                'update-success' => 'تم تحديث الويب هوك بنجاح.',
                'delete-success' => 'تم حذف الويب هوك بنجاح.',
                'delete-failed'  => 'لا يمكن حذف الويب هوك.',

                'datagrid' => [
                    'id'          => 'المعرف',
                    'delete'      => 'حذف',
                    'edit'        => 'تعديل',
                    'name'        => 'الاسم',
                    'entity-type' => 'نوع الكيان',
                    'end-point'   => 'نقطة النهاية',
                ],
            ],

            'create' => [
                'title'                 => 'إنشاء ويب هوك',
                'save-btn'              => 'حفظ الويب هوك',
                'info'                  => 'أدخل تفاصيل الويب هوكس',
                'url-and-parameters'    => 'الرابط والمعلمات',
                'method'                => 'الطريقة',
                'post'                  => 'إرسال',
                'put'                   => 'تحديث',
                'url-endpoint'          => 'نقطة نهاية الرابط',
                'parameters'            => 'المعلمات',
                'add-new-parameter'     => 'إضافة معلمة جديدة',
                'url-preview'           => 'معاينة الرابط:',
                'headers'               => 'الرؤوس',
                'add-new-header'        => 'إضافة رأس جديد',
                'body'                  => 'الجسم',
                'default'               => 'افتراضي',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'المفتاح والقيمة',
                'add-new-payload'       => 'إضافة حمولة جديدة',
                'raw'                   => 'خام',
                'general'               => 'عام',
                'name'                  => 'الاسم',
                'entity-type'           => 'نوع الكيان',
                'insert-placeholder'    => 'إدراج العنصر النائب',
                'description'           => 'الوصف',
                'json'                  => 'Json',
                'text'                  => 'نص',
            ],

            'edit' => [
                'title'                 => 'تعديل الويب هوك',
                'edit-btn'              => 'حفظ الويب هوك',
                'save-btn'              => 'حفظ الويب هوك',
                'info'                  => 'أدخل تفاصيل الويب هوكس',
                'url-and-parameters'    => 'الرابط والمعلمات',
                'method'                => 'الطريقة',
                'post'                  => 'إرسال',
                'put'                   => 'تحديث',
                'url-endpoint'          => 'نقطة نهاية الرابط',
                'parameters'            => 'المعلمات',
                'add-new-parameter'     => 'إضافة معلمة جديدة',
                'url-preview'           => 'معاينة الرابط:',
                'headers'               => 'الرؤوس',
                'add-new-header'        => 'إضافة رأس جديد',
                'body'                  => 'الجسم',
                'default'               => 'افتراضي',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'المفتاح والقيمة',
                'add-new-payload'       => 'إضافة حمولة جديدة',
                'raw'                   => 'خام',
                'general'               => 'عام',
                'name'                  => 'الاسم',
                'entity-type'           => 'نوع الكيان',
                'insert-placeholder'    => 'إدراج العنصر النائب',
                'description'           => 'الوصف',
                'json'                  => 'Json',
                'text'                  => 'نص',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'المستودعات',
                'create-btn'     => 'إنشاء مستودع',
                'create-success' => 'تم إنشاء المستودع بنجاح.',
                'name-exists'    => 'اسم المستودع موجود بالفعل.',
                'update-success' => 'تم تحديث المستودع بنجاح.',
                'delete-success' => 'تم حذف المستودع بنجاح.',
                'delete-failed'  => 'لا يمكن حذف المستودع.',

                'datagrid' => [
                    'id'              => 'المعرف',
                    'name'            => 'الاسم',
                    'contact-name'    => 'اسم جهة الاتصال',
                    'delete'          => 'حذف',
                    'edit'            => 'تعديل',
                    'view'            => 'عرض',
                    'created-at'      => 'تم الإنشاء في',
                    'products'        => 'المنتجات',
                    'contact-emails'  => 'البريد الإلكتروني للاتصال',
                    'contact-numbers' => 'أرقام الاتصال',
                ],
            ],

            'create' => [
                'title'         => 'إنشاء مستودع',
                'save-btn'      => 'حفظ المستودع',
                'contact-info'  => 'معلومات الاتصال',
            ],

            'edit' => [
                'title'         => 'تعديل المستودع',
                'save-btn'      => 'حفظ المستودع',
                'contact-info'  => 'معلومات الاتصال',
            ],

            'view' => [
                'all'         => 'الكل',
                'notes'       => 'الملاحظات',
                'files'       => 'الملفات',
                'location'    => 'الموقع',
                'change-logs' => 'سجلات التغيير',

                'locations' => [
                    'action'         => 'إجراء',
                    'add-location'   => 'إضافة موقع',
                    'create-success' => 'تم إنشاء الموقع بنجاح.',
                    'delete'         => 'حذف',
                    'delete-failed'  => 'لا يمكن حذف الموقع.',
                    'delete-success' => 'تم حذف الموقع بنجاح.',
                    'name'           => 'الاسم',
                    'save-btn'       => 'حفظ',
                ],

                'general-information' => [
                    'title' => 'معلومات عامة',
                ],

                'contact-information' => [
                    'title' => 'معلومات الاتصال',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'السمات',
                'create-btn'         => 'إنشاء سمة',
                'create-success'     => 'تم إنشاء السمات بنجاح.',
                'update-success'     => 'تم تحديث السمات بنجاح.',
                'delete-success'     => 'تم حذف السمات بنجاح.',
                'delete-failed'      => 'لا يمكن حذف السمات.',
                'user-define-error'  => 'لا يمكن حذف سمة النظام.',
                'mass-delete-failed' => 'لا يمكن حذف سمات النظام.',

                'datagrid' => [
                    'yes'         => 'نعم',
                    'no'          => 'لا',
                    'id'          => 'المعرف',
                    'code'        => 'الرمز',
                    'name'        => 'الاسم',
                    'entity-type' => 'نوع الكيان',
                    'type'        => 'النوع',
                    'is-default'  => 'افتراضي',
                    'edit'        => 'تعديل',
                    'delete'      => 'حذف',
                ],
            ],

            'create'  => [
                'title'                 => 'إنشاء سمة',
                'save-btn'              => 'حفظ السمة',
                'code'                  => 'الرمز',
                'name'                  => 'الاسم',
                'entity-type'           => 'نوع الكيان',
                'type'                  => 'النوع',
                'validations'           => 'التحققات',
                'is-required'           => 'مطلوب',
                'input-validation'      => 'التحقق من الإدخال',
                'is-unique'             => 'فريد',
                'labels'                => 'التسميات',
                'general'               => 'عام',
                'numeric'               => 'رقمي',
                'decimal'               => 'عشري',
                'url'                   => 'رابط',
                'options'               => 'الخيارات',
                'option-type'           => 'نوع الخيار',
                'lookup-type'           => 'نوع البحث',
                'add-option'            => 'إضافة خيار',
                'save-option'           => 'حفظ الخيار',
                'option-name'           => 'اسم الخيار',
                'add-attribute-options' => 'إضافة خيارات السمة',
                'text'                  => 'نص',
                'textarea'              => 'منطقة نص',
                'price'                 => 'السعر',
                'boolean'               => 'منطقي',
                'select'                => 'اختيار',
                'multiselect'           => 'اختيار متعدد',
                'email'                 => 'بريد إلكتروني',
                'address'               => 'عنوان',
                'phone'                 => 'هاتف',
                'datetime'              => 'تاريخ ووقت',
                'date'                  => 'تاريخ',
                'image'                 => 'صورة',
                'file'                  => 'ملف',
                'lookup'                => 'بحث',
                'entity_type'           => 'نوع الكيان',
                'checkbox'              => 'خانة اختيار',
                'is_required'           => 'مطلوب',
                'is_unique'             => 'فريد',
                'actions'               => 'الإجراءات',
            ],

            'edit'  => [
                'title'                 => 'تعديل السمة',
                'save-btn'              => 'حفظ السمة',
                'code'                  => 'الرمز',
                'name'                  => 'الاسم',
                'labels'                => 'التسميات',
                'entity-type'           => 'نوع الكيان',
                'type'                  => 'النوع',
                'validations'           => 'التحققات',
                'is-required'           => 'مطلوب',
                'input-validation'      => 'التحقق من الإدخال',
                'is-unique'             => 'فريد',
                'general'               => 'عام',
                'numeric'               => 'رقمي',
                'decimal'               => 'عشري',
                'url'                   => 'رابط',
                'options'               => 'الخيارات',
                'option-type'           => 'نوع الخيار',
                'lookup-type'           => 'نوع البحث',
                'add-option'            => 'إضافة خيار',
                'save-option'           => 'حفظ الخيار',
                'option-name'           => 'اسم الخيار',
                'add-attribute-options' => 'إضافة خيارات السمة',
                'text'                  => 'نص',
                'textarea'              => 'منطقة نص',
                'price'                 => 'السعر',
                'boolean'               => 'منطقي',
                'select'                => 'اختيار',
                'multiselect'           => 'اختيار متعدد',
                'email'                 => 'بريد إلكتروني',
                'address'               => 'عنوان',
                'phone'                 => 'هاتف',
                'datetime'              => 'تاريخ ووقت',
                'date'                  => 'تاريخ',
                'image'                 => 'صورة',
                'file'                  => 'ملف',
                'lookup'                => 'بحث',
                'entity_type'           => 'نوع الكيان',
                'checkbox'              => 'خانة اختيار',
                'is_required'           => 'مطلوب',
                'is_unique'             => 'فريد',
                'actions'               => 'الإجراءات',
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'الأنشطة',

            'datagrid' => [
                'comment'       => 'تعليق',
                'created_at'    => 'تاريخ الإنشاء',
                'created_by'    => 'تم الإنشاء بواسطة',
                'edit'          => 'تحرير',
                'id'            => 'المعرف',
                'done'          => 'تم',
                'not-done'      => 'لم يتم',
                'lead'          => 'القيادة',
                'mass-delete'   => 'حذف جماعي',
                'mass-update'   => 'تحديث جماعي',
                'schedule-from' => 'جدولة من',
                'schedule-to'   => 'جدولة إلى',
                'schedule_from' => 'جدولة من',
                'schedule_to'   => 'جدولة إلى',
                'title'         => 'العنوان',
                'is_done'       => 'تم',
                'type'          => 'النوع',
                'update'        => 'تحديث',
                'call'          => 'مكالمة',
                'meeting'       => 'اجتماع',
                'lunch'         => 'غداء',
            ],
        ],

        'edit' => [
            'title'           => 'تحرير النشاط',
            'back-btn'        => 'رجوع',
            'save-btn'        => 'حفظ النشاط',
            'type'            => 'نوع النشاط',
            'call'            => 'مكالمة',
            'meeting'         => 'اجتماع',
            'lunch'           => 'غداء',
            'schedule_to'     => 'جدولة إلى',
            'schedule_from'   => 'جدولة من',
            'location'        => 'الموقع',
            'comment'         => 'تعليق',
            'lead'            => 'القيادة',
            'participants'    => 'المشاركون',
            'general'         => 'عام',
            'persons'         => 'الأشخاص',
            'no-result-found' => 'لم يتم العثور على سجلات.',
            'users'           => 'المستخدمون',
        ],

        'updated'              => 'تم تحديث :attribute',
        'created'              => 'تم الإنشاء',
        'duration-overlapping' => 'لدى المشاركين اجتماع آخر في هذا الوقت. هل تريد المتابعة؟',
        'create-success'       => 'تم إنشاء النشاط بنجاح.',
        'update-success'       => 'تم تحديث النشاط بنجاح.',
        'overlapping-error'    => 'لدى المشاركين اجتماع آخر في هذا الوقت.',
        'destroy-success'      => 'تم حذف النشاط بنجاح.',
        'delete-failed'        => 'لا يمكن حذف النشاط.',
        'mass-update-success'  => 'تم تحديث الأنشطة بنجاح.',
        'mass-destroy-success' => 'تم حذف الأنشطة بنجاح.',
        'mass-delete-failed'   => 'لا يمكن حذف الأنشطة.',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'إنشاء',
            'draft'             => 'مسودة',
            'inbox'             => 'الوارد',
            'outbox'            => 'الصادر',
            'sent'              => 'تم الإرسال',
            'trash'             => 'المهملات',
            'compose-mail-btn'  => 'إنشاء بريد',
            'btn'               => 'البريد',
            'mail'              => [
                'title'         => 'إنشاء بريد',
                'to'            => 'إلى',
                'enter-emails'  => 'اضغط على Enter لإضافة البريد الإلكتروني',
                'cc'            => 'نسخة إلى',
                'bcc'           => 'نسخة مخفية إلى',
                'subject'       => 'الموضوع',
                'send-btn'      => 'إرسال',
                'message'       => 'الرسالة',
                'draft'         => 'مسودة',
            ],

            'datagrid' => [
                'id'            => 'المعرف',
                'from'          => 'من',
                'to'            => 'إلى',
                'subject'       => 'الموضوع',
                'tag-name'      => 'اسم العلامة',
                'created-at'    => 'تم الإنشاء في',
                'move-to-inbox' => 'تم النقل إلى الوارد',
                'edit'          => 'تحرير',
                'view'          => 'عرض',
                'delete'        => 'حذف',
            ],
        ],

        'create-success'      => 'تم إرسال البريد الإلكتروني بنجاح.',
        'update-success'      => 'تم تحديث البريد الإلكتروني بنجاح.',
        'mass-update-success' => 'تم تحديث البريد الإلكتروني بنجاح.',
        'delete-success'      => 'تم حذف البريد الإلكتروني بنجاح.',
        'delete-failed'       => 'لا يمكن حذف البريد الإلكتروني.',

        'view' => [
            'title'                      => 'الرسائل',
            'subject'                    => ':الموضوع',
            'link-mail'                  => 'ربط البريد',
            'to'                         => 'إلى',
            'cc'                         => 'نسخة إلى',
            'bcc'                        => 'نسخة مخفية إلى',
            'reply'                      => 'رد',
            'reply-all'                  => 'رد على الجميع',
            'forward'                    => 'إعادة توجيه',
            'delete'                     => 'حذف',
            'enter-mails'                => 'أدخل معرف البريد الإلكتروني',
            'rotten-days'                => 'العميل المحتمل مهمل لمدة :days يومًا',
            'search-an-existing-lead'    => 'البحث عن عميل محتمل موجود',
            'search-an-existing-contact' => 'البحث عن جهة اتصال موجودة',
            'message'                    => 'الرسالة',
            'add-attachments'            => 'إضافة مرفقات',
            'discard'                    => 'تجاهل',
            'send'                       => 'إرسال',
            'no-result-found'            => 'لم يتم العثور على نتائج',
            'add-new-contact'            => 'إضافة جهة اتصال جديدة',
            'description'                => 'الوصف',
            'search'                     => 'بحث...',
            'add-new-lead'               => 'إضافة عميل محتمل جديد',
            'create-new-contact'         => 'إنشاء جهة اتصال جديدة',
            'save-contact'               => 'حفظ جهة الاتصال',
            'create-lead'                => 'إنشاء عميل محتمل',
            'linked-contact'             => 'جهة الاتصال المرتبطة',
            'link-to-contact'            => 'ربط بجهة اتصال',
            'link-to-lead'               => 'ربط بالعميل المحتمل',
            'linked-lead'                => 'العميل المحتمل المرتبط',
            'lead-details'               => 'تفاصيل العميل المحتمل',
            'contact-person'             => 'الشخص المسؤول',
            'product'                    => 'المنتج',

            'tags' => [
                'create-success'  => 'تم إنشاء العلامة بنجاح.',
                'destroy-success' => 'تم حذف العلامة بنجاح.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'select-country' => 'اختر الدولة',
            'select-state'   => 'اختر الولاية',
            'state'          => 'الولاية',
            'city'           => 'المدينة',
            'postcode'       => 'الرمز البريدي',
            'work'           => 'العمل',
            'home'           => 'المنزل',
            'add-more'       => 'أضف المزيد',
            'select'         => 'اختر',
            'country'        => 'الدولة',
            'address'        => 'العنوان',
        ],
    ],

    'leads' => [
        'create-success'    => 'تم إنشاء العميل المحتمل بنجاح.',
        'update-success'    => 'تم تحديث العميل المحتمل بنجاح.',
        'update-failed'     => 'Leads can not be deleted.',
        'destroy-success'   => 'تم حذف العميل المحتمل بنجاح.',
        'destroy-failed'    => 'لا يمكن حذف العميل المحتمل.',

        'index' => [
            'title'      => 'العملاء المحتملون',
            'create-btn' => 'إنشاء عميل محتمل',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => 'مندوب المبيعات',
                'subject'             => 'الموضوع',
                'source'              => 'المصدر',
                'lead-value'          => 'قيمة العميل المحتمل',
                'lead-type'           => 'نوع العميل المحتمل',
                'tag-name'            => 'اسم العلامة',
                'contact-person'      => 'شخص الاتصال',
                'stage'               => 'المرحلة',
                'rotten-lead'         => 'عميل محتمل متعفن',
                'expected-close-date' => 'تاريخ الإغلاق المتوقع',
                'created-at'          => 'تم الإنشاء في',
                'no'                  => 'لا',
                'yes'                 => 'نعم',
                'delete'              => 'حذف',
                'mass-delete'         => 'حذف جماعي',
                'mass-update'         => 'تحديث جماعي',
            ],

            'kanban' => [
                'rotten-days'            => 'العميل الفاسد منذ :days أيام',
                'empty-list'             => 'قائمة العملاء الخاصة بك فارغة',
                'empty-list-description' => 'قم بإنشاء عميل لتنظيم أهدافك.',
                'create-lead-btn'        => 'إنشاء عميل',

                'columns' => [
                    'contact-person'      => 'شخص الاتصال',
                    'id'                  => 'ID',
                    'lead-type'           => 'نوع العميل المحتمل',
                    'lead-value'          => 'قيمة العميل المحتمل',
                    'sales-person'        => 'مندوب المبيعات',
                    'source'              => 'المصدر',
                    'title'               => 'العنوان',
                    'tags'                => 'العلامات',
                    'expected-close-date' => 'تاريخ الإغلاق المتوقع',
                    'created-at'          => 'تم الإنشاء في',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'بحث',
                    ],

                    'filters' => [
                        'apply-filters' => 'تطبيق الفلاتر',
                        'clear-all'     => 'مسح الكل',
                        'filter'        => 'تصفية',
                        'filters'       => 'الفلاتر',
                        'select'        => 'اختر',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'كل المسارات',
                'create-new-pipeline' => 'إنشاء مسار جديد',
            ],
        ],

        'create' => [
            'title'          => 'إنشاء عميل محتمل',
            'save-btn'       => 'حفظ',
            'details'        => 'التفاصيل',
            'details-info'   => 'ضع المعلومات الأساسية للعميل المحتمل',
            'contact-person' => 'شخص الاتصال',
            'contact-info'   => 'معلومات عن شخص الاتصال',
            'products'       => 'المنتجات',
            'products-info'  => 'معلومات عن المنتجات',
        ],

        'edit' => [
            'title'          => 'تعديل العميل المحتمل',
            'save-btn'       => 'حفظ',
            'details'        => 'التفاصيل',
            'details-info'   => 'ضع المعلومات الأساسية للعميل المحتمل',
            'contact-person' => 'شخص الاتصال',
            'contact-info'   => 'معلومات عن شخص الاتصال',
            'products'       => 'المنتجات',
            'products-info'  => 'معلومات عن المنتجات',
        ],

        'common' => [
            'contact' => [
                'name'           => 'الاسم',
                'email'          => 'البريد الإلكتروني',
                'contact-number' => 'رقم الاتصال',
                'organization'   => 'المنظمة',
            ],

            'products' => [
                'product-name' => 'اسم المنتج',
                'quantity'     => 'الكمية',
                'price'        => 'السعر',
                'amount'       => 'المبلغ',
                'action'       => 'الإجراء',
                'add-more'     => 'أضف المزيد',
                'total'        => 'الإجمالي',
            ],
        ],

        'view' => [
            'title'       => 'الفرصة: :title',
            'rotten-days' => ':days أيام',

            'tabs' => [
                'description' => 'الوصف',
                'products'    => 'المنتجات',
                'quotes'      => 'الاقتباسات',
            ],

            'attributes' => [
                'title' => 'حول الفرصة',
            ],

            'quotes'=> [
                'subject'         => 'الموضوع',
                'expired-at'      => 'تنتهي في',
                'sub-total'       => 'المجموع الفرعي',
                'discount'        => 'الخصم',
                'tax'             => 'الضريبة',
                'adjustment'      => 'التعديل',
                'grand-total'     => 'المجموع الكلي',
                'delete'          => 'حذف',
                'edit'            => 'تعديل',
                'download'        => 'تحميل',
                'destroy-success' => 'تم حذف العرض بنجاح.',
                'empty-title'     => 'لا توجد عروض',
                'empty-info'      => 'لم يتم العثور على عروض لهذه الفرصة',
                'add-btn'         => 'إضافة عرض',
            ],

            'products' => [
                'product-name' => 'اسم المنتج',
                'quantity'     => 'الكمية',
                'price'        => 'السعر',
                'amount'       => 'المبلغ',
                'action'       => 'الإجراء',
                'add-more'     => 'إضافة المزيد',
                'total'        => 'الإجمالي',
                'empty-title'  => 'لا توجد منتجات',
                'empty-info'   => 'لم يتم العثور على منتجات لهذه الفرصة',
                'add-product'  => 'إضافة منتج',
            ],

            'persons' => [
                'title'     => 'حول الأشخاص',
                'job-title' => ':job_title في :organization',
            ],

            'stages' => [
                'won-lost'       => 'ربحت/خسرت',
                'won'            => 'ربحت',
                'lost'           => 'خسرت',
                'need-more-info' => 'تحتاج إلى مزيد من التفاصيل',
                'closed-at'      => 'أغلقت في',
                'won-value'      => 'قيمة الربح',
                'lost-reason'    => 'سبب الخسارة',
                'save-btn'       => 'حفظ',
            ],

            'tags' => [
                'create-success'  => 'تم إنشاء العلامة بنجاح.',
                'destroy-success' => 'تم حذف العلامة بنجاح.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'         => 'رجوع',
            'save-btn'     => 'حفظ الإعدادات',
            'save-success' => 'تم حفظ الإعدادات بنجاح.',
            'search'       => 'بحث',
            'title'        => 'الإعدادات',

            'general'  => [
                'title'   => 'عام',
                'info'    => 'الإعدادات العامة',

                'general' => [
                    'title'           => 'عام',
                    'info'            => 'قم بتحديث إعداداتك العامة هنا.',
                    'locale-settings' => [
                        'title'       => 'إعدادات اللغة',
                        'title-info'  => 'يحدد اللغة المستخدمة في واجهة المستخدم، مثل العربية (ar)، الإنجليزية (en)، الإسبانية (es)، الفارسية (fa) والتركية (tr).',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'لوحة القيادة',

            'revenue' => [
                'lost-revenue' => 'الإيرادات المفقودة',
                'won-revenue'  => 'الإيرادات المكتسبة',
            ],

            'over-all' => [
                'average-lead-value'    => 'متوسط قيمة العملاء المحتملين',
                'total-leads'           => 'إجمالي العملاء المحتملين',
                'average-leads-per-day' => 'متوسط العملاء المحتملين في اليوم',
                'total-quotations'      => 'إجمالي العروض',
                'total-persons'         => 'إجمالي الأشخاص',
                'total-organizations'   => 'إجمالي المؤسسات',
            ],

            'total-leads' => [
                'title' => 'العملاء المحتملين',
                'total' => 'إجمالي العملاء المحتملين',
                'won'   => 'العملاء المحتملين المكتسبين',
                'lost'  => 'العملاء المحتملين المفقودين',
            ],

            'revenue-by-sources' => [
                'title'       => 'الإيرادات حسب المصادر',
                'empty-title' => 'لا توجد بيانات متاحة',
                'empty-info'  => 'لا توجد بيانات متاحة للفترة المختارة',
            ],

            'revenue-by-types' => [
                'title'       => 'الإيرادات حسب الأنواع',
                'empty-title' => 'لا توجد بيانات متاحة',
                'empty-info'  => 'لا توجد بيانات متاحة للفترة المختارة',
            ],

            'top-selling-products' => [
                'title'       => 'أفضل المنتجات مبيعاً',
                'empty-title' => 'لم يتم العثور على منتجات',
                'empty-info'  => 'لا توجد منتجات متاحة للفترة المختارة',
            ],

            'top-persons' => [
                'title'       => 'أفضل الأشخاص',
                'empty-title' => 'لم يتم العثور على أشخاص',
                'empty-info'  => 'لا توجد أشخاص متاحة للفترة المختارة',
            ],

            'open-leads-by-states' => [
                'title'       => 'العملاء المحتملين حسب الدول',
                'empty-title' => 'لا توجد بيانات متاحة',
                'empty-info'  => 'لا توجد بيانات متاحة للفترة المختارة',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'الإصدار: :version',
        'dashboard'            => 'لوحة القيادة',
        'leads'                => 'العملاء المحتملين',
        'quotes'               => 'العروض',
        'quote'                => 'عرض',
        'mail'                 => [
            'title'   => 'البريد',
            'compose' => 'إنشاء رسالة',
            'inbox'   => 'البريد الوارد',
            'draft'   => 'المسودات',
            'outbox'  => 'الصادر',
            'sent'    => 'المرسل',
            'trash'   => 'سلة المهملات',
            'setting' => 'الإعدادات',
        ],
        'activities'           => 'الأنشطة',
        'contacts'             => 'جهات الاتصال',
        'persons'              => 'الأشخاص',
        'person'               => 'شخص',
        'organizations'        => 'المؤسسات',
        'organization'         => 'مؤسسة',
        'products'             => 'المنتجات',
        'product'              => 'منتج',
        'settings'             => 'الإعدادات',
        'user'                 => 'المستخدم',
        'user-info'            => 'إدارة جميع مستخدميك وصلاحياتهم في نظام CRM، وما يُسمح لهم بفعله.',
        'groups'               => 'المجموعات',
        'groups-info'          => 'إضافة أو تعديل أو حذف المجموعات من نظام CRM',
        'roles'                => 'الأدوار',
        'role'                 => 'دور',
        'roles-info'           => 'إضافة أو تعديل أو حذف الأدوار من نظام CRM',
        'users'                => 'المستخدمين',
        'users-info'           => 'إضافة أو تعديل أو حذف المستخدمين من نظام CRM',
        'lead'                 => 'عميل محتمل',
        'lead-info'            => 'إدارة جميع إعدادات العملاء المحتملين الخاصة بك في نظام CRM',
        'pipelines'            => 'الأنابيب',
        'pipelines-info'       => 'إضافة أو تعديل أو حذف الأنابيب من نظام CRM',
        'sources'              => 'المصادر',
        'sources-info'         => 'إضافة أو تعديل أو حذف المصادر من نظام CRM',
        'types'                => 'الأنواع',
        'types-info'           => 'إضافة أو تعديل أو حذف الأنواع من نظام CRM',
        'automation'           => 'الأتمتة',
        'automation-info'      => 'إدارة جميع إعدادات الأتمتة الخاصة بك في نظام CRM',
        'attributes'           => 'الخصائص',
        'attribute'            => 'خاصية',
        'attributes-info'      => 'إضافة أو تعديل أو حذف الخصائص من نظام CRM',
        'email-templates'      => 'قوالب البريد الإلكتروني',
        'email'                => 'البريد الإلكتروني',
        'email-templates-info' => 'إضافة أو تعديل أو حذف قوالب البريد الإلكتروني من نظام CRM',
        'events'               => 'الفعاليات',
        'events-info'          => 'إضافة، تعديل أو حذف الفعاليات من إدارة العلاقات',
        'campaigns'            => 'الحملات',
        'campaigns-info'       => 'إضافة، تعديل أو حذف الحملات من إدارة العلاقات',
        'workflows'            => 'سير العمل',
        'workflows-info'       => 'إضافة أو تعديل أو حذف سير العمل من نظام CRM',
        'webhooks'             => 'الويب هوك',
        'webhooks-info'        => 'إضافة، تحرير أو حذف الويب هوك من CRM',
        'other-settings'       => 'إعدادات أخرى',
        'other-settings-info'  => 'إدارة جميع إعداداتك الإضافية في نظام CRM',
        'tags'                 => 'العلامات',
        'tags-info'            => 'إضافة أو تعديل أو حذف العلامات من نظام CRM',
        'my-account'           => 'حسابي',
        'sign-out'             => 'تسجيل الخروج',
        'back'                 => 'رجوع',
        'name'                 => 'الاسم',
        'configuration'        => 'الإعدادات',
        'activities'           => 'الأنشطة',
        'howdy'                => 'مرحبا!',
        'warehouses'           => 'المستودعات',
        'warehouse'            => 'مستودع',
        'warehouses-info'      => 'إضافة أو تعديل أو حذف المستودعات من نظام CRM',
    ],

    'user' => [
        'account' => [
            'name'                  => 'الاسم',
            'email'                 => 'البريد الإلكتروني',
            'password'              => 'كلمة المرور',
            'my_account'            => 'حسابي',
            'update_details'        => 'تحديث التفاصيل',
            'current_password'      => 'كلمة المرور الحالية',
            'confirm_password'      => 'تأكيد كلمة المرور',
            'password-match'        => 'كلمة المرور الحالية لا تطابق.',
            'account-save'          => 'تم حفظ تغييرات الحساب بنجاح.',
            'permission-denied'     => 'تم رفض الإذن',
            'remove-image'          => 'إزالة الصورة',
            'upload_image_pix'      => 'تحميل صورة الملف الشخصي (100 بكسل × 100 بكسل)',
            'upload_image_format'   => 'بصيغة PNG أو JPG',
            'image_upload_message'  => 'فقط الصور (.jpeg، .jpg، .png، ..) مسموح بها.',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'عزيزي :name',
            'cheers' => 'مع أطيب التحيات،</br>فريق :app_name',

            'user' => [
                'dear'           => 'عزيزي :username',
                'create-subject' => 'تم إضافتك كعضو.',
                'create-body'    => 'تهانينا! أنت الآن عضو في فريقنا.',

                'forget-password' => [
                    'subject'           => 'إعادة تعيين كلمة مرور العميل',
                    'dear'              => 'عزيزي :username',
                    'reset-password'    => 'إعادة تعيين كلمة المرور',
                    'info'              => 'تتلقى هذا البريد الإلكتروني لأننا تلقينا طلب إعادة تعيين كلمة المرور لحسابك',
                    'final-summary'     => 'إذا لم تكن قد طلبت إعادة تعيين كلمة المرور، فلا يلزم اتخاذ أي إجراء إضافي',
                    'thanks'            => 'شكراً!',
                ],
            ],
        ],
    ],

    'errors' => [
        'dashboard' => 'لوحة التحكم',
        'go-back'   => 'العودة',
        'support'   => 'إذا استمرت المشكلة، تواصل معنا على <a href=":link" class=":class">:email</a> للحصول على المساعدة.',

        '404' => [
            'description' => 'عذرًا! الصفحة التي تبحث عنها في إجازة. يبدو أننا لم نجد ما كنت تبحث عنه.',
            'title'       => '404 الصفحة غير موجودة',
        ],

        '401' => [
            'description' => 'عذرًا! يبدو أنك غير مصرح لك بالوصول إلى هذه الصفحة. يبدو أنك تفتقد الأوراق اللازمة.',
            'title'       => '401 غير مصرح',
        ],

        '403' => [
            'description' => 'عذرًا! هذه الصفحة محظورة. يبدو أنك لا تملك الأذونات اللازمة لعرض هذا المحتوى.',
            'title'       => '403 ممنوع الدخول',
        ],

        '500' => [
            'description' => 'عذرًا! حدث خطأ ما. يبدو أننا نواجه مشكلة في تحميل الصفحة التي تبحث عنها.',
            'title'       => '500 خطأ داخلي في الخادم',
        ],

        '503' => [
            'description' => 'عذرًا! يبدو أننا متوقفون مؤقتًا للصيانة. يرجى العودة لاحقًا.',
            'title'       => '503 الخدمة غير متوفرة',
        ],
    ],
];
