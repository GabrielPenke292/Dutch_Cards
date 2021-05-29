
<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>
<div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <section id="sidebar" class="col-md-4 d-flex justify-content-between">
                <div class="col-md-2"></div>
                <div class="col-md-8 bg-primary p-4">
                    <div class="avatar w-100">
                        <img src="<?= base_url() ?>/assets/img/avatar1.png" alt="user-avatar">
                        <h3>Fulano de Tal</h3>
                    </div><!-- avatar -->
                    
                    <div class="numbers">
                        1/36
                    </div><!-- numbers -->
                </div>
                <div class="col-md-2"></div>

            </section><!-- sidebar -->

            <section id="cards" class="col-md-7">
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
            </section>    
        </div>
    </div><!-- container -->
<?= $this->endSection()?>

<script src="assets/js/script.js"></script>