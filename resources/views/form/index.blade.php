<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Siswa PPKD JAKARTA PUSAT</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('form/dist/style.css') }}">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            /* Adjust the spacing as needed */
        }

        .logo {
            width: 100px;
            /* Adjust size as needed */
            height: auto;
            margin-right: 15px;
            /* Space between logo and text */
        }

        .training-center {
            font-size: 30px;
            /* Adjust font size as needed */
            color: #333;
            /* Adjust color as needed */
        }
    </style>

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="demo-page">
        <div class="demo-page-navigation">
            <nav>
                <ul>
                    <li>
                        <a href="#intro">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-github">
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                            </svg>
                            Information</a>
                    </li>
                    <li>
                        <a href="#data-peserta">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-align-justify">
                                <line x1="21" y1="10" x2="3" y2="10" />
                                <line x1="21" y1="6" x2="3" y2="6" />
                                <line x1="21" y1="14" x2="3" y2="14" />
                                <line x1="21" y1="18" x2="3" y2="18" />
                            </svg>
                            Data Peserta</a>
                    </li>
                    <li>
                        <a href="#icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-feather">
                                <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z" />
                                <line x1="16" y1="8" x2="2" y2="22" />
                                <line x1="17.5" y1="15" x2="9" y2="15" />
                            </svg>
                            Kontak</a>
                    </li>
                    <li>
                        <a href="#checkbox-and-radio">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-check-square">
                                <polyline points="9 11 12 14 22 4" />
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                            </svg>
                            Pemilihan Jurusan</a>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="demo-page-content">
            <section>
                <div class="href-target" id="intro"></div>

                <div class="header">
                    <img src="{{ asset('login/img/ppkd.png') }}" alt="Logo" class="logo">
                    <span class="training-center">Pusat Pelatihan Kerja Daerah Jakarta Pusat</span>
                </div>
                <span class="description">
                    Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat membuka kembali pelatihan kerja untuk meningkatkan
                    kompetensi warga DKI Jakarta agar mampu bersaing di dunia kerja.
                    Adapun Pelatihan yang diselenggarakan adalah : </span>
                <ul>
                    <li>Operator Komputer</li>
                    <li>Bahasa Inggris</li>
                    <li>Desain Grafis</li>
                    <li>Tata Boga</li>
                    <li>Tata Busana</li>
                    <li>Tata Graha</li>
                    <li>Teknik Pendingin</li>
                    <li>Teknik Komputer</li>
                    <li>Otomotif Sepeda Motor</li>
                    <li>Jaringan Komputer</li>
                    <li>Barista</li>
                    <li>Bahasa Korea</li>
                    <li>Make Up Artist</li>
                    <li>Multimedia - Video Editor</li>
                    <li>Content Creator</li>
                    <li>Web Programming</li>
                </ul>
                <br>
                <span>
                    Setelah mendaftar, pastikan syarat pendaftaran berikut sudah disiapkan:
                </span>
                <ul>
                    <li>Fotocopy KTP DKI Jakarta</li>
                    <li>Fotocopy Kartu Keluarga</li>
                    <li>Fotocopy ijazah terakhir</li>
                    <li>Fotocopy Pas foto 3 x 4 (latar belakang merah)</li>
                    <li>Fotocopy Sertifikat Vaksin Covid-19</li>
                    <li>Surat Keterangan Domisili DKI Jakarta bagi KTP Luar DKI Jakarta</li>
                </ul>
                <br>
                <span>
                    * Semua persyaratan tersebut dipersiapkan dan dikumpulkan ketika anda lolos tahap seleksi <br> <br>
                    Waktu pelatihan: Daftar Segera <br>
                    Hari pelatihan: Senin - Jumat <br>
                    Pukul: 08.00 - 15.00 WIB <br><br>
                    *Keputusan hasil seleksi berlaku mutlak dan tidak bisa diganggu gugat.
                </span>
            </section>

            <section>
                <div class="href-target" id="data-peserta"></div>
                <h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-align-justify">
                        <line x1="21" y1="10" x2="3" y2="10" />
                        <line x1="21" y1="6" x2="3" y2="6" />
                        <line x1="21" y1="14" x2="3" y2="14" />
                        <line x1="21" y1="18" x2="3" y2="18" />
                    </svg>
                    Data Peserta
                </h1>
                <p>Silahkan isi data diri anda:</p>
                <form action="{{-- route('experience.store') --}}" method="POST">
                    @csrf
                    <div class="nice-form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" placeholder="Your name" value="" />
                    </div>

                    <div class="nice-form-group">
                        <label>NIK</label>
                        <input type="number" placeholder="NIK" value="" />
                    </div>

                    <div class="nice-form-group">
                        <label>No. Kartu Keluarga</label>
                        <input type="number" placeholder="No Kartu Keluarga" value="" />
                    </div>

                    <div class="nice-form-group">
                        <label>Jenis Kelamin</label>
                        <select>
                            <option>Pilih Jenis Kelamin</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                    <div class="nice-form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" placeholder="Kota Lahir" value="" />
                    </div>

                    <div class="nice-form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" value="" />
                    </div>

                    <div class="nice-form-group">
                        <label>Pendidikan Terakhir</label>
                        <select>
                            <option>Pilih Pendidikan Terakhir</option>
                            <option>S-1</option>
                            <option>D-4</option>
                            <option>D-3</option>
                            <option>SMA/SMK</option>
                            <option>SMP</option>
                        </select>
                    </div>

                    <div class="nice-form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" placeholder="Nama Sekolah" value="" />
                    </div>

                    <div class="nice-form-group">
                        <label>Aktivitas Saat Ini</label>
                        <textarea rows="5" placeholder="Ceritakan Aktvitasmu"></textarea>
                    </div>
            </section>

            <section>
                <div class="href-target" id="icons"></div>
                <h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-feather">
                        <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z" />
                        <line x1="16" y1="8" x2="2" y2="22" />
                        <line x1="17.5" y1="15" x2="9" y2="15" />
                    </svg>
                    Kontak
                </h1>
                <p>
                    Silahkan isi Data Kontak anda:
                </p>

                <div class="nice-form-group">
                    <label>Phonenumber</label>
                    <input type="tel" placeholder="Your phonenumber" value="" class="icon-right" />
                </div>

                <div class="nice-form-group">
                    <label>Email</label>
                    <input type="email" placeholder="Your email" value="" class="icon-right" />
                </div>
            </section>

            <section>
                <div class="href-target" id="checkbox-and-radio"></div>
                <h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-check-square">
                        <polyline points="9 11 12 14 22 4" />
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                    </svg>
                    Pemilihan Kejuruan
                </h1>
                <p>
                    Silahkan pilih kejuruan yang anda inginkan:
                </p>

                <div class="nice-form-group">
                    <label>Anda mengikuti Angkatan Gelombang</label>
                    <input type="text" disabled placeholder="Your name" value="" />
                </div>

                <div class="nice-form-group">
                    <label>Pilih Kejuruan</label>
                    <select>
                        <option>Pilih Kejuruan Anda</option>
                        <option>Web Programming</option>
                        <option>Desain Grafis</option>
                        <option>Tata Boga</option>
                        <option>Barista</option>
                        <option>Teknik Komputer</option>
                    </select>
                </div>

                <details>
                    <summary>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </summary>
                </details>
            </section>
            <footer>PPKD-Jakarta-Pusat</footer>
        </main>
    </div>
    <!-- partial -->

</body>

</html>
