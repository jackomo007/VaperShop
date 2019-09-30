<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>VAPERSHOP</title>
  </head>
  <body >
	  	<center>
			<div class="container">
					<img src="https://raw.githubusercontent.com/jackomo007/VaperShop/master/public/images/logo.png?token=AJGSZEACHIYXW7LBBFNIUDK5SFDGY" alt="logo.png" itemprop="image">
					<div class="card bg-light mb-3" style="max-width: 30rem;">
						<div class="card-header" style="background: rgba(0,49,83,1);color: white;">
							 <strong>Saludos, {{auth()->user()->name}}. Gracias por comprar en nuestra tienda.</strong> 
						</div>
						<div class="card-body">
							<h5 class="card-title">A continuacion los datos de su compra:</h5>
							<table class="table" width="100%">
								<thead>
									<tr class="table" style="background:  rgba(108,254,243,1);">
										<th scope="col">
											Direccion
										</th>
										<th scope="col">
											Persona
										</th>
										<th scope="col">
											Cambio
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{$data->address}}</td>
										<td>{{$data->guest}}</td>
										<td>S/ {{$order->change}}</td>
									</tr>
								</tbody>								
							</table>
							<table class="table" width="100%">
								<thead style="background:  rgba(108,254,243,1);">
									<tr class="table-active">
										<th scope="col">
											Producto
										</th>
										<th scope="col">
											Cantidad
										</th>
										<th scope="col">
											Precio Unitario
										</th>
									</tr>
								</thead>
								<tbody>
									@foreach($order->shopping_cart->inShoppingCart as $products)
									<tr>
										<td>{{$products->products->title}}</td>
										<td>{{$products->quantity}}</td>
										<td style="text-align: right;">S/ {{$products->products->pricing}}</td>
									</tr>
									@endforeach
								</tbody>								
							</table>
							<table class="table" width="100%">
								<thead>
									<tr class="table-danger">
										<th scope="col">
											&nbsp;
										</th>
										<th scope="col">
											Total
										</th>
										<th scope="col" style="text-align: right;">
											S/ {{$order->total}}
										</th>
									</tr>
								</thead>						
							</table>
							<p class="card-text">
								<em>Copyright &copy; 2019 VAPERSHOP, All rights reserved.</em>
								<br />
								<strong>Puede contactarnos al siguiente correo:</strong>
								<br />
								VAPERSHOP@gmail.com 
							</p>
						</div>
					</div>
			</div>
		</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>