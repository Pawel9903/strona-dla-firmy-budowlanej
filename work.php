<?php
    include_once ('template/head.php');
?>
<div class="container">
    <h4 class="c-welcome-page-header">Dołącz do naszego zespołu</h4>
    <p class="animate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus eu leo varius ultricies quis ut lectus. Mauris urna neque, tempus sagittis egestas sit amet, semper a felis. Mauris blandit in odio at hendrerit. Morbi malesuada magna faucibus neque rutrum, at scelerisque dui tincidunt. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum.</p>
</div>

<section>
    <h5 class="c-welcome-page-header" >Wyślij nam swoje CV</h5>
    <div class="container">
        <form class="col-md-10 offset-md-1" action="template/validateWorkForm.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name"></label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Imię i Nazwisko">
                <div class="alert alert-danger display-error-name" style="display: none"></div>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input name="email" class="form-control" id="email" placeholder="Email">
                <div class="alert alert-danger display-error-email" style="display: none"></div>
            </div>
            <div class="form-group">
                <label for="phone"></label>
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Telefon">
                <div class="alert alert-danger display-error-phone" style="display: none"></div>
            </div>
            <div class="form-group">
                <label for="description"></label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Napisz coś o sobie"></textarea>
                <div class="alert alert-danger display-error-description" style="display: none"></div>
            </div>
                <div class="form-group">
                    <span>Dodaj CV (dopuszczalny format doc, pdf)</span><br>
                    <input type="file" name="file" id="file">
                    <div class="alert alert-danger display-error-fileError" style="display: none"></div>
                    <div class="alert alert-danger display-error-file" style="display: none"></div>
                </div>
                <br>
            <div class="alert alert-danger display-error" style="display: none"></div>
            <button type="submit" name="submitWork" id="submitWork" class="btn btn-primary border-dark">Wyślij</button>
        </form>
    </div>
</section>
<?php
include_once ('template/footer.php');
?>
