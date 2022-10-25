
<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-2598719965489646-100713-482299034c6ec5e99e5e814b4ca7bad2-291547864');
?>

<?php
// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mercadopago</title>
	<script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<body>
	
	<div class="cho-container"></div>
	<script>
	  const mp = new MercadoPago('TEST-8a72af5b-1fb5-43f1-93d6-9094b93240d1', {
	    locale: 'es-AR'
	  });

	  mp.checkout({
	    preference: {
	      id: '2598719965489646'
	    },
	    render: {
	      container: '.cho-container',
	      label: 'Pagar con mp',
	    }
	  });
	</script>

</body>
</html>
