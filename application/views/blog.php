<main id="main" class="mt-5 pt-5">
    <!-- ======= More Services Section ======= -->
    <section id="">
        <div class="container blog">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach ($post as $post) { ?>
                        <div class="card border p-0 mb-5" style="width: 100%;">
                            <img class="card-img-top" src="<?= base_url('upload/blogs/' . $post['coverimg']) ?>" height="350" alt="Card image cap">
                            <div class="card-body p-5">
                                <h1 class="card-title"><?= $post['title'] ?></h1>
                                <div class="content-truncate">
                                    <?= $post['content'] ?>
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-10 mx-auto pb-5">
                                <a href="<?= base_url('#appointment') ?>" class="btn btn-lg text-white shadow-lg" type="button" style="background-color: #1977cc;">Make an Appointment</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-md-4 border pt-2">
                    <h4 class="text-center">Recent Posts</h4>
                    <?php foreach ($posts as $post) { ?>
                        <!-- Media object -->
                        <div class="d-flex border-bottom p-4">
                            <!-- Image -->
                            <img src="<?= base_url('upload/blogs/' . $post['coverimg']) ?>" alt="title image1" class="me-3" style="width: 60px; height: 60px;" />
                            <!-- Body -->
                            <div>
                                <a href="<?= base_url('blog/?postid=' . $post['postid']) ?>"><?= $post['title'] ?></a>
                                <small class="text-muted d-block">Posted on <?= date('F d,Y', strtotime($post['createddatetime'])) ?></small>
                            </div>
                        </div>
                        <!-- Media object -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </section><!-- End More Services Section -->

</main><!-- End #main -->