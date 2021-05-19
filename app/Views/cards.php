
<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

    
    <section id="cards">
        <div class="container w-50 text-center">
            <div class="col-md-4 mx-auto mt-3">
                <div class="card " id='cardWord' style="width: 18rem;" onclick='turnSide()'>
                    <div class="card-body my-5">
                        <h2 id='dutchWord' class='d-block'>Venster</h2>
                        <h2 id='englishWord' class='d-none'>Window</h2>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<?= $this->endSection()?>

<script src="assets/js/script.js"></script>