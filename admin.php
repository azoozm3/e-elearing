<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: admin_login.php');
 
}
require_once 'database.php';
require_once 'ResultModel.php';

$search      = trim($_GET['search'] ?? '');
$order       = ($_GET['order'] ?? 'DESC') === 'ASC' ? 'ASC' : 'DESC';
$results     = ResultModel::all($search, $order);
$toggleOrder = $order === 'DESC' ? 'ASC' : 'DESC';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — Quiz Results</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body class="admin-page">
    <h1>📊 Quiz Results — Admin Panel</h1>

    <div class="admin-bar">
        <form method="get" style="display:flex;gap:.5rem;flex-wrap:wrap">
            <input type="text" name="search" value="<?= htmlspecialchars($search, ENT_QUOTES, 'UTF-8') ?>" placeholder="Search by username…">
            <input type="hidden" name="order" value="<?= $order ?>">
            <button type="submit" class="btn-primary">Search</button>
            <?php if ($search): ?>
                <a href="admin.php" class="btn-secondary">Clear</a>
            <?php endif; ?>
        </form>
        <a href="admin.php?order=<?= $toggleOrder ?>&search=<?= urlencode($search) ?>" class="btn-secondary">
            Sort by Score <?= $order === 'DESC' ? '↑' : '↓' ?>
        </a>
        <a href="logout.php" class="btn-secondary">Logout</a>
    </div>

    <?php if (empty($results)): ?>
        <div class="empty">No results found<?= $search ? ' for "' . htmlspecialchars($search, ENT_QUOTES, 'UTF-8') . '"' : '' ?>.</div>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>#</th><th>Username</th><th>Quiz</th><th>Score</th>
                    <th>Questions</th><th>Percentage</th><th>Date</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $r): ?>
                <tr id="row-<?= $r['id'] ?>">
                    <td><?= $r['id'] ?></td>
                    <td><?= htmlspecialchars($r['username'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($r['quiz_name'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= $r['score'] ?></td>
                    <td><?= $r['total_questions'] ?></td>
                    <td><span class="badge <?= $r['percentage'] >= 60 ? 'badge-pass' : 'badge-fail' ?>"><?= $r['percentage'] ?>%</span></td>
                    <td><?= date('Y-m-d H:i', strtotime($r['created_at'])) ?></td>
                    <td><button class="btn-danger" onclick="deleteResult(<?= $r['id'] ?>)">Delete</button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p class="record-count"><?= count($results) ?> record(s)</p>
    <?php endif; ?>

    <div class="toast" id="toast"></div>

    <script>
    async function deleteResult(id) {
        if (!confirm('Delete this result?')) return;
        const fd = new FormData();
        fd.append('id', id);
        const resp = await fetch('delete_result.php', { method: 'POST', body: fd });
        const data = await resp.json();
        if (data.success) {
            document.getElementById('row-' + id)?.remove();
            showToast('Result deleted.');
        } else {
            showToast('Error: ' + (data.message || 'Could not delete.'));
        }
    }
    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg;
        t.style.display = 'block';
        clearTimeout(t._t);
        t._t = setTimeout(() => t.style.display = 'none', 3000);
    }
    </script>
</body>
</html>
