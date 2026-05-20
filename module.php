<!-- MODULE 1: AI ESSENTIALS -->
    <section class="view hidden" id="view-module-1">
        <div class="module-header mod-1">
            <div class="mod-header-text">
                <div class="mod-tag">Module 1 · Pre-training Principle</div>
                <h1>AI Essentials 🧠</h1>
                <p>Before diving into complex neural networks, we build your vocabulary with key AI concepts.</p>
            </div>
        </div>

        <div class="steps-container" id="steps-1">
            <div class="step active" data-step="1">
                <div class="step-indicator"><span>1</span> of 4</div>
                <div class="content-split">
                    <div class="content-text">
                        <h2>What is Artificial Intelligence?</h2>
                        <div class="principle-tag">🎙️ Narration Principle</div>
                        <p>Artificial Intelligence (AI) refers to machines or software that can perform tasks that normally require human intelligence — including reasoning, learning, perception, and language understanding.</p>
                        <div class="glossary-cards">
                            <div class="gloss-card" onclick="toggleGloss(this)">
                                <div class="gloss-term">Algorithm <span>▼</span></div>
                                <div class="gloss-def">A step-by-step set of rules a computer follows to solve a problem or accomplish a task.</div>
                            </div>
                            <div class="gloss-card" onclick="toggleGloss(this)">
                                <div class="gloss-term">Data Set <span>▼</span></div>
                                <div class="gloss-def">A structured collection of data used to train, validate, or test a machine learning model.</div>
                            </div>
                            <div class="gloss-card" onclick="toggleGloss(this)">
                                <div class="gloss-term">Inference <span>▼</span></div>
                                <div class="gloss-def">The process of using a trained model to make predictions on new, unseen data.</div>
                            </div>
                            <div class="gloss-card" onclick="toggleGloss(this)">
                                <div class="gloss-term">Model <span>▼</span></div>
                                <div class="gloss-def">A mathematical representation learned from data that can make predictions or classifications.</div>
                            </div>
                        </div>
                    </div>
                    <div class="content-visual">
                        <div class="visual-card">
                            <img src="images/what-is-ai.png" alt="What is AI" class="card-image" onclick="openLightbox(this)">
                        </div>
                        <div class="visual-card">
                            <div class="brain-graphic">🧠</div>
                            <p class="visual-caption">AI mimics human reasoning through data-driven learning.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="2">
                <div class="step-indicator"><span>2</span> of 4</div>
                <div class="content-split">
                    <div class="content-text">
                        <h2>Types of AI Learning</h2>
                        <div class="principle-tag">🧩 Segmentation Principle</div>
                        <p>AI systems learn in three fundamental ways. Understanding these modes helps you grasp how different AI applications work.</p>
                        <div class="info-blocks">
                            <div class="info-block ib-lavender">
                                <strong>👨‍🏫 Supervised Learning</strong>
                                <p>Trained on labeled data. The model learns from examples with known answers. Used in spam filters and image classifiers.</p>
                            </div>
                            <div class="info-block ib-lime">
                                <strong>🔍 Unsupervised Learning</strong>
                                <p>Finds hidden patterns in unlabeled data. Used in customer segmentation and anomaly detection.</p>
                            </div>
                            <div class="info-block ib-peach">
                                <strong>🎮 Reinforcement Learning</strong>
                                <p>Learns through trial and error with rewards. Used in game-playing AIs and robotics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-visual">
                        <div class="visual-card">
                            <img src="images/types-of-AI-learning.png" alt="Types of AI Learning" class="card-image" onclick="openLightbox(this)">
                        </div>
                        <div class="visual-card">
                            <div class="mini-diagram">
                                <div class="diag-node">Data</div>
                                <div class="diag-arrow">→</div>
                                <div class="diag-node">Train</div>
                                <div class="diag-arrow">→</div>
                                <div class="diag-node">Model</div>
                            </div>
                            <p class="visual-caption">The fundamental AI training loop.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="3">
                <div class="step-indicator"><span>3</span> of 4</div>
                <div class="content-split">
                    <div class="content-text">
                        <h2>Real-World AI Applications</h2>
                        <div class="principle-tag">💬 Personalization Principle</div>
                        <p>AI is already part of your daily life — you interact with AI-powered systems every day.</p>
                        <div class="app-grid">
                            <div class="app-chip">🎵 Music Recommendations</div>
                            <div class="app-chip">📧 Email Spam Filters</div>
                            <div class="app-chip">📱 Face Unlock</div>
                            <div class="app-chip">🗺️ GPS Navigation</div>
                            <div class="app-chip">💊 Medical Diagnosis</div>
                            <div class="app-chip">🤖 Chatbots</div>
                        </div>
                    </div>
                    <div class="content-visual">
                        <div class="visual-card">
                            <img src="images/real-world-applications.png" alt="Real World AI Applications" class="card-image" onclick="openLightbox(this)">
                        </div>
                        <div class="visual-card">
                            <div class="icon-ring">🌐</div>
                            <div class="icon-satellites"><span>📱</span><span>🏥</span><span>🚗</span><span>📚</span></div>
                            <p class="visual-caption">AI touches every sector of modern life.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="4">
                <div class="step-indicator"><span>4</span> of 4 — Quiz Time!</div>
                <div class="quiz-container" id="quiz-1">
                    <h2>Module 1 Quiz 📝</h2>
                    <p class="quiz-intro">Test what you've learned. Answer all 3 questions to complete this module.</p>
                    <div id="quiz-1-questions"></div>
                    <button class="btn-submit" onclick="submitQuiz(1)" id="submit-1">Submit Answers</button>
                    <div class="quiz-result hidden" id="result-1"></div>
                </div>
            </div>
        </div>

        <div class="step-controls">
            <button class="btn-prev" onclick="prevStep(1)" id="prev-1" disabled>← Previous</button>
            <div class="step-dots" id="dots-1">
                <span class="dot active" onclick="goStep(1,1)"></span>
                <span class="dot" onclick="goStep(1,2)"></span>
                <span class="dot" onclick="goStep(1,3)"></span>
                <span class="dot" onclick="goStep(1,4)"></span>
            </div>
            <button class="btn-next" onclick="nextStep(1)" id="next-1">Next →</button>
        </div>
    </section>

    <!-- MODULE 2: ML WORKFLOW -->
    <section class="view hidden" id="view-module-2">
        <div class="module-header mod-2">
            <div class="mod-header-text">
                <div class="mod-tag">Module 2 · Segmentation Principle</div>
                <h1>ML Workflow ⚙️</h1>
                <p>The Machine Learning pipeline broken into 5 distinct, manageable stages.</p>
            </div>
        </div>

        <div class="steps-container" id="steps-2">
            <div class="step active" data-step="1">
                <div class="step-indicator"><span>1</span> of 3</div>
                <h2>The 5-Stage ML Pipeline</h2>
                <div class="principle-tag">🧩 Segmentation — Complex process split into clear stages</div>
                <div class="pipeline">
                    <div class="pipe-stage" style="--accent:#dcfd8b">
                        <div class="pipe-num">01</div>
                        <div class="pipe-icon">🗄️</div>
                        <div class="pipe-title">Data Collection</div>
                        <div class="pipe-desc">Gathering raw data from databases, APIs, sensors, or surveys. Quality data is the foundation of every ML system.</div>
                    </div>
                    <div class="pipe-arrow">→</div>
                    <div class="pipe-stage" style="--accent:#fdd5bd">
                        <div class="pipe-num">02</div>
                        <div class="pipe-icon">🔧</div>
                        <div class="pipe-title">Preprocessing</div>
                        <div class="pipe-desc">Cleaning, normalizing, and transforming raw data. Handles missing values, outliers, and encodes categories.</div>
                    </div>
                    <div class="pipe-arrow">→</div>
                    <div class="pipe-stage" style="--accent:#bc84ee">
                        <div class="pipe-num">03</div>
                        <div class="pipe-icon">💪</div>
                        <div class="pipe-title">Model Training</div>
                        <div class="pipe-desc">Feeding data to the algorithm so it learns patterns. The model adjusts parameters to minimize errors.</div>
                    </div>
                    <div class="pipe-arrow">→</div>
                    <div class="pipe-stage" style="--accent:#a8e6cf">
                        <div class="pipe-num">04</div>
                        <div class="pipe-icon">✅</div>
                        <div class="pipe-title">Evaluation</div>
                        <div class="pipe-desc">Testing on unseen data using metrics like accuracy, precision, recall, and F1-score.</div>
                    </div>
                    <div class="pipe-arrow">→</div>
                    <div class="pipe-stage" style="--accent:#ffaaa5">
                        <div class="pipe-num">05</div>
                        <div class="pipe-icon">🚀</div>
                        <div class="pipe-title">Deployment</div>
                        <div class="pipe-desc">Integrating the trained model into production via APIs, web apps, or embedded devices.</div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="2">
                <div class="step-indicator"><span>2</span> of 3</div>
                <div class="content-split">
                    <div class="content-text">
                        <h2>Deep Dive: Data Preprocessing</h2>
                        <div class="principle-tag">📍 Spatial Contiguity — Labels next to visual</div>
                        <p>Preprocessing is often the most time-consuming step (60–80% of a data scientist's work). Real-world data is rarely clean.</p>
                        <div class="info-blocks">
                            <div class="info-block ib-lavender">
                                <strong>🧹 Cleaning</strong>
                                <p>Remove duplicates, fix typos, handle missing values via mean imputation or deletion.</p>
                            </div>
                            <div class="info-block ib-lime">
                                <strong>📐 Normalization</strong>
                                <p>Scale features to a common range (0–1) so no single variable dominates the model.</p>
                            </div>
                            <div class="info-block ib-peach">
                                <strong>🔤 Encoding</strong>
                                <p>Convert categorical data (e.g., "cat", "dog") to numeric form using one-hot encoding.</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-visual">
                        <div class="visual-card">
                            <img src="images/data-processing.png" alt="Data Processing" class="card-image" onclick="openLightbox(this)">
                        </div>
                        <div class="visual-card">
                            <div class="data-table-demo">
                                <div class="dt-row dt-header"><span>Name</span><span>Age</span><span>Status</span></div>
                                <div class="dt-row bad"><span>Alice</span><span>—</span><span>Cat</span></div>
                                <div class="dt-arrow">↓ clean ↓</div>
                                <div class="dt-row good"><span>Alice</span><span>25</span><span>1</span></div>
                            </div>
                            <p class="visual-caption">Before vs after preprocessing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="3">
                <div class="step-indicator"><span>3</span> of 3 — Quiz Time!</div>
                <div class="quiz-container" id="quiz-2">
                    <h2>Module 2 Quiz 📝</h2>
                    <p class="quiz-intro">Test your understanding of the ML Workflow pipeline.</p>
                    <div id="quiz-2-questions"></div>
                    <button class="btn-submit" onclick="submitQuiz(2)" id="submit-2">Submit Answers</button>
                    <div class="quiz-result hidden" id="result-2"></div>
                </div>
            </div>
        </div>

        <div class="step-controls">
            <button class="btn-prev" onclick="prevStep(2)" id="prev-2" disabled>← Previous</button>
            <div class="step-dots" id="dots-2">
                <span class="dot active" onclick="goStep(2,1)"></span>
                <span class="dot" onclick="goStep(2,2)"></span>
                <span class="dot" onclick="goStep(2,3)"></span>
            </div>
            <button class="btn-next" onclick="nextStep(2)" id="next-2">Next →</button>
        </div>
    </section>

    <!-- MODULE 3: NEURAL NETWORKS -->
    <section class="view hidden" id="view-module-3">
        <div class="module-header mod-3">
            <div class="mod-header-text">
                <div class="mod-tag">Module 3 · Spatial Contiguity Principle</div>
                <h1>Neural Networks 🕸️</h1>
                <p>Explore how neural networks are structured — hover over nodes to see activation info.</p>
            </div>
        </div>

        <div class="steps-container" id="steps-3">
            <div class="step active" data-step="1">
                <div class="step-indicator"><span>1</span> of 3</div>
                <div class="content-split reverse">
                    <div class="content-text">
                        <h2>What Is a Neural Network?</h2>
                        <div class="principle-tag">📍 Spatial Contiguity — Labels placed beside nodes</div>
                        <p>A neural network is a series of algorithms modeled loosely after the human brain. It consists of layers of nodes (neurons) that process and pass information forward.</p>
                        <div class="layer-legend">
                            <div class="legend-item"><div class="legend-dot" style="background:#bc84ee"></div><span><strong>Input Layer</strong> — receives raw features</span></div>
                            <div class="legend-item"><div class="legend-dot" style="background:#dcfd8b"></div><span><strong>Hidden Layers</strong> — extract patterns</span></div>
                            <div class="legend-item"><div class="legend-dot" style="background:#fdd5bd"></div><span><strong>Output Layer</strong> — produces predictions</span></div>
                        </div>
                    </div>
                    <div class="content-visual">
                        <div class="nn-diagram" id="nn-diagram">
                            <div class="nn-layer" id="layer-input">
                                <div class="layer-label">Input</div>
                                <div class="nn-node" data-info="Input Node: Receives a feature value (e.g., pixel brightness)" style="background:#bc84ee">x₁</div>
                                <div class="nn-node" data-info="Input Node: Another feature (e.g., edge direction)" style="background:#bc84ee">x₂</div>
                                <div class="nn-node" data-info="Input Node: A third feature from your dataset" style="background:#bc84ee">x₃</div>
                            </div>
                            <div class="nn-connections">
                                <svg class="conn-svg" viewBox="0 0 120 180" preserveAspectRatio="none">
                                    <line x1="10" y1="30"  x2="110" y2="22"  stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="10" y1="30"  x2="110" y2="90"  stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="10" y1="30"  x2="110" y2="158" stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="10" y1="90"  x2="110" y2="22"  stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="10" y1="90"  x2="110" y2="90"  stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="10" y1="90"  x2="110" y2="158" stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="10" y1="158" x2="110" y2="22"  stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="10" y1="158" x2="110" y2="90"  stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="10" y1="158" x2="110" y2="158" stroke="#bc84ee" stroke-width="1.5" opacity="0.4"/>
                                </svg>
                            </div>
                            <div class="nn-layer" id="layer-hidden">
                                <div class="layer-label">Hidden</div>
                                <div class="nn-node" data-info="Hidden Node: Applies ReLU — max(0, weighted sum)" style="background:#dcfd8b;color:#333">h₁</div>
                                <div class="nn-node" data-info="Hidden Node: Applies Sigmoid — outputs 0 to 1" style="background:#dcfd8b;color:#333">h₂</div>
                                <div class="nn-node" data-info="Hidden Node: Applies Tanh — outputs -1 to 1" style="background:#dcfd8b;color:#333">h₃</div>
                            </div>
                            <div class="nn-connections">
                                <svg class="conn-svg" viewBox="0 0 120 180" preserveAspectRatio="none">
                                    <line x1="10" y1="30"  x2="110" y2="55"  stroke="#dcfd8b" stroke-width="1.5" opacity="0.5"/>
                                    <line x1="10" y1="90"  x2="110" y2="55"  stroke="#dcfd8b" stroke-width="1.5" opacity="0.5"/>
                                    <line x1="10" y1="158" x2="110" y2="55"  stroke="#dcfd8b" stroke-width="1.5" opacity="0.5"/>
                                    <line x1="10" y1="30"  x2="110" y2="125" stroke="#dcfd8b" stroke-width="1.5" opacity="0.5"/>
                                    <line x1="10" y1="90"  x2="110" y2="125" stroke="#dcfd8b" stroke-width="1.5" opacity="0.5"/>
                                    <line x1="10" y1="158" x2="110" y2="125" stroke="#dcfd8b" stroke-width="1.5" opacity="0.5"/>
                                </svg>
                            </div>
                            <div class="nn-layer" id="layer-output">
                                <div class="layer-label">Output</div>
                                <div class="nn-node" data-info="Output Node: Softmax — probability for class 0 (e.g., 'Cat')" style="background:#fdd5bd;color:#333">ŷ₀</div>
                                <div class="nn-node" data-info="Output Node: Softmax — probability for class 1 (e.g., 'Dog')" style="background:#fdd5bd;color:#333">ŷ₁</div>
                            </div>
                        </div>
                        <div class="nn-tooltip" id="nn-tooltip">Hover over a neuron →</div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="2">
                <div class="step-indicator"><span>2</span> of 3</div>
                <div class="content-split">
                    <div class="content-text">
                        <h2>Activation Functions</h2>
                        <div class="principle-tag">🧩 Segmentation — One concept per step</div>
                        <p>Activation functions decide whether a neuron should "fire". They introduce non-linearity, enabling the network to learn complex patterns.</p>
                        <div class="info-blocks">
                            <div class="info-block ib-lavender">
                                <strong>ReLU — Rectified Linear Unit</strong>
                                <code>f(x) = max(0, x)</code>
                                <p>Most popular. Fast to compute. Sets negative values to zero. Used in hidden layers.</p>
                            </div>
                            <div class="info-block ib-lime">
                                <strong>Sigmoid</strong>
                                <code>f(x) = 1 / (1 + e⁻ˣ)</code>
                                <p>Squashes values between 0 and 1. Good for binary classification output layers.</p>
                            </div>
                            <div class="info-block ib-peach">
                                <strong>Softmax</strong>
                                <code>f(xᵢ) = eˣⁱ / Σeˣʲ</code>
                                <p>Converts outputs to probabilities summing to 1. Used in multi-class output layers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-visual">
                        <div class="visual-card">
                            <img src="images/activation-functions.png" alt="Activation Functions" class="card-image" onclick="openLightbox(this)">
                        </div>
                        <div class="visual-card">
                            <div class="activation-chart">
                                <div class="act-bar" style="--h:90%;--c:#bc84ee"><span>ReLU</span><div class="act-fill"></div><small>Most Used</small></div>
                                <div class="act-bar" style="--h:60%;--c:#dcfd8b"><span>Sigmoid</span><div class="act-fill"></div><small>Binary</small></div>
                                <div class="act-bar" style="--h:45%;--c:#fdd5bd"><span>Tanh</span><div class="act-fill"></div><small>Centered</small></div>
                                <div class="act-bar" style="--h:75%;--c:#a8e6cf"><span>Softmax</span><div class="act-fill"></div><small>Multi-class</small></div>
                            </div>
                            <p class="visual-caption">Relative usage across network types.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="3">
                <div class="step-indicator"><span>3</span> of 3 — Quiz Time!</div>
                <div class="quiz-container" id="quiz-3">
                    <h2>Module 3 Quiz 📝</h2>
                    <p class="quiz-intro">Test your understanding of Neural Networks.</p>
                    <div id="quiz-3-questions"></div>
                    <button class="btn-submit" onclick="submitQuiz(3)" id="submit-3">Submit Answers</button>
                    <div class="quiz-result hidden" id="result-3"></div>
                </div>
            </div>
        </div>

        <div class="step-controls">
            <button class="btn-prev" onclick="prevStep(3)" id="prev-3" disabled>← Previous</button>
            <div class="step-dots" id="dots-3">
                <span class="dot active" onclick="goStep(3,1)"></span>
                <span class="dot" onclick="goStep(3,2)"></span>
                <span class="dot" onclick="goStep(3,3)"></span>
            </div>
            <button class="btn-next" onclick="nextStep(3)" id="next-3">Next →</button>
        </div>
    </section>

    <!-- MODULE 4: AI ETHICS -->
    <section class="view hidden" id="view-module-4">
        <div class="module-header mod-4">
            <div class="mod-header-text">
                <div class="mod-tag">Module 4 · Personalization Principle</div>
                <h1>AI Ethics ⚖️</h1>
                <p>A story-driven approach to explore Bias, Privacy, and Accountability in AI.</p>
            </div>
        </div>

        <div class="steps-container" id="steps-4">
            <div class="step active" data-step="1">
                <div class="step-indicator"><span>1</span> of 4</div>
                <div class="content-split">
                    <div class="content-text">
                        <h2>The Three Pillars of AI Ethics</h2>
                        <div class="principle-tag">💬 Personalization — Conversational, human tone</div>
                        <p>As AI systems become more powerful, we need to think carefully about how they affect people. Three core ethical concerns every AI practitioner must understand:</p>
                        <div class="info-blocks">
                            <div class="info-block ib-lavender">
                                <strong>⚠️ Bias</strong>
                                <p>When an AI model produces unfair outcomes due to skewed training data or flawed design. E.g., facial recognition with higher error rates for darker skin tones.</p>
                            </div>
                            <div class="info-block ib-lime">
                                <strong>🔒 Privacy</strong>
                                <p>AI often needs vast amounts of personal data, creating risks of surveillance, data breaches, and misuse of personal information.</p>
                            </div>
                            <div class="info-block ib-peach">
                                <strong>📋 Accountability</strong>
                                <p>Who is responsible when an AI makes a harmful decision? Clear lines of responsibility must be established between developers, companies, and regulators.</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-visual">
                        <div class="visual-card">
                            <img src="images/ethics.png" alt="AI Ethics" class="card-image" onclick="openLightbox(this)">
                        </div>
                        <div class="visual-card">
                            <div class="ethics-scale">⚖️</div>
                            <div class="ethics-words">
                                <span>Fairness</span><span>Transparency</span><span>Trust</span>
                            </div>
                            <p class="visual-caption">Ethical AI must balance competing values.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="2">
                <div class="step-indicator"><span>2</span> of 4</div>
                <div class="scenario-container">
                    <h2>🎭 Ethical Scenario: The Hiring Algorithm</h2>
                    <div class="principle-tag">💬 Story-driven Branching Scenario</div>
                    <div class="scenario-story">
                        <p><em>You are the lead developer at TechCorp. Your team has built an AI hiring tool trained on 10 years of company data. The HR director announces the system is 25% faster than human reviewers.</em></p>
                        <p><em>However, you discover the model is rejecting 60% more female applicants for engineering roles because historically, most hired engineers were male.</em></p>
                        <p><strong>What do you do?</strong></p>
                    </div>
                    <div class="scenario-choices" id="scenario-choices">
                        <button class="choice-btn" onclick="makeChoice(this,'A')">A) Deploy anyway — speed is what matters most.</button>
                        <button class="choice-btn" onclick="makeChoice(this,'B')">B) Pause and audit the training data for bias.</button>
                        <button class="choice-btn" onclick="makeChoice(this,'C')">C) Report it to management and let them decide.</button>
                    </div>
                    <div class="scenario-result hidden" id="scenario-result"></div>
                </div>
            </div>

            <div class="step" data-step="3">
                <div class="step-indicator"><span>3</span> of 4</div>
                <div class="content-split">
                    <div class="content-text">
                        <h2>Empathy Exercise 💜</h2>
                        <div class="principle-tag">💬 Personalization — Human-centered perspective</div>
                        <p>Before building AI systems, ask: <em>"How would this affect the people it serves?"</em></p>
                        <div class="empathy-cards">
                            <div class="empathy-card">
                                <div class="em-role">👩‍💼 Job Applicant</div>
                                <div class="em-thought">"I'm equally qualified but the algorithm rejected me. I'll never know why — there's no appeal process."</div>
                            </div>
                            <div class="empathy-card">
                                <div class="em-role">👨‍💻 Developer</div>
                                <div class="em-thought">"I trained it on real data. I didn't intend for this, but historical data reflected past biases."</div>
                            </div>
                            <div class="empathy-card">
                                <div class="em-role">👩‍⚖️ Regulator</div>
                                <div class="em-thought">"Current AI laws are unclear. We need regulations requiring algorithmic transparency."</div>
                            </div>
                        </div>
                    </div>
                    <div class="content-visual">
                        <div class="visual-card">
                            <img src="images/empathy.png" alt="Empathy in AI" class="card-image" onclick="openLightbox(this)">
                        </div>
                        <div class="visual-card">
                            <div class="empathy-visual">
                                <div class="em-circle">🤝</div>
                                <p>Ethical AI design requires <strong>human empathy</strong> at every stage.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step" data-step="4">
                <div class="step-indicator"><span>4</span> of 4 — Quiz Time!</div>
                <div class="quiz-container" id="quiz-4">
                    <h2>Module 4 Quiz 📝</h2>
                    <p class="quiz-intro">Test your understanding of AI Ethics.</p>
                    <div id="quiz-4-questions"></div>
                    <button class="btn-submit" onclick="submitQuiz(4)" id="submit-4">Submit Answers</button>
                    <div class="quiz-result hidden" id="result-4"></div>
                </div>
            </div>
        </div>

        <div class="step-controls">
            <button class="btn-prev" onclick="prevStep(4)" id="prev-4" disabled>← Previous</button>
            <div class="step-dots" id="dots-4">
                <span class="dot active" onclick="goStep(4,1)"></span>
                <span class="dot" onclick="goStep(4,2)"></span>
                <span class="dot" onclick="goStep(4,3)"></span>
                <span class="dot" onclick="goStep(4,4)"></span>
            </div>
            <button class="btn-next" onclick="nextStep(4)" id="next-4">Next →</button>
        </div>
    </section>

    <!-- LIGHTBOX — place once, before </body> -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="" alt="">
    </div>