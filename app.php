<?php
session_start();

if (!isset($_SESSION['progress'])) {
    $_SESSION['progress'] = [1 => false, 2 => false, 3 => false, 4 => false];
    $_SESSION['scores']   = [1 => null,  2 => null,  3 => null,  4 => null];
    $_SESSION['username'] = 'Student';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    $action = $_POST['action'];

    if ($action === 'complete_module') {
        $mod = (int)($_POST['module'] ?? 0);
        $score = (int)($_POST['score'] ?? 0);
        if ($mod >= 1 && $mod <= 4) {
            $_SESSION['progress'][$mod] = true;
            $_SESSION['scores'][$mod]   = $score;
        }
        echo json_encode(['success' => true, 'progress' => $_SESSION['progress'], 'scores' => $_SESSION['scores']]);
    } elseif ($action === 'reset_progress') {
        $_SESSION['progress'] = [1 => false, 2 => false, 3 => false, 4 => false];
        $_SESSION['scores']   = [1 => null,  2 => null,  3 => null,  4 => null];
        echo json_encode(['success' => true]);
    } elseif ($action === 'set_username') {
        $_SESSION['username'] = htmlspecialchars(trim($_POST['username'] ?? ''), ENT_QUOTES, 'UTF-8');
        echo json_encode(['success' => true]);
    }
    exit;
}

$progress   = $_SESSION['progress'];
$scores     = $_SESSION['scores'];
$username   = $_SESSION['username'];
$completion = (int)round((count(array_filter($progress)) / 4) * 100);

$validScores = array_filter($scores, fn($s) => $s !== null);
$avgScore    = count($validScores) ? round(array_sum($validScores) / count($validScores)) . '%' : '—';

$modules = [
    1 => ['icon' => '🧠', 'title' => 'AI Essentials',   'sub' => 'Pre-training & Glossary'],
    2 => ['icon' => '⚙️', 'title' => 'ML Workflow',     'sub' => 'Segmented Pipeline'],
    3 => ['icon' => '🕸️', 'title' => 'Neural Networks', 'sub' => 'Visual Diagram'],
    4 => ['icon' => '⚖️', 'title' => 'AI Ethics',       'sub' => 'Interactive Scenario'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Learn — Interactive E-Learning Platform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<main class="main-content" id="main-content">
    <?php include 'header.php'; ?>

    <?php include 'dashboard.php'; ?>
      
    <?php include 'module.php'; ?>
</main>

<div class="toast hidden" id="toast"></div>
<script src="app.js"></script>
</body>
</html>
