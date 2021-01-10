<?php include 'template/header.php'; ?>

<main id="main">

  <!-- ======= Works Section ======= -->
  <section class="section site-portfolio">

    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
          <h2>Hey, Welcome All !</h2>
          <p class="mb-0">Be More Creative &amp; Find Your Style From This Site</p>
        </div>
        <div class="col-md-12 col-lg-12 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
          <div id="filters" class="filters">
          </div>
        </div>
      </div>
      <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
        <?php
        include 'connect.php';
        $data = mysqli_query($koneksi, "SELECT * FROM artist");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="detail.php?id_artist=<?= $d['id_artist'] ?>" class="item-wrap fancybox">
              <div class="work-info">
                <h3><?php echo $d["art1"]; ?></h3>
                <span><?php echo $d["art1"]; ?></span>
              </div>
              <img class="img-fluid" src="Uploads/1/<?= $d["art1"]; ?>">
            </a>
          </div>
          <?php if ($d['art2'] != null) : ?>
            <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
              <a href="detail.php?id_artist=<?= $d['id_artist'] ?>" class="item-wrap fancybox">
                <div class="work-info">
                  <h3><?php echo $d["art2"]; ?></h3>
                  <span><?php echo $d["art2"]; ?></span>
                </div>
                <img class="img-fluid" src="Uploads/2/<?= $d["art2"]; ?>">
              </a>
            </div>
          <?php endif ?>
          <?php if ($d['art3'] != null) : ?>
            <div class="item col-sm-6 col-md-4 col-lg-4 mb-4">
              <a href="detail.php?id_artist=<?= $d['id_artist'] ?>" class="item-wrap fancybox">
                <div class="work-info">
                  <h3><?= $d["art3"]; ?></h3>
                  <span><?= $d["art3"]; ?></span>
                </div>
                <img class="img-fluid" src="Uploads/3/<?= $d["art3"]; ?>">
              </a>
            </div>
          <?php endif ?>
        <?php
        }
        ?>
      </div>
    </div>
  </section> <!-- End Works Section -->

</main><!-- End #main -->

<?php include 'template/footer.php'; ?>