<?php
    include_once ('template/head.php');
?>

<h4 class="c-welcome-page-header">Nasze Realizacje</h4>

<div class="animate c-portfolio">
    <div class="container">
        <div class="d-flex justify-content-around flex-wrap">
            <?php foreach ($projects as $project => $field): ?>
                    <a href="<?php echo "gallery.php?id=".$field->id;?>" class="c-portfolio-item">
                        <img class="img-fluid" src=<?php echo "images/portfolio/".$field->folder_name."/1.jpg";?>/>
                        <div class="c-portfolio-text">
                                <h4><?php echo $field->name ;?></h4>
                                <h4><?php echo $field->investor ;?></h4>
                                <h4><?php echo $field->year ;?></h4>
                                <p><?php echo substr($field->description,0,50)."..." ;?></p>
                        </div>
                    </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>



<?php
include_once ('template/contactFormAndPartners.php');
include_once ('template/footer.php');
?>
