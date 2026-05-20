'use strict';

const state = {
    currentView:   'dashboard',
    currentSteps:  { 1: 1, 2: 1, 3: 1, 4: 1 },
    stepCounts:    { 1: 4, 2: 3, 3: 3, 4: 4 },
    quizSubmitted: { 1: false, 2: false, 3: false, 4: false },
    progress:      { 1: false, 2: false, 3: false, 4: false },
    scores:        { 1: null,  2: null,  3: null,  4: null },
};

const QUIZZES = {
    1: [
        {
            q: 'What does "Inference" mean in the context of AI?',
            options: [
                'Training a model on new data',
                'Using a trained model to make predictions on new data',
                'Cleaning and preprocessing data',
                "Evaluating a model's accuracy"
            ],
            correct: 1
        },
        {
            q: 'Which type of machine learning requires labeled training data?',
            options: ['Unsupervised Learning', 'Reinforcement Learning', 'Supervised Learning', 'Transfer Learning'],
            correct: 2
        },
        {
            q: 'Which of the following is a real-world AI application?',
            options: ['A printed encyclopedia', 'A GPS navigation system', 'A manual spreadsheet', 'A physical filing cabinet'],
            correct: 1
        }
    ],
    2: [
        {
            q: 'What is the correct order of the ML pipeline stages?',
            options: [
                'Preprocessing → Collection → Training → Deployment → Evaluation',
                'Collection → Preprocessing → Training → Evaluation → Deployment',
                'Training → Collection → Evaluation → Preprocessing → Deployment',
                'Evaluation → Training → Collection → Preprocessing → Deployment'
            ],
            correct: 1
        },
        {
            q: 'What does "normalization" achieve in data preprocessing?',
            options: [
                'Removes all null values permanently',
                'Converts images to text format',
                'Scales feature values to a common range so no variable dominates',
                'Splits data into training and test sets'
            ],
            correct: 2
        },
        {
            q: "Approximately what percentage of a data scientist's time is spent on data preprocessing?",
            options: ['10–20%', '30–40%', '60–80%', '90–100%'],
            correct: 2
        }
    ],
    3: [
        {
            q: 'Which layer of a neural network receives raw input features?',
            options: ['Output Layer', 'Hidden Layer', 'Dropout Layer', 'Input Layer'],
            correct: 3
        },
        {
            q: 'What does the ReLU activation function return for negative inputs?',
            options: ['The negative value unchanged', '-1', '0', 'The absolute value'],
            correct: 2
        },
        {
            q: 'Which activation function is best suited for multi-class classification output layers?',
            options: ['ReLU', 'Sigmoid', 'Tanh', 'Softmax'],
            correct: 3
        }
    ],
    4: [
        {
            q: 'An AI hiring tool rejects significantly more female applicants because historical training data reflects past biases. This is an example of:',
            options: ['Data overfitting', 'Algorithmic Bias', 'Model underfitting', 'Deployment failure'],
            correct: 1
        },
        {
            q: 'Which ethical principle asks "who is responsible when an AI makes a harmful decision?"',
            options: ['Bias', 'Privacy', 'Accountability', 'Transparency'],
            correct: 2
        },
        {
            q: 'What is the BEST course of action if you discover your AI model produces discriminatory outcomes before deployment?',
            options: [
                'Deploy immediately — speed is most important',
                'Ignore it — no model is perfect',
                'Pause deployment, audit the training data, and apply bias mitigation techniques',
                'Retrain with less data to simplify the model'
            ],
            correct: 2
        }
    ]
};

// ── NAVIGATION ────────────────────────────────────────
function showModule(modId) {
    document.querySelectorAll('.view').forEach(v => v.classList.add('hidden'));

    const viewId = modId === 'dashboard' ? 'view-dashboard' : `view-module-${modId}`;
    document.getElementById(viewId)?.classList.remove('hidden');

    const labels = {
        dashboard: 'Dashboard',
        1: 'Module 1 — AI Essentials',
        2: 'Module 2 — ML Workflow',
        3: 'Module 3 — Neural Networks',
        4: 'Module 4 — AI Ethics'
    };
    document.getElementById('header-breadcrumb').textContent = labels[modId] || 'Dashboard';

    document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
    if (modId !== 'dashboard') {
        document.querySelector(`.nav-item[data-mod="${modId}"]`)?.classList.add('active');
        if (QUIZZES[modId] && !state.quizSubmitted[modId]) buildQuiz(modId);
    }

    state.currentView = modId;
    if (window.innerWidth < 900) document.getElementById('sidebar').classList.remove('open');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function showDashboard() {
    showModule('dashboard');
    document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
}

// ── SIDEBAR ───────────────────────────────────────────
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const main    = document.getElementById('main-content');
    if (window.innerWidth < 900) {
        sidebar.classList.toggle('open');
    } else {
        sidebar.classList.toggle('closed');
        main.classList.toggle('full');
    }
}

