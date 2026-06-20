<?php
require_once __DIR__ . '/common.php';
require_once __DIR__ . '/ResultModel.php';

class ResultController {
    public static function save(): void {
        if (!isPost()) jsonResponse(['success' => false, 'message' => 'Method not allowed'], 405);

        $username = cleanString($_POST['username'] ?? '');
        $quizName = cleanString($_POST['quiz_name'] ?? '');
        $score    = filter_input(INPUT_POST, 'score',           FILTER_VALIDATE_INT);
        $total    = filter_input(INPUT_POST, 'total_questions', FILTER_VALIDATE_INT);
        $pct      = filter_input(INPUT_POST, 'percentage',      FILTER_VALIDATE_INT);

        if ($username === '' || $quizName === '' || $score === false || $total === false || $pct === false
            || $score < 0 || $total <= 0 || $pct < 0 || $pct > 100) {
            jsonResponse(['success' => false, 'message' => 'Invalid input'], 422);
        }

        ResultModel::create($username, $quizName, $score, $total, $pct);
        jsonResponse(['success' => true, 'message' => 'Result saved']);
    }

    public static function update(): void {
        if (!isPost()) jsonResponse(['success' => false], 405);

        $id    = (int) ($_POST['id']              ?? 0);
        $score = (int) ($_POST['score']            ?? -1);
        $total = (int) ($_POST['total_questions']  ?? 0);

        if ($id <= 0 || $score < 0 || $total <= 0) jsonResponse(['success' => false, 'message' => 'Invalid input'], 422);

        ResultModel::updateScore($id, $score, $total);
        jsonResponse(['success' => true, 'message' => 'Result updated']);
    }

    public static function delete(): void {
        if (!isPost()) jsonResponse(['success' => false], 405);

        $id = (int) ($_POST['id'] ?? 0);
        if ($id <= 0) jsonResponse(['success' => false, 'message' => 'Invalid id'], 422);

        ResultModel::delete($id);
        jsonResponse(['success' => true, 'message' => 'Result deleted']);
    }
}
