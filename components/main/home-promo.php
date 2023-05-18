<?php
$banners = $conn->query("SELECT * FROM banners");
?>
<div class="row">
    <div class="col-lg-12 col-xxl-4-5col">
        <div class="row">
            <?php while ($banner = $banners->fetch_object()) { ?>
                <div class="col-md-6">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="<?= $banner->image_src ?>" alt="<?= $banner->image_alt ?>">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="<?= $banner->link ?>"><?= $banner->subtitle ?></a></h4>
                            <h3 class="banner-title text-white"><a href="#"><?= $banner->title ?></span></a></h3>
                            <a href="<?= $banner->link ?>" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>