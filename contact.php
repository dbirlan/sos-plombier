<?php require_once("header.php") ?>
    <!--Section: Contact v.2-->
    <section class="formulaire">
    <div class="container">
        <!--Section heading-->
        <h1 class="h1-responsive font-weight-bold text-center my-4">Contactez-nous !</h1>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Un projet ? Une question ? N'hésitez pas à nous contacter en
            remplissant le formulaire ci-dessous !</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Votre nom</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Votre email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <input type="text" id="phone" name="phobe" class="form-control">
                                <label for="phone" class="">Votre numéro de téléphone</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Sujet</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="4"
                                    class="form-control md-textarea"></textarea>
                                <label for="message">Votre demande</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left d-flex justify-content-center">
                    <a class="cta btn" style="color:white"
                        onclick="document.getElementById('contact-form').submit();">Envoyer ma demande</a>
                </div>
                <div class=" d-flex justify-content-center">
                    <p><strong>Reçevez votre devis en 24h !</strong></p>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

        </div>
    </div>



</section>
<!--Section: Contact v.2-->
<section class ="container-fluid pt-0">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11055.003323737785!2d-1.1317973!3d46.1557076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46950931eaaf9e34!2sSOS%20PLOMBERIE!5e0!3m2!1sfr!2sfr!4v1590847265582!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
<!--Section: Contact v.2-->
<?php require_once("footer.php") ?>