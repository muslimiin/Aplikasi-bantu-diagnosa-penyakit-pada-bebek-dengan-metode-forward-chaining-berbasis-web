<section id="login">
    <div class="container">
        <div class="row justify-content-center ms-auto">
            <div class="col-md-7">
                <?= $this->session->flashdata('message'); ?>

                <div class="card">
                    <div class="card-header text-center">
                        <h3>Form Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('auth/prosesLogin') ?>">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" placeholder="masukkan email ..." class="form-control" id="email"
                                    name="email" aria-describedby="emailHelp">
                            </div>


                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="d-flex form__password">
                                    <input type="password" id="password" name="password"
                                        placeholder="masukkan password ..."><button type="button" name="passwordBtn"
                                        id="passwordBtn"><i id="passwordIcon" class="far fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary form-control bg-second-color"
                                    name="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<script>
let passBtn = document.querySelector("#passwordBtn");
let passIcon = document.querySelector("#passwordIcon");
let passInput = document.querySelector("#password");
passBtn.addEventListener("click", function() {
    if (passIcon.classList.contains('fa-eye')) {
        passIcon.setAttribute("class", 'far fa-eye-slash');
        passInput.setAttribute('type', 'text');
    } else {
        passIcon.setAttribute('class', 'far fa-eye');
        passInput.setAttribute('type', 'password');
    }
});
</script>