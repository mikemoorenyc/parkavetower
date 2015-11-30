<?php
/**
 * Template Name: Home Page
 */
?>
<?php global $siteDir; global $homeURL;?>

<?php get_header(); ?>

<?php
include 'topSection.php';
include 'section-bwb.php';
include 'section-amenities.php';
include 'section-location.php';
//include 'section-reimagined.php';
include 'section-workspace.php';
include 'section-contact.php';
?>


<?php get_footer(); ?>
