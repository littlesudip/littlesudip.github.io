
<?php $unique_id = uniqid( 'search-form-' ); ?>

<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <input id="<?php echo esc_attr( $unique_id ); ?>" class="app_search" type="text" value="" name="<?php esc_attr_e('s','autorepair'); ?>" class="search-field" placeholder="<?php esc_attr_e('Enter Keywords Here..','autorepair'); ?>" />
        <input type="submit" class="search-submit" value="<?php esc_attr_e('Search','autorepair'); ?>" />
    </div>
</form>