
<div class="">
  <div class="">

    <div class="">
      <div class="">
        <h1>title</h1>
      </div>
      <?php
      $paged = max(1, get_query_var('paged'), get_query_var('page'));
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'paged' => $paged,
        'category_name' => 'reference',
      );
      $news_query = new WP_Query($args);
      if ($news_query->have_posts()):
        while ($news_query->have_posts()):
          $news_query->the_post();
          ?>
          <article class="">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="meta"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M j, Y'); ?></time></div>
          </article>
          <?php
        endwhile;
        $big = 999999999;
        $pagination = paginate_links(array(
          'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
          'format' => '?paged=%#%',
          'current' => max(1, $paged),
          'total' => $news_query->max_num_pages,
          'prev_text' => '<span aria-hidden="true">&laquo;</span> <span class="screen-reader-text">' . esc_html__('Previous', 'your-text-domain') . '</span>',
          'next_text' => '<span class="screen-reader-text">' . esc_html__('Next', 'your-text-domain') . '</span> <span aria-hidden="true">&raquo;</span>',
          'mid_size' => 1,
          'type' => 'list',
        ));
        echo '<div class="">';
        echo paginate_links(array(
          'total' => $news_query->max_num_pages
        ));
        echo '</div>';
      endif;
      wp_reset_postdata(); ?>
    </div>
            <a href="<?php echo home_url('/') ?>">Home</a>

  </div>
</div>

