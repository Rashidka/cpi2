<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
 
<div class="s-search">
 
    <input type="text" value="" class = "s-search__text" name="s"  placeholder="<?php _e('Введите запрос', 'gb'); ?>">
    <input type="submit"  value="<?php _e('Поиск', 'gb'); ?>" class="s-search__button">
 
</div>
 
</form>