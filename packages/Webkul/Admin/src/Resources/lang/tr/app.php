<?php

return [
    'acl' => [
        'leads'           => 'Potansiyeller',
        'lead'            => 'Potansiyel',
        'quotes'          => 'Teklifler',
        'mail'            => 'Posta',
        'inbox'           => 'Gelen Kutusu',
        'draft'           => 'Taslak',
        'outbox'          => 'Gönderilenler',
        'sent'            => 'Gönderildi',
        'trash'           => 'Çöp Kutusu',
        'activities'      => 'Etkinlikler',
        'webhook'         => 'Web Kancası',
        'contacts'        => 'Kişiler',
        'persons'         => 'Kişiler',
        'organizations'   => 'Organizasyonlar',
        'products'        => 'Ürünler',
        'settings'        => 'Ayarlar',
        'groups'          => 'Gruplar',
        'roles'           => 'Roller',
        'users'           => 'Kullanıcılar',
        'user'            => 'Kullanıcı',
        'automation'      => 'Otomasyon',
        'attributes'      => 'Öznitelikler',
        'pipelines'       => 'Pipelines',
        'sources'         => 'Kaynaklar',
        'types'           => 'Türler',
        'email-templates' => 'E-posta Şablonları',
        'workflows'       => 'İş Akışları',
        'other-settings'  => 'Diğer Ayarlar',
        'tags'            => 'Etiketler',
        'configuration'   => 'Yapılandırma',
        'campaigns'       => 'Kampanyalar',
        'event'           => 'Etkinlik',
        'create'          => 'Oluştur',
        'edit'            => 'Düzenle',
        'view'            => 'Görüntüle',
        'print'           => 'Yazdır',
        'delete'          => 'Sil',
        'export'          => 'Dışa Aktar',
        'mass-delete'     => 'Toplu Sil',
    ],

    'users' => [
        'activate-warning' => 'Hesabınız henüz etkinleştirilmedi. Lütfen yönetici ile iletişime geçin.',
        'login-error'      => 'Kimlik bilgileri kayıtlarımızla eşleşmiyor.',
        'not-permission'   => 'Yönetici paneline erişim izniniz yok.',

        'login' => [
            'email'                => 'E-posta Adresi',
            'forget-password-link' => 'Şifremi Unuttum?',
            'password'             => 'Şifre',
            'submit-btn'           => 'Giriş Yap',
            'title'                => 'Giriş Yap',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'Kayıtlı E-posta',
                'email-not-exist' => 'E-posta Mevcut Değil',
                'page-title'      => 'Şifremi Unuttum',
                'reset-link-sent' => 'Şifre sıfırlama bağlantısı gönderildi',
                'sign-in-link'    => 'Giriş Yapmaya Dön?',
                'submit-btn'      => 'Sıfırla',
                'title'           => 'Şifre Kurtarma',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'Giriş Yapmaya Dön?',
            'confirm-password' => 'Şifreyi Onayla',
            'email'            => 'Kayıtlı E-posta',
            'password'         => 'Şifre',
            'submit-btn'       => 'Şifreyi Sıfırla',
            'title'            => 'Şifre Sıfırlama',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'Geri',
            'change-password'   => 'Şifreyi Değiştir',
            'confirm-password'  => 'Şifreyi Onayla',
            'current-password'  => 'Mevcut Şifre',
            'email'             => 'E-posta',
            'general'           => 'Genel',
            'invalid-password'  => 'Girdiğiniz mevcut şifre yanlış.',
            'name'              => 'Ad',
            'password'          => 'Şifre',
            'profile-image'     => 'Profil Resmi',
            'save-btn'          => 'Hesabı Kaydet',
            'title'             => 'Hesabım',
            'update-success'    => 'Hesap başarıyla güncellendi',
            'upload-image-info' => 'Profil Resmi Yükleyin (110px X 110px) PNG veya JPG Formatında',
        ],
    ],

    'components' => [
        'activites' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'Posta',
                    'title'        => 'Posta Yaz',
                    'to'           => 'Kime',
                    'enter-emails' => 'E-posta eklemek için enter tuşuna basın',
                    'cc'           => 'Bilgi',
                    'bcc'          => 'Gizli Bilgi',
                    'subject'      => 'Konu',
                    'send-btn'     => 'Gönder',
                    'message'      => 'Mesaj',
                ],

                'file' => [
                    'btn'           => 'Dosya',
                    'title'         => 'Dosya Ekle',
                    'title-control' => 'Başlık',
                    'name'          => 'Ad',
                    'description'   => 'Açıklama',
                    'file'          => 'Dosya',
                    'save-btn'      => 'Dosyayı Kaydet',
                ],

                'note' => [
                    'btn'      => 'Not',
                    'title'    => 'Not Ekle',
                    'comment'  => 'Yorum',
                    'save-btn' => 'Notu Kaydet',
                ],

                'activity' => [
                    'btn'           => 'Etkinlik',
                    'title'         => 'Etkinlik Ekle',
                    'title-control' => 'Başlık',
                    'description'   => 'Açıklama',
                    'schedule-from' => 'Başlama Tarihi',
                    'schedule-to'   => 'Bitiş Tarihi',
                    'location'      => 'Konum',
                    'call'          => 'Arama',
                    'meeting'       => 'Toplantı',
                    'lunch'         => 'Öğle Yemeği',
                    'save-btn'      => 'Etkinliği Kaydet',

                    'participants' => [
                        'title'       => 'Katılımcılar',
                        'placeholder' => 'Katılımcıları aramak için yazın',
                        'users'       => 'Kullanıcılar',
                        'persons'     => 'Kişiler',
                        'no-results'  => 'Sonuç bulunamadı...',
                    ],
                ],
            ],

            'index' => [
                'from'         => 'Kimden',
                'to'           => 'Kime',
                'cc'           => 'Bilgi',
                'bcc'          => 'Gizli Bilgi',
                'all'          => 'Tümü',
                'planned'      => 'Planlanan',
                'calls'        => 'Aramalar',
                'meetings'     => 'Toplantılar',
                'lunches'      => 'Öğle Yemekleri',
                'files'        => 'Dosyalar',
                'quotes'       => 'Teklifler',
                'notes'        => 'Notlar',
                'emails'       => 'E-postalar',
                'change-log'   => 'Değişiklik Günlükleri',
                'by-user'      => ':user tarafından',
                'scheduled-on' => 'Planlanan Tarih',
                'location'     => 'Konum',
                'participants' => 'Katılımcılar',
                'mark-as-done' => 'Tamamlandı olarak işaretle',
                'delete'       => 'Sil',
                'edit'         => 'Düzenle',
                'view'         => 'Görüntüle',
                'unlink'       => 'Bağlantıyı Kaldır',
                'empty'        => 'Boş',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'Etkinlik Bulunamadı',
                        'description' => 'Bu etkinlikler bulunamadı. Sol paneldeki butona tıklayarak etkinlik ekleyebilirsiniz.',
                    ],

                    'planned' => [
                        'title'       => 'Planlanan Etkinlik Bulunamadı',
                        'description' => 'Bu planlanan etkinlikler bulunamadı. Sol paneldeki butona tıklayarak planlanan etkinlik ekleyebilirsiniz.',
                    ],

                    'notes' => [
                        'title'       => 'Not Bulunamadı',
                        'description' => 'Bu not bulunamadı. Sol paneldeki butona tıklayarak not ekleyebilirsiniz.',
                    ],

                    'calls' => [
                        'title'       => 'Arama Bulunamadı',
                        'description' => 'Bu arama bulunamadı. Sol paneldeki butona tıklayarak arama ekleyebilirsiniz.',
                    ],

                    'meetings' => [
                        'title'       => 'Toplantı Bulunamadı',
                        'description' => 'Bu toplantı bulunamadı. Sol paneldeki butona tıklayarak toplantı ekleyebilirsiniz.',
                    ],

                    'lunches' => [
                        'title'       => 'Öğle Yemeği Bulunamadı',
                        'description' => 'Bu öğle yemeği bulunamadı. Sol paneldeki butona tıklayarak öğle yemeği ekleyebilirsiniz.',
                    ],

                    'files' => [
                        'title'       => 'Dosya Bulunamadı',
                        'description' => 'Bu dosya bulunamadı. Sol paneldeki butona tıklayarak dosya ekleyebilirsiniz.',
                    ],

                    'emails' => [
                        'title'       => 'E-posta Bulunamadı',
                        'description' => 'Bu e-posta bulunamadı. Sol paneldeki butona tıklayarak e-posta ekleyebilirsiniz.',
                    ],

                    'system' => [
                        'title'       => 'Değişiklik Günlüğü Bulunamadı',
                        'description' => 'Bu değişiklik günlüğü bulunamadı.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'Resim Ekle',
                'ai-add-image-btn'  => 'Sihirli AI',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'Sadece resim dosyalarına (.jpeg, .jpg, .png, vb.) izin verilmektedir.',

                'placeholders' => [
                    'front'     => 'Ön',
                    'next'      => 'Sonraki',
                    'size'      => 'Boyut',
                    'use-cases' => 'Kullanım Alanları',
                    'zoom'      => 'Yakınlaştır',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'Video Ekle',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'Sadece video dosyalarına (.mp4, .mov, .ogg vb.) izin verilmektedir.',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'Hiçbir kayıt seçilmedi.',
                'must-select-a-mass-action-option' => 'Bir toplu işlem seçeneği seçmelisiniz.',
                'must-select-a-mass-action'        => 'Bir toplu işlem seçmelisiniz.',
            ],

            'toolbar' => [
                'length-of' => ':length kadar',
                'of'        => 'üzerinden',
                'per-page'  => 'Sayfa Başına',
                'results'   => ':total Sonuç',
                'delete'    => 'Sil',
                'selected'  => ':total Seçilen Öğeler',

                'mass-actions' => [
                    'submit'        => 'Gönder',
                    'select-option' => 'Seçim Yap',
                    'select-action' => 'Eylem Seç',
                ],

                'filter' => [
                    'apply-filters-btn' => 'Filtreleri Uygula',
                    'back-btn'          => 'Geri',
                    'create-new-filter' => 'Yeni Filtre Oluştur',
                    'custom-filters'    => 'Özel Filtreler',
                    'delete-error'      => 'Filtre silinirken bir hata oluştu, lütfen tekrar deneyin.',
                    'delete-success'    => 'Filtre başarıyla silindi.',
                    'empty-description' => 'Kaydedilecek seçili filtre bulunmamaktadır. Lütfen kaydetmek için filtreler seçin.',
                    'empty-title'       => 'Kaydetmek İçin Filtreler Ekleyin',
                    'name'              => 'Ad',
                    'quick-filters'     => 'Hızlı Filtreler',
                    'save-btn'          => 'Kaydet',
                    'save-filter'       => 'Filtreyi Kaydet',
                    'saved-success'     => 'Filtre başarıyla kaydedildi.',
                    'selected-filters'  => 'Seçilen Filtreler',
                    'title'             => 'Filtre',
                    'update'            => 'Güncelle',
                    'update-filter'     => 'Filtreyi Güncelle',
                    'updated-success'   => 'Filtre başarıyla güncellendi.',
                ],

                'search' => [
                    'title' => 'Ara',
                ],
            ],

            'filters' => [
                'select' => 'Seç',
                'title'  => 'Filtreler',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'En az 2 karakter yazın...',
                        'no-results'         => 'Sonuç bulunamadı...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'Hepsini Temizle',
                    'title'     => 'Özel Filtreler',
                ],

                'boolean-options' => [
                    'false' => 'Yanlış',
                    'true'  => 'Doğru',
                ],

                'date-options' => [
                    'last-month'        => 'Geçen Ay',
                    'last-six-months'   => 'Son 6 Ay',
                    'last-three-months' => 'Son 3 Ay',
                    'this-month'        => 'Bu Ay',
                    'this-week'         => 'Bu Hafta',
                    'this-year'         => 'Bu Yıl',
                    'today'             => 'Bugün',
                    'yesterday'         => 'Dün',
                ],
            ],

            'table' => [
                'actions'              => 'Eylemler',
                'no-records-available' => 'Kayıt Bulunmuyor.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'Kabul Et',
                'disagree-btn' => 'Reddet',
                'message'      => 'Bu işlemi gerçekleştirmek istediğinizden emin misiniz?',
                'title'        => 'Emin Misiniz?',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'Etiketler',
                'added-tags'     => 'Eklenen Etiketler',
                'save-btn'       => 'Etiketi Kaydet',
                'placeholder'    => 'Etiketleri aramak için yazın',
                'add-tag'        => '\" :term \" Ekle...',
                'aquarelle-red'  => 'Aquarelle Kırmızı',
                'crushed-cashew' => 'Ezilmiş Antep Fıstığı',
                'beeswax'        => 'Abeş Mum',
                'lemon-chiffon'  => 'Limon Şifon',
                'snow-flurry'    => 'Kar Fırtınası',
                'honeydew'       => 'Honeydew',
            ],
        ],

        'layouts' => [
            'powered-by' => [
                'description' => ':webkul tarafından geliştirilen açık kaynaklı bir proje olan :krayin tarafından desteklenmektedir.',
            ],

            'header' => [
                'mega-search' => [
                    'title'   => 'Arama',

                    'tabs' => [
                        'leads'    => 'Müşteriler',
                        'quotes'   => 'Teklifler',
                        'persons'  => 'Kişiler',
                        'products' => 'Ürünler',
                    ],

                    'explore-all-products'          => 'Tüm Ürünleri Keşfet',
                    'explore-all-leads'             => 'Tüm Müşterileri Keşfet',
                    'explore-all-contacts'          => 'Tüm İletişimleri Keşfet',
                    'explore-all-quotes'            => 'Tüm Teklifleri Keşfet',
                    'explore-all-matching-products' => '":query" (:count) ile eşleşen tüm ürünleri keşfet',
                    'explore-all-matching-leads'    => '":query" (:count) ile eşleşen tüm müşterileri keşfet',
                    'explore-all-matching-contacts' => '":query" (:count) ile eşleşen tüm iletişimleri keşfet',
                    'explore-all-matching-quotes'   => '":query" (:count) ile eşleşen tüm teklifleri keşfet',
                ],
            ],
        ],

        'attributes' => [
            'edit'   => [
                'delete' => 'Sil',
            ],

            'lookup' => [
                'click-to-add'    => 'Eklemek için tıklayın',
                'search'          => 'Arama',
                'no-result-found' => 'Sonuç bulunamadı',
                'search'          => 'Arama...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'Eklemek için Tıklayın',
            'no-results'   => 'Sonuç Bulunamadı',
            'add-as-new'   => 'Yeni Olarak Ekle',
            'search'       => 'Arama...',
        ],

        'flash-group' => [
            'success' => 'Başarı',
            'error'   => 'Hata',
            'warning' => 'Uyarı',
            'info'    => 'Bilgi',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'Teklifler',
            'create-btn'     => 'Teklif Oluştur',
            'create-success' => 'Teklif başarıyla oluşturuldu.',
            'update-success' => 'Teklif başarıyla güncellendi.',
            'delete-success' => 'Teklif başarıyla silindi.',
            'delete-failed'  => 'Teklif silinemedi.',

            'datagrid' => [
                'subject'        => 'Konu',
                'sales-person'   => 'Satış Temsilcisi',
                'expired-at'     => 'Son Kullanma Tarihi',
                'created-at'     => 'Oluşturulma Tarihi',
                'expired-quotes' => 'Süresi Dolmuş Teklifler',
                'person'         => 'Kişi',
                'subtotal'       => 'Ara Toplam',
                'discount'       => 'İndirim',
                'tax'            => 'Vergi',
                'adjustment'     => 'Düzenleme',
                'grand-total'    => 'Genel Toplam',
                'edit'           => 'Düzenle',
                'delete'         => 'Sil',
                'print'          => 'Yazdır',
            ],

            'pdf' => [
                'title'            => 'Teklif',
                'grand-total'      => 'Genel Toplam',
                'adjustment'       => 'Düzenleme',
                'discount'         => 'İndirim',
                'tax'              => 'Vergi',
                'sub-total'        => 'Ara Toplam',
                'amount'           => 'Tutar',
                'quantity'         => 'Miktar',
                'price'            => 'Fiyat',
                'product-name'     => 'Ürün Adı',
                'sku'              => 'SKU',
                'shipping-address' => 'Teslimat Adresi',
                'billing-address'  => 'Fatura Adresi',
                'expired-at'       => 'Son Kullanma Tarihi',
                'sales-person'     => 'Satış Temsilcisi',
                'date'             => 'Tarih',
                'quote-id'         => 'Teklif ID',
            ],
        ],

        'create' => [
            'title'             => 'Teklif Oluştur',
            'save-btn'          => 'Teklifi Kaydet',
            'quote-info'        => 'Teklif Bilgileri',
            'quote-info-info'   => 'Teklifin temel bilgilerini girin.',
            'address-info'      => 'Adres Bilgileri',
            'address-info-info' => 'Teklif ile ilgili adres bilgileri.',
            'quote-items'       => 'Teklif Kalemleri',
            'search-products'   => 'Ürünleri Ara',
            'link-to-lead'      => 'Potansiyele Bağla',
            'quote-item-info'   => 'Bu teklif için ürün talebi ekleyin.',
            'quote-name'        => 'Teklif Adı',
            'quantity'          => 'Miktar',
            'price'             => 'Fiyat',
            'discount'          => 'İndirim',
            'tax'               => 'Vergi',
            'total'             => 'Toplam',
            'amount'            => 'Tutar',
            'add-item'          => '+ Kalem Ekle',
            'sub-total'         => 'Ara Toplam (:symbol)',
            'total-discount'    => 'İndirim (:symbol)',
            'total-tax'         => 'Vergi (:symbol)',
            'total-adjustment'  => 'Düzenleme (:symbol)',
            'grand-total'       => 'Genel Toplam (:symbol)',
            'discount-amount'   => 'İndirim Tutarı',
            'tax-amount'        => 'Vergi Tutarı',
            'adjustment-amount' => 'Düzenleme Tutarı',
            'product-name'      => 'Ürün Adı',
            'action'            => 'Eylem',
        ],

        'edit' => [
            'title'             => 'Teklifi Düzenle',
            'save-btn'          => 'Teklifi Kaydet',
            'quote-info'        => 'Teklif Bilgileri',
            'quote-info-info'   => 'Teklifin temel bilgilerini girin.',
            'address-info'      => 'Adres Bilgileri',
            'address-info-info' => 'Teklif ile ilgili adres bilgileri.',
            'quote-items'       => 'Teklif Kalemleri',
            'link-to-lead'      => 'Potansiyele Bağla',
            'quote-item-info'   => 'Bu teklif için ürün talebi ekleyin.',
            'quote-name'        => 'Teklif Adı',
            'quantity'          => 'Miktar',
            'price'             => 'Fiyat',
            'search-products'   => 'Ürünleri Ara',
            'discount'          => 'İndirim',
            'tax'               => 'Vergi',
            'total'             => 'Toplam',
            'amount'            => 'Tutar',
            'add-item'          => '+ Kalem Ekle',
            'sub-total'         => 'Ara Toplam (:symbol)',
            'total-discount'    => 'İndirim (:symbol)',
            'total-tax'         => 'Vergi (:symbol)',
            'total-adjustment'  => 'Düzenleme (:symbol)',
            'grand-total'       => 'Genel Toplam (:symbol)',
            'discount-amount'   => 'İndirim Tutarı',
            'tax-amount'        => 'Vergi Tutarı',
            'adjustment-amount' => 'Düzenleme Tutarı',
            'product-name'      => 'Ürün Adı',
            'action'            => 'Eylem',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'Kişiler',
                'create-btn'     => 'Kişi Oluştur',
                'create-success' => 'Kişi başarıyla oluşturuldu.',
                'update-success' => 'Kişi başarıyla güncellendi.',
                'delete-success' => 'Kişi başarıyla silindi.',
                'delete-failed'  => 'Kişi silinemedi.',

                'datagrid' => [
                    'contact-numbers'   => 'İletişim Numaraları',
                    'delete'            => 'Sil',
                    'edit'              => 'Düzenle',
                    'emails'            => 'E-postalar',
                    'id'                => 'ID',
                    'view'              => 'Görüntüle',
                    'name'              => 'Ad',
                    'organization-name' => 'Kuruluş Adı',
                ],
            ],

            'view' => [
                'title'              => ':name',
                'about-person'       => 'Kişi Hakkında',
                'about-organization' => 'Kuruluş Hakkında',

                'activities' => [
                    'index' => [
                        'all'          => 'Hepsi',
                        'calls'        => 'Aramalar',
                        'meetings'     => 'Toplantılar',
                        'lunches'      => 'Öğle Yemekleri',
                        'files'        => 'Dosyalar',
                        'quotes'       => 'Teklifler',
                        'notes'        => 'Notlar',
                        'emails'       => 'E-postalar',
                        'by-user'      => ':user tarafından',
                        'scheduled-on' => 'Planlandığı Tarih',
                        'location'     => 'Konum',
                        'participants' => 'Katılımcılar',
                        'mark-as-done' => 'Tamamlandı olarak işaretle',
                        'delete'       => 'Sil',
                        'edit'         => 'Düzenle',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'E-posta',
                            'title'    => 'E-posta Oluştur',
                            'to'       => 'Kime',
                            'cc'       => 'CC',
                            'bcc'      => 'BCC',
                            'subject'  => 'Konu',
                            'send-btn' => 'Gönder',
                            'message'  => 'Mesaj',
                        ],

                        'file' => [
                            'btn'           => 'Dosya',
                            'title'         => 'Dosya Ekle',
                            'title-control' => 'Başlık',
                            'name'          => 'Dosya Adı',
                            'description'   => 'Açıklama',
                            'file'          => 'Dosya',
                            'save-btn'      => 'Dosyayı Kaydet',
                        ],

                        'note' => [
                            'btn'      => 'Not',
                            'title'    => 'Not Ekle',
                            'comment'  => 'Yorum',
                            'save-btn' => 'Notu Kaydet',
                        ],

                        'activity' => [
                            'btn'           => 'Etkinlik',
                            'title'         => 'Etkinlik Ekle',
                            'title-control' => 'Başlık',
                            'description'   => 'Açıklama',
                            'schedule-from' => 'Başlangıç Tarihi',
                            'schedule-to'   => 'Bitiş Tarihi',
                            'location'      => 'Konum',
                            'call'          => 'Çağrı',
                            'meeting'       => 'Toplantı',
                            'lunch'         => 'Öğle Yemeği',
                            'save-btn'      => 'Etkinliği Kaydet',
                        ],
                    ],
                ],
            ],

            'create' => [
                'title'    => 'Kişi Oluştur',
                'save-btn' => 'Kişiyi Kaydet',
            ],

            'edit' => [
                'title'    => 'Kişiyi Düzenle',
                'save-btn' => 'Kişiyi Kaydet',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'Kuruluşlar',
                'create-btn'     => 'Kuruluş Oluştur',
                'create-success' => 'Kuruluş başarıyla oluşturuldu.',
                'update-success' => 'Kuruluş başarıyla güncellendi.',
                'delete-success' => 'Kuruluş başarıyla silindi.',
                'delete-failed'  => 'Kuruluş silinemedi.',

                'datagrid' => [
                    'delete'        => 'Sil',
                    'edit'          => 'Düzenle',
                    'id'            => 'ID',
                    'name'          => 'Ad',
                    'persons-count' => 'Kişi Sayısı',
                ],
            ],

            'create' => [
                'title'    => 'Kuruluş Oluştur',
                'save-btn' => 'Kuruluşu Kaydet',
            ],

            'edit' => [
                'title'    => 'Kuruluşu Düzenle',
                'save-btn' => 'Kuruluşu Kaydet',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'Ürünler',
            'create-btn'     => 'Ürün Oluştur',
            'create-success' => 'Ürün başarıyla oluşturuldu.',
            'update-success' => 'Ürün başarıyla güncellendi.',
            'delete-success' => 'Ürün başarıyla silindi.',
            'delete-failed'  => 'Ürün silinemedi.',

            'datagrid'   => [
                'allocated' => 'Tahsis Edilen',
                'delete'    => 'Sil',
                'edit'      => 'Düzenle',
                'id'        => 'ID',
                'in-stock'  => 'Stokta',
                'name'      => 'Ad',
                'on-hand'   => 'Elinde',
                'price'     => 'Fiyat',
                'sku'       => 'SKU',
                'view'      => 'Görüntüle',
            ],
        ],

        'create' => [
            'save-btn'  => 'Ürünleri Kaydet',
            'title'     => 'Ürün Oluştur',
            'general'   => 'Genel',
            'price'     => 'Fiyat',
        ],

        'edit' => [
            'title'     => 'Ürünleri Düzenle',
            'save-btn'  => 'Ürünleri Kaydet',
            'general'   => 'Genel',
            'price'     => 'Fiyat',
        ],

        'view' => [
            'sku'         => 'SKU',
            'all'         => 'Hepsi',
            'notes'       => 'Notlar',
            'files'       => 'Dosyalar',
            'inventories' => 'Envanter',
            'change-logs' => 'Değişiklik Günlükleri',

            'attributes' => [
                'about-product' => 'Ürün Hakkında',
            ],

            'inventory' => [
                'source'     => 'Kaynak',
                'in-stock'   => 'Stokta',
                'allocated'  => 'Tahsis Edilen',
                'on-hand'    => 'Elinde',
                'actions'    => 'İşlemler',
                'assign'     => 'Ata',
                'add-source' => 'Kaynak Ekle',
                'location'   => 'Konum',
                'add-more'   => 'Daha Fazla Ekle',
                'save'       => 'Kaydet',
            ],
        ],
    ],

    'settings' => [
        'title' => 'Ayarlar',

        'groups' => [
            'index' => [
                'create-btn'        => 'Grup Oluştur',
                'title'             => 'Gruplar',
                'create-success'    => 'Grup başarıyla oluşturuldu.',
                'update-success'    => 'Grup başarıyla güncellendi.',
                'destroy-success'   => 'Grup başarıyla silindi.',
                'delete-failed'     => 'Grup silinemedi.',

                'datagrid'   => [
                    'delete'      => 'Sil',
                    'description' => 'Açıklama',
                    'edit'        => 'Düzenle',
                    'id'          => 'ID',
                    'name'        => 'Ad',
                ],

                'edit' => [
                    'title' => 'Grubu Düzenle',
                ],

                'create' => [
                    'name'        => 'Ad',
                    'title'       => 'Grup Oluştur',
                    'description' => 'Açıklama',
                    'save-btn'    => 'Grubu Kaydet',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'Rol silinemedi, çünkü bu admin kullanıcısında kullanılıyor.',
                'create-btn'                => 'Rol Oluştur',
                'create-success'            => 'Rol başarıyla oluşturuldu.',
                'current-role-delete-error' => 'Mevcut kullanıcıya atanmış rol silinemedi.',
                'delete-failed'             => 'Rol silinemedi.',
                'delete-success'            => 'Rol başarıyla silindi.',
                'last-delete-error'         => 'En az bir rol gereklidir.',
                'settings'                  => 'Ayarlar',
                'title'                     => 'Roller',
                'update-success'            => 'Rol başarıyla güncellendi.',
                'user-define-error'         => 'Sistem rolü silinemedi.',

                'datagrid'   => [
                    'all'             => 'Hepsi',
                    'custom'          => 'Özel',
                    'delete'          => 'Sil',
                    'description'     => 'Açıklama',
                    'edit'            => 'Düzenle',
                    'id'              => 'ID',
                    'name'            => 'Ad',
                    'permission-type' => 'İzin Türü',
                ],
            ],

            'create' => [
                'access-control' => 'Erişim Kontrolü',
                'all'            => 'Hepsi',
                'back-btn'       => 'Geri',
                'custom'         => 'Özel',
                'description'    => 'Açıklama',
                'general'        => 'Genel',
                'name'           => 'Ad',
                'permissions'    => 'İzinler',
                'save-btn'       => 'Rolü Kaydet',
                'title'          => 'Rol Oluştur',
            ],

            'edit' => [
                'access-control' => 'Erişim Kontrolü',
                'all'            => 'Hepsi',
                'back-btn'       => 'Geri',
                'custom'         => 'Özel',
                'description'    => 'Açıklama',
                'general'        => 'Genel',
                'name'           => 'Ad',
                'permissions'    => 'İzinler',
                'save-btn'       => 'Rolü Kaydet',
                'title'          => 'Rol Düzenle',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'Tür Oluştur',
                'create-success' => 'Tür başarıyla oluşturuldu.',
                'delete-failed'  => 'Tür silinemedi.',
                'delete-success' => 'Tür başarıyla silindi.',
                'title'          => 'Türler',
                'update-success' => 'Tür başarıyla güncellendi.',

                'datagrid' => [
                    'delete'      => 'Sil',
                    'description' => 'Açıklama',
                    'edit'        => 'Düzenle',
                    'id'          => 'ID',
                    'name'        => 'Ad',
                ],

                'create' => [
                    'name'     => 'Ad',
                    'save-btn' => 'Türü Kaydet',
                    'title'    => 'Tür Oluştur',
                ],

                'edit' => [
                    'title' => 'Tür Düzenle',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'Kaynak Oluştur',
                'create-success' => 'Kaynak başarıyla oluşturuldu.',
                'delete-failed'  => 'Kaynak silinemedi.',
                'delete-success' => 'Kaynak başarıyla silindi.',
                'title'          => 'Kaynaklar',
                'update-success' => 'Kaynak başarıyla güncellendi.',

                'datagrid' => [
                    'delete' => 'Sil',
                    'edit'   => 'Düzenle',
                    'id'     => 'ID',
                    'name'   => 'Ad',
                ],

                'create' => [
                    'name'     => 'Ad',
                    'save-btn' => 'Kaynağı Kaydet',
                    'title'    => 'Kaynak Oluştur',
                ],

                'edit' => [
                    'title' => 'Kaynağı Düzenle',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'İş Akışları',
                'create-btn'     => 'İş Akışı Oluştur',
                'create-success' => 'İş akışı başarıyla oluşturuldu.',
                'update-success' => 'İş akışı başarıyla güncellendi.',
                'delete-success' => 'İş akışı başarıyla silindi.',
                'delete-failed'  => 'İş akışı silinemedi.',
                'datagrid'       => [
                    'delete'      => 'Sil',
                    'description' => 'Açıklama',
                    'edit'        => 'Düzenle',
                    'id'          => 'ID',
                    'name'        => 'Ad',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'İlgili fırsatları güncelle',
                'send-email-to-sales-owner'  => 'Satış sahibiyle e-posta gönder',
                'send-email-to-participants' => 'Katılımcılara e-posta gönder',
                'add-webhook'                => 'Webhook Ekle',
                'update-lead'                => 'Fırsatı Güncelle',
                'update-person'              => 'Kişiyi Güncelle',
                'send-email-to-person'       => 'Kişiye e-posta gönder',
                'add-tag'                    => 'Etiket Ekle',
                'add-note-as-activity'       => 'Notu Aktivite Olarak Ekle',
                'update-quote'               => 'Teklifi Güncelle',
            ],

            'create' => [
                'title'                  => 'İş Akışı Oluştur',
                'event'                  => 'Olay',
                'back-btn'               => 'Geri',
                'save-btn'               => 'İş Akışını Kaydet',
                'name'                   => 'Ad',
                'basic-details'          => 'Temel Bilgiler',
                'description'            => 'Açıklama',
                'actions'                => 'Eylemler',
                'basic-details-info'     => 'İş akışının temel bilgilerini girin.',
                'event-info'             => 'Bir olay tetikler, kontrolleri yapar, koşulları değerlendirir ve önceden tanımlanmış eylemleri gerçekleştirir.',
                'conditions'             => 'Koşullar',
                'conditions-info'        => 'Koşullar, belirli durumlarda tetiklenen kurallardır.',
                'actions-info'           => 'Bir eylem sadece iş yükünü azaltmakla kalmaz, aynı zamanda CRM otomasyonu için oldukça kolaylaştırır.',
                'value'                  => 'Değer',
                'condition-type'         => 'Koşul Türü',
                'all-condition-are-true' => 'Tüm koşullar doğru',
                'any-condition-are-true' => 'Herhangi bir koşul doğru',
                'add-condition'          => 'Koşul Ekle',
                'add-action'             => 'Eylem Ekle',
                'yes'                    => 'Evet',
                'no'                     => 'Hayır',
                'email'                  => 'E-posta',
                'is-equal-to'            => 'Eşittir',
                'is-not-equal-to'        => 'Eşit değildir',
                'equals-or-greater-than' => 'Eşittir veya büyük',
                'equals-or-less-than'    => 'Eşittir veya küçük',
                'greater-than'           => 'Büyük',
                'less-than'              => 'Küçük',
                'type'                   => 'Tür',
                'contain'                => 'İçerir',
                'contains'               => 'İçerir',
                'does-not-contain'       => 'İçermez',
            ],

            'edit' => [
                'title'                  => 'İş Akışını Düzenle',
                'event'                  => 'Olay',
                'back-btn'               => 'Geri',
                'save-btn'               => 'İş Akışını Kaydet',
                'name'                   => 'Ad',
                'basic-details'          => 'Temel Bilgiler',
                'description'            => 'Açıklama',
                'actions'                => 'Eylemler',
                'type'                   => 'Tür',
                'basic-details-info'     => 'İş akışının temel bilgilerini girin.',
                'event-info'             => 'Bir olay tetikler, kontrolleri yapar, koşulları değerlendirir ve önceden tanımlanmış eylemleri gerçekleştirir.',
                'conditions'             => 'Koşullar',
                'conditions-info'        => 'Koşullar, belirli durumlarda tetiklenen kurallardır.',
                'actions-info'           => 'Bir eylem sadece iş yükünü azaltmakla kalmaz, aynı zamanda CRM otomasyonu için oldukça kolaylaştırır.',
                'value'                  => 'Değer',
                'condition-type'         => 'Koşul Türü',
                'all-condition-are-true' => 'Tüm koşullar doğru',
                'any-condition-are-true' => 'Herhangi bir koşul doğru',
                'add-condition'          => 'Koşul Ekle',
                'add-action'             => 'Eylem Ekle',
                'yes'                    => 'Evet',
                'no'                     => 'Hayır',
                'email'                  => 'E-posta',
                'is-equal-to'            => 'Eşittir',
                'is-not-equal-to'        => 'Eşit değildir',
                'equals-or-greater-than' => 'Eşittir veya büyük',
                'equals-or-less-than'    => 'Eşittir veya küçük',
                'greater-than'           => 'Büyük',
                'less-than'              => 'Küçük',
                'contain'                => 'İçerir',
                'contains'               => 'İçerir',
                'does-not-contain'       => 'İçermez',
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'Web Formları',
                'create-btn'     => 'Web Formu Oluştur',
                'create-success' => 'Web formu başarıyla oluşturuldu.',
                'update-success' => 'Web formu başarıyla güncellendi.',
                'delete-success' => 'Web formu başarıyla silindi.',
                'delete-failed'  => 'Web formu silinemedi.',

                'datagrid'       => [
                    'id'     => 'ID',
                    'title'  => 'Başlık',
                    'edit'   => 'Düzenle',
                    'delete' => 'Sil',
                ],
            ],

            'create' => [
                'title'                    => 'Web Formu Oluştur',
                'add-attribute-btn'        => 'Öznitelik Düğmesi Ekle',
                'attribute-label-color'    => 'Öznitelik Etiketi Rengi',
                'attributes'               => 'Öznitelikler',
                'attributes-info'          => 'Forma özel öznitelikler ekleyin.',
                'background-color'         => 'Arka Plan Rengi',
                'create-lead'              => 'Fırsat Oluştur',
                'customize-webform'        => 'Web Formunu Özelleştir',
                'customize-webform-info'   => 'Web formunuzu seçtiğiniz eleman renkleri ile özelleştirin.',
                'description'              => 'Açıklama',
                'display-custom-message'   => 'Özel mesaj göster',
                'form-background-color'    => 'Form Arka Plan Rengi',
                'form-submit-btn-color'    => 'Form Gönderim Düğmesi Rengi',
                'form-submit-button-color' => 'Form Gönderim Düğmesi Rengi',
                'form-title-color'         => 'Form Başlık Rengi',
                'general'                  => 'Genel',
                'leads'                    => 'Fırsatlar',
                'person'                   => 'Kişi',
                'save-btn'                 => 'Web Formunu Kaydet',
                'submit-button-label'      => 'Gönderim Düğmesi Etiketi',
                'submit-success-action'    => 'Gönderim Başarı Eylemi',
                'redirect-to-url'          => 'URL\'ye Yönlendir',
                'choose-value'             => 'Değer Seç',
                'select-file'              => 'Dosya Seç',
                'select-image'             => 'Görüntü Seç',
                'enter-value'              => 'Değer Gir',
            ],

            'edit' => [
                'title'                     => 'Web Formunu Düzenle',
                'add-attribute-btn'         => 'Öznitelik Düğmesi Ekle',
                'attribute-label-color'     => 'Öznitelik Etiketi Rengi',
                'attributes'                => 'Öznitelikler',
                'attributes-info'           => 'Forma özel öznitelikler ekleyin.',
                'background-color'          => 'Arka Plan Rengi',
                'code-snippet'              => 'Kod Parçası',
                'copied'                    => 'Kopyalandı',
                'copy'                      => 'Kopyala',
                'create-lead'               => 'Fırsat Oluştur',
                'customize-webform'         => 'Web Formunu Özelleştir',
                'customize-webform-info'    => 'Web formunuzu seçtiğiniz eleman renkleri ile özelleştirin.',
                'description'               => 'Açıklama',
                'display-custom-message'    => 'Özel mesaj göster',
                'embed'                     => 'Göm',
                'form-background-color'     => 'Form Arka Plan Rengi',
                'form-submit-btn-color'     => 'Form Gönderim Düğmesi Rengi',
                'form-submit-button-color'  => 'Form Gönderim Düğmesi Rengi',
                'form-title-color'          => 'Form Başlık Rengi',
                'general'                   => 'Genel',
                'preview'                   => 'Önizleme',
                'person'                    => 'Kişi',
                'public-url'                => 'Genel URL',
                'save-btn'                  => 'Web Formunu Kaydet',
                'submit-button-label'       => 'Gönderim Düğmesi Etiketi',
                'submit-success-action'     => 'Gönderim Başarı Eylemi',
                'redirect-to-url'           => 'URL\'ye Yönlendir',
                'choose-value'              => 'Değer Seç',
                'select-file'               => 'Dosya Seç',
                'select-image'              => 'Görüntü Seç',
                'enter-value'               => 'Değer Gir',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'E-posta Şablonu Oluştur',
                'title'          => 'E-posta Şablonları',
                'create-success' => 'E-posta şablonu başarıyla oluşturuldu.',
                'update-success' => 'E-posta şablonu başarıyla güncellendi.',
                'delete-success' => 'E-posta şablonu başarıyla silindi.',
                'delete-failed'  => 'E-posta şablonu silinemedi.',

                'datagrid'   => [
                    'delete'       => 'Sil',
                    'edit'         => 'Düzenle',
                    'id'           => 'ID',
                    'name'         => 'Ad',
                    'subject'      => 'Konu',
                ],
            ],

            'create'     => [
                'title'                => 'E-posta Şablonu Oluştur',
                'save-btn'             => 'E-posta Şablonunu Kaydet',
                'email-template'       => 'E-posta Şablonu',
                'subject'              => 'Konu',
                'content'              => 'İçerik',
                'subject-placeholders' => 'Konu Yer Tutucuları',
                'general'              => 'Genel',
                'name'                 => 'Ad',
            ],

            'edit' => [
                'title'                => 'E-posta Şablonunu Düzenle',
                'save-btn'             => 'E-posta Şablonunu Kaydet',
                'email-template'       => 'E-posta Şablonu',
                'subject'              => 'Konu',
                'content'              => 'İçerik',
                'subject-placeholders' => 'Konu Yer Tutucuları',
                'general'              => 'Genel',
                'name'                 => 'Ad',
            ],
        ],

        'marketing' => [
            'events' => [
                'index' => [
                    'create-btn'          => 'Etkinlik Oluştur',
                    'title'               => 'Etkinlikler',
                    'create-success'      => 'Etkinlik başarıyla oluşturuldu.',
                    'update-success'      => 'Etkinlik başarıyla güncellendi.',
                    'delete-success'      => 'Etkinlik başarıyla silindi.',
                    'delete-failed'       => 'Etkinlik silinemedi.',
                    'mass-delete-success' => 'Etkinlikler başarıyla silindi',

                    'datagrid'   => [
                        'delete'       => 'Sil',
                        'edit'         => 'Düzenle',
                        'id'           => 'ID',
                        'name'         => 'Ad',
                        'description'  => 'Açıklama',
                        'date'         => 'Tarih',
                    ],

                    'create'     => [
                        'title'       => 'Etkinlik Oluştur',
                        'name'        => 'Ad',
                        'date'        => 'Tarih',
                        'description' => 'Açıklama',
                    ],

                    'edit' => [
                        'title' => 'Etkinliği Düzenle',
                    ],
                ],
            ],

            'campaigns' => [
                'index' => [
                    'create-btn'          => 'Kampanya Oluştur',
                    'title'               => 'Kampanyalar',
                    'create-success'      => 'Kampanya başarıyla oluşturuldu.',
                    'update-success'      => 'Kampanya başarıyla güncellendi.',
                    'delete-success'      => 'Kampanya başarıyla silindi.',
                    'delete-failed'       => 'Kampanya silinemedi.',
                    'mass-delete-success' => 'Kampanyalar başarıyla silindi',

                    'datagrid'   => [
                        'id'       => 'ID',
                        'name'     => 'Ad',
                        'subject'  => 'Konu',
                        'status'   => 'Durum',
                        'active'   => 'Aktif',
                        'inactive' => 'Pasif',
                        'edit'     => 'Düzenle',
                        'delete'   => 'Sil',
                    ],

                    'create'     => [
                        'title'          => 'Kampanya Oluştur',
                        'name'           => 'Ad',
                        'type'           => 'Tür',
                        'subject'        => 'Konu',
                        'event'          => 'Etkinlik',
                        'email-template' => 'E-posta Şablonu',
                        'status'         => 'Durum',
                    ],

                    'edit' => [
                        'title' => 'Kampanyayı Düzenle',
                    ],
                ],
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'Etiket Oluştur',
                'title'          => 'Etiketler',
                'create-success' => 'Etiket başarıyla oluşturuldu.',
                'update-success' => 'Etiket başarıyla güncellendi.',
                'delete-success' => 'Etiket başarıyla silindi.',
                'delete-failed'  => 'Etiket silinemedi.',

                'datagrid' => [
                    'delete'      => 'Sil',
                    'edit'        => 'Düzenle',
                    'id'          => 'ID',
                    'name'        => 'Ad',
                    'users'       => 'Kullanıcılar',
                    'created-at'  => 'Oluşturulma Tarihi',
                ],

                'create' => [
                    'name'     => 'Ad',
                    'save-btn' => 'Etiketi Kaydet',
                    'title'    => 'Etiket Oluştur',
                    'color'    => 'Renk',
                ],

                'edit' => [
                    'title' => 'Etiketi Düzenle',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'Kullanıcı Oluştur',
                'create-success'      => 'Kullanıcı başarıyla oluşturuldu.',
                'delete-failed'       => 'Kullanıcı silinemedi.',
                'delete-success'      => 'Kullanıcı başarıyla silindi.',
                'last-delete-error'   => 'En az bir kullanıcı gereklidir.',
                'mass-delete-failed'  => 'Kullanıcılar silinemedi.',
                'mass-delete-success' => 'Kullanıcılar başarıyla silindi.',
                'mass-update-failed'  => 'Kullanıcılar güncellenemedi.',
                'mass-update-success' => 'Kullanıcılar başarıyla güncellendi.',
                'title'               => 'Kullanıcılar',
                'update-success'      => 'Kullanıcı başarıyla güncellendi.',
                'user-define-error'   => 'Sistem kullanıcısı silinemedi.',
                'active'              => 'Aktif',
                'inactive'            => 'Pasif',

                'datagrid' => [
                    'active'        => 'Aktif',
                    'created-at'    => 'Oluşturulma Tarihi',
                    'delete'        => 'Sil',
                    'edit'          => 'Düzenle',
                    'email'         => 'E-posta',
                    'id'            => 'ID',
                    'inactive'      => 'Pasif',
                    'name'          => 'Ad',
                    'status'        => 'Durum',
                    'update-status' => 'Durumu Güncelle',
                    'users'         => 'Kullanıcılar',
                ],

                'create' => [
                    'confirm-password' => 'Şifreyi Onayla',
                    'email'            => 'E-posta',
                    'general'          => 'Genel',
                    'global'           => 'Küresel',
                    'group'            => 'Grup',
                    'individual'       => 'Bireysel',
                    'name'             => 'Ad',
                    'password'         => 'Şifre',
                    'permission'       => 'İzin',
                    'role'             => 'Rol',
                    'save-btn'         => 'Kullanıcıyı Kaydet',
                    'status'           => 'Durum',
                    'title'            => 'Kullanıcı Oluştur',
                    'view-permission'  => 'Görüntüleme İzni',
                ],

                'edit' => [
                    'title' => 'Kullanıcıyı Düzenle',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'Pipelines',
                'create-btn'           => 'Pipeline Oluştur',
                'create-success'       => 'Pipeline başarıyla oluşturuldu.',
                'update-success'       => 'Pipeline başarıyla güncellendi.',
                'delete-success'       => 'Pipeline başarıyla silindi.',
                'delete-failed'        => 'Pipeline silinemedi.',
                'default-delete-error' => 'Varsayılan pipeline silinemez.',

                'datagrid' => [
                    'delete'      => 'Sil',
                    'edit'        => 'Düzenle',
                    'id'          => 'ID',
                    'is-default'  => 'Varsayılan mı',
                    'name'        => 'Ad',
                    'no'          => 'Hayır',
                    'rotten-days' => 'Çürük Günler',
                    'yes'         => 'Evet',
                ],
            ],

            'create' => [
                'title'                => 'Pipeline Oluştur',
                'save-btn'             => 'Pipeline Kaydet',
                'name'                 => 'Ad',
                'rotten-days'          => 'Çürük Günler',
                'mark-as-default'      => 'Varsayılan Olarak İşaretle',
                'general'              => 'Genel',
                'probability'          => 'Olasılık (%)',
                'new-stage'            => 'Yeni',
                'won-stage'            => 'Kazandı',
                'lost-stage'           => 'Kaybetti',
                'stage-btn'            => 'Aşama Ekle',
                'stages'               => 'Aşamalar',
                'duplicate-name'       => '"Ad" alanı tekrar edemez',
                'delete-stage'         => 'Aşama Sil',
                'add-new-stages'       => 'Yeni Aşamalar Ekle',
                'add-stage-info'       => 'Pipeline için yeni aşama ekleyin',
                'newly-added'          => 'Yeni Eklenen',
                'stage-delete-success' => 'Aşama Başarıyla Silindi',
            ],

            'edit'  => [
                'title'                => 'Pipeline\'ı Düzenle',
                'save-btn'             => 'Pipeline Kaydet',
                'name'                 => 'Ad',
                'rotten-days'          => 'Çürük Günler',
                'mark-as-default'      => 'Varsayılan Olarak İşaretle',
                'general'              => 'Genel',
                'probability'          => 'Olasılık (%)',
                'new-stage'            => 'Yeni',
                'won-stage'            => 'Kazandı',
                'lost-stage'           => 'Kaybetti',
                'stage-btn'            => 'Aşama Ekle',
                'stages'               => 'Aşamalar',
                'duplicate-name'       => '"Ad" alanı tekrar edemez',
                'delete-stage'         => 'Aşama Sil',
                'add-new-stages'       => 'Yeni Aşamalar Ekle',
                'add-stage-info'       => 'Pipeline için yeni aşama ekleyin',
                'stage-delete-success' => 'Aşama Başarıyla Silindi',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'Webhooks',
                'create-btn'     => 'Webhook Oluştur',
                'create-success' => 'Webhook başarıyla oluşturuldu.',
                'update-success' => 'Webhook başarıyla güncellendi.',
                'delete-success' => 'Webhook başarıyla silindi.',
                'delete-failed'  => 'Webhook silinemedi.',

                'datagrid' => [
                    'id'          => 'ID',
                    'delete'      => 'Sil',
                    'edit'        => 'Düzenle',
                    'name'        => 'Ad',
                    'entity-type' => 'Varlık Türü',
                    'end-point'   => 'Son Nokta',
                ],
            ],

            'create' => [
                'title'                 => 'Webhook Oluştur',
                'save-btn'              => 'Webhook Kaydet',
                'info'                  => 'Webhook detaylarını girin',
                'url-and-parameters'    => 'URL ve Parametreler',
                'method'                => 'Yöntem',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'URL Son Noktası',
                'parameters'            => 'Parametreler',
                'add-new-parameter'     => 'Yeni Parametre Ekle',
                'url-preview'           => 'URL Önizleme:',
                'headers'               => 'Başlıklar',
                'add-new-header'        => 'Yeni Başlık Ekle',
                'body'                  => 'Gövde',
                'default'               => 'Varsayılan',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Anahtar ve Değer',
                'add-new-payload'       => 'Yeni yük ekle',
                'raw'                   => 'Ham',
                'general'               => 'Genel',
                'name'                  => 'Ad',
                'entity-type'           => 'Varlık Türü',
                'insert-placeholder'    => 'Yer Tutucu Ekle',
                'description'           => 'Açıklama',
                'json'                  => 'Json',
                'text'                  => 'Metin',
            ],

            'edit' => [
                'title'                 => 'Webhook\'u Düzenle',
                'edit-btn'              => 'Webhook Kaydet',
                'save-btn'              => 'Webhook Kaydet',
                'info'                  => 'Webhook detaylarını girin',
                'url-and-parameters'    => 'URL ve Parametreler',
                'method'                => 'Yöntem',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'URL Son Noktası',
                'parameters'            => 'Parametreler',
                'add-new-parameter'     => 'Yeni Parametre Ekle',
                'url-preview'           => 'URL Önizleme:',
                'headers'               => 'Başlıklar',
                'add-new-header'        => 'Yeni Başlık Ekle',
                'body'                  => 'Gövde',
                'default'               => 'Varsayılan',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Anahtar ve Değer',
                'add-new-payload'       => 'Yeni yük ekle',
                'raw'                   => 'Ham',
                'general'               => 'Genel',
                'name'                  => 'Ad',
                'entity-type'           => 'Varlık Türü',
                'insert-placeholder'    => 'Yer Tutucu Ekle',
                'description'           => 'Açıklama',
                'json'                  => 'Json',
                'text'                  => 'Metin',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'Depolar',
                'create-btn'     => 'Depo Oluştur',
                'create-success' => 'Depo başarıyla oluşturuldu.',
                'name-exists'    => 'Depo adı zaten mevcut.',
                'update-success' => 'Depo başarıyla güncellendi.',
                'delete-success' => 'Depo başarıyla silindi.',
                'delete-failed'  => 'Depo silinemedi.',

                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => 'Ad',
                    'contact-name'    => 'İletişim Adı',
                    'delete'          => 'Sil',
                    'edit'            => 'Düzenle',
                    'view'            => 'Görüntüle',
                    'created-at'      => 'Oluşturulma Tarihi',
                    'products'        => 'Ürünler',
                    'contact-emails'  => 'İletişim E-postaları',
                    'contact-numbers' => 'İletişim Numaraları',
                ],
            ],

            'create' => [
                'title'         => 'Depo Oluştur',
                'save-btn'      => 'Depoyu Kaydet',
                'contact-info'  => 'İletişim Bilgileri',
            ],

            'edit' => [
                'title'         => 'Depoyu Düzenle',
                'save-btn'      => 'Depoyu Kaydet',
                'contact-info'  => 'İletişim Bilgileri',
            ],

            'view' => [
                'all'         => 'Tümü',
                'notes'       => 'Notlar',
                'files'       => 'Dosyalar',
                'location'    => 'Konum',
                'change-logs' => 'Değişiklik Kayıtları',

                'locations' => [
                    'action'         => 'Eylem',
                    'add-location'   => 'Konum Ekle',
                    'create-success' => 'Konum başarıyla oluşturuldu.',
                    'delete'         => 'Sil',
                    'delete-failed'  => 'Konum silinemedi.',
                    'delete-success' => 'Konum başarıyla silindi.',
                    'name'           => 'Ad',
                    'save-btn'       => 'Kaydet',
                ],

                'general-information' => [
                    'title' => 'Genel Bilgiler',
                ],

                'contact-information' => [
                    'title' => 'İletişim Bilgileri',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'Öznitelikler',
                'create-btn'         => 'Öznitelik Oluştur',
                'create-success'     => 'Öznitelikler başarıyla oluşturuldu.',
                'update-success'     => 'Öznitelikler başarıyla güncellendi.',
                'delete-success'     => 'Öznitelikler başarıyla silindi.',
                'delete-failed'      => 'Öznitelikler silinemedi.',
                'user-define-error'  => 'Sistem özniteliği silinemez.',
                'mass-delete-failed' => 'Sistem öznitelikleri silinemez.',

                'datagrid' => [
                    'yes'         => 'Evet',
                    'no'          => 'Hayır',
                    'id'          => 'ID',
                    'code'        => 'Kod',
                    'name'        => 'Ad',
                    'entity-type' => 'Varlık Türü',
                    'type'        => 'Tür',
                    'is-default'  => 'Varsayılan mı',
                    'edit'        => 'Düzenle',
                    'delete'      => 'Sil',
                ],
            ],

            'create'  => [
                'title'                 => 'Öznitelik Oluştur',
                'save-btn'              => 'Özniteliği Kaydet',
                'code'                  => 'Kod',
                'name'                  => 'Ad',
                'entity-type'           => 'Varlık Türü',
                'type'                  => 'Tür',
                'validations'           => 'Doğrulamalar',
                'is-required'           => 'Gerekli mi',
                'input-validation'      => 'Girdi Doğrulaması',
                'is-unique'             => 'Benzersiz mi',
                'labels'                => 'Etiketler',
                'general'               => 'Genel',
                'numeric'               => 'Sayısal',
                'decimal'               => 'Ondalık',
                'url'                   => 'URL',
                'options'               => 'Seçenekler',
                'option-type'           => 'Seçenek Türü',
                'lookup-type'           => 'Arama Türü',
                'add-option'            => 'Seçenek Ekle',
                'save-option'           => 'Seçeneği Kaydet',
                'option-name'           => 'Seçenek Adı',
                'add-attribute-options' => 'Öznitelik Seçenekleri Ekle',
                'text'                  => 'Metin',
                'textarea'              => 'Metin Alanı',
                'price'                 => 'Fiyat',
                'boolean'               => 'Boolean',
                'select'                => 'Seç',
                'multiselect'           => 'Çoklu Seçim',
                'email'                 => 'E-posta',
                'address'               => 'Adres',
                'phone'                 => 'Telefon',
                'datetime'              => 'Tarih Saat',
                'date'                  => 'Tarih',
                'image'                 => 'Resim',
                'file'                  => 'Dosya',
                'lookup'                => 'Arama',
                'entity_type'           => 'Varlık türü',
                'checkbox'              => 'Onay Kutusu',
                'is_required'           => 'Gerekli mi',
                'is_unique'             => 'Benzersiz mi',
                'actions'               => 'İşlemler',
            ],

            'edit'  => [
                'title'                 => 'Özniteliği Düzenle',
                'save-btn'              => 'Özniteliği Kaydet',
                'code'                  => 'Kod',
                'name'                  => 'Ad',
                'labels'                => 'Etiketler',
                'entity-type'           => 'Varlık Türü',
                'type'                  => 'Tür',
                'validations'           => 'Doğrulamalar',
                'is-required'           => 'Gerekli mi',
                'input-validation'      => 'Girdi Doğrulaması',
                'is-unique'             => 'Benzersiz mi',
                'general'               => 'Genel',
                'numeric'               => 'Sayısal',
                'decimal'               => 'Ondalık',
                'url'                   => 'URL',
                'options'               => 'Seçenekler',
                'option-type'           => 'Seçenek Türü',
                'lookup-type'           => 'Arama Türü',
                'add-option'            => 'Seçenek Ekle',
                'save-option'           => 'Seçeneği Kaydet',
                'option-name'           => 'Seçenek Adı',
                'add-attribute-options' => 'Öznitelik Seçenekleri Ekle',
                'text'                  => 'Metin',
                'textarea'              => 'Metin Alanı',
                'price'                 => 'Fiyat',
                'boolean'               => 'Boolean',
                'select'                => 'Seç',
                'multiselect'           => 'Çoklu Seçim',
                'email'                 => 'E-posta',
                'address'               => 'Adres',
                'phone'                 => 'Telefon',
                'datetime'              => 'Tarih Saat',
                'date'                  => 'Tarih',
                'image'                 => 'Resim',
                'file'                  => 'Dosya',
                'lookup'                => 'Arama',
                'entity_type'           => 'Varlık türü',
                'checkbox'              => 'Onay Kutusu',
                'is_required'           => 'Gerekli mi',
                'is_unique'             => 'Benzersiz mi',
                'actions'               => 'İşlemler',
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'Etkinlikler',

            'datagrid' => [
                'comment'       => 'Yorum',
                'created_at'    => 'Oluşturulma Tarihi',
                'created_by'    => 'Oluşturan',
                'edit'          => 'Düzenle',
                'id'            => 'ID',
                'done'          => 'Tamamlandı mı',
                'not-done'      => 'Tamamlanmadı',
                'lead'          => 'Müşteri',
                'mass-delete'   => 'Toplu Sil',
                'mass-update'   => 'Toplu Güncelle',
                'schedule-from' => 'Başlangıç Tarihi',
                'schedule-to'   => 'Bitiş Tarihi',
                'schedule_from' => 'Başlangıç Tarihi',
                'schedule_to'   => 'Bitiş Tarihi',
                'title'         => 'Başlık',
                'is_done'       => 'Tamamlandı mı',
                'type'          => 'Tür',
                'update'        => 'Güncelle',
                'call'          => 'Arama',
                'meeting'       => 'Toplantı',
                'lunch'         => 'Öğle Yemeği',
            ],
        ],

        'edit' => [
            'title'           => 'Etkinliği Düzenle',
            'back-btn'        => 'Geri',
            'save-btn'        => 'Etkinliği Kaydet',
            'type'            => 'Etkinlik Türü',
            'call'            => 'Arama',
            'meeting'         => 'Toplantı',
            'lunch'           => 'Öğle Yemeği',
            'schedule_to'     => 'Bitiş Tarihi',
            'schedule_from'   => 'Başlangıç Tarihi',
            'location'        => 'Konum',
            'comment'         => 'Yorum',
            'lead'            => 'Müşteri',
            'participants'    => 'Katılımcılar',
            'general'         => 'Genel',
            'persons'         => 'Kişiler',
            'no-result-found' => 'Kayıt bulunamadı.',
            'users'           => 'Kullanıcılar',
        ],

        'updated'              => 'Güncellendi :attribute',
        'created'              => 'Oluşturuldu',
        'duration-overlapping' => 'Katılımcıların bu saatte başka bir toplantısı var. Devam etmek istiyor musunuz?',
        'create-success'       => 'Etkinlik başarıyla oluşturuldu.',
        'update-success'       => 'Etkinlik başarıyla güncellendi.',
        'overlapping-error'    => 'Katılımcıların bu saatte başka bir toplantısı var.',
        'destroy-success'      => 'Etkinlik başarıyla silindi.',
        'delete-failed'        => 'Etkinlik silinemiyor.',
        'mass-update-success'  => 'Etkinlikler başarıyla güncellendi.',
        'mass-destroy-success' => 'Etkinlikler başarıyla silindi.',
        'mass-delete-failed'   => 'Etkinlikler silinemiyor.',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'Oluştur',
            'draft'             => 'Taslak',
            'inbox'             => 'Gelen Kutusu',
            'outbox'            => 'Giden Kutusu',
            'sent'              => 'Gönderildi',
            'trash'             => 'Çöp',
            'compose-mail-btn'  => 'Mail Oluştur',
            'btn'               => 'Mail',
            'mail'              => [
                'title'         => 'Mail Oluştur',
                'to'            => 'Kime',
                'enter-emails'  => 'E-posta eklemek için enter tuşuna basın',
                'cc'            => 'CC',
                'bcc'           => 'BCC',
                'subject'       => 'Konu',
                'send-btn'      => 'Gönder',
                'message'       => 'Mesaj',
                'draft'         => 'Taslak',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => 'Kimden',
                'to'            => 'Kime',
                'subject'       => 'Konu',
                'tag-name'      => 'Etiket Adı',
                'created-at'    => 'Oluşturulma Tarihi',
                'move-to-inbox' => 'Gelen Kutusuna Taşı',
                'edit'          => 'Düzenle',
                'view'          => 'Görüntüle',
                'delete'        => 'Sil',
            ],
        ],

        'create-success'      => 'E-posta başarıyla gönderildi.',
        'update-success'      => 'E-posta başarıyla güncellendi.',
        'mass-update-success' => 'E-postalar başarıyla güncellendi.',
        'delete-success'      => 'E-posta başarıyla silindi.',
        'delete-failed'       => 'E-posta silinemedi.',

        'view' => [
            'title'                      => 'Mails',
            'subject'                    => ':subject',
            'link-mail'                  => 'Maili Bağla',
            'to'                         => 'Kime',
            'cc'                         => 'CC',
            'bcc'                        => 'BCC',
            'reply'                      => 'Yanıtla',
            'reply-all'                  => 'Hepsine Yanıtla',
            'forward'                    => 'Yönlendir',
            'delete'                     => 'Sil',
            'enter-mails'                => 'E-posta ID girin',
            'rotten-days'                => ':days gün boyunca geçersiz',
            'search-an-existing-lead'    => 'Mevcut bir müşteri arayın',
            'search-an-existing-contact' => 'Mevcut bir kişi arayın',
            'message'                    => 'Mesaj',
            'add-attachments'            => 'Ek Ekle',
            'discard'                    => 'İptal Et',
            'send'                       => 'Gönder',
            'no-result-found'            => 'Sonuç bulunamadı',
            'add-new-contact'            => 'Yeni İletişim Ekle',
            'description'                => 'Açıklama',
            'search'                     => 'Ara...',
            'add-new-lead'               => 'Yeni Müşteri Ekle',
            'create-new-contact'         => 'Yeni İletişim Oluştur',
            'save-contact'               => 'İletişimi Kaydet',
            'create-lead'                => 'Müşteri Oluştur',
            'linked-contact'             => 'Bağlı Kişi',
            'link-to-contact'            => 'Kişiye Bağla',
            'link-to-lead'               => 'Müşteriye Bağla',
            'linked-lead'                => 'Bağlı Müşteri',
            'lead-details'               => 'Müşteri Detayları',
            'contact-person'             => 'İletişim Kişisi',
            'product'                    => 'Ürün',

            'tags' => [
                'create-success'  => 'Etiket başarıyla oluşturuldu.',
                'destroy-success' => 'Etiket başarıyla silindi.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'select-country' => 'Ülke Seç',
            'select-state'   => 'Eyalet Seç',
            'state'          => 'Eyalet',
            'city'           => 'Şehir',
            'postcode'       => 'Posta Kodu',
            'work'           => 'İş',
            'home'           => 'Ev',
            'add-more'       => 'Daha Fazla Ekle',
            'select'         => 'Seç',
            'country'        => 'Ülke',
            'address'        => 'Adres',
        ],
    ],

    'leads' => [
        'create-success'    => 'Lead başarıyla oluşturuldu.',
        'update-success'    => 'Lead başarıyla güncellendi.',
        'update-failed'     => 'Potansiyel müşteriler silinemez.',
        'destroy-success'   => 'Lead başarıyla silindi.',
        'destroy-failed'    => 'Lead silinemedi.',

        'index' => [
            'title'      => 'Leads',
            'create-btn' => 'Lead Oluştur',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => 'Satış Temsilcisi',
                'subject'             => 'Konu',
                'source'              => 'Kaynak',
                'lead-value'          => 'Lead Değeri',
                'lead-type'           => 'Potansiyel Müşteri Türü',
                'tag-name'            => 'Etiket Adı',
                'contact-person'      => 'İletişim Kişisi',
                'stage'               => 'Aşama',
                'rotten-lead'         => 'Çürümüş Lead',
                'expected-close-date' => 'Beklenen Kapanış Tarihi',
                'created-at'          => 'Oluşturulma Tarihi',
                'no'                  => 'Hayır',
                'yes'                 => 'Evet',
                'delete'              => 'Sil',
                'mass-delete'         => 'Toplu Sil',
                'mass-update'         => 'Toplu Güncelle',
            ],

            'kanban' => [
                'rotten-days'            => 'Bu müşteri adayı :days gündür çürük',
                'empty-list'             => 'Müşteri Adayı Listeniz Boş',
                'empty-list-description' => 'Hedeflerinizi düzenlemek için bir müşteri adayı oluşturun.',
                'create-lead-btn'        => 'Müşteri Adayı Oluştur',

                'columns' => [
                    'contact-person'      => 'İletişim Kişisi',
                    'id'                  => 'ID',
                    'lead-type'           => 'Lead Türü',
                    'lead-value'          => 'Lead Değeri',
                    'sales-person'        => 'Satış Temsilcisi',
                    'source'              => 'Kaynak',
                    'title'               => 'Başlık',
                    'tags'                => 'Etiketler',
                    'expected-close-date' => 'Beklenen Kapanış Tarihi',
                    'created-at'          => 'Oluşturulma Tarihi',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Ara',
                    ],

                    'filters' => [
                        'apply-filters' => 'Filtreleri Uygula',
                        'clear-all'     => 'Tümünü Temizle',
                        'filter'        => 'Filtre',
                        'filters'       => 'Filtreler',
                        'select'        => 'Seç',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'Tüm Boru Hatları',
                'create-new-pipeline' => 'Yeni Boru Hattı Oluştur',
            ],
        ],

        'create' => [
            'title'          => 'Lead Oluştur',
            'save-btn'       => 'Kaydet',
            'details'        => 'Detaylar',
            'details-info'   => 'Lead\'in Temel Bilgilerini Girin',
            'contact-person' => 'İletişim Kişisi',
            'contact-info'   => 'İletişim Kişisi Hakkında Bilgiler',
            'products'       => 'Ürünler',
            'products-info'  => 'Ürünler Hakkında Bilgiler',
        ],

        'edit' => [
            'title'          => 'Lead\'i Düzenle',
            'save-btn'       => 'Kaydet',
            'details'        => 'Detaylar',
            'details-info'   => 'Lead\'in Temel Bilgilerini Girin',
            'contact-person' => 'İletişim Kişisi',
            'contact-info'   => 'İletişim Kişisi Hakkında Bilgiler',
            'products'       => 'Ürünler',
            'products-info'  => 'Ürünler Hakkında Bilgiler',
        ],

        'common' => [
            'contact' => [
                'name'           => 'Ad',
                'email'          => 'E-posta',
                'contact-number' => 'İletişim Numarası',
                'organization'   => 'Kuruluş',
            ],

            'products' => [
                'product-name' => 'Ürün Adı',
                'quantity'     => 'Miktar',
                'price'        => 'Fiyat',
                'amount'       => 'Tutar',
                'action'       => 'Eylem',
                'add-more'     => 'Daha Fazla Ekle',
                'total'        => 'Toplam',
            ],
        ],

        'view' => [
            'title'       => 'Lead: :title',
            'rotten-days' => ':days Gün',

            'tabs' => [
                'description' => 'Açıklama',
                'products'    => 'Ürünler',
                'quotes'      => 'Teklifler',
            ],

            'attributes' => [
                'title' => 'Lead Hakkında',
            ],

            'quotes' => [
                'subject'         => 'Konu',
                'expired-at'      => 'Son Tarih',
                'sub-total'       => 'Ara Toplam',
                'discount'        => 'İndirim',
                'tax'             => 'Vergi',
                'adjustment'      => 'Düzeltme',
                'grand-total'     => 'Genel Toplam',
                'delete'          => 'Sil',
                'edit'            => 'Düzenle',
                'download'        => 'İndir',
                'destroy-success' => 'Teklif başarıyla silindi.',
                'empty-title'     => 'Teklif Bulunamadı',
                'empty-info'      => 'Bu Lead için Teklif Bulunamadı',
                'add-btn'         => 'Teklif Ekle',
            ],

            'products' => [
                'product-name' => 'Ürün Adı',
                'quantity'     => 'Miktar',
                'price'        => 'Fiyat',
                'amount'       => 'Tutar',
                'action'       => 'Eylem',
                'add-more'     => 'Daha Fazla Ekle',
                'total'        => 'Toplam',
                'empty-title'  => 'Ürün Bulunamadı',
                'empty-info'   => 'Bu Lead için Ürün Bulunamadı',
                'add-product'  => 'Ürün Ekle',
            ],

            'persons' => [
                'title'     => 'Kişiler Hakkında',
                'job-title' => ':job_title @ :organization',
            ],

            'stages' => [
                'won-lost'       => 'Kazandı/Kayıp',
                'won'            => 'Kazandı',
                'lost'           => 'Kayıp',
                'need-more-info' => 'Daha Fazla Bilgi Gerekiyor',
                'closed-at'      => 'Kapanış Tarihi',
                'won-value'      => 'Kazanan Değer',
                'lost-reason'    => 'Kayıp Nedeni',
                'save-btn'       => 'Kaydet',
            ],

            'tags' => [
                'create-success'  => 'Etiket başarıyla oluşturuldu.',
                'destroy-success' => 'Etiket başarıyla silindi.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'         => 'Geri',
            'save-btn'     => 'Yapılandırmayı Kaydet',
            'save-success' => 'Yapılandırma Başarıyla Kaydedildi.',
            'search'       => 'Ara',
            'title'        => 'Yapılandırma',

            'general'  => [
                'title'   => 'Genel',
                'info'    => 'Genel Yapılandırma',

                'general' => [
                    'title'           => 'Genel',
                    'info'            => 'Genel ayarlarınızı buradan güncelleyebilirsiniz.',
                    'locale-settings' => [
                        'title'       => 'Yerel Ayarlar',
                        'title-info'  => 'Kullanıcı arayüzünde kullanılan dili tanımlar, örneğin Arapça (ar), İngilizce (en), İspanyolca (es), Farsça (fa) ve Türkçe (tr).',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'Gösterge Paneli',

            'revenue' => [
                'lost-revenue' => 'Kayıp Gelir',
                'won-revenue'  => 'Kazançlı Gelir',
            ],

            'over-all' => [
                'average-lead-value'    => 'Ortalama Lead Değeri',
                'total-leads'           => 'Toplam Lead',
                'average-leads-per-day' => 'Günlük Ortalama Lead',
                'total-quotations'      => 'Toplam Teklif',
                'total-persons'         => 'Toplam Kişi',
                'total-organizations'   => 'Toplam Organizasyon',
            ],

            'total-leads' => [
                'title' => 'Leadler',
                'total' => 'Toplam Lead',
                'won'   => 'Kazanan Leadler',
                'lost'  => 'Kayıp Leadler',
            ],

            'revenue-by-sources' => [
                'title'       => 'Kaynaklara Göre Gelir',
                'empty-title' => 'Veri Bulunamadı',
                'empty-info'  => 'Seçilen aralık için veri bulunamadı',
            ],

            'revenue-by-types' => [
                'title'       => 'Türlere Göre Gelir',
                'empty-title' => 'Veri Bulunamadı',
                'empty-info'  => 'Seçilen aralık için veri bulunamadı',
            ],

            'top-selling-products' => [
                'title'       => 'En Çok Satılan Ürünler',
                'empty-title' => 'Ürün Bulunamadı',
                'empty-info'  => 'Seçilen aralık için ürün bulunamadı',
            ],

            'top-persons' => [
                'title'       => 'En İyi Kişiler',
                'empty-title' => 'Kişi Bulunamadı',
                'empty-info'  => 'Seçilen aralık için kişi bulunamadı',
            ],

            'open-leads-by-states' => [
                'title'       => 'Durumlara Göre Açık Leadler',
                'empty-title' => 'Veri Bulunamadı',
                'empty-info'  => 'Seçilen aralık için veri bulunamadı',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'Sürüm: :version',
        'dashboard'            => 'Gösterge Paneli',
        'leads'                => 'Leadler',
        'quotes'               => 'Teklifler',
        'quote'                => 'Teklif',
        'mail'                 => [
            'title'   => 'Mail',
            'compose' => 'Yeni Mesaj',
            'inbox'   => 'Gelen Kutusu',
            'draft'   => 'Taslak',
            'outbox'  => 'Gönderilenler',
            'sent'    => 'Gönderildi',
            'trash'   => 'Çöp Kutusu',
            'setting' => 'Ayar',
        ],
        'activities'           => 'Aktiviteler',
        'contacts'             => 'İletişim',
        'persons'              => 'Kişiler',
        'person'               => 'Kişi',
        'organizations'        => 'Organizasyonlar',
        'organization'         => 'Organizasyon',
        'products'             => 'Ürünler',
        'product'              => 'Ürün',
        'settings'             => 'Ayarlar',
        'user'                 => 'Kullanıcı',
        'user-info'            => 'CRM’de tüm kullanıcılarınızı ve yetkilerini yönetin, ne yapmalarına izin verildiğini belirleyin.',
        'groups'               => 'Gruplar',
        'groups-info'          => 'CRM’den grupları ekleyin, düzenleyin veya silin',
        'roles'                => 'Roller',
        'role'                 => 'Rol',
        'roles-info'           => 'CRM’den rolleri ekleyin, düzenleyin veya silin',
        'users'                => 'Kullanıcılar',
        'users-info'           => 'CRM’den kullanıcıları ekleyin, düzenleyin veya silin',
        'lead'                 => 'Lead',
        'lead-info'            => 'CRM’de tüm lead ayarlarınızı yönetin',
        'pipelines'            => 'Pipeline’lar',
        'pipelines-info'       => 'CRM’den pipeline’ları ekleyin, düzenleyin veya silin',
        'sources'              => 'Kaynaklar',
        'sources-info'         => 'CRM’den kaynakları ekleyin, düzenleyin veya silin',
        'types'                => 'Türler',
        'types-info'           => 'CRM’den türleri ekleyin, düzenleyin veya silin',
        'automation'           => 'Otomasyon',
        'automation-info'      => 'CRM’de tüm otomasyon ayarlarınızı yönetin',
        'attributes'           => 'Nitelikler',
        'attribute'            => 'Nitelik',
        'attributes-info'      => 'CRM’den nitelikleri ekleyin, düzenleyin veya silin',
        'email-templates'      => 'E-posta Şablonları',
        'email'                => 'E-posta',
        'email-templates-info' => 'CRM’den e-posta şablonları ekleyin, düzenleyin veya silin',
        'events'               => 'Etkinlikler',
        'events-info'          => 'CRM üzerinden etkinlikleri ekleyin, düzenleyin veya silin',
        'campaigns'            => 'Kampanyalar',
        'campaigns-info'       => 'CRM üzerinden kampanyaları ekleyin, düzenleyin veya silin',
        'workflows'            => 'İş Akışları',
        'workflows-info'       => 'CRM’den iş akışlarını ekleyin, düzenleyin veya silin',
        'webhooks'             => 'Webhooklar',
        'webhooks-info'        => 'CRM’den webhookları ekleyin, düzenleyin veya silin',
        'other-settings'       => 'Diğer Ayarlar',
        'other-settings-info'  => 'CRM’de tüm ekstra ayarlarınızı yönetin',
        'tags'                 => 'Etiketler',
        'tags-info'            => 'CRM’den etiketleri ekleyin, düzenleyin veya silin',
        'my-account'           => 'Hesabım',
        'sign-out'             => 'Çıkış Yap',
        'back'                 => 'Geri',
        'name'                 => 'Ad',
        'configuration'        => 'Yapılandırma',
        'activities'           => 'Aktiviteler',
        'howdy'                => 'Merhaba!',
        'warehouses'           => 'Depolar',
        'warehouse'            => 'Depo',
        'warehouses-info'      => 'CRM’den depoları ekleyin, düzenleyin veya silin',
    ],

    'user' => [
        'account' => [
            'name'                  => 'İsim',
            'email'                 => 'E-posta',
            'password'              => 'Şifre',
            'my_account'            => 'Hesabım',
            'update_details'        => 'Bilgileri Güncelle',
            'current_password'      => 'Mevcut şifre',
            'confirm_password'      => 'Şifreyi onayla',
            'password-match'        => 'Mevcut şifre eşleşmiyor.',
            'account-save'          => 'Hesap değişiklikleri başarıyla kaydedildi.',
            'permission-denied'     => 'İzin Reddedildi',
            'remove-image'          => 'Görseli Kaldır',
            'upload_image_pix'      => 'Profil Görseli Yükle (100px x 100px)',
            'upload_image_format'   => 'PNG veya JPG Formatında',
            'image_upload_message'  => 'Sadece görseller (.jpeg, .jpg, .png, ..) izinlidir.',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'Sevgili :name',
            'cheers' => 'Saygılar,</br>:app_name Ekibi',

            'user' => [
                'dear'           => 'Sevgili :username',
                'create-subject' => 'Bir üye olarak eklendiniz.',
                'create-body'    => 'Tebrikler! Artık ekibimizin bir üyesisiniz.',

                'forget-password' => [
                    'subject'           => 'Müşteri Şifre Sıfırlama',
                    'dear'              => 'Sevgili :username',
                    'reset-password'    => 'Şifreyi Sıfırla',
                    'info'              => 'Bu e-postayı almanız, hesabınız için bir şifre sıfırlama talebi aldığımız anlamına gelir',
                    'final-summary'     => 'Eğer şifre sıfırlama talebinde bulunmadıysanız, herhangi bir ek işlem yapmanıza gerek yoktur',
                    'thanks'            => 'Teşekkürler!',
                ],
            ],
        ],
    ],

    'errors' => [
        'dashboard' => 'Kontrol Paneli',
        'go-back'   => 'Geri Dön',
        'support'   => 'Sorun devam ederse, yardım için bize <a href=":link" class=":class">:email</a> adresinden ulaşın.',

        '404' => [
            'description' => 'Oops! Aradığınız sayfa tatilde. Aradığınız şeyi bulamadık gibi görünüyor.',
            'title'       => '404 Sayfa Bulunamadı',
        ],

        '401' => [
            'description' => 'Oops! Bu sayfaya erişim izniniz yok gibi görünüyor. Gerekli yetkilere sahip değilsiniz.',
            'title'       => '401 Yetkisiz',
        ],

        '403' => [
            'description' => 'Oops! Bu sayfa erişime kapalı. Bu içeriği görüntülemek için gerekli izinlere sahip değilsiniz gibi görünüyor.',
            'title'       => '403 Yasak',
        ],

        '500' => [
            'description' => 'Oops! Bir şeyler ters gitti. Aradığınız sayfa yüklenirken sorun yaşıyoruz gibi görünüyor.',
            'title'       => '500 Sunucu Hatası',
        ],

        '503' => [
            'description' => 'Oops! Görünüşe göre geçici bir bakım nedeniyle kapalıyız. Lütfen kısa süre sonra tekrar kontrol edin.',
            'title'       => '503 Hizmet Kullanılamıyor',
        ],
    ],
];
