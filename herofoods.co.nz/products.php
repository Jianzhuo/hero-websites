<!DOCTYPE HTML>
<html>
	<head>
		<?php include "include/head.php";?>
		<style>
		.product-table{
			border-collapse: collapse;
		  width: 100%;
			line-height: normal;
    	margin: 15px 0;
		}

		.product-table > tbody > tr{
			border-top: 1px solid #053A5A;
			border-bottom: 1px solid #053A5A;
		}
		.product-table > tbody > tr > td{
			padding: 8px;
		}
		.product-table > tbody > tr > td:first-child{
			font-family: "National Semibold";
			width: 35%;
		}
		.mfp-bg{
			z-index: 9999;
		}
		.scientific-name{
			font-style: italic;
		}
		body {
			-webkit-overflow-scrolling: touch;
		}
		body.mfp-active {
			overflow: hidden;
			-webkit-overflow-scrolling: auto;
			width: 100%;
			position: fixed;
			overflow: auto;
		}
		body .mfp-wrap {
			position: fixed;
			overflow: auto;
			top: 0 !important;
			z-index: 10000;
		}
		</style>
	</head>
	<body oncontextmenu="return false;">

	<div class="herofoods-loader"></div>

	<div id="page">
	<?php include "include/navigation.php";?>

	<div class="herofoods-about">
		<img src="images/product-banner.jpg">
	</div>
	<div id="herofoods-content">
		<div class="container">
			<div class="row text-center mb-30">
				<div class="col-md-12 blue-text">
					<h3 class="book-title uppercase">Premium</h3>
					<h1 class="regular-title uppercase">Products</h1>
					<img src="images/fern-icon.png" class="fern-icon mb-30">
				</div>
			</div>


			<div class="row animate-box mb-30">
				<!-- categories  -->
				<div class="col-md-12">
					<div class="categories-grid">
						<nav class="categories">
							<ul class="categories_filter">
								<li><a href="" class="active" data-filter="*">all</a></li>
								<li><a href="" data-filter=".wagyubeef">wagyu beef</a></li>
								<li><a href="" data-filter=".seafood">seafood</a></li>
								<li><a href="" data-filter=".prawns">prawns</a></li>
								<li><a href="" data-filter=".redmeat">red meat</a></li>
								<li><a href="" data-filter=".fish">fish</a></li>
							</ul>
						</nav>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<div class="row animate-box text-center mb-30">
				<div class="categories_container">
					<!-- single product -->
					<div class="col-md-4 wagyubeef" style="text-align:center">
						<a href="#popup-wagyubeefpatties" class="open-popup-link">
							<div class="product-slider-content work-grid">
								<div class="product-slider-box">
									<img src="images/product-wagyu-burger-patties.jpg">
								</div>
								<div class="mt-50"></div>
								<span>#wagyu beef</span>
								<div class="product-title uppercase mt-30">
									<h3 class="blue-text uppercase">Wagyu Beef Burger Patties</h3>
								</div>
							</div>
						</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 wagyubeef" style="text-align:center">
						<a href="#popup-ribeyesteak" class="open-popup-link">
							<div class="product-slider-content work-grid">
								<div class="product-slider-box">
									<img src="images/product-ribeyesteaks.jpg">
								</div>
								<div class="mt-50"></div>
								<span>#wagyu beef</span>
								<div class="product-title uppercase mt-30">
									<h3 class="blue-text uppercase">Wagyu Beef Rib Eye Steak</h3>
								</div>
							</div>
						</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 wagyubeef" style="text-align:center">
						<a href="#popup-sirloinsteak" class="open-popup-link">
							<div class="product-slider-content work-grid">
								<div class="product-slider-box">
									<img src="images/product-sirloinsteaks.jpg">
								</div>
								<div class="mt-50"></div>
								<span>#wagyu beef</span>
								<div class="product-title uppercase mt-30">
									<h3 class="blue-text uppercase">Wagyu Beef Sirlon Steak</h3>
								</div>
							</div>
						</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood" style="text-align:center">
						<a href="#popup-greenshellmussel" class="open-popup-link">
							<div class="product-slider-content work-grid">
								<div class="product-slider-box">
									<img src="images/product-mussel.jpg">
								</div>
								<div class="mt-50"></div>
								<span>#seafood</span>
								<div class="product-title uppercase mt-30">
									<h3 class="blue-text uppercase">Greenshell&#8482; Mussel</h3>
								</div>
							</div>
						</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood prawns" style="text-align:center">
						<a href="#popup-cookedprawn" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-cooked-prawn.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#prawns</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Whole Cooked Prawn</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood" style="text-align:center">
						<a href="#popup-cookedaustralianrocklobster" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-cooked-rock-lobster.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#seafood</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Whole Rock Lobster</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood prawns" style="text-align:center">
						<a href="#popup-wholerawprawn" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-raw-prawn.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#prawns</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Whole Raw Prawn</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood fish" style="text-align:center">
						<a href="#popup-tuna" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-tuna.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#fish</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Tuna</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood" style="text-align:center">
						<a href="#popup-rocklobstertail" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-rock-lobster-tail.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#seafood</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Rock Lobster Tail</h3>
							</div>
						</div>
					</a>
					</div>
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 redmeat wagyubeef" style="text-align:center">
						<a href="#popup-marbledbeefroll" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-marbled-beef-roll.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#red meat</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Marbled Beef Roll</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 redmeat" style="text-align:center">
						<a href="#popup-shavedlambroll" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-shaved-lamb-roll.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#red meat</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Shaved Lamb Roll</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 redmeat" style="text-align:center">
						<a href="#popup-shavedporkroll" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-shaved-pork-roll.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#red meat</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Shaved Pork Roll</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood prawns" style="text-align:center">
						<a href="#popup-prawncutlet" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-prawn-cutlet.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#prawns</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Prawn Cutlet</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood prawns" style="text-align:center">
						<a href="#popup-prawnmeat" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-prawn-meat.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#prawns</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Prawn Meat</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood prawns" style="text-align:center">
						<a href="#popup-freshwaterprawn" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-freshwater-prawn.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#prawns</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Freshwater Prawn</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood prawns" style="text-align:center">
						<a href="#popup-greenlandcookedprawn" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-greenland-cooked-prawn.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#prawns</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Greenland Cooked Prawn</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 wagyubeef" style="text-align:center">
						<a href="#popup-wagyuthinslice" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-wagyuthinslice.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#wagyu beef</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Wagyu K-Cut BBQ Slice</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<!-- single product -->
					<div class="clear"></div>
					<!-- single product -->
					<div class="col-md-4 seafood fish" style="text-align:center">
						<a href="#popup-antartictoothfish" class="open-popup-link">
						<div class="product-slider-content work-grid">
							<div class="product-slider-box">
								<img src="images/product-antartic-toothfish-fin.jpg">
							</div>
							<div class="mt-50"></div>
							<span>#fish</span>
							<div class="product-title uppercase mt-30">
								<h3 class="blue-text uppercase">Antartic Toothfish Fin</h3>
							</div>
						</div>
					</a>
					</div>
					<!-- single product -->
					<!-- single product -->
					<div class="clear"></div>
				</div>

				<!-- Popup itself -->
				<div id="popup-ribeyesteak" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-ribeyesteaks.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#wagyu beef</span><p>
							<h3 class="blue-text">Wagyu Beef Rib Eye Steak</h3>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>MW8115</td>
							  </tr>
							  <tr>
							    <td>Lot Fed Period</td>
							    <td>420 days grain fed</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>Customisable</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>New Zealand</td>
							  </tr>
							</table>
							<p class="blue-text">Wagyu comes from hand-selected Wagyu cattle with good genetics, raised for 18 months on nutritionally rich pastures before enjoying a high quality GMO-free grain diet of ancient Japanese recipe at our purposely built feedlot for 420 days.</p>
							<!--<a href="#">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>-->
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<div id="popup-sirloinsteak" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-sirloinsteaks.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#wagyu beef</span><p>
							<h3 class="blue-text">Wagyu Beef Sirloin Steak</h3>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>MW8116</td>
							  </tr>
							  <tr>
							    <td>Lot Fed Period</td>
							    <td>420 days grain fed</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>Customisable</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>New Zealand</td>
							  </tr>
							</table>
							<p class="blue-text">Wagyu comes from hand-selected Wagyu cattle with good genetics, raised for 18 months on nutritionally rich pastures before enjoying a high quality GMO-free grain diet of ancient Japanese recipe at our purposely built feedlot for 420 days.</p>
							<!--<a href="#">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>-->
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<div id="popup-wagyubeefpatties" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-wagyu-burger-patties.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#wagyu beef</span><p>
							<h3 class="blue-text">Wagyu Beef Burger Patties</h3>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>MW8119</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>28 x 150g</td>
							  </tr>
							  <tr>
							    <td>Allergens</td>
							    <td>Contains: soy, wheat, egg, gluten, dairy products.</td>
							  </tr>
							</table>
							<p class="blue-text">
								Our Wagyu Beef Burger Patties are made from premium quality Australian Wagyu beef, handcrafted by our skilled butchers. Each patty is individually vacuum-sealed to ensure the freshness and quality of the product.
							</p>
							<a href="pdf/mw8119-wagyu-beef-burger-patties-v1.pdf" target="_blank">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-greenshellmussel" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-mussel.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafood</span><p>
							<h3 class="blue-text">Greenshell&#8482; Mussel</h3>
							<p class="scientific-name">Perna canaliculus</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product</td>
							    <td>Whole Shell</td>
							    <td>Half Shell</td>
							    <td>Mussel Meat</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>1 x 10kg<br>25 x 600g</td>
							    <td>12 x 800g<br>12 x 1kg<br>10 x 1kg</td>
							    <td>12 x 1kg</td>
							  </tr>
							  <tr>
							    <td>Grade</td>
							    <td>10/14<br>14/20<br>20/25</td>
							    <td>20/30<br>30/40<br>45/65</td>
							    <td>&lt; 50<br>50/90<br>90/130</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td colspan="3">New Zealand</td>
							  </tr>
							</table>
							<p class="blue-text">
								New Zealand Greenshell&#8482; Mussels are one of the world's most successfully farmed mussels, which are found only in New Zealand. Harvested all year-round, farmed mussels are fatter and more tender than wild mussels.
								<br>
								Available in bulk order.
							</p>
							<a href="pdf/greenshell-mussel-whole-v1.pdf" target="_blank">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-cookedprawn" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-cooked-prawn.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafood</span><p>
							<h3 class="blue-text">Whole Cooked Prawn</h3>
							<p class="scientific-name">Litopenaeus vannamei</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>SS8008</td>
							  </tr>
							  <tr>
							    <td>Grade</td>
							    <td>13/15<br>16/20</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>5kg</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>Vietnam</td>
							  </tr>
							</table>
							<p class="blue-text">
								Savor the convenience and premium quality of our frozen cooked Vannamei prawn IQF, imported from Vietnam. Indulge in the authentic flavors of Vietnamese cuisine and elevate your dishes with these delectable prawns.
								<br><br>
								With their vibrant pink color and delectable taste, these Vannamei prawns are a versatile addition to any seafood dish.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-cookedaustralianrocklobster" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-cooked-rock-lobster.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafood</span><p>
							<h3 class="blue-text">Whole Rock Lobster</h3>
							<p class="scientific-name">Panulirus cygnus</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>SS8013</td>
							    <td>SS8014</td>
							  </tr>
							  <tr>
							    <td>Product Name</td>
							    <td>Whole raw frozen lobster</td>
							    <td>Whole cooked frozen lobster</td>
							  </tr>
							  <tr>
							    <td>Grade</td>
							    <td colspan="2">A - G size</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td colspan="2">10kg</td>
							  </tr>
							  <tr>
							    <td>Storage</td>
							    <td colspan="2">Frozen</td>
							  </tr>
							  <tr>
							</table>
							<p class="blue-text">
								Frozen lobsters are renowned for retaining their freshness; all the quality of live lobster, with the convenience of a frozen product. Our unique freezing techniques capture in time that last moment of freshness and vitality, ready to be re-released when thawed.
							</p>
							<a href="pdf/ss8013-australian-rock-lobster-v1.pdf" target="_blank">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-wholerawprawn" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-raw-prawn.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafood</span><p>
							<h3 class="blue-text">Whole Raw Prawn</h3>
							<p class="scientific-name">Litopenaeus vannamei</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Weight</td>
							    <td>10 x 800g</td>
							  </tr>
							  <tr>
							    <td>Grade</td>
							    <td>26/30<br>31/40</td>
							  </tr>
							  <tr>
							    <td>Storage</td>
							    <td>Frozen</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>Saudi Arabia</td>
							  </tr>
							</table>
							<p class="blue-text">
								Introducing desert aquaculture, an innovative approach that creates ideal conditions for growing Penaeus indicus species in a remote and bio-secure environment. Our shrimp thrive in continuously curculating water sourced from the pristine clear blue waters of the Red Sea.
								<br><br>
								Rest assured, our shrimp are antibiotic free, with absolutely no traces of chloramphenicol or nitrofurans.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-tuna" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-tuna.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#fish</span><p>
							<h3 class="blue-text">Tuna</h3>
							<p class="scientific-name">Thunnus spp.</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Name</td>
							    <td>Yellow Fin Tuna</td>
							    <td>Albacore</td>
							    <td>Wahoo</td>
							  </tr>
								<tr>
									<td>Cut</td>
									<td>Steak</td>
									<td>Steak / Slice</td>
									<td>Portion / Slice</td>
								</tr>
							  <tr>
							    <td>Weight</td>
							    <td>250g</td>
							    <td>60-100g<br>100-120g<br>120-180g<br>180g-220g</td>
									<td>5kg</td>
							  </tr>
							</table>
							<p class="blue-text">
								Wild-caught tuna that is caught in its natural habitat, such as the open ocean or coastal waters, using traditional fishing methods. These tuna are not raised in captivity or farmed.
								<br><br>
								Wild-caught tuna is known for its superior flavor, firm texture, and high nutritional value. It is prized for culinary purposes, particularly in dishes like sushi and grilling, due to its rich taste and succulent meat.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-rocklobstertail" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-rock-lobster-tail.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafood</span><p>
							<h3 class="blue-text">Rock Lobster Tail</h3>
							<p class="scientific-name">Panulirus cygnus</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Name</td>
							    <td>Raw Lobster Tail</td>
							    <td>Cooked Lobster Tail</td>
							  </tr>
							  <tr>
							    <td>Grade</td>
							    <td colspan="2">SAB, SAC, SAD</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td colspan="2">4.54kg</td>
							  </tr>
							  <tr>
							    <td>Storage</td>
							    <td colspan="2">Frozen</td>
							  </tr>
							  <tr>
							</table>
							<p class="blue-text">
								Rock lobster tails are a prized delicacy known for their succulent and flavorful meat. These tails are sourced from the finest rock lobsters and carefully harvested to ensure optimum quality. With their firm texture and sweet, rich taste, rock lobster tails are a true indulgence. Whether grilled, steamed, or butter-poached, they make an exquisite centerpiece for any seafood feast. Treat yourself to the exquisite flavors of rock lobster tails and elevate your dining experience to new heights.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-marbledbeefroll" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-marbled-beef-roll.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#red meat</span><p>
							<h3 class="blue-text">Marbled Beef Roll</h3>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>MM8008</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>25 x 300g</td>
							  </tr>
							  <tr>
							    <td>Storage</td>
							    <td>Frozen</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>New Zealand</td>
							  </tr>
							</table>
							<p class="blue-text">
								100% Natural meat slice. Thinly sliced lamb, pork or marbled beef is the key ingredient in many popular recipes. Suitable for hot pot, korean bbq and stir fry.
								<br><br>
								Shaved meat roll is used for Hot Pot, Shabu Shabu, Stir-Fry, Gyudon, Pan-Grill and more.
							</p>
							<a href="pdf/mm8008-shaved-meat-roll-v1.pdf" target="_blank">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-shavedlambroll" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-shaved-lamb-roll.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#red meat</span><p>
							<h3 class="blue-text">Shaved Lamb Roll</h3>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>SS8006</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>25 x 300g</td>
							  </tr>
							  <tr>
							    <td>Storage</td>
							    <td>Frozen</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>New Zealand</td>
							  </tr>
							</table>
							<p class="blue-text">
								100% Natural meat slice. Thinly sliced lamb, pork or marbled beef is the key ingredient in many popular recipes. Suitable for hot pot, korean bbq and stir fry.
								<br><br>
								Shaved meat roll is used for Hot Pot, Shabu Shabu, Stir-Fry, Gyudon, Pan-Grill and more.
							</p>
							<a href="pdf/mm8008-shaved-meat-roll-v1.pdf" target="_blank">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-shavedporkroll" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-shaved-pork-roll.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#red meat</span><p>
							<h3 class="blue-text">Shaved Pork Roll</h3>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>SS8007</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>25 x 300g</td>
							  </tr>
							  <tr>
							    <td>Storage</td>
							    <td>Frozen</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>New Zealand</td>
							  </tr>
							</table>
							<p class="blue-text">
								100% Natural meat slice. Thinly sliced lamb, pork or marbled beef is the key ingredient in many popular recipes. Suitable for hot pot, korean bbq and stir fry.
								<br><br>
								Shaved meat roll is used for Hot Pot, Shabu Shabu, Stir-Fry, Gyudon, Pan-Grill and more.
							</p>
							<a href="pdf/mm8008-shaved-meat-roll-v1.pdf" target="_blank">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-prawncutlet" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-prawn-cutlet.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafoood</span><p>
							<h3 class="blue-text">Prawn Cutlet</h3>
							<p class="scientific-name">Penaeus monodon</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Grade</td>
							    <td>21/25<br>26/30</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>10 x 1kg</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>Vietnam</td>
							  </tr>
							</table>
							<p class="blue-text">
								Raw prawn cutlets are a popular seafood delicacy made from high-quality prawns. They are carefully hand-cut into convenient, bite-sized pieces, making them versatile for various culinary preparations. With their succulent texture and sweet flavor, raw prawn cutlets are perfect for grilling, stir-frying, or adding to soups and seafood dishes. They provide a delightful seafood experience, allowing you to savor the natural taste of fresh prawns in every bite.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-prawnmeat" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-prawn-meat.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafoood</span><p>
							<h3 class="blue-text">Prawn Meat</h3>
							<p class="scientific-name">Penaeus monodon</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>SS8012</td>
							  </tr>
							  <tr>
							    <td>Grade</td>
							    <td>26/30, 31/40</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>20 x 500g</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>Vietnam</td>
							  </tr>
							</table>
							<p class="blue-text">
								A true delicacy sourced from the finest waters. Known for its exceptional flavor and succulent texture, this prawn meat is a versatile ingredient that adds a touch of luxury to your culinary creations.
								<br><br>
								Indulge in the premium quality and rich taste of our Black Tiger prawn meat. Elevate your meals with this prized ingredient and experience the finest flavors the sea has to offer.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-freshwaterprawn" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-freshwater-prawn.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafoood</span><p>
							<h3 class="blue-text">Freshwater Prawn</h3>
							<p class="scientific-name">Macrobrachium Rosenbergii</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>SS8010</td>
							  </tr>
							  <tr>
							    <td>Grade</td>
							    <td>6/8<br>8/12</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>10 x 1kg</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>Vietnam</td>
							  </tr>
							</table>
							<p class="blue-text">
								Our premium freshwater prawns are known for their exquisite taste and tender texture, making them a perfect choice for seafood enthusiasts.
								<br><br>
								These prawns are carefully harvested and packed to ensure their freshness and quality. With their natural sweetness and succulent meat, our freshwater prawns are ideal for grilling, sautéing, or adding to flavorful seafood dishes.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-greenlandcookedprawn" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-greenland-cooked-prawn.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#seafoood</span><p>
							<h3 class="blue-text">Greenland Cooked Prawn</h3>
							<p class="scientific-name">Pandalus borealis</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>SS8001</td>
							  </tr>
							  <tr>
							    <td>Grade</td>
							    <td>90/120</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>5kg</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>Greenland</td>
							  </tr>
							</table>
							<p class="blue-text">
								Greenland whole cooked shrimps are cooked and quick frozen on board the catching vessel to ensure premium and fresh quality.
								<br><br>
								Consume directly after defrosting or add them to dishes just before serving.
								<br><br>
								Recommeded dipping sauce: Ponzu, Tartar Sauce, Vinegar with Ginger.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-wagyuthinslice" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-wagyuthinslice.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#wagyu beef</span><p>
							<h3 class="blue-text">K-Cut BBQ Slice</h3>
							<table class="product-table blue-text">
							  <tr>
							    <td style="width:40%">Product Code</td>
							    <td>MW8104</td>
							    <td>MW8105</td>
							    <td>MW8113</td>
							  </tr>
							  <tr>
							    <td>Range</td>
							    <td>Gold</td>
							    <td>Silver</td>
							    <td>Red</td>
							  </tr>
							  <tr>
							    <td>Marbling Score</td>
							    <td>7 - 9</td>
							    <td>4 - 6</td>
							    <td>4 - 6</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td colspan="3" class="text-center">16 x 300g</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td colspan="3" class="text-center">New Zealand</td>
							  </tr>
							</table>
							<p class="blue-text">
								Suitable for Hot Pot and Hot Plate.
								<br><br>
								This cut develops fantastic marbling, so is perfect to enjoy thinly-sliced, with tender meat.
							</p>
							<a href="pdf/wagyu-thin-slice-v1.pdf" target="_blank">
								<div class="view-more slide_right">
										<span class="lnr lnr-arrow-right"></span>
										<p>Download</p>
								</div>
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
				<!-- Popup itself -->
				<div id="popup-antartictoothfish" class="white-popup mfp-hide">
					<div class="popup-content">
					  <div class="col-md-5">
							<img src="images/product-antartic-toothfish-fin.jpg">
						</div>
						<div class="col-md-7">
							<p><span>#fish</span><p>
							<h3 class="blue-text">Antartic Toothfish Fin</h3>
							<p class="scientific-name">Dissostichus mawsoni</p>
							<table class="product-table blue-text">
							  <tr>
							    <td>Product Code</td>
							    <td>SS8004</td>
							  </tr>
							  <tr>
							    <td>Storage</td>
							    <td>Frozen</td>
							  </tr>
							  <tr>
							    <td>Origin</td>
							    <td>New Zealand</td>
							  </tr>
							</table>
							<p class="blue-text">
								The Antarctic Toothfish is a highly prized catch that is sweet in flavour, delectable and is sustainably fished under the ongoing effective management of Antarctic Toothfish Fisheries and carries the MSC certification.
								<br><br>
								Toothfish has snow-white flesh and suited to both dry and moist preparations in a broad array of cuisines.
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Popup itself -->
			</div>
		</div>
	</div>

	<?php include "include/newsletter.php";?>

	<?php include "include/footer.php";?>
	</div>

	<?php include "include/javascript.php";?>

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<script type="text/javascript">
		$(window).load(function() {

			// initialize isotope
			var $container = $('.categories_container');
			$container.isotope({
				filter: '*',
				layoutMode: 'fitRows',
			});

			$('.categories_filter a').click(function(){
				$('.categories_filter .active').removeClass('active');
				$(this).addClass('active');

				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						animationEngine : "jquery"
					}
				});
				return false;
			});
		});
		</script>

		<script type="text/javascript">

			$(document).ready(function() {
		    $('.open-popup-link').magnificPopup({
		      type:'inline',
		      midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		      gallery:{
		        enabled:true
		      },
					callbacks: {
						beforeOpen: function() {
							$('body').addClass('mfp-active');
						},
						beforeClose: function() {
							$('body').removeClass('mfp-active');
						}
					}
		    });
			})
		</script>

	</body>
</html>
