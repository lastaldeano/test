<?php
    /* test */
    header('Content-Type: application/json');
file_put_contents("php://output",
'{
"speech": "Barack Hussein Obama II is the 44th and current President of the United States.",
"displayText": "Barack Hussein Obama II is the 44th and current President of the United States, and the first African American to hold the office. Born in Honolulu, Hawaii, Obama is a graduate of Columbia University   and Harvard Law School, where ",
"data": {}
"contextOut": [],
"source": "testagent"
} '
);
?>