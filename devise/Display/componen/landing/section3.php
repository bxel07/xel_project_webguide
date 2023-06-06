<div class="section3 container py-4">
      <div class="container-fluid py-1 text-center">
        <h1 data-aos="fade-down-right" class="fs-2 fw-bold mb-5 text-center text_title"  style="color:#3F8CFFCC">Recent Update</h1>
        <div class="row g-4">

        <?php foreach ($model as $key => $contact) : ?>
            <div data-aos="fade-up-right" class="col-lg-3">
                <div class="card border border-primary shadow " style="border-radius: 2em;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $contact['title'];?></h5>
                        <p class="card-text">
                            <?= $contact['content'];?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        
      </div>
    </div>

