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
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Artist Name</label>
                                <input type="text" name="artist_name" class="form-control" id="name" data-rule="minlen:4" placeholder="Enter Name" required />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="Sosmed">Social Media</label>
                                <input type="text" class="form-control" name="Sosmed" id="Sosmed" data-rule="minlen:4" placeholder="Most Famous Social Media from Artist" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="CP">Contact Person or About You (max 250 kata)</label>
                                <textarea class="form-control" name="CP" cols="20" rows="5" data-rule="required" placeholder="Enter other contact person and your story as artist"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="image">1st Art</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/*" required />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="Story1">About 1st Art</label>
                                <textarea class="form-control" name="Story1" cols="20" rows="5" data-rule="required" placeholder="About the Art" required></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="image">2nd Art</label>
                                <input type="file" class="form-control" name="image1" id="image" accept="image/*" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="Story2">About 2nd Art</label>
                                <textarea class="form-control" name="Story2" cols="20" rows="5" data-rule="required" placeholder="About the Art"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="image">3rd Art</label>
                                <input type="file" class="form-control" name="image2" id="image" accept="image/*" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="Story1">About 3rd Art</label>
                                <textarea class="form-control" name="Story3" cols="20" rows="5" data-rule="required" placeholder="About the Art"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="submit" name="submit" class="readmore d-block w-100" value="Send Art Works">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'template/footer.php'; ?>