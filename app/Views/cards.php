
<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

    
    <section id="cards">
        <div class="container">
            <div class="row text-center">
                <div class="col"></div>
                <div class="col-md-4 mt-3">
                    <div class="card " id='cardWord' onclick='turnSide()'>
                        <div class="card-front my-auto active">
                            <h2 id='dutchWord' class='text-white'>Venster</h2>
                        </div><!-- Front -->
                        <div class="card-back my-auto">
                            <h2 id='englishWord' class='text-white'>Window</h2>
                        </div><!-- Back -->
                    </div><!-- Card -->
                </div><!-- col -->
                <div class="col"></div>
            </div>
            <div class="row w-50 mt-2 mx-auto text-center">
                <div class="col"></div>
                <div class="col-md-8 text-center">
                    <button type="button" class="btn btn-primary px-2">Previous</button>
                    <button type="button" class="btn btn-primary px-2" onclick="nextWord()">Next</button>    
                </div>
                <div class="col-md-2"></div>
            </div>
            
        </div><!-- container -->
    </section>
<?= $this->endSection()?>

<script src="assets/js/script.js"></script>