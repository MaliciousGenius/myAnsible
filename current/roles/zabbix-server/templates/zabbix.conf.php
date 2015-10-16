<?php
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']     = 'POSTGRESQL';
$DB['SERVER']   = '{{ DBHost }}';
$DB['PORT']     = '0';
$DB['DATABASE'] = '{{ DBName }}';
$DB['USER']     = '{{ DBUser }}';
$DB['PASSWORD'] = '{{ DBPassword }}';

// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA'] = '';

$ZBX_SERVER      = 'localhost';
$ZBX_SERVER_PORT = '10051';
$ZBX_SERVER_NAME = '';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
?>
