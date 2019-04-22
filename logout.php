<?php

session_start();
session_destroy();
setcookie('hunt', null, time()-3600);
header('location: login');