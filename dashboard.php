<section class="view" id="view-dashboard">
        <div class="dashboard-hero">
            <div class="hero-text">
                <h1>Hello, <span id="hero-username"><?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?></span> 👋</h1>
                <p>Your AI learning journey </p>
            </div>
            <div class="hero-orbs">
                <div class="orb orb-1"></div>
                <div class="orb orb-2"></div>
                <div class="orb orb-3"></div>
            </div>
        </div>

        <div class="stats-row">
            <div class="stat-card">
                <div class="stat-num" id="stat-completed"><?= count(array_filter($progress)) ?></div>
                <div class="stat-label">Modules Completed</div>
            </div>
            <div class="stat-card">
                <div class="stat-num"><?= $completion ?>%</div>
                <div class="stat-label">Course Progress</div>
            </div>
            <div class="stat-card">
                <div class="stat-num"><?= $avgScore ?></div>
                <div class="stat-label">Average Quiz Score</div>
            </div>
            <div class="stat-card">
                <div class="stat-num">4</div>
                <div class="stat-label">Total Modules</div>
            </div>
        </div>

        <h2 class="section-heading">Course Modules</h2>
        <div class="module-grid">
            <?php foreach ($modules as $id => $mod): $done = $progress[$id]; ?>
            <div class="module-card <?= $done ? 'done' : '' ?>" onclick="showModule(<?= $id ?>)">
                <div class="card-icon"><?= $mod['icon'] ?></div>
                <div class="card-body">
                    <h3><?= $mod['title'] ?></h3>
                    <p><?= $mod['sub'] ?></p>
                </div>
                <div class="card-footer">
                    <?php if ($done): ?>
                        <span class="pill pill-done">✓ Completed<?= $scores[$id] !== null ? ' · '.$scores[$id].'%' : '' ?></span>
                    <?php else: ?>
                        <span class="pill pill-todo">Start Module →</span>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="principles-strip">
            <h2 class="section-heading">Mayer's Multimedia Principles Applied</h2>
            <div class="principles-row">
                <div class="principle-chip"><span>🧩</span><span>Segmentation</span></div>
                <div class="principle-chip"><span>🎙️</span><span>Modality</span></div>
                <div class="principle-chip"><span>💬</span><span>Personalization</span></div>
                <div class="principle-chip"><span>📍</span><span>Spatial Contiguity</span></div>
                <div class="principle-chip"><span>📘</span><span>Pre-training</span></div>
            </div>
        </div>
    </section>
