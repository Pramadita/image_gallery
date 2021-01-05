<?php include 'template/header.php'; ?>
<main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-12 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2>Show your best art work...</h2>
                    <p class="mb-0">We hope that the best artwork that you upload here can be recognized by many people. </br>You can submit 3 of your best works</p>
                </div>
            </div>
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-12 mb-4 mb-lg-0" data-aos="fade-up">

                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-6 form-group">
                            <label for="image">1st Art</label>
                            <input type="file" class="form-control" name="image" id="image" accept="image/*" required />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="image">2nd Art</label>
                            <input type="file" class="form-control" name="image1" id="image" accept="image/*" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="image">3rd Art</label>
                            <input type="file" class="form-control" name="image2" id="image" accept="image/*" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="submit" name="submit" class="readmore d-block w-100" value="Send Art Works">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'template/footer.php'; ?>