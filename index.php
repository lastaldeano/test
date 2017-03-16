<?php
    /* test */
    header('Content-Type: application/json');
file_put_contents("php://output",
    /*'{"speech": "Seleccione la pregunta mas parecida a la suya.\n1. ¿Cuánta ayuda económica puedo recibir?\n2. ¿Cuánta ayuda económica puedo recibir?\n3. ¿Reúno los requisitos para recibir ayuda económica?\n4. ¿Reúno los requisitos para recibir ayuda económica?\n5. FAFSA: Solicitar ayuda económica » Próximos pasos » Recibir ayuda económica\n",
      "displayText": "Seleccione la pregunta mas parecida a la suya.\n1. ¿Cuánta ayuda económica puedo recibir?\n2. ¿Cuánta ayuda económica puedo recibir?\n3. ¿Reúno los requisitos para recibir ayuda económica?\n4. ¿Reúno los requisitos para recibir ayuda económica?\n5. FAFSA: Solicitar ayuda económica » Próximos pasos » Recibir ayuda económica\n",
      "data": {},
      "contextOut": [],
      "source": "webhook",
      "messages": [
        {
          "type": 0,
          "speech": "Seleccione la pregunta mas parecida a la suya.\n1. ¿Cuánta ayuda económica puedo recibir?\n2. ¿Cuánta ayuda económica puedo recibir?\n3. ¿Reúno los requisitos para recibir ayuda económica?\n4. ¿Reúno los requisitos para recibir ayuda económica?\n5. FAFSA: Solicitar ayuda económica » Próximos pasos » Recibir ayuda económica\n"
        }
      ]}'*/
'{
"speech": "Barack Hussein Obama II is the 44th and current President of the United States.",
"displayText": "Barack Hussein Obama II is the 44th and current President of the United States, and the first African American to hold the office. Born in Honolulu, Hawaii, Obama is a graduate of Columbia University   and Harvard Law School, where ",
"data": {"slack": {

     "text": "Would you like to play a game?",
    "attachments": [
        {
            "text": "Choose a game to play",
            "fallback": "You are unable to choose a game",
            "callback_id": "wopr_game",
            "color": "#3AA3E3",
            "attachment_type": "default",
            "actions": [
                {
                    "name": "game",
                    "text": "Chess",
                    "type": "button",
                    "value": "chess"
                },
                {
                    "name": "game",
                    "text": "Falken\'s Maze",
                    "type": "button",
                    "value": "maze"
                },
                {
                    "name": "game",
                    "text": "Thermonuclear War",
                    "style": "danger",
                    "type": "button",
                    "value": "war",
                    "confirm": {
                        "title": "Are you sure?",
                        "text": "Wouldn\'t you prefer a good game of chess?",
                        "ok_text": "Yes",
                        "dismiss_text": "No"
                    }
                }
            ]
        }
    ]

}}
"contextOut": [],
"source": "testagent"
} '
);
?>