   <section id="portfolio" class="portfolio mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Hasil Jepret Kami</h2>
        </div>

        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
          <?php foreach ($data['portfolio'] as $key) : ?>
          <div class="col-lg-6 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="<?= BASE_URL ?>/upload/testimoni/<?= $key['foto']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="<?= BASE_URL ?>/upload/testimoni/<?= $key['foto']; ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-show"></i></a>
                
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->