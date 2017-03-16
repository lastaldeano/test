<?php
/*if(getallheaders()['HEADERS_BUTTONS'])
{
    echo json_encode([

    ]);
}*/


//file_put_contents('log.txt', '<br><pre>' . print_r($_POST) . '</pre>', FILE_APPEND);

    $response = [
        'speech' => 'test text',
        'displayText' => 'test text',
        'data' => [
            'slack' => [
                "text" => 'I am a test message http://slack.com',
                "attachments" => [
                    "text" => "Choose a game to play",
                    "fallback" => "You are unable to choose a game",
                    "callback_id" => "wopr_game",
                    "color" => "#3AA3E3",
                    "attachment_type" => "default",
                    "actions" => [
                        [
                            "name" => "game",
                            "text" => "Chess",
                            "type" => "button",
                            "value" => "chess"
                        ],
                        [
                            "name" => "game",
                            "text" => "Falken's Maze",
                            "type" => "button",
                            "value" => "maze"
                        ],
                        [
                            "name" => "game",
                            "text" => "Thermonuclear War",
                            "style" => "danger",
                            "type" => "button",
                            "value" => "war",
                            "confirm" => [
                                "title" => "Are you sure?",
                                "text" => "Wouldn't you prefer a good game of chess?",
                                "ok_text" => "Yes",
                                "dismiss_text" => "No"
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'contextOut' => [],
        'source' => 'testagent',
        'followupEvent' => [],

    ];
    header('Content-Type: application/json');
file_put_contents("php://output", '
    "speech": "Seleccione la pregunta mas parecida a la suya.\n1. ¿Cuánta ayuda económica puedo recibir?\n2. ¿Cuánta ayuda económica puedo recibir?\n3. ¿Reúno los requisitos para recibir ayuda económica?\n4. ¿Reúno los requisitos para recibir ayuda económica?\n5. FAFSA: Solicitar ayuda económica » Próximos pasos » Recibir ayuda económica\n",
      "source": "testagent",
      "displayText": "Seleccione la pregunta mas parecida a la suya.\n1. ¿Cuánta ayuda económica puedo recibir?\n2. ¿Cuánta ayuda económica puedo recibir?\n3. ¿Reúno los requisitos para recibir ayuda económica?\n4. ¿Reúno los requisitos para recibir ayuda económica?\n5. FAFSA: Solicitar ayuda económica » Próximos pasos » Recibir ayuda económica\n",
      "messages": [
        {
          "type": 0,
          "speech": "Seleccione la pregunta mas parecida a la suya.\n1. ¿Cuánta ayuda económica puedo recibir?\n2. ¿Cuánta ayuda económica puedo recibir?\n3. ¿Reúno los requisitos para recibir ayuda económica?\n4. ¿Reúno los requisitos para recibir ayuda económica?\n5. FAFSA: Solicitar ayuda económica » Próximos pasos » Recibir ayuda económica\n"
        }
      ]
    ');
?>