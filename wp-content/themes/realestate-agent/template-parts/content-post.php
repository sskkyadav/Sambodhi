<?php
  global $post;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post-single p-3 mb-4'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail(''); ?>
    </div>
  <?php }?>
  <h1 class="post-title"><?php the_title(); ?></h1>
  <div class="post-meta mb-2">
    <hr>
    <?php if( get_post_meta($post->ID, 'realestate_agent_your_properties_count', true) ) {?>
      <span class="mr-2"><i class="fas fa-home mr-3"></i><?php echo esc_html(get_post_meta($post->ID,'realestate_agent_your_properties_count',true)); ?> <?php esc_html_e('Properties','realestate-agent'); ?></span>
    <?php }?>
    <hr>  
  </div>
  <div class="post-content">
    <?php
      the_content();
      the_tags('<div class="post-tags"><strong>'.esc_html__('Tags:','realestate-agent').'</strong> ', ', ', '</div>');
    ?>
  </div>
</div>