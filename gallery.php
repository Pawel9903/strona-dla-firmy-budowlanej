<?php
    include_once ('template/head.php');
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $idNext = $id+1;
        $idPrevious = $id-1;
        $LastRecord = end($projects);
        $idLast = $LastRecord->id;
    }
    $project = $portfolio->getProjectById($id);
    $images = scandir('images/portfolio/'.$project->folder_name);
?>
<section>
    <div class="c-gallery">
        <div class="container">
            <h4 class="c-welcome-page-header"><?php echo $project->name ;?></h4>
            <h3 class="c-welcome-page-header"><?php echo $project->year ;?></h3>
            <p class="c-gallery-description animate"><?php echo $project->description ;?></p>

            <div class="d-flex justify-content-around flex-wrap">
                            <?php foreach ($images as $image): ?>
                            <?php if($image == '.' || $image == '..'){
                                continue;
                                } ;?>
                            <a href="<?php echo "images/portfolio/".$project->folder_name."/".$image;?>" class="c-gallery-item" data-lightbox="roadtrip">
                                <img class="img-fluid" src="<?php echo "images/portfolio/".$project->folder_name."/".$image;?>" />
                            </a>
                       <?php endforeach;?>
            </div>
            <div class="c-gallery-pages">
                <?php if($id == $idLast):?>
                    <a class="btn btn-outline-success" href="<?php echo "gallery.php?id=".$idPrevious;?>"><< Poprzedni</a>
                <?php elseif ($id == 1): ?>
                    <a class="btn btn-outline-success" href="<?php echo "gallery.php?id=".$idNext;?>">Następny >></a>
                <?php else:?>
                    <a class="btn btn-outline-success" href="<?php echo "gallery.php?id=".$idPrevious;?>"><< Poprzedni</a>
                    <a class="btn btn-outline-success" href="<?php echo "gallery.php?id=".$idNext;?>">Następny >></a>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<?php
include_once ('template/contactFormAndPartners.php');
include_once ('template/footer.php');
?>
