<?php

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