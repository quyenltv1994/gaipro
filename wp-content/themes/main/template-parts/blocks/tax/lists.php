<?php
wp_reset_postdata();
global  $wp_query;
$tax = $wp_query->get_queried_object();
if(!$tax->term_parent):
	$tax_child = get_terms( 'khu_vuc', array(
		'hide_empty' => 1,
		'parent' => $tax->term_id,
	));
	if($tax_child):
?>
<div class="tax__lists">
	<div class="container">
        <div class="tax__lists--container">
            <ul>
		        <?php
		        foreach($tax_child as $item):
			        ?>
                    <li><a href="<?=get_term_link($item)?>"><?=$item->name?></a></li>
		        <?php
		        endforeach;
		        ?>
            </ul>
        </div>
	</div>
</div>
<?php
	endif;
endif;