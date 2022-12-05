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
                        <a href="<?= base_url('admin/gejala/create')?>" class="btn btn-primary"><i
                                class="fas fa-plus"></i>
                            Tambah
                            <?= $title?></a>
                    </div>
                    <hr>

                    <div class="card">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between ">
                                <h1 class="h3 mb-0 text-gray-800">Data Gejala</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTableGejala" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 21px;" id="no-sorting">ID</th>
                                            <th>Nama Gejala</th>
                                            <th style="width: 21px;" id="no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($gejalas as $gejala) : ?>
                                        <tr>
                                            <td><?= $gejala['id'] ?></td>
                                            <td><?= $gejala['nama'] ?></td>
                                            <td>
                                                <div class="dropdown no-arrow">
                                                    <a class="btn dropdown-toggle" type="button" id="dropdownAction"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fas fa-cogs"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownAction">
                                                        <a class="dropdown-item edit-btn"
                                                            href="<?= base_url() ?>admin/gejala/edit/<?= $gejala['id'] ?>">
                                                            <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Edit
                                                        </a>
                                                        <a class="dropdown-item delete-btn delete-confirm"
                                                            href="<?= base_url() ?>admin/gejala/destroy/<?= $gejala['id'] ?>">
                                                            <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </div>
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

        $('#dataTableGejala').DataTable({
            dom: 'Bfltip',
            buttons: [{
                extend: 'print',
                messageTop: "Laporan bulanan"
            }, ]
        });

        $('#dataTableGejala_wrapper .dt-buttons button').removeClass('dt-button buttons-print')
        $('#dataTableGejala_wrapper .dt-buttons button').addClass('btn btn-sm btn-primary ml-2')

        $('#dataTableGejala_filter').appendTo('#dataTableGejala_length')
        $('#dataTableGejala_length').addClass('d-flex justify-content-between')

        $('#dataTableGejala_wrapper > .dt-buttons').appendTo('#dataTableGejala_filter')
        $('#dataTableGejala_filter').addClass('d-flex')
    </script>
</body>

</html>
