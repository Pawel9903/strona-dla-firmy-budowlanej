<?php
    include_once ('template/head.php');

    $build = scandir('images/services/build');
    $earthWork = scandir('images/services/earthWork');
    $rent = scandir('images/services/rent');
?>
<section>
    <h4 class="c-welcome-page-header">Nasze usługi</h4>
    <div class="c-services">
        <div class="container">
            <h4 class="c-welcome-page-header">Usługi ogólnobudowlane</h4>
            <p class="animate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus eu leo varius ultricies quis ut lectus. Mauris urna neque, tempus sagittis egestas sit amet, semper a felis. Mauris blandit in odio at hendrerit. Morbi malesuada magna faucibus neque rutrum, at scelerisque dui tincidunt. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum.</p>
                <div class="animate d-flex justify-content-around flex-wrap">
                    <?php foreach ($build as $image): ?>
                        <?php if($image == '.' || $image == '..'){
                            continue;
                        } ;?>
                        <a href="<?php echo "images/services/build/".$image;?>" class="c-gallery-item" data-lightbox="roadtrip1">
                            <img class="img-fluid" src="<?php echo "images/services/build/".$image;?>" />
                        </a>
                    <?php endforeach;?>
                </div>
            <h4 class="c-welcome-page-header">Roboty ziemne</h4>
            <p class="animate" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus eu leo varius ultricies quis ut lectus. Mauris urna neque, tempus sagittis egestas sit amet, semper a felis. Mauris blandit in odio at hendrerit. Morbi malesuada magna faucibus neque rutrum, at scelerisque dui tincidunt. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum.</p>
            <div class="animate d-flex justify-content-around flex-wrap">
                <?php foreach ($earthWork as $image): ?>
                    <?php if($image == '.' || $image == '..'){
                        continue;
                    } ;?>
                    <a href="<?php echo "images/services/earthWork/".$image;?>" class="c-gallery-item" data-lightbox="roadtrip2">
                        <img class="img-fluid" src="<?php echo "images/services/earthWork/".$image;?>" />
                    </a>
                <?php endforeach;?>
            </div>
            <h4 class="c-welcome-page-header">Wypożyczanie sprzętu</h4>
            <p class="animate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus eu leo varius ultricies quis ut lectus. Mauris urna neque, tempus sagittis egestas sit amet, semper a felis. Mauris blandit in odio at hendrerit. Morbi malesuada magna faucibus neque rutrum, at scelerisque dui tincidunt. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum.</p>
            <div class="animate d-flex justify-content-around flex-wrap">
                <?php foreach ($rent as $image): ?>
                    <?php if($image == '.' || $image == '..'){
                        continue;
                    } ;?>
                    <a href="<?php echo "images/services/rent/".$image;?>" class="c-gallery-item" data-lightbox="roadtrip3">
                        <img class="img-fluid" src="<?php echo "images/services/rent/".$image;?>" />
                    </a>
                <?php endforeach;?>
            </div>

        </div>
    </div>
</section>
<?php
include_once ('template/contactFormAndPartners.php');
include_once ('template/footer.php');
?>
