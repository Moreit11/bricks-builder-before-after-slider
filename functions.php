<!-- Add custom html tag to bricks https://academy.bricksbuilder.io/article/filter-bricks-allowed_html_tags/ -->
add_filter( 'bricks/allowed_html_tags', function( $allowed_html_tags ) { 
    $additional_tags = ['img-comparison-slider']; 
    return array_merge( $allowed_html_tags, $additional_tags ); } );