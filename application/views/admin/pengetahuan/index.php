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
                    <?php if (($this->session->flashdata('message'))) : ?>
                    <?= $this->session->flashdata('message'); ?>

                    <?php endif ?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between ">
                        <h1 class="h3 mb-0 text-gray-800"><?= $contentTitle;?></h1>
                        <div>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalGejala">
                                Lihat Gejala
                            </a>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalPenyakit">
                                Lihat Penyakit
                            </a>
                        </div>

                    </div>
                    <hr>

                    <div class="card">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between ">
                                <h1 class="h3 mb-0 text-gray-800">Relasi Gejala dan Penyakit</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 21px;" id="no-sorting">No</th>
                                            <th>Nama Penyakit</th>
                                            <?php foreach ($gejalas as $gejala) :?>
                                            <th><?= $gejala['id']?></th>
                                            <?php endforeach;?>
                                            <th style="width: 21px;" id="no-sorting"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pengetahuans as $i => $pengetahuan) : ?>
                                        <tr>
                                            <td><?= $i+1 ?></td>
                                            <td>(<?= $pengetahuan['id']?>) <?=$pengetahuan['nama']?></td>
                                            <?php foreach ($gejalas as $gejala) :?>
                                            <td><?= $pengetahuan[$gejala['id']]==0?"-":"Ya" ?></td>
                                            <?php endforeach;?>
                                            <td>
                                                <a href="<?= base_url('admin/pengetahuan/edit/'.$pengetahuan['id']) ?>"
                                                    class="btn btn-primary"><i class="fas fa-cogs"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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

    <div class="modal" tabindex="-1" id="modalGejala">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data gejala</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table width="100%" class="table table-bordered text-center">
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Nama Gejala</th>
                        </tr>
                        <?php foreach ($gejalas as $i => $gejala) :?>
                        <tr>
                            <td><?= $gejala['id']?></td>
                            <td>:</td>
                            <td><?= $gejala['nama']?></td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="modalPenyakit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data Penyakit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table width="100%" class="table table-bordered text-center">
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Nama Penyakit</th>
                        </tr>
                        <?php foreach ($penyakits as $i => $penyakit) :?>
                        <tr>
                            <td><?= $penyakit['id']?></td>
                            <td>:</td>
                            <td><?= $penyakit['nama']?></td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade " tabindex="-1" id="modalDelete">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Apakah anda yakin ingin menghapus data ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Data ini tidak akan bisa dikembalikan, setelah dihapus!
                </div>
                <div class="modal-footer">
                    <form action="<?= base_url() ?>admin/penyakit/destroy/<?= $penyakit['id'] ?>" method="get">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('admin/templates/js'); ?>

</body>

</html>