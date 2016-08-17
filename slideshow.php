<h3><?php comments_number(
'0'
'1'
'%'

); ?></h3>

<?php
wp_list_comments();
paginate_comments_links();
comment_form();
?>
