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
                        <h1 class="h3 mb-0 text-gray-800"><?= $contentTitle;?></h1>
                        <a href="<?= base_url('admin/gejala/index')?>" class="btn btn-primary"><i class=""></i>
                            -Kembali
                        </a>
                    </div>
                    <hr>

                    <div class="row">
                        <?php if (($this->session->flashdata('message'))) : ?>
                        <?= $this->session->flashdata('message'); ?>

                        <?php endif ?>
                        <div class="col-6">
                            <!-- CONTENT -->
                            <div class="card">
                                <div class="card-header">
                                    <?=$contentTitle?>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('admin/gejala/update/'.$gejala['id'])?>" method="post">
                                        <div class="form-group">
                                            <label for="id_gejala">ID Gejala</label>
                                            <input type="text" class="form-control" id="id_gejala" name="id_gejala"
                                                disabled value="<?= $gejala['id']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_gejala">Nama Gejala</label>
                                            <input type="text" class="form-control" id="nama_gejala" name="nama_gejala"
                                                placeholder="Nama Gejala" value="<?= $gejala['nama']?>">
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