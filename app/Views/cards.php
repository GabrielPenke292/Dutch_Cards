
<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

    
    <section id="cards">
        <div class="container w-50 text-center">
            <div class="col-md-4 mx-auto mt-3">
                <div class="card " id='cardWord' style="width: 18rem;" onclick='turnSide()'>
                    <div class="card-front my-auto active">
                        <h2 id='dutchWord' class='text-white'>Venster</h2>
                    </div><!-- Front -->
                    <div class="card-back my-auto">
                        <h2 id='englishWord' class='text-white'>Window</h2>
                    </div><!-- Back -->
                </div><!-- Card -->
                <button type="button" class="btn btn-primary" onclick="nextWord()">Next</button>
            </div>
        </div>
    </section>
<?= $this->endSection()?>

<script src="assets/js/script.js"></script>