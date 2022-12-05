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
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800"><?= $contentTitle;?></h1>
                        <a href="<?= base_url('admin/pengetahuan/index')?>" class="btn btn-primary"><i class=""></i>
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
                                    <form action="<?= base_url('admin/pengetahuan/update/'.$pengetahuan['id'])?>"
                                        method="post">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Gejala</th>
                                                <th>(<?= $pengetahuan['id']?>) <?= $pengetahuan['nama']?></th>
                                            </tr>
                                            <?php foreach ($gejalas as $i => $gejala) :?>
                                            <tr>
                                                <td>
                                                    <?= $gejala['id']?><br><?= $gejala['nama']?>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control" id="<?= $gejala['id']?>"
                                                            name="<?= $gejala['id']?>">
                                                            <option <?= $pengetahuan[$gejala["id"]]==1?"selected":""?>
                                                                value="1">Ya</option>
                                                            <option <?= $pengetahuan[$gejala["id"]]==0?"selected":""?>
                                                                value="0">Tidak</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </table>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
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