# Paypal-payment-integration-codeigniter
payment integration using paypal in codeigniter

# Database for the code name it 'test'
## products table
CREATE TABLE `products` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
 `price` float(10,2) NOT NULL,
 `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USD',
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

##payments table
CREATE TABLE `payments` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `product_id` int(11) NOT NULL,
 `user_id` int(11) DEFAULT NULL,
 `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `payment_gross` float(10,2) NOT NULL,
 `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
 `payer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `payer_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
