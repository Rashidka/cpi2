<?php
/**
 * Template Name: Главная страница
 */
?>


<?php get_header(); ?>



<div class = "rat-banner-background">
        <h2 class = "rat-banner-background__title">Изучение компьютеров:</h2>
        <ol class = "rat-banner-background__list">
            <li>Вы узнаете устройство компьютера;</li>
            <li>Научитесь ремонтировать компьютерную машину;</li>
            <li>Познакомитесь с известными операционными системами.</li>        
        </ol>
        
    
    
    </div>
    <img class = "grid_16 alpha rat-banner" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Банер1.png" alt="" />

<?php get_sidebar(); ?>

<div class = "g-content grid_12">
    
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
    
    $query1 = new WP_Query( array( 'cat' => $cat, 'posts_per_page' => 3 ) ); 
    $query2 = new WP_Query( array( 'cat' => $cat, 'posts_per_page' => 3, 'offset' => 3 ) ); 
    
    $i = 0;


    echo "
    <div class = 'g-content__category'><h1>";
        
        ?> 
    
        <a href = "<?php echo get_category_link($cat); ?>">

        <?php   
        
        echo get_cat_name($cat);
        echo    "</a></h1>
    </div>";

    echo"
    <div class = 'g-content__margin clear'>  </div>
    
    ";
    ?>

    <?php 

    if ( $query1->have_posts() ) 
    {
 
        echo "<table class = 'g-content__h-table'>
        <tr>
        ";
        
        while ( $query1->have_posts() ) 
        {
            $query1->the_post(); 
            $i++; 

            
            if (($i == 1) OR ($i == 4))
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

            echo"
          
            <td><div class='grid_4 ".$paste."'>"; ?>
           
            <div class ="g-content__title">
                <h2><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h2>
            </div> 
            </td>
          
            
            

           <?php rewind_posts(); ?>

    
    
            <?php   
        
        }
        
        
        echo"
        </tr>
        </table>
        

       
        <div class = 'clear'>  </div>";
        
        
        
        
    }   
    
    rewind_posts(); 
 
    while ( $query1->have_posts() ) 
        {
           $query1->the_post();  
            $i++; 

           
            
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

            echo"
            <div class='grid_4 ".$paste."'>"; 
         ?>  
            
    
    
            
    
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('cpi2_grand', array('class'=>'g-content__image') ); ?> </a>

                <p>
                    <div class = 'g-content__about'>
                        <?php the_excerpt(); ?> 
                    </div>
                </p>
            </div>


    <?php
        
        }
    echo"<div class = 'clear g-content__h-margin'>  </div>";
        

    
if ( $query2->have_posts() ) 
    {
    $i = 0;
    
    echo"<table class = 'g-content__h-table'>
    <tr>
    
    
    ";
        while ( $query2->have_posts() ) 
        {
            $query2->the_post(); 
            $i++; 

           
            
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

            echo"
            <td>
            <div class='grid_4 ".$paste."'>"; ?>
            <div class="g-content__title">
                <h2><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h2>  

            </div> 
            </td>
            

           <?php rewind_posts(); ?>

    
    
            <?php   
        
        }
        
         echo"
         </tr>
         </table>
      
        
        <div class = 'clear'>  </div>";
        
        
        
        
    }   
    
    rewind_posts(); 
    $i = 0;
 
    while ( $query2->have_posts() ) 
        {
           $query2->the_post();  
        
        
        
        
        $i++; 

           
            
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

            echo"
            <div class='grid_4 ".$paste."'>";

         ?>   
            
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('cpi2_grand', array('class'=>'g-content__image') ); ?> </a>

                <p>
                    <div class = 'g-content__about'>
                        <?php the_excerpt(); ?> 
                    </div>
                </p>
            </div>
    <?php
        }
    echo"<div class = 'clear g-content__h-margin'>  </div>";    
    
    
    
}
?>    
<div class="grid_16">
</div>

</div>
<?php get_footer();?>

    
                
    
                
    