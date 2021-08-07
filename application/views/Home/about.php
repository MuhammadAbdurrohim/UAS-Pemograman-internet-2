	
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Profile</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

				<?php
              foreach ($tbl_data as $data) {?>
        <div class="row">
          <div class="col-lg-4">
            <img src="<?php echo base_url().'assets/assets/img/Rohim2.jpeg'?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3><?php echo $data->nama ?></h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Tanggal lahir:</strong> <?php echo $data->tgl_lahir ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Jenis Kelamin:</strong> <?php echo $data->jenis_kelamin ?></li>
									<li><i class="bi bi-rounded-right"></i> <strong>Agama:</strong> <?php echo $data->agama ?></li>
                </ul>
              </div>
              <div class="col-lg-6">
								<ul>
									<li><i class="bi bi-rounded-right"></i> <strong>Nomer Telepon:</strong> <?php echo $data->no_hp ?></li>
									<li><i class="bi bi-rounded-right"></i> <strong>Kota:</strong> <?php echo $data->kota ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Alamat :</strong> <?php echo $data->alamat ?></li>
                  <!-- <li><i class="bi bi-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> Available</li> -->
                </ul>
              </div>
            </div>
            <!-- <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> -->
          </div>
        </div>

      </div>
								<?php } ?>
    </section><!-- End About Section -->

  </main><!-- End #main -->
