SELECT * FROM `products`WHERE count > 0 ORDER BY name;
SELECT COUNT(id), manufacturer FROM `products` GROUP BY manufacturer ORDER BY COUNT(id);
SELECT * FROM `products` WHERE manufacturer = 'Iphone' AND ((price > 2000 AND currency = 'BYN') OR (price > 746 AND currency = 'EUR') OR (price > 800 AND currency = 'USD'));
SELECT * FROM `products` WHERE name LIKE '%plus%' OR name LIKE '%max%';
SELECT * FROM `products` WHERE count > 0 AND ((price BETWEEN 1000 and 2000 AND currency = 'BYN') OR (price BETWEEN 400 AND 800 AND currency = 'USD') OR (price BETWEEN 373 AND 746 AND currency = 'EUR'));
SELECT * FROM `products` WHERE name LIKE '%Google%' OR name LIKE '%Iphone%' OR name LIKE '%Samsung%';
SELECT SUM(count) AS amount, AVG(price) as average_price, manufacturer FROM `products` GROUP BY manufacturer ORDER BY `amount`;
SELECT SUM(count) AS amount, manufacturer FROM `products` GROUP BY manufacturer ORDER BY manufacturer;