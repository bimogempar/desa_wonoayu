@extends('layouts.cobalayout')
@section('title','Form Persyaratan')

@section('content')
<div class="container" style="margin-top: 100px">
    <h1>PERSYARATAN PENGURUSAN DOKUMEN PENTING DAN PERIZINAN MENDIRIKAN USAHA</h1>
    <h2>Persyratan Pengajuan e-KTP Baru</h2>
    <ul class="list-group">
    <li class="list-group-item">Telah Berusia 17 Tahun</li>
    <li class="list-group-item">Surat Pengantar Desa</li>
    <li class="list-group-item">Fotokopi KK</li>
    </ul>
    <h2>Persyratan Pengajuan Perubahan Data e-KTP</h2>
    <ul class="list-group">
    <li class="list-group-item">Surat Pengantar dari Desa</li>
    <li class="list-group-item">Melampirkan e-KTP yang Lama (ASLI)</li>
    <li class="list-group-item">Fotokopi KK Terbaru (KK yang Sudah Diperbarui)</li>
    </ul>
    <h2>Persyratan Pengajuan e-KTP Hilang</h2>
    <ul class="list-group">
    <li class="list-group-item">Surat Kehilangan dari Kepolisian</li>
    <li class="list-group-item">Fotokopi KK</li>
    <li class="list-group-item">Fotokopi KTP yang Hilang (Jika Ada)</li>
    </ul>
    <h2>Persyratan Pengajuan Kartu Keluarga</h2>
    <h3>Pengajuan KK Baru(Pecah/Pisah KK)</h3>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Formulir KK yang Sudah Distempel RT/RW dan Desa</li>
    <li class="list-group-item">Melampirkan KK yang Lama(ASLI)</li>
    <li class="list-group-item">Melampirkan Fotokopi Buku Nikah Bagi yang Statusnya "KAWIN"</li>
    </ul>
    <h2>Persyratan Pengajuan Kartu Keluarga</h2>
    <h3>Pengajuan KK Baru(Pindah Datang)</h3>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Formulir KK yang Sudah Distempel RT/RW dan Desa</li>
    <li class="list-group-item">Fotokopi Surat Nikah (Jika Sudah Menikah)</li>
    <li class="list-group-item">Surat Pindah Datang dari Tempat Asal</li>
    </ul>
    <h2>Persyratan Pengajuan Kartu Keluarga</h2>
    <h3>Penambahan Anggota Keluarga</h3>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Formulir KK yang Sudah Distempel RT/RW dan Desa</li>
    <li class="list-group-item">Melampirkan KK ASLI</li>
    <li class="list-group-item">Fotokopi Surat Kelahiran</li>
    <li class="list-group-item">Fotokopi Buku Nikah</li>
    </ul>
    <h2>Persyratan Pengajuan Kartu Keluarga</h2>
    <h3>Pengajuan KK Hilang</h3>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Formulir KK yang Sudah Distempel RT/RW dan Desa</li>
    <li class="list-group-item">Melampirkan Surat Kehilangan dari Kepolisian</li>
    <li class="list-group-item">Fotokopi KK yang Hilang (JIKA ADA)</li>
    </ul>
    <h2>Persyratan Pengajuan Kartu Keluarga</h2>
    <h3>Perubahan Data pada kk</h3>
    <ul class="list-group">
    <li class="list-group-item">Membawa KK Asli</li>
    <li class="list-group-item">Melampirkan Surat Kehilangan dari Kepolisian</li>
    <li class="list-group-item">Lampiran Dokumen Pendukung Seperti : Akta Lahir, Surat Nikah, Ijazah, SK PNS/KARIP/SK TNI-POLRI, DLL</li>
    </ul>
    <h2>Persyratan Pengajuan Kartu Keluarga</h2>
    <h3>Pengurangan Anggota</h3>
    <h4>-Meninggal-</h4>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Formulir KK yang Sudah Distempel RT/RW dan Desa</li>
    <li class="list-group-item">Fotokopi AKta Kematian (Untuk yang Meninggal)</li>
    </ul>
    <h4>-Pindah Tempat-</h4>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Formulir KK yang Sudah Distempel RT/RW dan Desa</li>
    <li class="list-group-item">Melampirkan Surat Pindah</li>
    </ul>
    <h4>-Cerai-</h4>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Formulir KK yang Sudah Distempel RT/RW dan Desa</li>
    <li class="list-group-item">Fotokopi Akta Cerai</li>
    </ul>
    <h2>Persyratan Pengajuan Akta Kelahiran WNI</h2>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Form Akta Disertai Tanda Tangan Pelapor, Kepala Desa dan Saksi-Saksi</li>
    <li class="list-group-item">Surat Kelahiran Asli dari Penolong Kelahiran (Dokter/Bidan/Dukun)</li>
    <li class="list-group-item">Fotokopi Buku Nikah/Akta Perkawinan Orang Tua (Dilegalisir)</li>
    <li class="list-group-item">Fotokopi KK dan e-KTP Orang Tua</li>
    <li class="list-group-item">Surat Pernyataan Kebenaran Data</li>
    </ul>
    <h2>Persyratan Pengurusan Akta Kematian (WNI)</h2>
    <ul class="list-group">
    <li class="list-group-item">Mengisi Formulir Pelaporan Kematian (FORM F-2.28)</li>
    <li class="list-group-item">Surat Keterangan Kematian (FOMR F.2.29)</li>
    <li class="list-group-item">Mencamtumkan Identitas 2 Orang Tua Saksi Disertai Fotokopi KTP dan Tanda Tangan</li>
    <li class="list-group-item">Surat Keterangan Kematian Asli dari Rumah Sakit/Dokter/Surat Pernyataan Menininggal di Rumah</li>
    <li class="list-group-item">Fotokopi Kartu Keluarga dan KTP yang Bersangkutan (Jenazah)</li>
    <li class="list-group-item">Fotokopi KTP Pelapor</li>
    </ul>
    <h2>Persyaratan Pengurusan KIA</h2>
    <ul class="list-group">
    <li class="list-group-item">Usia 0-17 Tahun Kurang dari Satu Hari dan Belum Menikah</li>
    <li class="list-group-item">Berdomilisi di Kabupaten Malang</li>
    <li class="list-group-item">Mengisi Formulir KIA</li>
    <li class="list-group-item">Fotokopi Akta Kelahiran</li>
    <li class="list-group-item">Fotokopi KK Orangtua/Wali</li>
    <li class="list-group-item">Fotokopi e-KTP Kedua Orang Tua</li>
    <li class="list-group-item">Usia Dibawah 5 Tahun Tanpa Melampirkan Foto</li>
    <li class="list-group-item">Usia 5 Tahun Keatas Melampirkan 2 Lembar Foto Ukuran 3x4</li>
    <li class="list-group-item">Untuk Pengajuan KIA yang Hilang Dilampiri Surat Kehilangan Kepolisian</li>
    </ul>
    <h2>Persyaratan Pengajuan IUMK</h2>
    <ul class="list-group">
    <li class="list-group-item">Modal Kurang dari 200 juta</li>
    <li class="list-group-item">Surat Pernyataan Modal (bermaterai)</li>
    <li class="list-group-item">Fotokopi KTP Pemilik Usaha (1 lembar)</li>
    <li class="list-group-item">Fotokopi KK Pemilik Usaha (1 lembar)</li>
    <li class="list-group-item">Fotokopi NPWP (Nomor Pokok Wajib Pajak) Pemilik Usaha (1 lembar)</li>
    <li class="list-group-item">Pas Foto Pemilik Usaha Ukuran 4x6(2 lembar)</li>
    </ul>
    <h2>Persyaratan Pengajuan IMB</h2>
    <ul class="list-group">
    <li class="list-group-item">Fotokopi KTP</li>
    <li class="list-group-item">Surat Pernyataan Para Tetangga diketahui Kepala Desa/Lurah</li>
    <li class="list-group-item">Fotokopi Bukti Kepemilikan Tanah (Sertifikat/Akta Jual Beli/Petok D/Sewa Menyewa, DLL)</li>
    <li class="list-group-item">Fotokopi Pelunasan Pajak Bumi, dan Bangunan (PBB)</li>
    <li class="list-group-item">Surat Kuasa Apabila dalam Pengurusannya Diurus Orang Lain (Bukan Pemohon)</li>
    <li class="list-group-item">Fotokopi Izin Sempadan Sungai Apabila Bangunan Memanfaatkan Tanah Tepi Sungai</li>
    <li class="list-group-item">Gambar Bangunan Lengkap dengan Skala 1:100</li>
    </ul>
    <h2>Persyaratan Pengajuan SIUP</h2>
    <ul class="list-group">
    <li class="list-group-item">Modal Kurang dari 200 juta</li>
    <li class="list-group-item">Surat Pernyataan Modal (bermaterai)</li>
    <li class="list-group-item">Fotokopi KTP Pemilik Usaha (1 lembar)</li>
    <li class="list-group-item">Fotokopi KK Pemilik Usaha (1 lembar)</li>
    <li class="list-group-item">Fotokopi NPWP (Nomor Pokok Wajib Pajak) Pemilik Usaha (1 lembar)</li>
    <li class="list-group-item">Pas Foto Pemilik Usaha Ukuran 4x6(2 lembar)</li>
    </ul>
    <h2>Persyaratan Pengurusan Tanda Daftar Peternakan Rakyat (TDPR)</h2>
    <ul class="list-group">
    <li class="list-group-item">Fotokopi KTP dari Pengelola Usaha</li>
    <li class="list-group-item">Surat Pernyataan Tidak Keberatan dari Tetangga Diketahui Kepala Desa</li>
    <li class="list-group-item">Denah Lokasi Usaha</li>
    <li class="list-group-item">Surat Keterangan Usaha dari Desa</li>
    <li class="list-group-item">Pas Foto 4x6 Sebanyak 2 Lembar</li>
    <li class="list-group-item">Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL)</li>
    </ul>
    <h2>Persyaratan Pengurusan Izin Taman Bacaan Masyarakat</h2>
    <ul class="list-group">
    <li class="list-group-item">Surat Rekomendasi dari Kepala UPTD Dinas Pendidikan Kabupaten Malang Kecamatam Setempat</li>
    <li class="list-group-item">Berita Acara Pemeriksaan yang Ditandatangani oleh Petugas/Pemilik UPTD TK/SD dan PLS Dinas Pendidikan Kabupaten Malang</li>
    <li class="list-group-item">Surat Rekomendasi dari Pemerintah Setempat (Kepala Desa/Lurah)</li>
    <li class="list-group-item">Surat Pernyataan Kebenaran Data</li>
    <li class="list-group-item">Surat Keterangan Tentang Status Bangunan atau Tanah yang Digunakan</li>
    <li class="list-group-item">Daftar Pengelola (Minimal 2 Orang) yang Bertugas Sebagai Ketua dan Petugas Administrasi Serta Teknis</li>
    <li class="list-group-item">Daftar Sarana dan Fasilitas</li>
    <li class="list-group-item">Daftar Penyelenggara</li>
    <li class="list-group-item">Fotokopi KTP Pengelola</li>
    <li class="list-group-item">Fotokopi Pengelola Ukuran 3x4 sebanyak 3 lembar</li>
    </ul>
    <h2>Persyaratan Pengurusan Pusat Kegiatan Belajar Masyarakat (PKBM)</h2>
    <ul class="list-group">
    <li class="list-group-item">Surat Rekomendasi dari Kepala UPTD Dinas Pendidikan Kabupaten Malang Kecamatam Setempat</li>
    <li class="list-group-item">Berita Acara Pemeriksaan yang Ditandatangani oleh Petugas/Pemilik UPTD TK/SD dan PLS Dinas Pendidikan Kabupaten Malang</li>
    <li class="list-group-item">Surat Rekomendasi dari Pemerintah Setempat (Kepala Desa/Lurah)</li>
    <li class="list-group-item">Surat Pernyataan Kebenaran Data</li>
    <li class="list-group-item">Surat Keterangan Tentang Status Bangunan atau Tanah yang Digunakan</li>
    <li class="list-group-item">Daftar Pengelola (Minimal 2 Orang) yang Bertugas Sebagai Ketua dan Petugas Administrasi Serta Teknis</li>
    <li class="list-group-item">Daftar Sarana dan Fasilitas</li>
    <li class="list-group-item">Daftar Penyelenggara</li>
    <li class="list-group-item">Fotokopi KTP Pengelola</li>
    <li class="list-group-item">Fotokopi Pengelola Ukuran 3x4 sebanyak 3 lembar</li>
    </ul>
    <h2>Persyaratan Pengajuan Induk Kesenian</h2>
    <ul class="list-group">
    <li class="list-group-item">Fotokopi KTP Ketua (1 Lembar)</li>
    <li class="list-group-item">Fotokopi KK Ketua (1 Lembar)</li>
    <li class="list-group-item">Susunan Pengurus Organisasi Kesenian</li>
    <li class="list-group-item">Pas Foto Berwarna Ukuran 3x4 dan 4x6 (2 Lembar)</li>
    <li class="list-group-item">Data Peralatn atau Inventaris yang Dimiliki</li>
    </ul>
    <h2>Persyaratan Pengurusan Izin Tempat Parkir Insidentil</h2>
    <ul class="list-group">
    <li class="list-group-item">Surat Pernyataan Sanggup Mematuhi Segala Bentuk Peraturan yang Berlaku</li>
    <li class="list-group-item">Melampirkan Surat Pernyataan Kesanggupan Menyetorkan Hasil Pungutan Retribusi Parkir ke Pemerintah Daerah sesuai dengan Potensi yang Ada</li>
    <li class="list-group-item">Melampirkan Surat Ijin Penyelenggaran Kegiatan atau Even Tertentu dari Pemerintah desa/Kelurahan</li>
    <li class="list-group-item">Melampirkan Fotokopi (KTO) Pemohon</li>
    <li class="list-group-item">Melampirkan Skema Gambar Denah Rencana Lokasi Area Parkir</li>
    </ul>
    <h2>Persyaratan Pengurusan Izin Reklame Insidentil</h2>
    <ul class="list-group">
    <li class="list-group-item">Fotokopi (KTP)</li>
    <li class="list-group-item">Fotokopi NPWP</li>
    <li class="list-group-item">Surat Kuasa Apabila Pengajuan Permohomam Dikuasakan kepada Orang Lain</li>
    <li class="list-group-item">Contoh Design Reklame yang Akan Diizinkan</li>
    </ul>
    <h2>Persyaratan Pengurusan Izin Pendirian Lembaga Kursus dan Pelatihan</h2>
    <ul class="list-group">
    <li class="list-group-item">Mengajukan Proposal Penyelenggaraan Kursus dan Pelatihan dengan Memuat</li>
    <li class="list-group-item">a. Identitas Lembaga Kursus dan Pelatihan</li>
    <li class="list-group-item">b. Nama Program Kursus dan Pelatihan yang Akan Diselenggarakan</li>
    <li class="list-group-item">c. Pendidik dan Kompetensi yang Dimiliki</li>
    <li class="list-group-item">d. Daftar Susunan Pengelola Program Kursus dan Pelatihan</li>
    <li class="list-group-item">e. Susunan Organisasi Lembaga Kursus dan Pelatihan</li>
    <li class="list-group-item">f. Sarana Prasarana Praktek yang Dimiliki dan Relevan</li>
    <li class="list-group-item">g. Kurikulum dan Jadwal Pembelajaran</li>
    <li class="list-group-item">h. Sasaran Peserta Didik</li>
    <li class="list-group-item">i. Surat Keterangan Sumber Pendanaan </li>
    <li class="list-group-item">j. Uji Kompetensi yang Akan Diikuti </li>
    <li class="list-group-item">Fotokopi KTP dan Pas Foto Pemohon Berwarna Ukuran 3x4 Sebanyak 2 Lembar</li>
    <li class="list-group-item">Akta Pendirian Yayasan/Badan dari Notaris Bagi yang Berbadan Hukum</li>
    <li class="list-group-item">Izin Mendirikan Bangunan (IMB)/Surat Keterangan Status Kepemilikan Tanah</li>
    <li class="list-group-item">HO/Surat Tidak Keberatan Para Tetangga</li>
    <li class="list-group-item">Berita Acara Pemeriksaan yang Ditandatangani oleh Penilik/PLS dan Diketahui oleh Kepala UPTD Dinas Kependidikan Kabupaten Malang Kecamatan Setempat</li>
    <li class="list-group-item">Rekomendasi dari Kepala UPTD Dinas Pendidikan Kabupaten Malang</li>
    <li class="list-group-item">Surat Keterangan Domisili Mengetahui Desa/Kelurahan</li>
    <li class="list-group-item">Surat Pernyataan Kebenaran Data</li>
    </ul>
    <h2>Persyaratan Pengurusan Izin Pendirian Taman Penitipan Anak</h2>
    <ul class="list-group">
    <li class="list-group-item">Mengajukan Proposal Penyelenggaraan TPA dengan Memuat</li>
    <li class="list-group-item">a. Identitas TPA</li>
    <li class="list-group-item">b. Nama Program TPA yang Akan Diselenggarakan</li>
    <li class="list-group-item">c. Pendidik dan Kompetensi yang Dimiliki</li>
    <li class="list-group-item">d. Daftar Susunan Pengelola Program TPA</li>
    <li class="list-group-item">e. Susunan Organisasi TPA</li>
    <li class="list-group-item">f. Sarana Prasarana Praktek yang Dimiliki dan Relevan</li>
    <li class="list-group-item">g. Kurikulum dan Jadwal Pembelajaran</li>
    <li class="list-group-item">h. Sasaran Peserta Didik</li>
    <li class="list-group-item">i. Surat Keterangan Sumber Pendanaan </li>
    <li class="list-group-item">j. Uji Kompetensi yang Akan Diikuti </li>
    <li class="list-group-item">Fotokopi KTP dan Pas Foto Pemohon Berwarna Ukuran 3x4 Sebanyak 2 Lembar</li>
    <li class="list-group-item">Akta Pendirian Yayasan/Badan dari Notaris Bagi yang Berbadan Hukum</li>
    <li class="list-group-item">Izin Mendirikan Bangunan (IMB)/Surat Keterangan Status Kepemilikan Tanah</li>
    <li class="list-group-item">HO/Surat Tidak Keberatan Para Tetangga</li>
    <li class="list-group-item">Berita Acara Pemeriksaan yang Ditandatangani oleh Penilik/PLS dan Diketahui oleh Kepala UPTD Dinas Kependidikan Kabupaten Malang Kecamatan Setempat</li>
    <li class="list-group-item">Rekomendasi dari Kepala UPTD Dinas Pendidikan Kabupaten Malang</li>
    <li class="list-group-item">Surat Keterangan Domisili Mengetahui Desa/Kelurahan</li>
    <li class="list-group-item">Surat Pernyataan Kebenaran Data</li>
    <li class="list-group-item">Denah Lokasi</li>
    </ul>
</div>
@endsection
