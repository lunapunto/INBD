<?php
require_once('functions.php');
$scriptsstyles = scriptsstyles(false, 'footer');
?>
<!-- Input helpers -->
<input type="hidden" name="ajaxurl" id="ajaxurl" value="<?= dir.'/ajax';?>"/>
<input type="hidden" name="dir" id="dir" value="<?= dir;?>"/>

</div><!-- #wrapper-->


<?= $scriptsstyles;?>

<!-- On finish loading -->
<script type="text/javascript" defer>
  $(window).on('load', function(){
    $('#loader').fadeOut(500);
    $('body').addClass('loaded');
    onLoad();
  });
</script>

</body>
</html>
