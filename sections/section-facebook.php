<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1690752634540293";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<h3>Facebook Feeds</h3>
<div class="fb-page" data-href="<?php echo $facebookLink ?>" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="<?php echo $facebookLink ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $facebookLink ?>">CAS 222</a></blockquote>
</div>
