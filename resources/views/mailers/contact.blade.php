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
							 <strong>{{$data->name}} te ha enviado un mensaje.</strong> 
						</div>
						<div class="card-body">
							<h5 class="card-title">Detalles:</h5>
							<table class="table" width="100%">
									<tr>
                                        Nombre: {{ $data->name }}
                                    </tr>
                                    <tr>
                                        Email: {{ $data->email }}
                                    </tr>
                                    <tr>
                                        Asunto: {{ $data->title }}
                                    </tr>
                                    <tr>
                                        Mensaje: <p>{{ $data->message }}</p>
									</tr>
							</table>
							<p class="card-text">
								<em>Copyright &copy; 2019 VAPERSHOP, All rights reserved.</em>
								<br />
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