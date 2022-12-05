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
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800"><?= $contentTitle;?></h1>
                        <a href="<?= base_url('admin/penyakit/index')?>" class="btn btn-primary"><i class=""></i>
                            -Kembali
                        </a>
                    </div>
                    <hr>

                    <div class="row">

                        <div class="col-6">
                            <!-- CONTENT -->
                            <div class="card">
                                <div class="card-header">
                                    <?=$contentTitle?>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('admin/penyakit/store')?>" method="post">
                                        <div class="form-group">
                                            <label for="nama_penyakit">Nama Penyakit</label>
                                            <input type="text" class="form-control" id="nama_penyakit"
                                                name="nama_penyakit" placeholder="Nama penyakit">
                                        </div>
                                        <div class="form-group">
                                            <label for="penyebab_penyakit">Penyebab Penyakit</label>
                                            <textarea class="form-control" id="penyebab_penyakit"
                                                name="penyebab_penyakit" placeholder="Penyebab penyakit"
                                                rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="solusi_penyakit">Solusi Penyakit</label>
                                            <textarea class="form-control" id="solusi_penyakit" name="solusi_penyakit"
                                                placeholder="Solusi penyakit" rows="3"></textarea>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                            </div>
                            <!-- END CONTENT -->
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