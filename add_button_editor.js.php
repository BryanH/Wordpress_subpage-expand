<?php
/** 
 * add_button_editor.js.php
 * Adds button to the post editor
 * @package SubPagesExpand
 */
Header("content-type: text/javascript");
?>
QTags.addButton( 'hbj-subpages', '', '[subpages_expand]',,, '<?php _e("Subpages expand tag"); ?>', 9999 );
