<?php

header('content-type: application/json');
echo json_encode(['time' => time(), 'date' => date('y-m-d/S/N.e')]);