<?php
// $Id: node.tpl.php,v 1.31 2010/01/04 03:57:19 webchick Exp $

/**
 * @file
 * Special rendering of nodes.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="taskcard <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node_title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php
    print t('by !username on !datetime',
            array('!username' => $name, '!datetime' => $date));
   ?>
  <?php print render($content['state']); ?>
  <?php print render($content['area']); ?>
  <?php print render($content['depends_on']); ?>
</div>
