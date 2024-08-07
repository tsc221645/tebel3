<!DOCTYPE htlm>
<html>
	<head> 
		Reusable Laravel Product Component
	</head>
	<body>
		<div class="container">
			<x-individual_product
				title="Auto - Cera para Carro" 
				image="/back/vendors/images/image.jpg" 
				
				link="/path/to/product" 
				moreLink="/path/to/more"
			>
				$99.99
			</x-individual_product>
		</div>

		<div class="container">
			<x-individual_product
				title="Product Name 2" 
				image="/path/to/image.jpg" 
				link="/path/to/product" 
				moreLink="/path/to/more"
			>
				$99.99
			</x-individual_product>
		</div>

		<div class="container">
			<x-individual_product
				title="Producto 3" 
				image="/path/to/image.jpg" 
				link="/path/to/product" 
				moreLink="/path/to/more"
			>
				$99.99
			</x-individual_product>
		</div>
	</body>
</html>