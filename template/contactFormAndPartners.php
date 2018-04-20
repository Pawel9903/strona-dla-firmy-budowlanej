<section>
    <h5 class="c-welcome-page-header" >Formlarz kontaktowy</h5>
    <div class="container">
        <form class="col-md-10 offset-md-1" id="contactForm" action="template/validateContactForm.php" method="post">
            <div class="form-group">
                <label for="name"></label>
                <input name="name" id="name" type="text" class="form-control" placeholder="Imię i Nazwisko/Firma">
                <div class="alert alert-danger display-error-name" style="display: none"></div>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input name="email"  class="form-control" id="email" aria-describedby="text" placeholder="Email">
                <div class="alert alert-danger display-error-email" style="display: none"></div>
            </div>
            <div class="form-group">
                <label for="phone"></label>
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Telefon">
                <div class="alert alert-danger display-error-phone" style="display: none"></div>
            </div>
            <div class="form-group">
                <label for="subject"></label>
                <input name="subject" type="text" class="form-control" id="subject" placeholder="Temat">
                <div class="alert alert-danger display-error-subject" style="display: none"></div>
            </div>
            <div class="form-group">
                <label for="description"></label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Treść"></textarea>
                <div class="alert alert-danger display-error-description" style="display: none"></div>
            </div>
            <button type="submit" name="submitContact" id="submitContact" class="btn btn-primary border-dark">Wyślij</button>
        </form>
    </div>

    <div class="container">

        <div class="row">
            <h5 class="c-welcome-page-header" >Nasi partnerzy</h5>
            <a class="c-partners-item col-sm-4 img-fluid" href="#"><img src="../images/logo/nameLogo172x25.png"></a>
            <a class="c-partners-item col-sm-4 img-fluid" href="#"><img src="../images/logo/nameLogo172x25.png"></a>
            <a class="c-partners-item col-sm-4 img-fluid" href="#"><img src="../images/logo/nameLogo172x25.png"></a>
            <a class="c-partners-item col-sm-4 img-fluid" href="#"><img src="../images/logo/nameLogo172x25.png"></a>
            <a class="c-partners-item col-sm-4 img-fluid" href="#"><img src="../images/logo/nameLogo172x25.png"></a>
            <a class="c-partners-item col-sm-4 img-fluid" href="#"><img src="../images/logo/nameLogo172x25.png"></a>
        </div>
    </div>
</section>