// ── STEP NAVIGATION ───────────────────────────────────
function goStep(modId, stepNum) {
    document.querySelectorAll(`#steps-${modId} .step`).forEach((s, i) => {
        s.classList.toggle('active', i + 1 === stepNum);
    });
    state.currentSteps[modId] = stepNum;
    updateStepControls(modId, stepNum, state.stepCounts[modId]);
}

function nextStep(modId) {
    const cur = state.currentSteps[modId];
    if (cur < state.stepCounts[modId]) goStep(modId, cur + 1);
}

function prevStep(modId) {
    const cur = state.currentSteps[modId];
    if (cur > 1) goStep(modId, cur - 1);
}

function updateStepControls(modId, step, total) {
    const prevBtn = document.getElementById(`prev-${modId}`);
    const nextBtn = document.getElementById(`next-${modId}`);
    if (prevBtn) prevBtn.disabled = step === 1;
    if (nextBtn) nextBtn.textContent = step === total ? '✓ Finish' : 'Next →';
    document.querySelectorAll(`#dots-${modId} .dot`).forEach((d, i) => {
        d.classList.toggle('active', i + 1 === step);
    });
}

// ── QUIZ ENGINE ───────────────────────────────────────
function buildQuiz(modId) {
    const container = document.getElementById(`quiz-${modId}-questions`);
    if (!container) return;
    container.innerHTML = QUIZZES[modId].map((q, qi) => `
        <div class="quiz-question">
            <p>${qi + 1}. ${q.q}</p>
            <div class="quiz-options">
                ${q.options.map((opt, oi) => `
                    <label class="quiz-opt" for="q${modId}_${qi}_${oi}">
                        <input type="radio" name="q${modId}_${qi}" id="q${modId}_${qi}_${oi}" value="${oi}">
                        <span>${opt}</span>
                    </label>
                `).join('')}
            </div>
        </div>
    `).join('');
}

