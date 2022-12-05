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
                        <a href="<?= base_url('admin/infoterkini/index')?>" class="btn btn-primary"><i class=""></i>
                            -Kembali
                        </a>
                    </div>
                    <hr>

                    <div class="row">

                        <div class="col-12">
                            <!-- CONTENT -->
                            <div class="card">
                                <div class="card-header">
                                    <?=$contentTitle?>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('admin/infoterkini/store')?>" method="post">
                                        <div class="form-group">
                                            <label for="judul">Judul</label>
                                            <input type="text" class="form-control" id="judul"
                                                name="judul" placeholder="Judul">
                                        </div>
                                        <div class="form-group">
                                            <label for="kategori">Kategori</label>
                                            <<select class="form-control" id="kategori" name="kategori" value="<?= set_value('kategori'); ?>">
                                                <option>--Pilih--</option>
                                                <option value="Pengumuman">Pengumuman</option>
                                                <option value="Berita">Berita</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="isiberita">Isi Info Terkini</label>
                                            <textarea type="text" name="isiberita" class="form-control" value="<?= set_value('isiberita'); ?>" id="isiberita" placeholder="Masukan Isi Berita"></textarea>
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