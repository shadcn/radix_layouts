<?php
/**
 * @file
 * Template for Radix Rolph.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display rolph clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="container">
    <div class="row-fluid">
      <div class="rolph-header span12 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['header']; ?>
        </div>
      </div>
    </div>
  
    <div class="row-fluid">
      <div class="rolph-quarter-content">
        <div class="panel-panel span3">
          <div class="panel-panel-inner">
            <?php print $content['quarter1']; ?>
          </div>
        </div>
        <div class="panel-panel span3">
          <div class="panel-panel-inner">
            <?php print $content['quarter2']; ?>
          </div>
        </div>
        <div class="panel-panel span3">
          <div class="panel-panel-inner">
            <?php print $content['quarter3']; ?>
          </div>
        </div>
        <div class="panel-panel span3">
          <div class="panel-panel-inner">
            <?php print $content['quarter4']; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="rolph-footer span12 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['footer']; ?>
        </div>
      </div>
    </div>
  </div>
  
</div><!-- /.rolph -->
