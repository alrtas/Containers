<?php 

    require_once 'HTTP/Request2.php';
    $request = new HTTP_Request2();
    $request->setUrl('https://msging.net/commands');
    $request->setMethod(HTTP_Request2::METHOD_POST);
    $request->setConfig(array(
      'follow_redirects' => TRUE
    ));
    $request->setHeader(array(
      'Content-Type' => 'application/json',
      'Authorization' => 'Key YXRlbmRlbnRlZGlnaXRhbG9wY29lczpmZkVmVm5vUGJVS3ZESk5nMDk0OQ=='
    ));
    $request->setBody('{  
    \n  "id": "e63f4b51-3327-41db-97f3-596e1f72d0e7",
    \n  "method": "get",
    \n  "uri": "/contacts/7b8c8ed8-bdac-40cf-8016-2874f30c5158@tunnel.msging.net"
    \n}');
    try {
      $response = $request->send();
      if ($response->getStatus() == 200) {
        echo $response->getBody();
      }
      else {
        echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
        $response->getReasonPhrase();
      }
    }
    catch(HTTP_Request2_Exception $e) {
      echo 'Error: ' . $e->getMessage();
    }
    
?>

