<?php
/*
Template Name: Page Fees
*/
?>


<?php get_header();?>

<section class="fees-page">


	<div class="fees-title">
		<h2><?php the_field('fees_header');?></h2>
		<p><?php the_field('fees_text');?></p>
    </div>

    <div class="portrait-prices">
		<div class="pet">
			<h3>Portrait Fees</h3>
			<table class="portrait-fees">
				<tr>
					<th>Size</th>
					<th>Watercolor</th>
					<th>Oil</th>
				</tr>
				<tr>
					<td>8 x 10</td>
					<td>$300</td>
					<td>$300</td>
				</tr>
				<tr>
					<td>9 x 12</td>
					<td>$325</td>
					<td>$325</td>
				</tr>
				<tr>
					<td>11 x 14</td>
					<td>$475</td>
					<td>$525</td>
				</tr>
				<tr>
					<td>12 x 16</td>
					<td>$575</td>
					<td>$625</td>
				</tr>
				<tr>
					<td>14 x 18</td>
					<td>$625</td>
					<td>$850</td>
				</tr>
				<tr>
					<td>16 x 20</td>
					<td>$725</td>
					<td>$1,275</td>
				</tr>
				<tr>
					<td>18 x 24</td>
					<td>$1,500</td>
					<td>$1,700</td>
				</tr>
				<tr>
					<td>24 x 30 or 22 x 30</td>
					<td>$1,900</td>
					<td>$2,000</td>
				</tr>
				<tr>
					<td>24 x 36</td>
					<td>$2,000</td>
					<td>$2,000</td>
				</tr>
				<tr>
					<td>30 x 36</td>
					<td>$2,200</td>
					<td>$2,200</td>
				</tr>
			</table>
		</div>

		<div class="portrait">
			<h3>Pet Portrait Fees</h3>
			<table class="pet-fees">
				<tr>
					<th>Size</th>
					<th>1 Pet</th>
					<th>2 Pets</th>
					<th>3 Pets</th>
				</tr>
				<tr>
					<td>8 x 10</td>
					<td>$250</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>9 x 12</td>
					<td>$275</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>11 x 14</td>
					<td>$300</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>12 x 16</td>
					<td>$325</td>
					<td>$450</td>
					<td>$525</td>
				</tr>
				<tr>
					<td>14 x 18</td>
					<td>$350</td>
					<td>$475</td>
					<td>$550</td>
				</tr>
				<tr>
					<td>16 x 20</td>
					<td>$375</td>
					<td>$525</td>
					<td>$575</td>
				</tr>
				<tr>
					<td>18 x 24</td>
					<td>$400</td>
					<td>$550</td>
					<td>$600</td>
				</tr>
				<tr>
					<td>24 x 30</td>
					<td>$425</td>
					<td>$575</td>
					<td>$625</td>
				</tr>
				<tr>
					<td>30 x 36</td>
					<td>$450</td>
					<td>$600</td>
					<td>$650</td>
				</tr>
			</table>
		</div>
	</div>
	
	<div class="agreement">
		<div>
			<h4><?php the_field('agreement_title');?></h4>
			<p><?php the_field('agreement_text');?></p>
		</div>
		
		<div>
			<h4><?php the_field('agreement_title_2');?></h4>
			<p><?php the_field('agreement_text_2');?></p>
		</div>
		
		<div>
			<h4><?php the_field('agreement_title_3');?></h4>
			<p><?php the_field('agreement_text_3');?></p>
		</div>

		<div>	
			<h4><?php the_field('agreement_title_4');?></h4>
			<p><?php the_field('agreement_text_4');?></p>
		</div>
		
		<div>
			<h4><?php the_field('agreement_title_5');?></h4>
			<p><?php the_field('agreement_text_5');?></p>
		</div>
			
		<div>
			<h4><?php the_field('agreement_title_6');?></h4>
			<p><?php the_field('agreement_text_6');?></p>
		</div>

		<div>
			<h4><?php the_field('agreement_title_7');?></h4>
			<p><?php the_field('agreement_text_7');?></p>
		</div>
			
		<div>
			<h4><?php the_field('agreement_title_8');?></h4>
			<p><?php the_field('agreement_text_8');?></p>
		</div>
				
	</div>


</section>







<?php get_footer();?>