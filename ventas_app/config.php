<?php
/*
 * Configuración de la conexión a PostgreSQL.
 * Si cambias el usuario o la contraseña en usuario_app.sql, cámbialos también aquí.
 */
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'proyecto');
define('DB_USER', 'app_ventas');
define('DB_PASS', 'ventas2026');

// Unidades a partir de las cuales un artículo se considera con stock bajo
define('STOCK_BAJO', 5);

date_default_timezone_set('America/Bogota');
