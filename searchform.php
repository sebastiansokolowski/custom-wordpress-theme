<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field form-control" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Wyszukaj dla:', 'label', 'wp-bezpieczny-vat' ); ?>">
    </label>
    <input type="submit" class="search-submit btn btn-default" value="<?php echo esc_attr_x( 'Wyszukaj', 'submit button', 'wp-bezpieczny-vat' ); ?>">
</form>



