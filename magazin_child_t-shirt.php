<?php include ("header.php"); ?>	
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Товары</h2>
						
												<?php
						include ("bd.php");

 

$res = mysql_query("SELECT * FROM products WHERE view = 'Childtshirt'") or die(mysql_error());
while($total = mysql_fetch_array($res)){
echo '
<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/t-shirt/'. $total['image'] .'" alt="" />
										<h2>'. $total['price'] .'</h2>
										<p>'. $total['name'] .'</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
										<div class = "content-opis">
										<p>Цвет: '. $total['color'] .'</p>
										<p>Размер: '. $total['size'] .'</p>
										<p>Сезон: '. $total['sezon'] .'</p>
										</div>
											<h2>'. $total['price'] .'</h2>
											<p>'. $total['name'] .'</p>
											<form action = "cart.php?id='. $total['id'] .'" method="post">
											 <button type="submit" class = "submit"> <a  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></button>
											</form>
										</div>
									</div>
								</div>
								
							</div>
						</div>


';
}
						
						
						?>
						
					</div><!--features_items-->
					
	

					
				</div>
			<?php
						include ("footer.php");?>	