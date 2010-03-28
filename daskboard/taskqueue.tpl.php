<div class="<?php print $classes; ?>">
<?php if ($title) : ?>
   <h1><?php print $title; ?></h1>
<?php endif; ?>
<div class=inner>
   <?php print render($nodes); ?>
</div>
</div>
