<?php
              foreach ($tbl_data as $data) {?>
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Work</h2>
          <p><?php echo $data->pengalaman_kerja ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/assets/img/1.jpeg'?>" alt="" srcset="" width="300" height="300">
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
					<img src="<?php echo base_url().'assets/assets/img/2.jpeg'?>" alt="" srcset="" width="300" height="300">
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
					<img src="<?php echo base_url().'assets/assets/img/3.jpeg'?>" alt="" srcset="" width="300" height="300">
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->


	<?php } ?>
