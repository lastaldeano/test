<?php

    header('Content-Type: application/json');
file_put_contents("php://output", '
    "speech": "Seleccione la pregunta mas parecida a la suya.\n1. �Cu�nta ayuda econ�mica puedo recibir?\n2. �Cu�nta ayuda econ�mica puedo recibir?\n3. �Re�no los requisitos para recibir ayuda econ�mica?\n4. �Re�no los requisitos para recibir ayuda econ�mica?\n5. FAFSA: Solicitar ayuda econ�mica � Pr�ximos pasos � Recibir ayuda econ�mica\n",
      "source": "testagent",
      "displayText": "Seleccione la pregunta mas parecida a la suya.\n1. �Cu�nta ayuda econ�mica puedo recibir?\n2. �Cu�nta ayuda econ�mica puedo recibir?\n3. �Re�no los requisitos para recibir ayuda econ�mica?\n4. �Re�no los requisitos para recibir ayuda econ�mica?\n5. FAFSA: Solicitar ayuda econ�mica � Pr�ximos pasos � Recibir ayuda econ�mica\n",
      "messages": [
        {
          "type": 0,
          "speech": "Seleccione la pregunta mas parecida a la suya.\n1. �Cu�nta ayuda econ�mica puedo recibir?\n2. �Cu�nta ayuda econ�mica puedo recibir?\n3. �Re�no los requisitos para recibir ayuda econ�mica?\n4. �Re�no los requisitos para recibir ayuda econ�mica?\n5. FAFSA: Solicitar ayuda econ�mica � Pr�ximos pasos � Recibir ayuda econ�mica\n"
        }
      ]
    ');
?>