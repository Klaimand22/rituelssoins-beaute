<?php /* Template Name: A Propos */
get_header();

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
?>



<!-- KALENDES SCRIPT -->

<script src="https://www.kalendes.com/site/scripts/widget.js" type="text/javascript"></script>
<div id="kalendes-widget-container"></div>

<script src="https://www.kalendes.com/widget/widget.js" type="text/javascript"></script>
<script>
    /*<![CDATA[*/
    kalendes_host = "rsb"; /*]]>*/
</script>
<div id="kalendes-widget-container"></div> <!-- END OF KALENDES WIDGET -->

<?php get_footer(); ?>