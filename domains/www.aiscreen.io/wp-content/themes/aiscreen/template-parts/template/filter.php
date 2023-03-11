<div class="bl_filter__filter">
	<div class="filter__content__fix">
		<div class="filter__content_mobile_fix">
			<a class="filter__content_mobile">
				Filter
			</a>
		</div>
		<div class="bl_filter__hidden">
			<div class="filter__content filter__top">
				<div class="filter__title filter__title__blue">
					<h4>
						Industry
					</h4>
				</div>

				<div class="filter__menu">
					<ul>
						<li>
						<a href="#" class="filter__menu_item active" data-tax="tmp_category"  data-tid="0" >All</a>
						 </li>
						<?php $terms = get_terms('tmp_category', array("orderby" => "slug", "parent" => 0)); ?>
						<?php foreach($terms as $key => $term) : ?>
							<li>
								<a href="#" class="filter__menu_item" data-tax="tmp_category"  data-tid="<?php echo $term->term_id; ?>">
									<?php echo $term->name; ?> </a> 
								
							</li>
						<?php endforeach; ?>
					</ul> 
				</div>
			</div>

			<?php $terms = get_terms('tmp_category', array("orderby" => "slug", "parent" => 0)); ?>
			<?php foreach($terms as $key => $term) : ?>
				<?php $sub_terms = get_terms('tmp_category', array("orderby" => "slug", "parent" => $term->term_id)); ?>
				<?php if($sub_terms) : ?>	
					<div class="filter__content filter__bottom sub_terms"  id="stid_<?php echo $term->term_id; ?>">
						<div class="filter__title filter__title__yellow">
							<h4>
								subcategory
							</h4>
						</div>
						<div class="filter__menu">
							<ul>	
		             			<?php foreach($sub_terms as $key => $sub_term) : ?>
								 <li>
									 <a href="#" class="filter__menu_item_sub" data-tax="tmp_category"  data-tid="<?php echo $sub_term->term_id; ?>"><?php echo $sub_term->name; ?> </a>
             					</li>
								<?php endforeach; ?>
          					</ul>
						</div>
					</div> 
				<?php endif; ?>  
			<?php endforeach; ?>

			<div class="filter__content bl_filter__orientation">
				<div class="filter__title filter__title__pink">
					<h4>
						screen orientation
					</h4>
				</div>
				<div class="filter__menu">
					<ul>

						<?php $terms = get_terms('tmp_positions', array("orderby" => "slug", "parent" => 0)); ?>
						<?php foreach($terms as $key => $term) : ?>
							<li>
								<a href="#"  data-tax="tmp_positions" class="filter__menu_item" data-tid="<?php echo $term->term_id; ?>" > 
									<?php echo $term->name; ?>
								</a>
							</li>
						<?php endforeach; ?>

					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	jQuery('.filter__menu_item').on('click', function(event) {
		event.preventDefault();
		jQuery('.filter__menu_item').removeClass('active');
		jQuery('.filter__menu_item_sub').removeClass('active');
	    jQuery(this).addClass('active');
		
		let stid = '#stid_'+$(this).data('tid');
		
		$('.sub_terms').css('display', 'none');
		$(stid).css('display', 'flex');
        
        let tid = $(this).data('tid');
        let tax = $(this).data('tax');
       
        ajax_tmp (tid,tax);

	});
  
  	jQuery('.filter__menu_item_sub').on('click', function(event) {
		event.preventDefault();
		jQuery('.filter__menu_item_sub').removeClass('active');
		jQuery(this).addClass('active');
		
	    let tid = $(this).data('tid');
        let tax = $(this).data('tax');
       
        ajax_tmp (tid,tax);
  
	});

 function ajax_tmp (tid,tax){
    $.ajax({
			type: 'POST',
			url: '/wp-admin/admin-ajax.php',
			dataType: 'html',
			data: {
				action: 'template_filter_category',
				term_id:tid,
				tax:tax,
			},
			success: function(res) {
				$('.bl_filter__items').html(res);
			}
    	})
 }
</script>