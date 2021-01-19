<?php
if (isset($_GET['id_artist'])) {
    $id_artist    = $_GET['id_artist'];
} else {
    die("Error. No ID Selected!");
}
include 'connect.php';
$query    = mysqli_query($koneksi, "SELECT * FROM artist WHERE id_artist='$id_artist'");
$d        = mysqli_fetch_array($query);
?>
<?php include 'template/header.php'; ?>
<section class="section">
    <div class="container">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6" data-aos="fade-up">
                <h2><?= $d["artist_name"]; ?></h2>
                <p>This is the detail from the arts from <?= $d["artist_name"]; ?>.</p>
            </div>
        </div>
    </div>
    <?php if ($d['art1'] != null) : ?>
        <div class="site-section pb-0">
            <div class="container section">
                <div class="row align-items-stretch">
                    <div class="col-md-8" data-aos="fade-up">
                        <img src="Uploads/1/<?= $d["art1"]; ?>" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="sticky-content">
                            <p>CP : <?= $d["Sosmed"]; ?></p>
                            <p class="mb-4"><span class="text-muted"></span> <?= $d["CP"]; ?></p>

                            <h3 class="h3">About the Art</h3>
                            <div class="mb-5">
                                <p><?= $d["Story1"]; ?></p>
                                <p>Size Before : <?= $d["size1"]; ?></p>
                                <p>Size After : <?php echo filesize("Uploads/1/" . $d['art1']) ?></p>
                            </div>

                            <p><a href="download.php?art1=<?= $d['art1'] ?>" class="readmore">Download</a></p>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php if ($d['art2'] != null) : ?>
            <div class="container section">
                <div class="row align-items-stretch">
                    <div class="col-md-8" data-aos="fade-up">
                        <img src="Uploads/2/<?= $d["art2"]; ?>" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="sticky-content">
                            <h3 class="h3">About the Art</h3>
                            <div class="mb-5">
                                <p><?= $d["Story2"]; ?></p>
                                <p>Size Before : <?= $d["size2"]; ?></p>
                                <p>Size After : <?php echo filesize("Uploads/2/" . $d['art2']) ?></p>
                            </div>

                            <p><a href="download.php?art2=<?= $d['art2'] ?>" class="readmore">Download</a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php if ($d['art3'] != null) : ?>
            <div class="container section">
                <div class="row align-items-stretch">
                    <div class="col-md-8" data-aos="fade-up">
                        <img src="Uploads/3/<?= $d["art3"]; ?>" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="sticky-content">
                            <h3 class="h3">About the Art</h3>
                            <div class="mb-5">
                                <p><?= $d["Story3"]; ?></p>
                                <p>Size Before : <?= $d["size3"]; ?></p>
                                <p>Size After : <?php echo filesize("Uploads/3/" . $d['art3']) ?> </p>
                            </div>

                            <p><a href="download.php?art3=<?= $d['art3'] ?>" class="readmore">Download</a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        </div>
</section>
<?php include 'template/footer.php'; ?>