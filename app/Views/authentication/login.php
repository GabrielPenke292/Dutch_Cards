
<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row text-center justify-content-center" style='margin-top: 45px;'>
        <div class="col-md-4 col-md-offset-4">
            <h4>Sign In</h4><hr>
            <form action="check" method='get'>
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name='email' placeholder="Enter your email" value=''>
                    <span class='text-danger'><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                </div><!-- form group -->

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name='password' placeholder="Enter your password">
                    <span class='text-danger'><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                </div><!-- form group -->

                
                <div class="form-group mt-4">
                    <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                </div><!-- form group -->
                <br>
                <a href="<?= base_url("auth/register") ?>">I have no account</a>
            </form>
        </div>
    </div><!-- row -->
</div><!-- container -->

<?= $this->endSection()?>