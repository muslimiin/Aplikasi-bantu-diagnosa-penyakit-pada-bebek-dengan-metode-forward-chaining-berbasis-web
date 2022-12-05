<!-- <section id="banner" class="text-center pt-5 pb-3 bg-second-color" style="margin:0">
    <h1 class="text-white " style="font-weight: 600;">Riwayat Diagnosa</h1>
</section> -->
<?php error_reporting(0)?>
<section id="content">
    <div class="container">

        <div class="card"  id="cetak">
            <div class="card-header text-center">
                Hasil diagnosa
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td style="width:250px;">Nama Pengguna</td>
                        <td><?= $nama?></td>
                    </tr>
                    <tr>
                        <td>Gejala Yang Dipilih Pengguna</td>
                        <td>
                            <ul>
                                <?php foreach($gejala as $g):?>
                                <li style="list-style: none;"><?= $g['id']?> - <?= $g['nama']?></li>
                                <?php endforeach;?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Kemungkinan Hasil</td>
                        <?php if(isset($penyakit)) :?>
                        <td><?= $penyakit['nama'] ?></td>
                        <?php else:?>
                        <td>Penyakit tidak ditemukan, sepertinya Bebek anda baik-baik saja.</td>
                        <?php endif;?>
                    </tr>
                    <tr>
                        <td>Penyebab Penyakit</td>
                        <?php if(isset($penyakit)) :?>
                        <td><?= $penyakit['penyebab']?></td>
                        <?php else:?>
                        <td>-</td>
                        <?php endif;?>

                    </tr>
                    <tr>
                        <td>Solusi Pengobatan</td>
                        <?php if(isset($penyakit)) :?>
                        <td><?= $penyakit['solusi'] ?></td>
                        <?php else:?>
                        <td>-</td>
                        <?php endif;?>
                    </tr>
                </table>
                <div class="card-body">
                    <p>
                        Kemungkinan hasil yang tampil belum bisa dipastikan benar atau tidak,
                        karena aplikasi ini hanyalah alat bantu untuk membantu pengguna. Untuk lebih jelas dan pastinya lagi 
                        pengguna bisa melakukan konsultasi secara langsung kepada dokter hewan atau dinas terkait.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function printPage() {
            var divToPrint = document.getElementById('hasildiagnosa');
            javascript:window.print()
          }
    </script>
</section>