<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-info">
                        <h3>Sous les Cocotiers</h3>
                        <p>
                            A108 Adam Street <br/>
                            NY 535022, BENIN<br/><br/>
                            <strong>Phone:</strong> +229 62929439<br/>
                            <strong>Email:</strong> <a href="#">slescocotiers@gmail.com</a><br/>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 footer-links">
                    <h4>Liens utiles</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="<?= PATH_PROJECT ?>client/acceuil">Accueil</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="<?= PATH_PROJECT ?>client/chambres">Chambres</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="<?= PATH_PROJECT ?>client/restaurant">Restaurant</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="<?= PATH_PROJECT ?>client/galeries">Galeries</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="<?= PATH_PROJECT ?>client/contact">Contact</a>
                        </li>

						<?php
						if (check_if_user_connected_client()) {
							?>

                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= PATH_PROJECT ?>client/profil">Mon Profile</a>
                            </li>

                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= PATH_PROJECT ?>client/liste_des_reservations">Liste des reservations</a>
                            </li>

                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= PATH_PROJECT ?>client/liste_des_commandes">Liste des commandes</a>
                            </li>

                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= PATH_PROJECT ?>client/liste_des_messages">Liste des messages</a>
                            </li>

                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="<?= PATH_PROJECT ?>client/deconnexion">Déconnexion</a>
                            </li>

							<?php
						}
						?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Sous Les Cocotiers</span></strong>. Tout Droit Reservé
        </div>
        <div class="credits">
            Designed by <a href="#">Franco Services</a>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- Bootstrap core JavaScript-->
<script src="<?= PATH_PROJECT ?>public/jquery/jquery.min.js"></script>
<script src="<?= PATH_PROJECT ?>public/js/bootstrap.min.js"></script>

<script src="<?= PATH_PROJECT ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= PATH_PROJECT ?>public/outils/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= PATH_PROJECT ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= PATH_PROJECT ?>public/js/sb-admin-2.js"></script>

<!-- Inclure Select2 JS -->
<script src="<?= PATH_PROJECT ?>public/vendor/select2/js/select2.min.js"></script>


<script src="<?= PATH_PROJECT ?>public/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?= PATH_PROJECT ?>public/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="<?= PATH_PROJECT ?>public/js/demo/datatables-demo.js"></script>


<!-- outils JS Files -->

<script src="<?= PATH_PROJECT ?>public/outils/aos/aos.js"></script>

<script src="<?= PATH_PROJECT ?>public/outils/glightbox/js/glightbox.min.js"></script>

<script src="<?= PATH_PROJECT ?>public/outils/isotope-layout/isotope.pkgd.min.js"></script>

<script src="<?= PATH_PROJECT ?>public/outils/swiper/swiper-bundle.min.js"></script>

<script src="<?= PATH_PROJECT ?>public/js/main.js"></script>

</body>

</html>