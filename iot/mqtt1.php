require("phpMQTT.php");

  $host = "192.168.0.110"; 
  $port = 1883;
  $username = ""; 
  $password = ""; 
  $message = "Hello CloudMQTT!";

  //MQTT client id to use for the device. "" will generate a client id automatically
  $mqtt = new phpMQTT($host, $port, "mosquitto".rand()); 

  if ($mqtt->connect(true,NULL,$username,$password)) {
    $mqtt->publish("topic",$message, 0);
    $mqtt->close();
  }else{
    echo "Fail or time out<br />";
  }
<!--
  Below is a simple example for subscribing a message from the MQTT broker.

  // subscribe.php
  require("phpMQTT.php");

  $host = "hostname"; 
  $port = port;
  $username = "username"; 
  $password = "password"; 

  $mqtt = new phpMQTT($host, $port, "ClientID".rand()); 

  if(!$mqtt->connect(true,NULL,$username,$password)){
    exit(1);
  }

  //currently subscribed topics
  $topics['topic'] = array("qos"=>0, "function"=>"procmsg");
  $mqtt->subscribe($topics,0);

  while($mqtt->proc()){        
  }

  $mqtt->close();
  function procmsg($topic,$msg){
    echo "Msg Recieved: $msg";
  }
  -->