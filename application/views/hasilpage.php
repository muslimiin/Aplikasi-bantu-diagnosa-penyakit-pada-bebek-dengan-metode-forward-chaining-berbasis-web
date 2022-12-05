<!-- <section id="banner" class="text-center pt-5 pb-3 bg-second-color" style="margin:0">
    <h1 class="text-white " style="font-weight: 600;">Riwayat Diagnosa</h1>
</section> -->
<?php error_reporting(0)?>
<section id="content">
    <div class="container">
            
        <div class="card" id="hasildiagnosa">
            <div class="card-header text-center">
                <h3>Hasil diagnosa</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td style="width:250px;">Nama</td>
                        <td><?= $nama?></td>
                    </tr>
                    <tr>
                        <td>Gejala Yang Dipilih</td>
                        <td>
                            <ul>
                                <?php foreach($gejala as $g):?>
                                <li style="list-style: none;"><?= $g['id']?> - <?= $g['nama']?></li>
                                <?php endforeach;?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Kemungkinan Penyakit</td>
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
                        Untuk konsultasi lebih lanjut pengguna bisa mendatangi klinik hewan terdekat atau menghubungi 
                        Dinas Pertanian dan Pangan Kota Pekalongan
                    </p>
                </div>
                <div class="row">
                <div class="col-6">
                    <a href="<?= base_url('diagnosapage')?>" class="btn btn-primary text-white">
                                -Diagnosa Lagi
                    </a>
                </div>
                <div class="col-6 text-right">
                    <button type="submit" class="btn btn-info" onclick="printPage()">-Print Hasil</button>
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
    </div>
</section>