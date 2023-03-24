<?php

return [
    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai banyak versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted'        => ':attribute harus diterima.',
    'active_url'      => ':attribute bukan URL yang valid.',
    'after'           => ':attribute harus berisi tanggal setelah :date.',
    'after_or_equal'  => ':attribute harus berisi tanggal setelah atau sama dengan :date.',
    'alpha'           => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'      => ':attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num'       => ':attribute hanya boleh berisi huruf dan angka.',
    'array'           => ':attribute harus berisi sebuah array.',
    'before'          => ':attribute harus berisi tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berisi tanggal sebelum atau sama dengan :date.',
    'between'         => [
        'numeric' => ':attribute harus bernilai antara :min sampai :max.',
        'file'    => ':attribute harus berukuran antara :min sampai :max kilobita.',
        'string'  => ':attribute harus berisi antara :min sampai :max karakter.',
        'array'   => ':attribute harus memiliki :min sampai :max anggota.',
    ],
    'boolean'        => ':attribute harus bernilai true atau false',
    'confirmed'      => 'Konfirmasi :attribute tidak cocok.',
    'date'           => ':attribute bukan tanggal yang valid.',
    'date_equals'    => ':attribute harus berisi tanggal yang sama dengan :date.',
    'date_format'    => ':attribute tidak cocok dengan format :format.',
    'different'      => ':attribute dan :other harus berbeda.',
    'digits'         => ':attribute harus terdiri dari :digits angka.',
    'digits_between' => ':attribute harus terdiri dari :min sampai :max angka.',
    'dimensions'     => ':attribute tidak memiliki dimensi gambar yang valid.',
    'distinct'       => ':attribute memiliki nilai yang duplikat.',
    'email'          => ':attribute harus berupa alamat surel yang valid.',
    'ends_with'      => ':attribute harus diakhiri salah satu dari berikut: :values',
    'exists'         => ':attribute yang dipilih tidak valid.',
    'file'           => ':attribute harus berupa sebuah berkas.',
    'filled'         => ':attribute harus memiliki nilai.',
    'gt'             => [
        'numeric' => ':attribute harus bernilai lebih besar dari :value.',
        'file'    => ':attribute harus berukuran lebih besar dari :value kilobita.',
        'string'  => ':attribute harus berisi lebih besar dari :value karakter.',
        'array'   => ':attribute harus memiliki lebih dari :value anggota.',
    ],
    'gte' => [
        'numeric' => ':attribute harus bernilai lebih besar dari atau sama dengan :value.',
        'file'    => ':attribute harus berukuran lebih besar dari atau sama dengan :value kilobita.',
        'string'  => ':attribute harus berisi lebih besar dari atau sama dengan :value karakter.',
        'array'   => ':attribute harus terdiri dari :value anggota atau lebih.',
    ],
    'image'    => ':attribute harus berupa gambar.',
    'in'       => ':attribute yang dipilih tidak valid.',
    'in_array' => ':attribute tidak ada di dalam :other.',
    'integer'  => ':attribute harus berupa bilangan bulat.',
    'ip'       => ':attribute harus berupa alamat IP yang valid.',
    'ipv4'     => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'     => ':attribute harus berupa alamat IPv6 yang valid.',
    'json'     => ':attribute harus berupa JSON string yang valid.',
    'lt'       => [
        'numeric' => ':attribute harus bernilai kurang dari :value.',
        'file'    => ':attribute harus berukuran kurang dari :value kilobita.',
        'string'  => ':attribute harus berisi kurang dari :value karakter.',
        'array'   => ':attribute harus memiliki kurang dari :value anggota.',
    ],
    'lte' => [
        'numeric' => ':attribute harus bernilai kurang dari atau sama dengan :value.',
        'file'    => ':attribute harus berukuran kurang dari atau sama dengan :value kilobita.',
        'string'  => ':attribute harus berisi kurang dari atau sama dengan :value karakter.',
        'array'   => ':attribute harus tidak lebih dari :value anggota.',
    ],
    'max' => [
        'numeric' => ':attribute maskimal bernilai :max.',
        // 'file'    => ':attribute maksimal berukuran :max kilobita.',
        'file'    => 'File maksimal berukuran :max kilobita.',
        'string'  => ':attribute maskimal berisi :max karakter.',
        'array'   => ':attribute maksimal terdiri dari :max anggota.',
    ],
    'mimes'     => ':attribute harus berupa berkas berjenis: :values.',
    'mimetypes' => ':attribute harus berupa berkas berjenis: :values.',
    'min'       => [
        'numeric' => ':attribute minimal bernilai :min.',
        'file'    => ':attribute minimal berukuran :min kilobita.',
        'string'  => ':attribute minimal berisi :min karakter.',
        'array'   => ':attribute minimal terdiri dari :min anggota.',
    ],
    'not_in'               => ':attribute yang dipilih tidak valid.',
    'not_regex'            => 'Format :attribute tidak valid.',
    'numeric'              => ':attribute harus berupa angka.',
    'password'             => 'Kata sandi salah.',
    'present'              => ':attribute wajib ada.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => ':attribute wajib diisi.',
    'required_if'          => ':attribute wajib diisi bila :other adalah :value.',
    'required_unless'      => ':attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => ':attribute wajib diisi bila terdapat :values.',
    'required_with_all'    => ':attribute wajib diisi bila terdapat :values.',
    'required_without'     => ':attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => ':attribute wajib diisi bila sama sekali tidak terdapat :values.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':attribute harus berukuran :size.',
        'file'    => ':attribute harus berukuran :size kilobyte.',
        'string'  => ':attribute harus berukuran :size karakter.',
        'array'   => ':attribute harus mengandung :size anggota.',
    ],
    'starts_with' => ':attribute harus diawali salah satu dari berikut: :values',
    'string'      => ':attribute harus berupa string.',
    'timezone'    => ':attribute harus berisi zona waktu yang valid.',
    'unique'      => ':attribute sudah ada sebelumnya.',
    'uploaded'    => ':attribute gagal diunggah.',
    'url'         => 'Format :attribute tidak valid.',
    'uuid'        => ':attribute harus merupakan UUID yang valid.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi untuk atribut sesuai keinginan dengan
    | menggunakan konvensi "attribute.rule" dalam penamaan barisnya. Hal ini mempercepat
    | dalam menentukan baris bahasa kustom yang spesifik untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'g-recaptcha-response' => [
            'required'  => 'Harap pastikan bahwa Anda adalah manusia!'
        ],
        'document_1'    => [
            'uploaded'  => 'Dokumen 1 maksimal berukuran 2000 kilobita.'
        ],
        'document_2'    => [
            'uploaded'  => 'Dokumen 2 maksimal berukuran 2000 kilobita.'
        ],
        'logo'          => [
            'uploaded'  => 'Logo maksimal berukuran 1000 kilobita.'
        ],
        'image'         => [
            'uploaded'  => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'profile_image' => [
            'uploaded'  => 'Gambar profil maksimal berukuran 1000 kilobita.'
        ],
        'thumbnail_file' => [
            'uploaded'  => 'Ikon maksimal berukuran 1000 kilobita.'
        ],
        'slide_image'   => [
            'uploaded'  => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'link_images_old.*' => [
            'uploaded'      => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'link_images.*'     => [
            'uploaded'  => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'img'           => [
            'uploaded'  => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'ktp_image'     => [
            'uploaded'  => 'Gambar KTP maksimal berukuran 1000 kilobita.'
        ],
        'passport_image'    => [
            'uploaded'      => 'Gambar paspor maksimal berukuran 1000 kilobita.'
        ],
        'avatar'        => [
            'uploaded'  => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'background_img'    => [
            'uploaded'      => 'Gambar latar belakang maksimal berukuran 1000 kilobita.'
        ],
        'product_image'        => [
            'uploaded'  => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'payment_confirm_file'  => [
            'uploaded'  => 'Foto bukti pembayaran maksimal berukuran 1000 kilobita.'
        ],
        'attribute-name'    => [
            'rule-name'     => 'custom-message',
        ],
        'detail_images.*'   => [
            'uploaded'      => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'update_images.*'   => [
            'uploaded'      => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'detail_images_new.*.*' => [
            'uploaded'      => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
        'update_images_new.*.*' => [
            'uploaded'      => 'Gambar maksimal berukuran 1000 kilobita.'
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar 'placeholder' atribut dengan sesuatu
    | yang lebih mudah dimengerti oleh pembaca seperti "Alamat Surel" daripada "surel" saja.
    | Hal ini membantu kita dalam membuat pesan menjadi lebih ekspresif.
    |
    */

    'attributes' => [
        'user'                          => 'email/nomor telepon',
        'code'                          => 'Kode',
        'avatar'                        => 'Avatar',
        'email'                         => 'Alamat email',
        'profile_image'                 => 'Gambar profil',
        'phone_number'                  => 'Nomor telepon',
        'password_confirmation'         => 'Konfirmasi password',
        'referral_code'                 => 'Kode referal',
        'display_name'                  => 'Nama yang ditampilkan',
        'location'                      => 'Lokasi',
        'location_url'                  => 'URL lokasi',
        'bio'                           => 'Biografi',
        'theme_id'                      => 'Tema',
        'show_logo'                     => 'Tampilkan logo',
        'show_crown_logo'               => 'Tampilkan logo mahkota',
        'title'                         => 'Judul',
        'group_type'                    => 'Tipe grup',
        'type'                          => 'Tipe',
        'order_id'                      => 'Nomor urut',
        'link_value'                    => 'Kolom',
        'animation_id'                  => 'Animasi',
        'redirect'                      => 'Arahkan',
        'schedule'                      => 'Jadwal',
        'schedule_start'                => 'Jadwal mulai',
        'schedule_end'                  => 'Jadwal akhir',
        'thumbnail'                     => 'Ikon',
        'button_color'                  => 'Warna tombol',
        'button_text_color'             => 'Warna teks tombol',
        'button_border_color'           => 'Warna garis',
        'thumbnail_file'                => 'Ikon',
        'date_start'                    => 'Tanggal mulai',
        'date_end'                      => 'Tanggal berakhir',
        'type_media'                    => 'Tipe Media',
        'ratio'                         => 'Rasio',
        'url_youtube'                   => 'URL Youtube',
        'url_image'                     => 'URL',
        'link_images'                   => 'Gambar',
        'link_images.*'                 => 'Gambar',
        'link_images_old'               => 'Gambar',
        'link_images_old.*'             => 'Gambar',
        'link_images_order_id'          => 'Urutan gambar',
        'link_images_order_id.*'        => 'Urutan gambar',
        'link_images_old_order_id'      => 'Urutan gambar',
        'link_images_old_order_id.*'    => 'Urutan gambar',
        'ktp_number'                    => 'Nomor KTP',
        'ktp_image'                     => 'Gambar KTP',
        'passport_number'               => 'Nomor paspor',
        'passport_image'                => 'Gambar paspor',
        'address'                       => 'Alamat',
        'name'                          => 'Nama',
        'travel_name'                   => 'Nama travel',
        'province_id'                   => 'Provinsi',
        'district_id'                   => 'Kecamatan',
        'city_id'                       => 'Kota',
        'village_id'                    => 'Kelurahan',
        'postal_code'                   => 'Kode POS',
        'lat'                           => 'Latitude',
        'lng'                           => 'Longitude',
        'payment_method'                => 'Metode pembayaran',
        'voucher'                       => 'Voucher',
        'background_color'              => 'Warna latar belakang',
        'text_color'                    => 'Warna teks',
        'background_img'                => 'Gambar latar belakang',
        'background_blur'               => 'Blur latar belakang',
        'background_opacity'            => 'Opacity latar belakang',
        'button_type'                   => 'Tipe tombol',
        'font'                          => 'Font',
        'type_subscription'             => 'Tipe berlangganan',
        'period_subscription'           => 'Periode berlangganan',
        'payment_confirm_file'          => 'Foto bukti pembayaran',
        'is_active'                     => 'Diaktifkan',
        'image'                         => 'Gambar',
        'images'                        => 'Gambar',
        'youtube_url'                   => 'URL Youtube',
        'funds_needed'                  => 'Dana yang dibutuhkan',
        'content'                       => 'Detail',
        'update_campaign'               => 'Perkembangan Donasi',
        'donations_collected'           => 'Dana yang terkumpul',
        'last_donation_acceptance'      => 'Penerimaan terakhir donasi',
        'due_date'                      => 'Batas tanggal terakhir',
        'thank_you_note'                => 'Ucapan Terima Kasih',
        'detail_images'                 => 'Gambar detail', 
        'detail_images.*'               => 'Gambar detail',  
        'detail_images_order_id'        => 'Urutan gambar',
        'detail_images_order_id.*'      => 'Urutan gambar',
        'update_images'                 => 'Gambar perkembangan',
        'update_images.*'               => 'Gambar perkembangan',  
        'update_images_order_id'        => 'Urutan gambar',
        'update_images_order_id.*'      => 'Urutan gambar',
        'detail_images_new'             => 'Gambar detail',
        'detail_images_new.*'           => 'Gambar detail',
        'detail_images_new_order_id'    => 'Urutan gambar',
        'detail_images_new_order_id.*'  => 'Urutan gambar',
        'update_images_new'             => 'Gambar perkembangan',
        'update_images_new.*'           => 'Gambar perkembangan',
        'update_images_new_order_id'    => 'Urutan gambar',
        'update_images_new_order_id.*'  => 'Urutan gambar',
        'with_comment'                  => 'Dengan komentar',
        'permanent_contribute'          => 'Donatur tetap',
        'comment'                       => 'Komentar',
        'full_name'                     => 'Nama lengkap',
        'contact'                       => 'Kontak',
        'full_name_detail'              => 'Nama lengkap',
        'nominal_detail'                => 'Nominal',
        'gender_detail'                 => 'Jenis kelamin',
        'phone_number_detail'           => 'Nomor telepon',
        'email_detail'                  => 'Alamat email',
        'domicile_detail'               => 'Domisili',
        'reminder_date'                 => 'Tanggal pengingat',
        'reminder'                      => 'Pengingat',
        'description'                   => 'Deskripsi',
        'is_anonim'                     => 'Anonim',
        'proof_of_payment'              => 'Bukti pembayaran',
        'auto_address'                  => 'Alamat GPS',
        'coordinates'                   => 'Koordinat',
        'document_1'                    => 'Dokumen 1',
        'document_2'                    => 'Dokumen 2',
        'api_key'                       => 'API Key',
        'anonim'                        => 'Anonim',
        'bank_list_id'                  => 'Bank',
        'facebook_pixel'                => 'Facebook Pixel',
        'google_analytics_id'           => 'Id Google Analytics',
        'account_name'                  => 'Nama Akun',
        'account_number'                => 'Nomor rekening',
        'nama_rekening'                 => 'Nama Rekening',
        'nomor_rekening'                => 'Nomor Rekening',
        'bank_type_id'                  => 'Bank',
        'nama_toko'                     => 'Nama Toko',
        'logo'                          => 'Logo',
        'alamat'                        => 'Alamat',
        'wa'                            => 'WA',
        'facebook'                      => 'Facebook',
        'instagram'                     => 'Instagram',
        'footer_message'                => 'Pesan Footer',
        'nama'                          => 'Nama',
        'category'                      => 'Kategori',
        'harga'                         => 'Harga',
        'berat'                         => 'Berat',
        'stock'                         => 'Stok',
        'image_dropify'                 => 'Gambar',
        'is_available'                  => 'Tersedia',
        'status'                        => 'Status',
        'user_bank_id'                  => 'Pembayaran',
        'status_pengiriman'             => 'Status Pengiriman',
        'resi'                          => 'Resi',
        'term'                          => 'Syarat dan ketentuan',
        'slide_image'                   => 'Gambar',
        'links'                         => 'Link',
        'links.*'                       => 'Link',
        'handphone'                     => 'Handphone',
        'catatan'                       => 'Catatan',
        'order_date'                    => 'Tanggal pemesanan',
        'order_time'                    => 'Waktu pemesanan',
        'identity_number'               => 'Nomor identitas',
        'identity_picture'              => 'Gambar identitas',
        'message'                       => 'Pesan',
    ],
];