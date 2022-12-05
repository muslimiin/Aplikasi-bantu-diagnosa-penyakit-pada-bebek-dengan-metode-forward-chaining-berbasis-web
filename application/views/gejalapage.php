<section id="banner" class="text-center pt-3 pb-3 bg-second-color" style="margin:0;">
    <h1 class="text-white " style="font-weight: 600;">Data Gejala</h1>
</section>

<section id="content">
    <div class="container">
        <section id="gejala">
            <div class="card ">
                <div class="card-header">
                    <h3 class="font-weight-bold">Data Gejala</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="font-weight-bold" style="width: 21px;" id="no-sorting"
                                    class="font-weight-bold">No</th>
                                <th scope="col" class="font-weight-bold">Kode</th>
                                <th scope="col" class="font-weight-bold">Nama Gejala</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($gejalas as $i => $gejala) :?>
                            <tr>
                                <td><?= $i+1?></td>
                                <td><?= $gejala['id']?></td>
                                <td><?= $gejala['nama']?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div>
    
</section>