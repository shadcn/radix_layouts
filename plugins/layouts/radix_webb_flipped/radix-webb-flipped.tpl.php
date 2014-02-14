<?php
/**
 * @file
 * Template for Radix Webb Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display webb-flipped clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="container">
    <div class="row-fluid">
      <div class="webb-flipped-header panel-panel span12">
        <div class="panel-panel-inner">
          <?php print $content['header']; ?>
        </div>
      </div>
    </div>
    <div class="row-fluid webb-flipped-column-content">
      <div class="span12 panel-panel">
        <div class="panel-panel span8">
          <div class="row-fluid">
            <div class="panel-panel span12">
              <div class="panel-inner-inner">
                <?php print $content['contentheader']; ?>
              </div>
            </div>
          </div>

          <div class="row-fluid">
            <div class="panel-panel span6">
              <div class="panel-inner-inner">
                <?php print $content['contentcolumn1']; ?>
              </div>
            </div>

            <div class="panel-panel span6">
              <div class="panel-inner-inner">
                <?php print $content['contentcolumn2']; ?>
              </div>
            </div>
          </div>

        </div>

        <div class="panel-panel span4">
          <div class="panel-inner-inner">
            <?php print $content['sidebar']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.webb-flipped -->
