<?php include 'layout/header.php'; 
include 'function.php';?>

<div class = "cover">
	<div class = "body-holder">
		<center><h1>Price List for website pakages</h1></center>	
	</div>
	<div class = "body-holder">
		<!-- Find the number of packages available -->
		<?php
			$result = mysqli_query($connection,"SELECT package_id FROM price_table");
			$row_cnt = mysqli_num_rows($result);
		?>
		<table class="price-table">
			<caption><strong>Price List</strong></caption>
			<tr><!--Contains Package's name -->
				<td class="feature-name">Website Package's</td><!-- This is static shoudn't be changes -->
				<!-- Function to echo out all the Package's name -->
				<?php 
					printRow('package_name','package_id'); //Arguments are: SELECT BY and ORDER BY from Price table
				?>
			</tr>
			<tr>
				<td class="feature-name">No. Of Pages</td>
				<?php 
					printRow('number_of_pages','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">HomePage Development</td>
				<?php
					printRow('homepage_development','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">About Us</td>
				<?php
					printRow('about_us','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Contact Page</td>
				<?php
					printRow('contact_page','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Customized 404 Page</td>
				<?php
					printRow('customized_404','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Product Pages</td>
				<?php
					printRow('product_pages','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Image Optimization</td>
				<?php
					printRow('image_optimization','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Image Gallery</td>
				<?php
					printRow('image_gallery','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Video Gallery</td>
				<?php
					printRow('video_gallery','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Add Pages</td>
				<?php
					printRow('add_pages','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Blog</td>
				<?php
					printRow('blog','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Responsive Site</td>
				<?php
					printRow('responsive','package_id');
				?>
			</tr>
			<tr>
				<td class="feature-name">Mobile Optimized</td>
				<?php
					printRow('mobile_optimized','package_id');
				?>
			</tr>


		</table>
	</div>
</div>



<?php include 'layout/footer.php'; ?>