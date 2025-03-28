<!-- p-breadcrumb -->
<div class="p-breadcrumb">

  <!-- p-breadcrumb__inner -->
  <div class="p-breadcrumb__inner">

    <!-- breadcrumb -->
    <?php if (function_exists('bcn_display')): //BreadcrumbNavXTプラグインが入っているときだけ表示する 
    ?>
      <!-- breadcrumb -->
      <div class="breadcrumb">
        <?php bcn_display(); // BreadcrumbNavXTのパンくずリストを表示するための記述 
        ?>
      </div><!-- /breadcrumb -->
    <?php endif; ?>

  </div><!-- p-breadcrumb__inner -->
</div><!-- p-breadcrumb -->