    </div>

<footer>
    <div class = 'footer'>
        <div class = "footer-menu">
            <?php wp_nav_menu(array('sort_column' => 'menu_order', 
                            'menu' => 'footer_menu', 
                            'container_class' => 'menu-footer', 
                            'container_id' => 'footer', 
                            'theme_location'  => 'footer') ); ?>
        </div>
    </div>
</footer>

</body></html>