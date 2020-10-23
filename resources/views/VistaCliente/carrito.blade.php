<!doctype html>
<html lang="en">

<head>
	<title>Carrito de Compras</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js" type="text/javascript"></script>

    <link rel="icon" type="image/png" href="{{{ asset('images/icono.png')}}}" />
	<link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('../layout-cliente/cargar') 
@include('../layout-cliente/menu')
<section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Carrito de Compras</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url({{URL::asset('images/wallper.jpg')}});"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Incio</a></li>
            <li class="active">Carrito de Compras</li>
          </ul>
        </div>
      </section><br><br><br>
	<div class="container">
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h2>Productos</h2>
			</div>
			<div class="card-body">
				<table class="table">
					<tbody class="cart">
					</tbody>
					<tfoot>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="text-right">Total: <strong class="total"></strong></td>
						<td><Button class="btn btn-primary" onClick="cartLS.remove(${item.id})">Comprar</Button></td>
						

					</tfoot>
				
				</table>
				<a href="{{ url('VistaCliente/indexCliente') }}">Seguir Comprando</a>
			</div>
		</div>
    </div>
	<script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
	<script>
		function renderCart(items) {
			const $cart = document.querySelector(".cart")
			const $total = document.querySelector(".total")

			$cart.innerHTML = items.map((item) => `
					<tr>
						<td>#${item.id}</td>
						<td>${item.name}</td>
						<td>${item.quantity}</td>
						<td style="width: 60px;">	
							<button type="button" class="btn btn-block btn-sm btn-outline-primary"
								onClick="cartLS.quantity(${item.id},1)">+</button>
						</td>
						<td style="width: 60px;">	
							<button type="button" class="btn btn-block btn-sm btn-outline-primary"
								onClick="cartLS.quantity(${item.id},-1)">-</button>
						</td>
						<td class="text-right">$${item.price}</td>
						<td class="text-right"><Button class="btn btn-primary" onClick="cartLS.remove(${item.id})">Delete</Button></td>
					</tr>`).join("")

			$total.innerHTML = "$" + cartLS.total()

		}
		renderCart(cartLS.list())
		cartLS.onChange(renderCart)
	</script>
</body>

</html>