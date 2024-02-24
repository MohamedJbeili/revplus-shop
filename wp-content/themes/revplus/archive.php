<?php
get_header();
?>

<div id="content" class="site-content container">
    <main id="main" class="site-main">
        <header class="page-header">
            <h1 class="page-title"><?php single_cat_title(); ?></h1>
            <div class="taxonomy-description"><?php echo category_description(); ?></div>
        </header>

        <?php
if (is_category()) {
    $this_category = get_category($cat);
    }
    ?>
    <?php
    if($this_category->category_parent)
    $this_category = wp_list_categories('orderby=id&show_count=0
    &title_li=&use_desc_for_title=1&child_of='.$this_category->category_parent.
    "&echo=0"); else
    $this_category = wp_list_categories('orderby=id&depth=1&show_count=0
    &title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID.
    "&echo=0");
    if ($this_category) { ?> 
  
<ul>
<?php echo $this_category; ?>
  
</ul>
  
<?php } ?>
    </main>
</div>

<?php

get_footer();
