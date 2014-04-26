<?php
/**
 * @file
 * Template for Panopoly McCoppin.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display mccoppin clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

 <div class="mccoppin-container mccoppin-header clearfix panel-panel">
    <div class="mccoppin-container-inner mccoppin-header-inner panel-panel-inner">
      <?php print $content['header']; ?>
    </div>
  </div>

<div class="mccoppin-container mccoppin-chunk-content clearfix">
    <div class="mccoppin-chunk-content-region mccoppin-chunk1 panel-panel">
      <div class="mccoppin-chunk-content-region-inner mccoppin-chunk1-inner panel-panel-inner">
        <?php print $content['chunk1']; ?>
      </div>
    </div>
    <div class="mccoppin-chunk-content-region mccoppin-chunk2 panel-panel">
      <div class="mccoppin-chunk-content-region-inner mccoppin-chunk2-inner panel-panel-inner">
        <?php print $content['chunk2']; ?>
      </div>
    </div>
    <div class="mccoppin-chunk-content-region mccoppin-chunk3 panel-panel">
      <div class="mccoppin-chunk-content-region-inner mccoppin-chunk3-inner panel-panel-inner">
        <?php print $content['chunk3']; ?>
      </div>
    </div>
</div>

 <div class="mccoppin-container mccoppin-lowerbanner clearfix panel-panel">
    <div class="mccoppin-container-inner mccoppin-lowerbanner-inner panel-panel-inner">
      <?php print $content['lowerbanner']; ?>
    </div>
  </div>

  <div class="mccoppin-container mccoppin-column-content clearfix">
    <div class="mccoppin-column-content-region mccoppin-column1 panel-panel">
      <div class="mccoppin-column-content-region-inner mccoppin-column1-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="mccoppin-column-content-region mccoppin-column2 panel-panel">
      <div class="mccoppin-column-content-region-inner mccoppin-column2-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
    <div class="mccoppin-column-content-region mccoppin-column3 panel-panel">
      <div class="mccoppin-column-content-region-inner mccoppin-column3-inner panel-panel-inner">
        <?php print $content['column3']; ?>
      </div>
    </div>
    <div class="mccoppin-column-content-region mccoppin-column4 panel-panel">
      <div class="mccoppin-column-content-region-inner mccoppin-column4-inner panel-panel-inner">
        <?php print $content['column4']; ?>
      </div>
    </div>
    <div class="mccoppin-column-content-region mccoppin-column5 panel-panel">
      <div class="mccoppin-column-content-region-inner mccoppin-column5-inner panel-panel-inner">
        <?php print $content['column5']; ?>
      </div>
    </div>
    <div class="mccoppin-column-content-region mccoppin-column6 panel-panel">
      <div class="mccoppin-column-content-region-inner mccoppin-column6-inner panel-panel-inner">
        <?php print $content['column6']; ?>
      </div>
    </div>
  </div>
  
   <div class="mccoppin-container mccoppin-lowestbanner clearfix panel-panel">
    <div class="mccoppin-container-inner mccoppin-lowestbanner-inner panel-panel-inner">
      <?php print $content['lowestbanner']; ?>
    </div>
  </div>
  
<div class="mccoppin-container mccoppin-chunk-content clearfix">
    <div class="mccoppin-chunk-content-region mccoppin-chunk4 panel-panel">
      <div class="mccoppin-chunk-content-region-inner mccoppin-chunk4-inner panel-panel-inner">
        <?php print $content['chunk4']; ?>
      </div>
    </div>
    <div class="mccoppin-chunk-content-region mccoppin-chunk5 panel-panel">
      <div class="mccoppin-chunk-content-region-inner mccoppin-chunk5-inner panel-panel-inner">
        <?php print $content['chunk5']; ?>
      </div>
    </div>
    <div class="mccoppin-chunk-content-region mccoppin-chunk6 panel-panel">
      <div class="mccoppin-chunk-content-region-inner mccoppin-chunk6-inner panel-panel-inner">
        <?php print $content['chunk6']; ?>
      </div>
    </div>
</div>
  

</div><!-- /.mccoppin -->
