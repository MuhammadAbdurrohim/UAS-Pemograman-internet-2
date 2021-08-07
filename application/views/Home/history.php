<?php
              foreach ($tbl_data as $data) {?>
  <main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>History Education</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Alice Barkley</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
              </p>
            </div> -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4><?php echo $data->nama_sekolah3 ?></h4>
              <h5><?php echo $data->tamat_sekolah3 ?></h5>
              <!-- <p><em>Rochester Institute of Technology, Rochester, NY</em></p> -->
              <!-- <p>Pengalaman Juara 1 lomba Murottal hafalan qur'an (juz'amma) tingkat Kecamatan antar SD se kecamatan Klangenan</p> -->
            </div>
            <div class="resume-item">
              <h4><?php echo $data->nama_sekolah2 ?></h4>
              <h5><?php echo $data->tamat_sekolah2 ?></h5>
              <!-- <p><em>Rochester Institute of Technology, Rochester, NY</em></p> -->
              <!-- <p>Pengalaman Juara 1 lomba Murottal hafalan qur'an (juz'amma) tingkat Kecamatan antar SD se kecamatan Klangenan</p> -->
            </div>
            <div class="resume-item">
              <h4><?php echo $data->nama_sekolah1 ?></h4>
              <h5><?php echo $data->tamat_sekolah1 ?></h5>
              <!-- <p><em>Rochester Institute of Technology, Rochester, NY</em></p> -->
              <!-- <p>Pengalaman Juara 1 lomba Murottal hafalan qur'an (juz'amma) tingkat Kecamatan antar SD se kecamatan Klangenan</p> -->
            </div>
          <!-- <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
              </p>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->


	<?php } ?>
