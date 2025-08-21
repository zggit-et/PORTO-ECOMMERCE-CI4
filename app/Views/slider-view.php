
<div>
    <?php foreach ($sliderData as $slide): ?>                       
    <div class="home-slide">
        <div class="owl-lazy slide-bg" data-src="<?= base_url()/$slide['image'] ?>"></div>
              <div class="home-slide-content">
                  <h3><?= $slide['subtitle'] ?></h3>
                    <h1><?= $slide['title'] ?></h1>
                    <p><?= $slide['description'] ?></p>
                      <a href="<?= base_url('category/') ?>" class="btn btn-dark">Shop Now</a>
        </div><!-- End .home-slide-content -->
    </div><!-- End .home-slide -->
    <?php endforeach; ?>
 </div>