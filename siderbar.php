<div id="sidebar">
<h4 ><?php _e('Categories'); ?></h4>
<ul >
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h4 ><?php _e('Archives'); ?></h4>
<ul >
<?php wp_get_archives('type=weekly'); ?>
</ul>
</div>