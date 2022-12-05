<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin/templates/head'); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('admin/templates/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('admin/templates/navbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Riwayat Pengguna</h1>
                        <a href="<?= base_url('admin/riwayat/index')?>" class="btn btn-primary"><i class=""></i>
                            -Kembali
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header text-center " style="color:#152c5b ;font-weight:bold">
                                    <h3>Hasil diagnosa</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <td style="width:250px;">Tanggal Diagnosa</td>
                                            <td ><?= $tanggal ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width:250px;">Nama Pengguna</td>
                                            <td><?= $nama?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Hp</td>
                                            <td><?= $no_telp?></td>
                                        </tr>
                                        <tr>
                                            <td>Jawaban Pengguna</td>
                                            <td>
                                                <ul>
                                                    <?php foreach($gejala as $g):?>
                                                    <li style="list-style: none;"><?= $g['id']?> - <?= $g['nama']?></li>
                                                    <?php endforeach;?>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hasil</td>
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
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('admin/templates/stickyFooter'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view('admin/templates/scrollTop'); ?>

    <!-- Logout Modal-->
    <?php $this->load->view('admin/templates/modal'); ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('admin/templates/js'); ?>

</body>

</html>