<section id="banner" class="text-center pt-3 pb-3 bg-second-color" style="margin:0;">
    <h1 class="text-white " style="font-weight: 600;">Data Penyakit</h1>
</section>

<section id="content">
    <div class="container">
        <section id="penyakit">
            <div class="card ">
                <div class="card-header">
                    Data Penyakit / Solusi
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="font-weight-bold" style="width: 21px;" id="no-sorting"
                                    class="font-weight-bold">No</th>
                                <th scope="col" class="font-weight-bold">Kode</th>
                                <th scope="col" class="font-weight-bold">Nama Penyakit</th>
                                <th scope="col" class="font-weight-bold">Penyebab</th>
                                <th scope="col" class="font-weight-bold">Solusi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($penyakits as $i => $penyakit) :?>
                            <tr>
                                <td><?= $i+1?></td>
                                <td><?= $penyakit['id']?></td>
                                <td><?= $penyakit['nama']?></td>
                                <td><?= $penyakit['penyebab']?></td>
                                <td><?= $penyakit['solusi']?></td>
                                <!-- <td><a href="<?= base_url('penyakitpage/detailpenyakit/'.$penyakit['id'])?>"
                                class="btn btn-primary text-white">Detail</a></td> -->
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div>
    
</section>