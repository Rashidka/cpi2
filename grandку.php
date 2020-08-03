<?php
/**
 * Template Name: Главная страница
 */
?>


<?php get_header(); ?>

<?php get_sidebar(); ?>

<article class = "grid_12 rash">
    
<?php 
for ($j = 0; $j < 2; $j++)
{
    
    if ($j == 0)
    {
        $cat = 7;
    }
    else
    {
        $cat = 8;
    }
  $query = new WP_Query( array( 'cat' => $cat, 'posts_per_page' => 6 ) ); 
    $i = 0;


 echo "<div class = 'category'><h1>";
        ?> <a href = "<?php echo get_category_link($cat); ?>">

         <?php   echo get_cat_name($cat);
echo    "</a></h1>
      </div>";

echo"<div class = 'clear'>  </div>";
    ?>

            <?php 

    if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); 
$i++; 
    
if ($i == 4)
{

        ?>

            <div class = "clear padding_grid_3">  </div>  

    <?php
}
  
if (($i == 1) OR ($i ==4))
{
    $paste = "alpha";
}
else if (($i == 2) OR ($i == 5))
{
    $paste = "";
}
else
{
    $paste = "omega";
}
       
echo"<div class='grid_4 ".$paste."'>"; ?>
    
<div class = "grid_4 alpha">
         <h2 class ='height'><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h2>  
        </div> 
       
    <div>
        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('cpi2_grand', array('class'=>'new') ); ?> </a>
    </div>
                
    <p>
        <div class = 'about'>
            <?php the_excerpt(); ?> 
        </div>
    </p>
                
</div> 
    <?php   
          

          }
     echo"<div class = 'clear padding_grid_3'>  </div>";
    }   
}
 ?>    
<div class="grid_16 pagination">

</div>


<?php get_footer(); ?>

    
                
    
                
    