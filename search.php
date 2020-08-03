<?php
/*
Template Name: search
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>


<div class = "grid_12 s-search-display">
    
    <?php
    if (have_posts()) :
   
    echo '<h2><div class="s-search-display__result">Результаты поиска: <span class = "s-search-display__word">' . get_search_query() . '</span></div></h2>'; ?>
    
   <?php 
    $i = 0;
    while (have_posts()) : the_post();
    
    
    if ($i == 0)
    {
        
    }
    else
    {
        echo "<div class = 's-search-display__line'></div>";
    }
    ?>
    
    <div class="s-search-display__title">
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    </div>
    
    <div class = "s-search-display__about">
        <p><?php the_excerpt() ?></p>
    </div>
    
    <div class = "s-search-display__date">
        Дата добавления: <?php the_date() ?>
    </div>
    

    <?php $i++; endwhile; ?>
</div>



    <?php

    else :
    echo "<div class = 's-search-display__error'>По Вашему запросу «<span class = 's-search-display__word'>" . get_search_query() . "</span>» ничего не найдено</div>";
    endif;
    ?>

<!--«»-->


</div>
    <div class = 'clear g-content__h-margin'>  </div>    
    


<?php get_footer(); ?>«