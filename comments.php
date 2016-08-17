<h3><?php comments_number(
'',
'',
'%'

); ?></h3>

<?php
wp_list_comments();
paginate_comments_links();
comment_form();
?>
