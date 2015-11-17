<?php wp_footer(); ?>
<div class="container angekommen">
        <div class="row"><h3>ANGEKOMMEN?</h3></div>
</div>
<section class="kontakt">
    <div class="container">
        <div class="row footerbutton"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <i class="fa fa-user"></i>
                <span>Susanne Beck</span>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <i class="fa fa-map-marker"></i>
                <span>Heimgartenweg 7 <br /><p style="padding-left: 2.4rem;"> 86161 Augsburg</p></span>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="mailto:hallo@mein-eigenraum.com">
                    <i class="fa fa-envelope-o"></i>
                    hallo@mein-eigenraum.com
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="tel: 0170 - 60 93 151"><i class="fa fa-phone"></i>
                0170 6093151</a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <ul>
                <li>Mein Eigenraum &copy; 2015</li>
                <li class="trenner"> | </li>
                <li><a href="/kontakt">Kontakt</a></li>
                <li class="trenner"> | </li>
                <li><a href="/impressum">Impressum</a></li>
                <li class="trenner"> | </li>
                <li><a href="/immobilien">Immobilien</a></li>
                <li class="trenner"> | </li>
                <li><a href="/dein-eigenraum">Dein Eigenraum</a></li>
                <li class="trenner"> | </li>
                <li><a href="/susanne-beck">Susanne Beck</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://mein-eigenraum.com/wp-content/themes/eigenraum/dist/js/bootstrap.min.js"></script>
<script>
    var $buoop = {c:2};
    function $buo_f(){
        var e = document.createElement("script");
        e.src = "//browser-update.org/update.js";
        document.body.appendChild(e);
    };
    try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
    catch(e){window.attachEvent("onload", $buo_f)}
</script>

</body>
</html>