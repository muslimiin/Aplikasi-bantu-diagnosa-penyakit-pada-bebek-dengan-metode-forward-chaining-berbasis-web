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
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header text-center " style="color:#152c5b ;font-weight:bold">
                                    <h3>Saran & Keluhan</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-bold" style="width: 21px;" id="no-sorting">No
                                                </th>
                                                <th class="font-weight-bold">Nama </th>
                                                <th class="font-weight-bold">Alamat </th>
                                                <th class="font-weight-bold">Nomor Handphone </th>
                                                <th class="font-weight-bold">Saran Ataupun Keluhan </th>
                                                <th class="font-weight-bold" style="width: 30px;">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($tentangs as $i => $tentang) :?>
                                            <tr>
                                                <td><?= $i+1?></td>
                                                <td><?= $tentang['nama']?></td>
                                                <td><?= $tentang['alamat']?></td>
                                                <td><?= $tentang['no_hp']?></td>
                                                <td><?= $tentang['saran_keluhan']?></td>
                                                <td>
                                                    <div class="dropdown no-arrow">
                                                    <a class="btn dropdown-toggle" type="button" id="dropdownAction"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fas fa-cogs"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownAction">
                                                        <a class="dropdown-item delete-btn delete-confirm"
                                                            href="<?= base_url() ?>admin/tentang/destroy/<?= $tentang['id'] ?>">
                                                            <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Hapus
                                                        </a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
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

    <script type="text/javascript">
        $('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            Swal.fire({
              title: 'Apakah anda yakin ingin menghapus data ini?',
              text: 'Data ini tidak akan bisa dikembalikan, setelah dihapus!',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Delete'
            }).then((result) => {
              if (result.isConfirmed) {
                   window.location.href = url;
              }
            })
        });
    </script>

</body>

</html>