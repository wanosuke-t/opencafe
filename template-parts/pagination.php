<?php if (paginate_links()): ?>
  <!-- p-pagination -->
  <div class="p-pagination">
    <?php
    echo paginate_links(
      array(
        'end_size' => 1,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => '<img src="' . get_template_directory_uri() . '/img/arrow-prev.png" alt="" width="12" height="24">',
        'next_text' => '<img src="' . get_template_directory_uri() . '/img/arrow-next.png" alt="" width="12" height="24">',
      )
    );
    ?>
  </div><!-- /p-pagination -->
<?php endif; ?>