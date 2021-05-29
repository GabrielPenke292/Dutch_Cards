
<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <section id="sidebar" class="col-md-4 d-flex">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-primary p-4">
                <div class="avatar w-100">
                    <img src="<?= base_url() ?>/assets/img/avatar1.png" alt="user-avatar">
                    <h3>Fulano de Tal</h3>
                </div><!-- avatar -->
                
                <div class="numbers">
                    1/5
                </div><!-- numbers -->
            </div>
            <div class="col-md-2"></div>

        </section><!-- sidebar -->
        <div class="col-md-4">
            <form class="border border-primary p-5">
                <div class="mb-3">
                    <label for="dutchWord" class="form-label">Dutch Word</label>
                    <input type="text" class="form-control" id="dutchWord" placeholder="Type a new dutch word">
                </div>
                <div class="mb-3">
                    <label for="englishWord" class="form-label">English Word</label>
                    <input type="text" class="form-control" id="englishWord" placeholder="Type a new english word">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" onclick="saveNewCard()">Save card</button>
                </div>
                
            </form>
        </div>
        <div class="col-md-2"></div>
    </div><!--row -->

</div>


<?= $this->endSection()?>