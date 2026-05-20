<aside class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <div class="brand-orb"></div>
        <span class="brand-name">AI<em>Learn</em></span>
    </div>

    <div class="overall-progress">
        <div class="op-label">
            <span>Overall Progress</span>
            <span class="op-pct" id="overall-pct"><?= $completion ?>%</span>
        </div>
        <div class="op-bar">
            <div class="op-fill" id="overall-fill" style="width:<?= $completion ?>%"></div>
        </div>
    </div>

    <nav class="module-nav">
        <p class="nav-label">Course Modules</p>
        <?php foreach ($modules as $id => $mod):
            $done  = $progress[$id];
            $score = $scores[$id];
        ?>
        <button class="nav-item <?= $done ? 'completed' : '' ?>" onclick="showModule(<?= $id ?>)" data-mod="<?= $id ?>">
            <span class="nav-icon"><?= $mod['icon'] ?></span>
            <div class="nav-text">
                <span class="nav-title"><?= $mod['title'] ?></span>
                <span class="nav-sub"><?= $mod['sub'] ?></span>
            </div>
            <span class="nav-status">
                <?php if ($done): ?>
                    <span class="status-check">✓</span>
                    <?php if ($score !== null): ?><span class="status-score"><?= $score ?>%</span><?php endif; ?>
                <?php else: ?>
                    <span class="status-lock">○</span>
                <?php endif; ?>
            </span>
        </button>
        <?php endforeach; ?>
    </nav>

    <button class="reset-btn" onclick="resetProgress()">↺ Reset Progress</button>
    <a class="reset-btn" href="logout.php">Logout</a>
</aside>