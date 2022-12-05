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
                                    <h3>Riwayat Pengguna</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered" id="dataTableRiwayat" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-bold" style="width: 21px;" id="no-sorting">No
                                                </th>
                                                <th class="font-weight-bold">Nama </th>
                                                <th class="font-weight-bold">Nomor Handphone </th>
                                                <th class="font-weight-bold">Penyakit </th>
                                                <th class="font-weight-bold">Tanggal Diagnosa </th>
                                                <th class="font-weight-bold" style="width: 30px;">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($users as $i => $user) :?>
                                            <tr>
                                                <td><?= $i+1?></td>
                                                <td><?= $user['nama']?></td>
                                                <td><?= $user['no_telp']?></td>
                                                <td><?= $user['analisa']?></td>
                                                <td><?= date($user['tgldiagnosa']); ?></td>

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
                                                            href="<?= base_url('admin/riwayat/detail/'.$user['id_user']) ?>">
                                                            <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Detail
                                                        </a>

                                                        <a class="dropdown-item delete-btn delete-confirm"
                                                            href="<?= base_url() ?>admin/riwayat/destroy/<?= $user['id_user'] ?>">
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

        $('#dataTableRiwayat').DataTable({
            dom: 'Bfltip',
            buttons: [{
                extend: 'print',
                messageTop: "Laporan bulanan"
            }, ]
        });

        $('#dataTableRiwayat_wrapper .dt-buttons button').removeClass('dt-button buttons-print')
        $('#dataTableRiwayat_wrapper .dt-buttons button').addClass('btn btn-sm btn-primary ml-2')

        $('#dataTableRiwayat_filter').appendTo('#dataTableRiwayat_length')
        $('#dataTableRiwayat_length').addClass('d-flex justify-content-between')

        $('#dataTableRiwayat_wrapper > .dt-buttons').appendTo('#dataTableRiwayat_filter')
        $('#dataTableRiwayat_filter').addClass('d-flex')

    </script>
</body>

</html>
