<?php
function e(string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

function isPost(): bool {
    return ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
}

function jsonResponse(array $data, int $status = 200): never {
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

function cleanString(string $s, int $max = 120): string {
    return mb_substr(trim(preg_replace('/\s+/', ' ', $s)), 0, $max);
}
