<?php
require_once 'database.php';

class ResultModel {
    public static function create(string $username, string $quizName, int $score, int $total, int $pct): bool {
        $st = db()->prepare('INSERT INTO users_results (username, quiz_name, score, total_questions, percentage) VALUES (:u,:q,:s,:t,:p)');
        return $st->execute([':u' => $username, ':q' => $quizName, ':s' => $score, ':t' => $total, ':p' => $pct]);
    }

    public static function all(string $search = '', string $order = 'DESC'): array {
        $order = $order === 'ASC' ? 'ASC' : 'DESC';
        $sql   = 'SELECT * FROM users_results';
        $params = [];
        if ($search !== '') {
            $sql .= ' WHERE username LIKE :s';
            $params[':s'] = "%{$search}%";
        }
        $sql .= " ORDER BY percentage {$order}, created_at DESC";
        $st = db()->prepare($sql);
        $st->execute($params);
        return $st->fetchAll();
    }

    public static function updateScore(int $id, int $score, int $total): bool {
        $pct = $total > 0 ? (int) round(($score / $total) * 100) : 0;
        $st  = db()->prepare('UPDATE users_results SET score=:s,total_questions=:t,percentage=:p WHERE id=:id');
        return $st->execute([':s' => $score, ':t' => $total, ':p' => $pct, ':id' => $id]);
    }

    public static function delete(int $id): bool {
        $st = db()->prepare('DELETE FROM users_results WHERE id=:id');
        return $st->execute([':id' => $id]);
    }
}
