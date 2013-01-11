<?php
/**
 * @file
 * Template for Radix Phoenix
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display phoenix clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['header']): ?>
    <div class="row-fluid">
      <div class="span12 header panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['header']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['contentmain']): ?>
    <div class="container">
      <div class="row-fluid">
        <div class="span12 content panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['contentmain']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['footer']): ?>
    <div class="row-fluid">
      <div class="span12 footer panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['footer']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

</div><!-- /.footer -->
