<?php 
return [ 
 'client_id' => env('AdpZP9viOoJJncl2GkKJgoFsMOu3_Ptv6EbcDd4bfy5dnemrWXZ99Ob7w-iOfURdzHFMvrrXRQxaRWoZ'),
 'secret' => env('ELoeM5PJDLx8Fk1AJfwvbO95aMegv1Nogg8HOWiSHyosKNgroovlq-0WC5JNm-7jtYdkUVOK0kaDP0ln'),
'settings' => array(
  'mode' => env('PAYPAL_MODE','sandbox'), //Option 'sandbox' or 'live', sandbox for testing
  'http.ConnectionTimeOut' => 1000, //Max request time in seconds
  'log.LogEnabled' => true, //Whether want to log to a file
  'log.FileName' => storage_path() . '/logs/paypal.log', //Specify the file that want to write on
  'log.LogLevel' => 'FINE' //Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
  /**
  * Logging is most verbose in the 'FINE' level and decreases as you
  * proceed towards ERROR
  */
 ),
];