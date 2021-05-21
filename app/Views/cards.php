
<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

    
    <section id="cards">
        <div class="container w-50 text-center">
            <div class="col-md-4 mx-auto mt-3">
                <div class="card " id='cardWord' style="width: 18rem;" onclick='turnSide()'>
                    <div class="card-front my-5 active">
                        <h2 id='dutchWord' class=''>Venster</h2>
                    </div>
                    <div class="card-back my-5">
                        <h2 id='englishWord' class=''>Window</h2>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<?= $this->endSection()?>

<script src="assets/js/script.js"></script>