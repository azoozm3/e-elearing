<?php
session_start();
require_once __DIR__ . '/ResultController.php';
try {
    ResultController::save();
} catch (Throwable $e) {
    jsonResponse(['success' => false, 'message' => 'Server error'], 500);
}
