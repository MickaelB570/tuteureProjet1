<footer>
    <div class="bg-footer">
        <div >
            <ul class="ul-footer margin-top-test">
                <li><h5><?= $paie ?></h5></li>
                <img class="logo-footer" src="./images/visa.png" alt="">
                <img class="logo-footer" src="./images/mastercard.png" alt="">
                <br>
                <img class="logo-footer" src="./images/paypal.png" alt="">
            </ul>
        </div>
        <div>
            <ul class="ul-footer">
                <li><h5><?= $reseau ?></h5></li>
                <img class="logo-footer-rs-image"  src="./images/twitter.png" alt="">
                <img class="logo-footer-rs-image"   src="./images/facebook.png" alt="">
                <img class="logo-footer-rs-image" src="./images/instagram.png" alt="">
            </ul>
        </div>
        <div>
            <ul class="ul-footer">
                <li><h5><?= $info ?></h5></li>
                <li><?= $mention ?></li>
                <li><?= $condition ?></li>
            </ul>
        </div>
    </div>
    <p class="footer-droit-réservé">&copy; 2022 Manga Store,<?= $droit ?>.</p>
   </footer>