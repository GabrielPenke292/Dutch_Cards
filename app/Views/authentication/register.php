<?= $this->extend('layouts/layout') ?>


<?= $this->section('content') ?>
    <section id="registration">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <h2>Register to use the app</h2>
                    </div>
                
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div><!-- input group -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div><!-- input group -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div><!-- input group -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Confirm password</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div><!-- input group -->

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Imagem</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div><!-- input group -->

                </div><!-- col -->
            </div><!-- row -->
        </div>
    </section>

<?= $this->endSection()?>