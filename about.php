<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include "database.php";
$que = mysqli_query($db_conn, "SELECT * FROM daful_konfigurasi");
$hsl = mysqli_fetch_array($que);
// $timestamp = strtotime($hsl['tgl_pengumuman']);
//echo $timestamp;

?>
<!DOCTYPE htmli>
<htmli>
<head>
    <link rel="icon" type="image/png" href="favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="aplikasi sederhana untuk Bursa Khusus Kerja di YP IPPI Jakarta">
    <!-- <meta name="author" content="slamet.bsan@gmail.com"> -->
    <title>Tentang Bursa Khusus Kerja</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="css/kelulusan.css" rel="stylesheet">
    <style type="text/css">
        .leftind{
            margin-left: 18px;
            text-align: justify;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">Tentang BKK</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="./">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <!-- <li><a href="#contact">Contact</a></li> -->
              </uli>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

<div class="container">
    <h3 align="left" style="font-weight: bold;">Tentang BKK</h3>

    <div>
        <h3>I. Pengertian</h3>
        <p class="leftind">
            Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.
        </p>
    </div>
    <div>
        <h3>II. Latar Belakang</h3>
        <p class="leftind">
            Sekolah Menengah Kejuruan (SMK) sebagai sub sistem pendidikan nasional yang bertanggungjawab dalam penyiapan SDM tingkat menengah yang handal, berorientasi kepada kebutuhan pasar harus mampu mengembangkan inovasi untuk mempengaruhi perubahan kebutuhan pasar sehingga dapat mewujudkan kepuasan pencari kerja. BKK SMK merupakan salah satu komponen penting dalam mengukur keberhasilan pendidikan di SMK, karena BKK menjadi lembaga yang berperan mengoptimalkan penyaluran tamatan SMK dan sumber informasi untuk pencari kerja. Pemberdayaan BKK SMK merupakan salah satu fungsi dalam manajemen sekolah yaitu sebagai bagian pembinaan terhadap proses pelaksanaan kegiatan BKK SMK yang telah direncanakan dalam upaya mencapai tujuan pendidikan SMK. BKK SMK merupakan salah satu komponen pelaksanaan pendidikan sistem ganda, karena tidak mungkin bisa dilaksanakan proses pembelajaran yang mengarah kepada kompetensi jika tidak ada pasangan industri/usaha kerja, sebagai lingkungan kerja dimana siswa belajar keahlian dan profesional serta etos kerja sesuai dengan tuntutan dunia kerja.
        </p>
    </div>
    <div>
        <h3>III. Tujuan</h3>
        <ul>
            <li>Sebagai wadah dalam mempertemukan tamatan dengan pencari kerja.</li>
            <li>Memberikan layanan kepada tamatan sesuai dengan tugas dan fungsi masing-masing seksi yang ada dalam BKK.</li>
            <li>Sebagai wadah dalam pelatihan tamatan yang sesuai dengan permintaan pencari kerja</li>
            <li>Sebagai wadah untuk menanamkan jiwa wirausaha bagi tamatan melalui pelatihan.</li>
        </ul>
    </div>
    <div>
        <h3>IV. Ruang Lingkup Kerja</h3>
        <ul>
            <li>Penyusunan database siswa lulusan SMK pencari kerja dan perusahaan pencari tenaga kerja dan penelusuran tamatan siswa SMK.</li>
            <li>Menjaring informasi tentang pasar kerja melalui iklan di media massa, internet, kunjunagn ke dunia usaha (industri) maupun kerjasama dengan lembaga penyalur tenaga kerja dan Depnakertrans.</li>
            <li>Membuat leaflet informasi dan pemasaran lulusan SMK yang dikirim kedunia usaha/industri yang terkait Depnakertrans.</li>
            <li>Penyaluran calon tenaga kerja lulusan SMK ke dunia usaha dan industri.</li>
            <li>Melakukan proses tindak lanjut hasil pengiriman dan penempatan tenaga kerja melalui kegiatan penjajakan dan verifikasi.</li>
            <li>Mengadakan program pelatihan ketrampilan tambahan/khusus bagi siswa dan lulusan SMK disesuaikan dengan bidang keahlian yang diperlukan.</li>
            <li>Mengadakan program bimbingan menghadapi tahapan proses penerimaan siswa dalam suatu pekerjaan (wawancara, psikotest).</li>
            <li>Memberikan informasi kepada para ALUMNI ataupun para lulusan SMK lain yang membutuhkan informasi tentang lowongan kerja.</li>
        </ul>
    </div>
    <div>
        <h3>V. Penyaluran dan Penempatan Tamatan</h3>
        <p class="leftind">Adapun pelaksanaan penyaluran dan penempatan tamatan yang dapat dilakukan BKK SMK adalah sebagai berikut :</p>
        <ul>
            <li>Menindaklanjuti kerjasama dengan industri pasangan yang telah menjadi mitra kerja dengan BKK sekolah.</li>
            <li>Melakukan penelusuran alumni dan dimasukkan ke dalam database sekolah.</li>
            <li>Merangkul pengurus Majelis Sekolah yang peduli dengan penempatan tenaga kerja dari alumni.</li>
            <li>Membuat website khusus BKK yang selalu up to date yang dapat di link dengan situs-situs JOB CARRIER.</li>
            <li>Menanamkan jiwa enterpreunership kepada siswa melalui pelatihan ketrampilan untuk menjadi seorang wirausaha (enterpreuneur).</li>
        </ul>
    </div>
    <div>
        <h3>VI. Kegiatan Bursa Kerja Khusus</h3>
        <ul>
            <li>Merencanakan program kerja hubungan industri setiap program studi.
                <ul>
                    <li>Mengadakan pertemuan dengan Kajur tentang penempatan siswa-siswi prakerin.</li>
                    <li>Mengadakan koordinasi dengan panitia PSG tentang penempatan siswa-siswi prakerin.</li>
                    <li>Mengadakan koordinasi dengan panitia PSG tentang guru monitoring.</li>
                </ul>                
            </li>
            <li>Melakukan proses negosiasi dengan DU/DI dan pemerintah sebagai mitra dalam penempatan siswa-siswi prakerin.</li>
            <li>Menjalin kerjasama (MOU) dengan DU/DI dalam :
                <ul>
                    <li>Sikronisasi kurikulum</li>
                    <li>Pelatihan</li>
                    <li>Penempatan tamatan</li>
                </ul>
            </li>
            <li>Pemetaan DU/DI</li>
            <li>Menjalin kerjasama dengan Depnakertrans tentang pelatihan (Magang) dan penempatan tamatan.</li>
            <li>Membentuk Majelis Sekolah.</li>
            <li>Membuat database penelusuran tamatan baik yang sudah bekerja maupun belum bekerja.</li>
            <li>Membentuk Ikatan alumni.</li>
            <li>Membuat mading informasi lowongan kerja.</li>
            <li>Membuat website khusus BKK</li>
            <li>Membuat Laporan Kegiatan</li>
            <li>Monitoring dan Evaluasi</li>
        </ul>
    </div>
</div><!-- /.container -->
<!-- form ujian========================================================     -->	


	<footer class="footer">
		<div class="container">
			<p class="text-muted">&copy; <?=$hsl['tahun'] ?> &middot; Tim IT <?=$hsl['sekolah']; ?></p>
		</div>
	</footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jasny-bootstrap.min.js"></script>
	<script type="text/javascript">
	var skrg = Date.now();
	$('#clock').countdown("<?=$hsl['tgl_pengumuman'] ?>", {elapse: true})
	.on('update.countdown', function(event) {
	var $this = $(this);
	if (event.elapsed) {
		$( "#xpengumuman" ).show();
		$( "#clock" ).hide();
	} else {
		$this.html(event.strftime('Pengumuman dapat dilihat: <span>%D Hari %H Jam %M Menit %S Detik</span> lagi'));
		$( "#xpengumuman" ).hide();
	}
	});

	</script>
</body>
</htmli>
