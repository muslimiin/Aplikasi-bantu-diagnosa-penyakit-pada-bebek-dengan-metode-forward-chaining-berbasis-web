<section id="banner" class="text-center pt-3 pb-3 bg-second-color" style="margin:0">
    <h1 class="text-white " style="font-weight: 600;">Tentang Kami</h1>
</section>

<section id="content" style="margin: 70px 0;">
 <div class="container">
   <div class="row justify-content-center">
    <div class="col-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?= base_url('assets/img/slide1.jpg')?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= base_url('assets/img/slide2.png')?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= base_url('assets/img/slide3.png')?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
   </div>
 </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card border-0 my-card">
                    <div class="card-body text-center">
                        <h3 class="card-title font-weight-bolder my-primary-color">Apa Itu Dinas Pertanian dan Pangan Kota Pekalongan?</h3>
                        <p class="card-text my-text text-justify" style="font-size: 13px;">Dinas Pertanian dan Pangan yang disingkat Dinperpa merupakan unsur pelaksana/penunjang urusan pemerintahan yang menjadi kewenangan daerah bidang pertanian dan pangan.Dinperpa dipimpin oleh seorang Kepala Dinas yang berkedudukan di bawah dan bertanggung jawab kepada Walikota melalui Sekretaris Daerah.
                        </p>
                        <p class="card-text my-text text-justify" style="font-size: 13px;">Didalanya terdapat banyak bidang yang diberi tugas dan fungsinya masing-masing, salah satunya Bidang Peternakan dan Kesehatan Hewan:</p>
                        <p class="card-text my-text text-justify" style="font-size: 13px;">Tugas: <br>
                        Melaksanakan penyusunan kebijakan, pelaksanaan kebijakan dan pemberian bimbingan teknis serta pemantauan dan evaluasi di bidang peternakan dan kesehatan hewan.</p>
                        <p class="card-text my-text text-justify" style="font-size: 13px;">Fungsi: <br>
                        1. Penyusunan kebijakan di bidang produksi dan usaha peternakan dan kesehatan hewan dan kesehatan masyarakat veteriner serta penngolahan dan pemasaran hasil di bidang peternakan serta kesehatan hewan. <br>
                        2. Perencanaan  kebutuhan dan penyediaan benih/bibit ternak, pakan ternak dan benih/bibit hijauan makanan ternak. <br>
                        3. Pemberian bimbingan penerparan peningkatan produksi ternak, pasca panen, pengolahan dan pemasaran hasil peternakan, pengendalian penyakit hewan dan kesmavet. <br>
                        4. Pengawasan peredaran dan penggunaan serta sertifikasi bibit ternak, pakan, hijauan makanan ternak dan obat hewan. <br>
                        5. Pemberian rekomendasi teknis perijinan/sertifikasi di bidang peternakan, kesehatan hewan dan kesmavet. <br>
                        6. Pengawasan pemasukan dan pengeluaran hewan dan poduk hewan. <br>
                        7. Pemantauan, evaluasi program dan kegiatan dan kebijakan di bidang peternakan dan kesehatan hewan. <br>
                        8. Pelaksanaan tugas lain yang diberikan oleh pimpinan sesuai dengan tugas dan fungsinya. <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="text-center my-primary-color">Info Terkini</h3>
                <p class="text-center my-primary-color">Cari Tahu Berita dan Pengumuman Terbaru</p>
            </div>
        </div>

        <div class="row mt-5">  
          <?php foreach ($berita as $berita) : ?>
                        <div class="col-xl-4 col-md-4 col-12 mb-4">
                            <div class="card border-top-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                <p class="post-title"><?= $berita['judul']?></p>
                                                </div>
                                                <span class="post-date"><?= date($berita['tglterbit']); ?> - <?= $berita['kategori']?></span>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <a href="<?= base_url('tentangpage/baca/'.$berita['id'])?>" class="readmore stretched-link mt-auto" >Baca Selengkapnya ➜</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
          <?php endforeach;?>
        </div>

    </div>

</section>

  <section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="text-center my-primary-color">Hubungi Kami</h3>
            </div>
        </div>

    <div class="row mt-5">
            <div class="col-6">
                <div class="card border-0 my-card">
                  <p class="text-center my-primary-color">Saran ataupun keluhan yang akan anda sampaikan kepada kami, silahkan lewat sini</p>
                  <form action="<?= base_url('tentangpage/kirim')?>" method="post">
                      <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama"
                            name="nama" placeholder="Masukkan Nama Anda" id="nama" required>
                      </div>
                      <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control" id="alamat"
                            name="alamat" placeholder="Masukkan Alamat Anda" id="alamat" required
                            rows="3"></textarea>
                      </div>
                      <div class="form-group">
                          <label for="no_hp">Nomor HP</label>
                          <input type="text" class="form-control" id="no_hp"
                            name="no_hp" placeholder="Masukkan Nomor HP Anda" id="no_hp" required>
                      </div>
                      <div class="form-group">
                          <label for="saran_keluhan">Saran Ataupun Keluhan</label>
                          <textarea class="form-control" id="saran_keluhan" name="saran_keluhan"
                            placeholder="Silahkan Masukkan Saran Ataupun Keluhan Anda Kepada Kami" id="saran_keluhan" required rows="3"></textarea>
                      </div>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                  </form>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-0 my-card">
                    <div class="text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6903720185633!2d109.66522111431718!3d-6.927564669732349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7023ff7a3c07f5%3A0x257258edd080eea7!2sDinas%20Pertanian%20Dan%20Pangan%20Kota%20Pekalongan!5e0!3m2!1sen!2sid!4v1653924403178!5m2!1sen!2sid" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row gy-4">
                        <div class="col-xl-6 col-md-2 col-12 mb-2">
                            <div class="card border-top-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                <h5>Alamat</h5>
                                                </div>
                                                <p>Jl. Raya Simbang Wetan No.2 Simbang Wetan, Kec. Buaran, Kabupaten Pekalongan, Jawa Tengah 51171</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-2 col-12 mb-2">
                            <div class="card border-top-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                <h5>Jam Operasional</h5>
                                                </div>
                                                <p>Senin - Kamis<br>08:00 - 15:00</p>
                                                <p>Jum'at<br>08:00 - 11:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-2 col-12 mb-2">
                            <div class="card border-top-primary shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                <h5>Telepon</h5>
                                                </div>
                                                <p>(0285)430099</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>