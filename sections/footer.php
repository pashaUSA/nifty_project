<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-sm-6 col-md-4">
                    <?php include_once "sections/section-facebook.php"; ?>
                </div>
                <div class="footer-col col-sm-6 col-md-4">
                    <?php include_once "sections/section-twitter.php"; ?>
                </div>
                <div class="footer-col col-sm-12 col-md-4">
                    <?php include_once "sections/section-address.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <?php include_once "sections/section-copyright.php"; ?>
            </div>
        </div>
    </div>
</footer>
<?php
    include_once "sections/curency-converter.php";
    include_once "sections/bottom-include.php";
?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-XXXXXXXX-X', 'auto');
    ga('send', 'pageview');
</script>