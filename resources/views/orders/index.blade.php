@extends("layouts.app")

@section("content")
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Ordem de Compra</h2>
		</div>
		<div class="panel-body">
			<h3>Estatísticas</h3>

			<div class="row top-space">
				<div class="col-xs-4 col-md-3 col-lg-2 sale-data">
					<span>{{$totalMonth}}USD</span>
					Renda do mês
				</div>

				<div class="col-xs-4 col-md-3 col-lg-2 sale-data">
					<span>{{$totalMonthCount}}</span>
					Número de vendas
				</div>

			</div>

			<h3>Vendas</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>ID Venda</td>
						<td>Comprador</td>
						<td>Endereço</td>
						<td>Telefone</td>
						<td>Estatus</td>
						<td>Data de Venda</td>
						<td>Ações</td>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
					<tr>
						<td>{{$order->id}}</td>
						<td>{{$order->name." ".$order->surname}}</td>
						<td>{{$order->address()}}</td>
						<td>{{$order->telefone()}}</td>
						<td>
							<a 	href="#" 
								data-type="select" 
								data-pk="{{$order->id}}" 
								data-url="{{ url('/orders/').'/'.$order->id }}"
								data-title="Estatus" 
								data-value="{{$order->status}}"
								class="select-status"
								data-name="status"></a>
						</td>
						<td>{{$order->created_at}}</td>
						<td>Ações</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
	</div>
</div>
@section('js')
  <link href="{{asset('/plugins/bootstrap-editable/css/bootstrap-editable.css')}}" rel="stylesheet"/>
  <script src="{{asset('/plugins/bootstrap-editable/js/bootstrap-editable.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/orders.js')}}"></script>
@endsection

@endsection