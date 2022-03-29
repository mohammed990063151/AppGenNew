<?php
return [
    'client_id' => 'AQe04pZ2TYkC5Hi4b9D2SUoyGCW_2KCXufx-LekyNPn3yizvHAdfFOWEPQMXhUBPGgKI3GHZ1v_c-eUb',
	'secret' => 'EEgcwXiHP_A6JMXXk8dvUoFwEpGLW2yixXK-s5HaGjNCwAIQsAeUeSQxWgoRXWz_wezUaHisrRx2z-j2',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];
