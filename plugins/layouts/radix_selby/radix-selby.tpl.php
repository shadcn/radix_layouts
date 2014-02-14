<?php
/**
 * @file
 * Template for Radix Selby.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="panel-display selby clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="container">
    <div class="row-fluid">
      <div class="span4">
        <div class="row-fluid">
          <div class="span12 panel-panel">
            <div class="panel-panel-inner">
              <?php print $content['sidebar']; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="span8">
        <div class="row-fluid">
          <div class="span12 panel-panel">
            <div class="panel-panel-inner">
              <?php print $content['contentheader']; ?>
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6 panel-panel">
            <div class="panel-panel-inner">
              <?php print $content['contentcolumn1']; ?>
            </div>
          </div>
          <div class="span6 panel-panel">
            <div class="panel-panel-inner">
              <?php print $content['contentcolumn2']; ?>
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12 panel-panel">
            <div class="panel-panel-inner">
              <?php print $content['contentfooter']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.selby -->