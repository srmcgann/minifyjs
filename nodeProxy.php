<?php
  $data = json_decode(file_get_contents('php://input'));
  $code = $data->{'code'};
  if($code){
    //ob_start();
    file_put_contents('inputCode.js', $code);
    $output = shell_exec("node index.js");
    //ob_end_flush();
    echo json_encode($output);
  }else{
    echo json_encode(['no input']);
  }
?>