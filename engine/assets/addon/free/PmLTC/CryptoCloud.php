<?php

$apikey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MjU5MywiZXhwIjo4ODA2NTQyMDE5OX0.bBcU0-P95Tc9LUqiS-2RJ8i_HBtTE13yyef-MrTNLvA';
$secretkey = 'IvBLX9ICpB4xH4NwtW9zN1Lu5QSzwuK0wqPv';
$merchant_id = 'PZKIgjD7vhnxeyuR';
$succes = 'https://shadowservice.site/iH6/assets/addon/free/PmLTC/success.php';
$fail = 'https://shadowservice.site/iH6/assets/addon/free/PmLTC/fail.php';
$notification = 'https://shadowservice.site/iH6/assets/addon/free/PmLTC/notification.php';



add_action('plugins_loaded', 'init_woo_cryptocloud', 0);

function init_woo_cryptocloud() {

	if (!class_exists('WC_Payment_Gateway')) return;

	class WC_Gateway_CryptoCloud extends WC_Payment_Gateway {
		
		function __construct() {
			$this->id = 'cryptocloud';
			$this->method_title = 'CryptoCloud';
			$this->method_description = 'Добавляет в WooCommerce возможность приёма платежей через платежную систему CryptoCloud';

			$this->init_settings();

			$this->title = $this->get_option('title');

			add_action('woocommerce_api_wc_gateway_cryptocloud', array(&$this, 'callback'));
		}
	
		function process_payment($order_id) { 
			global $woocommerce;

			$order = new WC_Order($order_id);

			$amount = $order->get_total();
			$amount = str_replace(',', '.', $amount);
			$amount = number_format($amount, 2, '.', '');


			$currency = get_woocommerce_currency();
			$data_request = array(
				'shop_id'	=> $merchant_id,
				'amount'	=> $amount,
				'currency'	=> $currency,
				'order_id'	=> $order_id
			);
	
			$curl = curl_init();
	
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data_request);
	
			$headers = array();
			$headers[] = "Authorization: Token " . $apikey;
	
			curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($curl, CURLOPT_URL, 'https://api.cryptocloud.plus/v1/invoice/create');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	
			$result = curl_exec($curl);
	
			curl_close($curl);
	
			$json_data = json_decode($result, true);
			$url = $json_data['pay_url'];

			$woocommerce->cart->empty_cart();

			return array('result' => 'success', 'redirect' => $url);
		}

		public function callback() {
			$order_id = (int) $_POST['order_id'];
			if (empty($order_id)) exit;

			$order = new WC_Order($order_id);

			$amount = $order->get_total();
			$amount = str_replace(',', '.', $amount);
			$amount = number_format($amount, 2, '.', '');

	
			$order->payment_complete();
			
			exit;
		}
	}
}

function add_woo_cryptocloud($methods) {
	$methods[] = 'WC_Gateway_CryptoCloud'; 
	return $methods;
}

add_filter('woocommerce_payment_gateways', 'add_woo_cryptocloud');

?>