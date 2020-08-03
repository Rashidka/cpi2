<?php get_header(); 

$string_1 = 'computer';
$string_2 = 'system';

$top_term = cpi2_get_top_term( 'category' );


if (($top_term->name) == 'Компьютер')
{
   ?> 
    
    <img class = "с-banner" src="<?php echo get_stylesheet_directory_uri(); ?>/images/computer.png" alt="" />
<?php
}
if (($top_term->name) == 'Система')
{
    ?>

    <img class = "с-banner" src="<?php echo get_stylesheet_directory_uri(); ?>/images/system.png" alt="" />
<?php
}

?>




<?php get_sidebar(); 
$i = 0; ?>




<article class="grid_12">
    
    <!-- Проверка наличия записей в цикле -->
    <?php if ( have_posts() ) : ?>
    <div class = "c-content">
        <h1 class = "c-content__category">
            <?php 
            $top_term = cpi2_get_top_term( 'category' );
            echo $top_term->name; 
            ?>
        </h1>
    </div>
        <!-- Начало цикла -->
        <?php while ( have_posts() ) : the_post(); ?>
    <?php    
        if ($i == 0)
    {
        ?><div></div><?php
    }
    else
    {
        ?><div class="c-content__h-br">
            </div><?php
    }
    ?>

        
         

                          
            <h2 class = "c-content__title"><a href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <h3 class = "c-content__sub-cat">(<?php the_category('>', ''); ?>)</h3>            
            <br />         
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
<div class = "c-content-im-ab">            
            
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('cpi2_category', array(
'class'=>'c-content__image') ); ?> </a>
        
               <!-- Выводим заголовок поста, как ссылку на сам пост. -->
      
            <br />



            <div class = "c-content__about">
                <?php the_excerpt(); ?>     
            </div>
</div>     
            <div class = 'clear'>  </div>
            <!-- Выводим текст поста в теге div. 
            

            <!-- Выводим категории поста, через запятую. -->
           
          <!-- закрываем основной тег div -->

            <!-- Отсюда цикл начинает повторятся, если есть еще посты -->
            <!-- Останавливаем цикл (endwhile), -->
       <?php $i++;
         endwhile; ?> 
        <!-- Полное окончание цикла. -->

    <!-- Если записей в цикле нет — цикл не сработал (else) -->
    <?php else: ?>
        <h2><div class = "s-search-display__error">
            Нет постов в цикле
            </div></h2>
    
     
    <?php endif; ?>
  
 
</article>
<div class="grid_16 c-content__pagination">
    <?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>
</div>
<?php get_footer(); ?>
    
