<nav class="navbar navbar-expand-lg navbar-light py-4">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('homepage')?>"><span
                style="color:#3252DF;font-weight:600;font-size:23px">My</span>Duck.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item <?php foreach ($this->uri->segments as $segment) : 
        echo $segment == "homepage" ? "active":"";
        endforeach;?>">
                    <a class="nav-link" href="<?= base_url('homepage')?>">Home </a>
                </li>
                <li class="nav-item <?php foreach ($this->uri->segments as $segment) : 
        echo $segment == "gejalapage" ? "active":"";
        endforeach;?>">
                    <a class="nav-link" href="<?= base_url('gejalapage')?>">Data Gejala</a>
                </li>
                <li class="nav-item <?php foreach ($this->uri->segments as $segment) : 
        echo $segment == "penyakitpage" ? "active":"";
        endforeach;?>">
                    <a class="nav-link" href="<?= base_url('penyakitpage')?>">Data Penyakit</a>
                </li>
                <li class="nav-item <?php foreach ($this->uri->segments as $segment) : 
        echo $segment == "diagnosapage" ? "active":"";
        endforeach;?>">
                    <a class="nav-link" href="<?=base_url('diagnosapage')?>">Diagnosa</a>
                </li>
                <li class="nav-item <?php foreach ($this->uri->segments as $segment) : 
        echo $segment == "tentangpage" ? "active":"";
        endforeach;?>">
                    <a class="nav-link" href="<?= base_url('tentangpage')?>">Tentang Kami</a>
                </li>
                <li>
                    <?php if ($this->session->userdata('status') === "login"):?>
                    <a href="<?php echo base_url('admin/dashboard')?>"
                        class="btn btn-primary rounded-pill px-4 py-1 text-white bg-second-color"
                        style="font-weight: 500; text-transform: uppercase;">Dashboard</a>
                    <?php else: ?>
                    <a href="<?php echo base_url('auth/')?>"
                        class="btn btn-primary rounded-pill px-4 py-1 text-white bg-second-color"
                        style="font-weight: 500; text-transform: uppercase;">Log-In</a>    
                    <?php endif ?>
                    
                </li>

            </ul>

        </div>
    </div>
</nav>
<hr class="m-0">