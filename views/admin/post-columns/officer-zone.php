<?php
/**
 * $post_id         - The current post ID. Passed to the view by default
 * $meta_key        - The meta key. Passed to the view by default
 * $meta_value      - The meta value. Passed to the view by default
 */

echo ( $meta_value ) ? sprintf( '<b style="text-transform: uppercase;">%s</b>', $meta_value ) : null;

?>
