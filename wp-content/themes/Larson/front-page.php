<?php get_header();?>

<div class="container">
    <h1><?php the_title();?></h1>
    <?php get_template_part('includes/section','content');?>
</div>


<div class="container">
<div class="row">

<div class="col-6">This is the left part, that is really good </div>
<div class="col-6">This is the right part, and bootstrap woorks</div>

</div>

</div>


<?php get_footer();?>