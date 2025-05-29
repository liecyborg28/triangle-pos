<?php

return [

    /*
     *
     * Terjemahan yang dibagikan.
     *
     */
    'title' => 'Triangle POS',
    'next' => 'Langkah Berikutnya',
    'back' => 'Sebelumnya',
    'finish' => 'Pasang',
    'forms' => [
        'errorTitle' => 'Kesalahan berikut terjadi:',
    ],

    /*
     *
     * Terjemahan halaman beranda.
     *
     */
    'welcome' => [
        'templateTitle' => 'Selamat Datang',
        'title'   => 'Pasang Triangle POS',
        'message' => 'Wizard Instalasi dan Pengaturan yang Mudah.',
        'next'    => 'Periksa Persyaratan',
    ],

    /*
     *
     * Terjemahan halaman persyaratan.
     *
     */
    'requirements' => [
        'templateTitle' => 'Langkah 1 | Persyaratan Server',
        'title' => 'Persyaratan Server',
        'next'    => 'Periksa Izin',
    ],

    /*
     *
     * Terjemahan halaman izin.
     *
     */
    'permissions' => [
        'templateTitle' => 'Langkah 2 | Izin',
        'title' => 'Izin',
        'next' => 'Konfigurasi Lingkungan',
    ],

    /*
     *
     * Terjemahan halaman lingkungan.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan',
            'title' => 'Pengaturan Lingkungan',
            'desc' => 'Silakan pilih bagaimana Anda ingin mengkonfigurasi file <code>.env</code> aplikasi.',
            'wizard-button' => 'Pengaturan Wizard Formulir',
            'classic-button' => 'Editor Teks Klasik',
        ],
        'wizard' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan | Wizard Terpandu',
            'title' => 'Wizard Terpandu <code>.env</code>',
            'tabs' => [
                'environment' => 'Lingkungan',
                'database' => 'Basis Data',
                'application' => 'Aplikasi',
            ],
            'form' => [
                'name_required' => 'Nama lingkungan diperlukan.',
                'app_name_label' => 'Nama Aplikasi',
                'app_name_placeholder' => 'Nama Aplikasi',
                'app_environment_label' => 'Lingkungan Aplikasi',
                'app_environment_label_local' => 'Lokal',
                'app_environment_label_developement' => 'Pengembangan',
                'app_environment_label_qa' => 'QA',
                'app_environment_label_production' => 'Produksi',
                'app_environment_label_other' => 'Lainnya',
                'app_environment_placeholder_other' => 'Masukkan lingkungan Anda...',
                'app_debug_label' => 'Debug Aplikasi',
                'app_debug_label_true' => 'Ya',
                'app_debug_label_false' => 'Tidak',
                'app_log_level_label' => 'Tingkat Log Aplikasi',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => 'URL Aplikasi',
                'app_url_placeholder' => 'URL Aplikasi',
                'db_connection_failed' => 'Tidak dapat terhubung ke basis data.',
                'db_connection_label' => 'Koneksi Basis Data',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host Basis Data',
                'db_host_placeholder' => 'Host Basis Data',
                'db_port_label' => 'Port Basis Data',
                'db_port_placeholder' => 'Port Basis Data',
                'db_name_label' => 'Nama Basis Data',
                'db_name_placeholder' => 'Nama Basis Data',
                'db_username_label' => 'Nama Pengguna Basis Data',
                'db_username_placeholder' => 'Nama Pengguna Basis Data',
                'db_password_label' => 'Kata Sandi Basis Data',
                'db_password_placeholder' => 'Kata Sandi Basis Data',

                'app_tabs' => [
                    'more_info' => 'Informasi Lebih Lanjut',
                    'broadcasting_title' => 'Broadcasting, Cache, Sesi, &amp; Antrean',
                    'broadcasting_label' => 'Driver Broadcast',
                    'broadcasting_placeholder' => 'Driver Broadcast',
                    'cache_label' => 'Driver Cache',
                    'cache_placeholder' => 'Driver Cache',
                    'session_label' => 'Driver Sesi',
                    'session_placeholder' => 'Driver Sesi',
                    'queue_label' => 'Driver Antrean',
                    'queue_placeholder' => 'Driver Antrean',
                    'redis_label' => 'Driver Redis',
                    'redis_host' => 'Host Redis',
                    'redis_password' => 'Kata Sandi Redis',
                    'redis_port' => 'Port Redis',

                    'mail_label' => 'Email',
                    'mail_driver_label' => 'Driver Email',
                    'mail_driver_placeholder' => 'Driver Email',
                    'mail_host_label' => 'Host Email',
                    'mail_host_placeholder' => 'Host Email',
                    'mail_port_label' => 'Port Email',
                    'mail_port_placeholder' => 'Port Email',
                    'mail_username_label' => 'Nama Pengguna Email',
                    'mail_username_placeholder' => 'Nama Pengguna Email',
                    'mail_password_label' => 'Kata Sandi Email',
                    'mail_password_placeholder' => 'Kata Sandi Email',
                    'mail_encryption_label' => 'Enkripsi Email',
                    'mail_encryption_placeholder' => 'Enkripsi Email',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'ID Aplikasi Pusher',
                    'pusher_app_id_palceholder' => 'ID Aplikasi Pusher',
                    'pusher_app_key_label' => 'Kunci Aplikasi Pusher',
                    'pusher_app_key_palceholder' => 'Kunci Aplikasi Pusher',
                    'pusher_app_secret_label' => 'Rahasia Aplikasi Pusher',
                    'pusher_app_secret_palceholder' => 'Rahasia Aplikasi Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Atur Basis Data',
                    'setup_application' => 'Atur Aplikasi',
                    'install' => 'Pasang',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan | Editor Klasik',
            'title' => 'Editor Lingkungan Klasik',
            'save' => 'Simpan .env',
            'back' => 'Gunakan Wizard Formulir',
            'install' => 'Simpan dan Pasang',
        ],
        'success' => 'Pengaturan file .env Anda telah disimpan.',
        'errors' => 'Tidak dapat menyimpan file .env, Harap buat secara manual.',
    ],

    'install' => 'Pasang',

    /*
     *
     * Terjemahan log pemasangan.
     *
     */
    'installed' => [
        'success_log_message' => 'Instalasi Laravel berhasil DIPASANG pada ',
    ],

    /*
     *
     * Terjemahan halaman akhir.
     *
     */
    'final' => [
        'title' => 'Instalasi Selesai',
        'templateTitle' => 'Instalasi Selesai',
        'finished' => 'Aplikasi telah berhasil dipasang.',
        'migration' => 'Output Konsol Migrasi &amp; Seed:',
        'console' => 'Output Konsol Aplikasi:',
        'log' => 'Entri Log Instalasi:',
        'env' => 'File .env Akhir:',
        'exit' => 'Klik di sini untuk keluar',
    ],

    /*
     *
     * Terjemahan khusus pembaruan
     *
     */
    'updater' => [
        'title' => 'Pembaruan Laravel',

        'welcome' => [
            'title'   => 'Selamat Datang di Pembaru',
            'message' => 'Selamat datang di wizard pembaruan.',
        ],

        'overview' => [
            'title'   => 'Ringkasan',
            'message' => 'Ada 1 pembaruan.|Ada :number pembaruan.',
            'install_updates' => 'Pasang Pembaruan',
        ],

        'final' => [
            'title' => 'Selesai',
            'finished' => 'Basis data aplikasi berhasil diperbarui.',
            'exit' => 'Klik di sini untuk keluar',
        ],

        'log' => [
            'success_message' => 'Pembaruan Laravel berhasil DIPERBARUI pada ',
        ],
    ],
];
