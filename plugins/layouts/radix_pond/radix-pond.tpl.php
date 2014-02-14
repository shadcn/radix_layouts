<?php
/**
 * @file
 * Template for Radix Pond.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display pond clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="container">
    <div class="pond-header row-fluid">
      <div class="span12 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['header']; ?>
        </div>
      </div>
    </div>
    
    <div class="pond-column-content pond-column-content-row1 row-fluid">
      <div class="panel-panel span4">
        <div class="panel-panel-inner">
          <?php print $content['column1']; ?>
        </div>
      </div>
      
      <div class="panel-panel span4">
        <div class="panel-panel-inner">
          <?php print $content['column2']; ?>
        </div>
      </div>
      
      <div class="panel-panel span4">
        <div class="panel-panel-inner">
          <?php print $content['column3']; ?>
        </div>
      </div>
    </div>
    
    <div class="pond-column-content pond-column-content-row2 row-fluid">
      <div class="panel-panel span4">
        <div class="panel-panel-inner">
          <?php print $content['secondarycolumn1']; ?>
        </div>
      </div>
      
      <div class="panel-panel span4">
        <div class="panel-panel-inner">
          <?php print $content['secondarycolumn2']; ?>
        </div>
      </div>
      
      <div class="panel-panel span4">
        <div class="panel-panel-inner">
          <?php print $content['secondarycolumn3']; ?>
        </div>
      </div>
    </div>

  <div class="pond-footer panel-panel row-fluid">
    <div class="panel-panel-inner span12">
      <?php print $content['footer']; ?>
    </div>
  </div>
  
</div><!-- /.pond -->
