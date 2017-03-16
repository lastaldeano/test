<?php
    /* test */
    header('Content-Type: application/json');
file_put_contents("php://output",
'{
      "speech": "Hi Sam! Nice to meet you!",
      "messages": [
        {
          "type": 0,
          "speech": "Hi Sam! Nice to meet you!"
        }
      ]
    }');
?>