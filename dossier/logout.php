<?php
session_start();

// destroy the session
session_destroy();
header('Location: /cours-PHP/12_sessions.php');