function submitQuiz(modId) {
    if (state.quizSubmitted[modId]) return;

    const questions  = QUIZZES[modId];
    let correct      = 0;
    let allAnswered  = true;

    questions.forEach((q, qi) => {
        const selected = document.querySelector(`input[name="q${modId}_${qi}"]:checked`);
        if (!selected) { allAnswered = false; return; }

        const val  = parseInt(selected.value);
        const opts = document.querySelectorAll(`#quiz-${modId}-questions .quiz-question:nth-child(${qi + 1}) .quiz-opt`);
        opts.forEach((label, oi) => {
            if (oi === q.correct) label.classList.add('correct');
            else if (oi === val && val !== q.correct) label.classList.add('wrong');
        });

        if (val === q.correct) correct++;
    });

    if (!allAnswered) { showToast('⚠️ Please answer all questions before submitting!'); return; }

    const score  = Math.round((correct / questions.length) * 100);
    const passed = score >= 60;

    state.quizSubmitted[modId] = true;
    document.querySelectorAll(`#quiz-${modId}-questions input`).forEach(inp => inp.disabled = true);
    document.getElementById(`submit-${modId}`).disabled = true;

    const resultEl = document.getElementById(`result-${modId}`);
    resultEl.className = `quiz-result ${passed ? 'pass' : 'fail'}`;
    resultEl.innerHTML = `
        <div class="result-score">${score}%</div>
        <div class="result-msg">${passed
            ? `🎉 Excellent! You got ${correct}/${questions.length} correct. Module completed!`
            : `📚 You got ${correct}/${questions.length} correct. Review the material and try again.`
        }</div>
        ${passed
            ? `<button class="btn-submit" onclick="showModule('dashboard')" style="margin-top:1rem">← Back to Dashboard</button>`
            : `<button class="btn-submit" onclick="retakeQuiz(${modId})" style="margin-top:1rem">Retake Quiz</button>`
        }
    `;
    resultEl.classList.remove('hidden');

    if (passed) {
        saveProgress(modId, score);
        saveResultToDatabase(modId, correct, questions.length, score);
    }

    resultEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function retakeQuiz(modId) {
    state.quizSubmitted[modId] = false;
    buildQuiz(modId);
    const resultEl = document.getElementById(`result-${modId}`);
    resultEl.className = 'quiz-result hidden';
    resultEl.innerHTML = '';
    document.getElementById(`submit-${modId}`).disabled = false;
    document.getElementById(`quiz-${modId}`)?.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// ── DATABASE SAVE ─────────────────────────────────────
async function saveResultToDatabase(modId, correct, total, pct) {
    const username = document.getElementById('hero-username')?.textContent?.trim() || 'Student';
    const quizNames = { 1: 'AI Essentials', 2: 'ML Workflow', 3: 'Neural Networks', 4: 'AI Ethics' };
    try {
        const fd = new FormData();
        fd.append('username',        username);
        fd.append('quiz_name',       quizNames[modId] || `Module ${modId}`);
        fd.append('score',           correct);
        fd.append('total_questions', total);
        fd.append('percentage',      pct);
        await fetch('save_result.php', { method: 'POST', body: fd });
    } catch (e) { /* non-critical */ }
}

// ── SESSION SYNC ──────────────────────────────────────
async function saveProgress(modId, score) {
    try {
        const fd = new FormData();
        fd.append('action', 'complete_module');
        fd.append('module', modId);
        fd.append('score',  score);
        const resp = await fetch('app.php', { method: 'POST', body: fd });
        const data = await resp.json();
        if (data.success) {
            state.progress = data.progress;
            state.scores   = data.scores;
            updateUIProgress();
        }
    } catch (e) {
        state.progress[modId] = true;
        state.scores[modId]   = score;
        updateUIProgress();
    }
    showToast(`✅ Module ${modId} completed! Score: ${score}%`);
}

async function resetProgress() {
    if (!confirm('Reset all module progress? This cannot be undone.')) return;
    try {
        const fd = new FormData();
        fd.append('action', 'reset_progress');
        await fetch('app.php', { method: 'POST', body: fd });
    } catch (e) { /* non-critical */ }

    state.progress     = { 1: false, 2: false, 3: false, 4: false };
    state.scores       = { 1: null,  2: null,  3: null,  4: null };
    state.quizSubmitted = { 1: false, 2: false, 3: false, 4: false };
    state.currentSteps  = { 1: 1, 2: 1, 3: 1, 4: 1 };

    updateUIProgress();
    showModule('dashboard');
    showToast('↺ Progress reset successfully');
}

function updateUIProgress() {
    const { progress, scores } = state;
    const completed = Object.values(progress).filter(Boolean).length;
    const pct       = Math.round((completed / 4) * 100);

    const fill  = document.getElementById('overall-fill');
    const pctEl = document.getElementById('overall-pct');
    if (fill)  fill.style.width   = pct + '%';
    if (pctEl) pctEl.textContent  = pct + '%';

    document.querySelectorAll('.nav-item').forEach(item => {
        const mod  = parseInt(item.dataset.mod);
        const done = progress[mod];
        item.classList.toggle('completed', done);
        const statusEl = item.querySelector('.nav-status');
        if (statusEl) {
            statusEl.innerHTML = done
                ? `<span class="status-check">✓</span>${scores[mod] !== null ? `<span class="status-score">${scores[mod]}%</span>` : ''}`
                : `<span class="status-lock">○</span>`;
        }
    });

    const statEl = document.getElementById('stat-completed');
    if (statEl) statEl.textContent = completed;

    document.querySelectorAll('.module-card').forEach((card, i) => {
        const mod  = i + 1;
        const done = progress[mod];
        card.classList.toggle('done', done);
        const pillEl = card.querySelector('.pill');
        if (pillEl) {
            pillEl.className   = `pill ${done ? 'pill-done' : 'pill-todo'}`;
            pillEl.textContent = done
                ? `✓ Completed${scores[mod] !== null ? ` · ${scores[mod]}%` : ''}`
                : 'Start Module →';
        }
    });
}

// ── GLOSSARY ──────────────────────────────────────────
function toggleGloss(el) { el.classList.toggle('open'); }

// ── NEURAL NETWORK HOVER ──────────────────────────────
function initNNDiagram() {
    const tooltip = document.getElementById('nn-tooltip');
    if (!tooltip) return;
    document.querySelectorAll('.nn-node').forEach(node => {
        node.addEventListener('mouseenter', () => {
            tooltip.textContent    = node.dataset.info || '';
            tooltip.style.opacity  = '1';
            node.style.filter      = 'brightness(1.3) drop-shadow(0 0 8px currentColor)';
        });
        node.addEventListener('mouseleave', () => {
            tooltip.textContent    = 'Hover over a neuron →';
            tooltip.style.opacity  = '0.7';
            node.style.filter      = '';
        });
    });
}

// ── ETHICS SCENARIO ───────────────────────────────────
function makeChoice(btn, choice) {
    document.querySelectorAll('.choice-btn').forEach(b => b.disabled = true);
    const resultEl = document.getElementById('scenario-result');
    const responses = {
        A: { cls: 'bad',  text: '❌ <strong>This is ethically wrong and likely illegal.</strong> Knowingly deploying a biased AI can violate anti-discrimination laws (e.g., the EU AI Act). Speed should never come at the cost of fairness.' },
        B: { cls: 'good', text: '✅ <strong>Excellent! This demonstrates responsible AI development.</strong> Pausing to audit training data is correct. Apply bias mitigation techniques (re-sampling, re-weighting, or collecting more diverse data) before deploying.' },
        C: { cls: 'ok',   text: '⚠️ <strong>Partially correct — transparency is important but insufficient alone.</strong> Reporting is a good first step, but you also have a professional responsibility to recommend pausing deployment and document your findings clearly.' },
    };
    const res = responses[choice];
    resultEl.className = `scenario-result ${res.cls}`;
    resultEl.innerHTML = res.text;
    resultEl.classList.remove('hidden');
    btn.classList.add(choice === 'B' ? 'selected-good' : choice === 'A' ? 'selected-bad' : 'selected-good');
}

// ── TOAST ─────────────────────────────────────────────
function showToast(msg, duration = 3500) {
    const toast = document.getElementById('toast');
    if (!toast) return;
    toast.textContent = msg;
    toast.classList.remove('hidden');
    clearTimeout(toast._timer);
    toast._timer = setTimeout(() => toast.classList.add('hidden'), duration);
}

// ── INIT ──────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    [1, 2, 3, 4].forEach(id => {
        buildQuiz(id);
        updateStepControls(id, 1, state.stepCounts[id]);
    });

    initNNDiagram();

    document.querySelector('.sidebar-brand')?.addEventListener('click', showDashboard);

    // Read PHP-rendered progress into JS state
    document.querySelectorAll('.nav-item').forEach(item => {
        const mod = parseInt(item.dataset.mod);
        state.progress[mod] = item.classList.contains('completed');
        const scoreEl = item.querySelector('.status-score');
        if (scoreEl) state.scores[mod] = parseInt(scoreEl.textContent);
    });

    // Animate activation bars on scroll
    const actChart = document.querySelector('.activation-chart');
    if (actChart) {
        actChart.querySelectorAll('.act-fill').forEach(bar => bar.style.height = '0');
        new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.querySelectorAll('.act-fill').forEach(bar => {
                        bar.style.height = bar.parentElement.style.getPropertyValue('--h');
                    });
                }
            });
        }, { threshold: 0.3 }).observe(actChart);
    }
});

// Global exports for inline HTML handlers
Object.assign(window, {
    showModule, showDashboard, toggleSidebar,
    nextStep, prevStep, goStep,
    submitQuiz, resetProgress,
    toggleGloss, makeChoice
});
function openLightbox(img) {
    document.getElementById('lightbox-img').src = img.src;
    document.getElementById('lightbox').classList.add('active');
}

function closeLightbox() {
    document.getElementById('lightbox').classList.remove('active');
}

// Close with Escape key
document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeLightbox();
});