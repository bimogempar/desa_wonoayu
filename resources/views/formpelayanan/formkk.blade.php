@extends('layouts.cobalayout')
@section('title','Form KK')

@section('content')
<div class="container" style="margin-top: 100px">
    <h1>FORMULIR ISIAN KARTU KELUARGA</h1>
    <form>
        <h2>Data Kepala Keluarga</h2>
        <div class="form-group">
            <label for="inputAddress">Nama Lengkap</label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="form-group">
            <label for="inputAddress">Alamat</label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">RT</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">RW</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Jumlah Anggota Keluarga</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Telepon</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>
        </div>
        <h2> Data Keluarga </h2>
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="inputEmail4">Nama Lengkap</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-2">
                <label for="inputPassword4">Gelar</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Nomor KTP/NOPEN</label>
            <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Alamat Sebelumnya</label>
            <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Nomor Paspor</label>
                <input type="text" class="form-control" id="Nomor Paspor">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Tanggal Berakhir Paspor</label>
                <input type="text" class="form-control" id="Tanggal Berakhir Paspor">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">Jenis Kelamin</label>
                <select id="inputState" class="form-control">
                    <option selected>Jenis Kelamin</option>
                    <option>01. Laki-Laki</option>
                    <option>02. Perempuan</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Tempat Lahir</label>
                <input type="text" class="form-control" id="Tempat Lahir">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Tanggal/Bulan/Tahun Lahir</label>
                <input type="date" class="form-control" id="Tanggal/Bulan/Tahun Lahir">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Umur</label>
            <input type="text" class="form-control" id="umur">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Akta Lahir/Surat Lahir</label>
                <input type="text" class="form-control" id="Akta Lahir/Surat Lahir">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Nomor Akta Kelahiran</label>
                <input type="text" class="form-control" id="Nomor Akta Kelahiran">
            </div>
        </div>
        <div class="form-group">
            <label for="inputCity">Golongan Darah</label>
            <select id="inputState" class="form-control">
                <option selected>Golongan Darah</option>
                <option>01. A</option>
                <option>02. B</option>
                <option>03. AB</option>
                <option>04. 0</option>
                <option>05. A+</option>
                <option>06. B+</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Agama atau Kepercayaan terhadap Tuhan YME</label>
                <input type="text" class="form-control" id="Agamar">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Kepercayaan terhadap Tuhan YME</label>
                <input type="text" class="form-control" id="Kepercayaan">
            </div>
        </div>
        <div class="form-group">
            <label for="statuskawin">Status Perkawinan</label>
            <select id="statuskawin" class="form-control">
                <option selected>Status Perkawinan</option>
                <option>01. Belum Kawin</option>
                <option>02. Kawin</option>
                <option>03. Cerai Hidup</option>
                <option>04. Cerai Mati</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">Akta Perkawinan/Buku Nikah</label>
                <input type="text" class="form-control" id="Akta Perkawinan/Buku Nikah">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Nomor Akta Perkawinan/Buku Nikah</label>
                <input type="text" class="form-control" id="Akta Perkawinan/Buku Nikah">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Tanggal Perkawinan</label>
                <input type="date" class="form-control" id="Akta Perkawinan/Buku Nikah">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">Akta Cerai/Surat Cerai</label>
                <input type="text" class="form-control" id="Akta Cerai/Surat Cerai">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Nomor Akta Cerai/Surat Cerai</label>
                <input type="text" class="form-control" id="Akta Cerai/Surat Cerai">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Tanggal Perceraian</label>
                <input type="date" class="form-control" id="Akta Cerai/Surat Cerai">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="status">Status Hubungan dalam Keluarga</label>
                <select id="status" class="form-control">
                    <option selected>Status Hubungan dalam Keluarga</option>
                    <option>01. Kepala Keluarga</option>
                    <option>02. Suami</option>
                    <option>03. Istri</option>
                    <option>04. Anak</option>
                    <option>05. Menantu</option>
                    <option>06. Cucu</option>
                    <option>07. Orangtua</option>
                    <option>08. Mertua</option>
                    <option>09. Family Lain</option>
                    <option>10. Pembantu</option>
                    <option>11. Lainnya</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Kelainan Fisik dan Mental</label>
                <input type="text" class="form-control" id="Kelainan Fisik dan Mental">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Penyandang Cacat</label>
                <input type="text" class="form-control" id="Penyandang Cacat">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pendidikan">Pendidikan Terakhir</label>
                <select id="pendidikan" class="form-control">
                    <option selected>Pendidikan Terakhir</option>
                    <option>01. Tidak atau Belum Sekolah</option>
                    <option>02. Belum Tamat SD atau sederajat</option>
                    <option>03. Tamat SD atau Sederajat</option>
                    <option>04. SLTP Sederajat</option>
                    <option>05. SLTA atau Sederajat</option>
                    <option>06. Diploma I/II</option>
                    <option>07. Akademi atau Diploma III atau Sarjana Muda</option>
                    <option>08. Diploma IV atau Strata I</option>
                    <option>09. Strata II</option>
                    <option>10. Strata III</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" class="form-control">
                    <option>01. Belum/Tidak Bekerja</option>
                    <option>02. Mengurus Rumah Tangga</option>
                    <option>03. Pelajar/Mahasiswa</option>
                    <option>04. Pensiunan</option>
                    <option>05. Pegawai Negeri Sipil</option>
                    <option>06. Tentara Nasional Indonesia</option>
                    <option>07. Kepolisian RI</option>
                    <option>08. Perdagangan</option>
                    <option>09. Petani/Pekebun</option>
                    <option>10. Peternak</option>
                    <option>11. Nelayan Perikanan</option>
                    <option>12. Industri</option>
                    <option>13. Konstruksi</option>
                    <option>14. Transportasi</option>
                    <option>15. Karyawan Swasta</option>
                    <option>16. Karyawan BUMN</option>
                    <option>17. Karyawan BUMD</option>
                    <option>18. Karyawan Honorer</option>
                    <option>19. Buruh Harian Lepas</option>
                    <option>20. Buruh Tani/Perkebunan</option>
                    <option>21. Buruh Nelayan/Perikanan</option>
                    <option>22. Buruh Peternakan</option>
                    <option>23. Pembantu Rumah Tangga</option>
                    <option>24. Tukang Cukur</option>
                    <option>25. Tukang Listrik</option>
                    <option>26. Tukang Batu</option>
                    <option>27. Tukang Kayu</option>
                    <option>28. Tukang Sol Sepatu</option>
                    <option>29. Tukang Las/Pandai Besi</option>
                    <option>30. Tukang Jahit</option>
                    <option>31. Tukang Gigi</option>
                    <option>32. Penata Rias</option>
                    <option>33. Penata Busana</option>
                    <option>34. Penata Rambut</option>
                    <option>35. Mekanik</option>
                    <option>36. Seniman</option>
                    <option>37. Tabib</option>
                    <option>38. Paraji</option>
                    <option>39. Perancang Busana</option>
                    <option>40. Penerjemah</option>
                    <option>41. Imam Masjid</option>
                    <option>42. Pendeta</option>
                    <option>43. Pastor</option>
                    <option>44. Wartawan</option>
                    <option>45. Ustadz/Mubaligh</option>
                    <option>46. Juru Masak</option>
                    <option>47. Promotor Acara</option>
                    <option>48. Anggota DPR-RI</option>
                    <option>49. Anggota DPD</option>
                    <option>50. Anggota BPK</option>
                    <option>51. Presiden</option>
                    <option>52. Wakil Presiden</option>
                    <option>53. Anggota Mahkamah Konstitusi</option>
                    <option>54. Anggota Kabinet/Kementrian</option>
                    <option>55. Duta Besar</option>
                    <option>56. Gubernur</option>
                    <option>57. Wakil Gubernur</option>
                    <option>58. Bupati</option>
                    <option>59. Wakil Bupati</option>
                    <option>60. Walikota</option>
                    <option>61. Wakil Walikota</option>
                    <option>62. Anggota DPRD Provinsi</option>
                    <option>63. Anggota DPRD Kabupaten/Kota</option>
                    <option>64. Dosen</option>
                    <option>65. Guru</option>
                    <option>66. Pilot</option>
                    <option>67. Pengacara</option>
                    <option>68. Notaris</option>
                    <option>69. Arsitek</option>
                    <option>70. Akuntan</option>
                    <option>71. Konsultan</option>
                    <option>72. Dokter</option>
                    <option>73. Bidan</option>
                    <option>74. Perawat</option>
                    <option>75. Apoteker</option>
                    <option>76. Psikiater/Psikolog</option>
                    <option>77. Penyiar Televisir</option>
                    <option>78. Penyiar Radio</option>
                    <option>79. Pelaut</option>
                    <option>80. Peneliti</option>
                    <option>81. Sopir</option>
                    <option>82. Pialang</option>
                    <option>83. Paranormal</option>
                    <option>84. Pedagang</option>
                    <option>85. Perangkat Desa</option>
                    <option>86. Kepala Desa</option>
                    <option>87. Biarawati</option>
                    <option>88. Wiraswasta</option>
                    <option>89. Lainnya</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">NIK Ibu</label>
                <input type="email" class="form-control" id="NIK Ibu">
            </div>
            <div class="form-group col-md-8">
                <label for="inputPassword4">Nama Lengkap Ibu</label>
                <input type="text" class="form-control" id="Nama Lengkap Ibu">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">NIK Ayah</label>
                <input type="email" class="form-control" id="NIK Ayah">
            </div>
            <div class="form-group col-md-8">
                <label for="inputPassword4">Nama Lengkap Ayah</label>
                <input type="text" class="form-control" id="Nama Lengkap Ayah">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center mt-3 mb-4">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
</div>
@endsection