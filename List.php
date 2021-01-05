<?php include 'template/header.php'; ?>
<main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-9 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2>Here it is, artists with their work of pride !</h2>
                </div>
            </div>
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-12 mb-4 mb-lg-0" data-aos="fade-up">
                    <?php
                    include 'connect.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM artist");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <li>
                            <a href="detail.php?id_artist=<?php echo $d['id_artist']; ?>"><?php echo $d["artist_name"]; ?></a>
                        </li>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </section> <!-- End Works Section -->

</main><!-- End #main -->
<?php include 'template/footer.php'; ?>