<?php get_header(); ?>
<?php get_sidebar(); 
 ?>




<article class="grid_12">
<div class = "si-content">
    
    <!-- Проверка наличия записей в цикле -->
    <?php if ( have_posts() ) : ?>

        <!-- Начало цикла -->
        <?php while ( have_posts() ) : the_post(); ?>
    

        
            <!-- Цикл WordPress -->
            <!-- Здесь уже определилась переменная $post, -->
            <!-- на основе которой будет строится дальнейший код. -->
            <!-- $post будет меняться для каждого поста while( have_posts() ). -->
            <!-- $post нужна, чтобы работали теги шаблона: in_category('3'), the_permalink() и т.д. -->

            <!-- Проверка находится ли этот пост в категории 3. -->
            <!-- Если да, то задаем CSS класс div-у class="post-cat-three". -->
            <!-- Если нет, то класс будет post class="post". -->
      

         
           
    <div class = "si-content__title">            
             <h1><?php the_title(); ?></h1>             
    </div>         
            <div class = "si-content__image">
                <?php the_post_thumbnail('cpi2_single'); ?> 
            </div>
               <!-- Выводим заголовок поста, как ссылку на сам пост. -->
            
            
            <br />



            
        
            <!-- Выводим текст поста в теге div. -->
            <div class="si-content__text">
               <?php the_content(); ?> 
            </div>

            <!-- Выводим категории поста, через запятую. -->
           
            </div> <!-- закрываем основной тег div -->

            <!-- Отсюда цикл начинает повторятся, если есть еще посты -->
            <!-- Останавливаем цикл (endwhile), -->
       <?php 
         endwhile; ?> 
        <!-- Полное окончание цикла. -->

    <!-- Если записей в цикле нет — цикл не сработал (else) -->
    <?php else: ?>

        <p>Нет постов в цикле.</p>

    <?php endif; ?>
                      
</article>
 <div class = 'clear g-content__h-margin'>  </div>  
<?php get_footer(); ?>
    
