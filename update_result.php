<?php
session_start();
require_once '/ResultController.php';
try {
    ResultController::update();
} catch (Throwable $e) {
    jsonResponse(['success' => false, 'message' => 'Server error'], 500);
}
