
<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

    
    <section id="cards">
        <div class="container w-50 text-center">
            <div class="col-md-4 mx-auto mt-3">
                <div class="card " style="width: 18rem;">
                    <div class="card-body my-5">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<?= $this->endSection()?>