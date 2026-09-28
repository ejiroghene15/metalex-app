<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Curriculum — PCCL Programme</title>
  <link rel="stylesheet" href="{{asset('assets/css/academy/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/css/academy/curriculum.css')}}" />
</head>
<body>

<nav class="nav">
  <div class="container nav__inner">
    <a href="index.html" class="nav__logo">
      <span class="nav__logo-title">Metalex Academy</span>
      <span class="nav__logo-sub">PCCLP · Practical legal training</span>
    </a>
    <div class="nav__links" id="navLinks">
      <a href="index.html" class="nav__link">Home</a>
      <details class="programme-menu"><summary class="nav__link">Programmes</summary><div class="programme-menu__list"><a href="index.html">PCCLP — Corporate &amp; Commercial Practice</a></div></details>
      <a href="curriculum.html" class="nav__link active">Curriculum</a>
      <a href="faculty.html" class="nav__link">Faculty</a>
      <a href="application.html" class="nav__link">Apply</a>
      <a href="scholarship.html" class="nav__link">Fees &amp; Scholarship</a><a href="faq.html" class="nav__link">FAQ</a>
      <a href="application.html" class="btn btn--gold nav__cta">Apply Now</a>
    </div>
    <button class="nav__hamburger" id="hamburger" aria-label="Open navigation menu" aria-controls="navLinks" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<header class="page-header">
  <div class="container">
    <p class="eyebrow page-header__eyebrow">PCCLP · 10-week practical curriculum</p>
    <h1 class="page-header__title">Programme Curriculum</h1>
    <p class="page-header__lead">Ten intensive weeks of live learning, drafting practice and a capstone transaction simulation.</p>
  </div>
</header>

<!-- ─── Intro ──────────────────────────────────── -->
<section class="section section--cream">
  <div class="container">
    <div class="curriculum-intro">
      <div>
        <p class="eyebrow">Programme Architecture</p>
        <div class="divider"></div>
        <h2 style="margin-bottom:1rem;">A Structured Path to Commercial Practice Mastery</h2>
        <p class="curriculum-intro__lead">The programme is structured in three progressive phases. Phase One builds your foundations in corporate law and governance. Phase Two moves into transactional work — M&A, finance, and capital markets. Phase Three addresses specialist and regulatory dimensions before culminating in an integrated deal simulation capstone.</p>
        <p style="font-size:0.9rem;color:var(--text-muted);line-height:1.75;">Each module combines lectures by senior practitioners, structured drafting workshops, and problem-solving exercises based on real transaction fact patterns. Assessment is continuous — no single examination.</p>
      </div>
      <div class="curriculum-stats">
        <div class="curriculum-stat">
          <div class="curriculum-stat__num">12</div>
          <div class="curriculum-stat__label">Core Modules</div>
        </div>
        <div class="curriculum-stat">
          <div class="curriculum-stat__num">3</div>
          <div class="curriculum-stat__label">Programme Phases</div>
        </div>
        <div class="curriculum-stat">
          <div class="curriculum-stat__num">240</div>
          <div class="curriculum-stat__label">Contact Hours</div>
        </div>
        <div class="curriculum-stat">
          <div class="curriculum-stat__num">6</div>
          <div class="curriculum-stat__label">Months Duration</div>
        </div>
        <div class="curriculum-stat">
          <div class="curriculum-stat__num">8</div>
          <div class="curriculum-stat__label">Live Drafting Workshops</div>
        </div>
      </div>
    </div>

    <!-- Phase 1 -->
    <div class="phase-header">
      <div class="phase-header__pill">Phase 1 — Months 1–2</div>
      <div class="phase-header__line"></div>
      <div class="phase-header__title">Foundations</div>
    </div>
    <div class="modules-list">
      <div class="module-item open">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 01</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Foundations of Corporate Law Practice</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Foundation</span>
              <span class="module-item__duration">3 weeks · 20 contact hours</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">An intensive introduction to the principles and structures of corporate law that underpin all commercial transactions. Participants examine corporate constitutions, governance obligations, and the statutory and regulatory framework within which companies operate.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">Corporate forms — companies, partnerships, trusts</div>
            <div class="module-item__topic">Memorandum and Articles of Association</div>
            <div class="module-item__topic">Directors' duties and personal liability</div>
            <div class="module-item__topic">Shareholder rights and class rights</div>
            <div class="module-item__topic">Corporate governance and the Companies Act</div>
            <div class="module-item__topic">Statutory compliance obligations</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will be able to advise on corporate structural choices, review constitutive documents, and identify governance and compliance risks in a corporate transaction context.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 02</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Contract Law in Commercial Practice</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Foundation</span>
              <span class="module-item__duration">3 weeks · 20 contact hours</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">A practitioner-focused refresher on contract law principles as applied in commercial settings — focusing on formation pitfalls, interpretation, implied terms, and standard risk allocation mechanisms.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">Formation — offer, acceptance, consideration</div>
            <div class="module-item__topic">Contractual interpretation principles</div>
            <div class="module-item__topic">Implied and incorporated terms</div>
            <div class="module-item__topic">Exclusion and limitation clauses</div>
            <div class="module-item__topic">Breach, termination, and remedies</div>
            <div class="module-item__topic">Misrepresentation and pre-contractual statements</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will apply contract law principles to commercial documents, identify drafting risks, and advise clients on contractual exposure in commercial disputes.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 03</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Legal Due Diligence — Methodology & Practice</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Transactional</span>
              <span class="module-item__duration">2 weeks · 16 contact hours + workshop</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">A structured methodology for conducting, managing, and reporting on legal due diligence in M&A, PE, and debt transactions. Includes a live data room exercise.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">DD scope, organisation, and workstream allocation</div>
            <div class="module-item__topic">Corporate, commercial, employment, and IP streams</div>
            <div class="module-item__topic">Regulatory and environmental DD</div>
            <div class="module-item__topic">Risk categorisation — red, amber, green</div>
            <div class="module-item__topic">DD report structure and sign-off</div>
            <div class="module-item__topic">Data room management protocols</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will lead and coordinate a legal due diligence process, draft DD reports, and advise on risk mitigation through transaction documentation.</div>
        </div>
      </div>
    </div>

    <!-- Phase 2 -->
    <div class="phase-header">
      <div class="phase-header__pill">Phase 2 — Months 3–4</div>
      <div class="phase-header__line"></div>
      <div class="phase-header__title">Transactional Practice</div>
    </div>
    <div class="modules-list">
      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 04</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Mergers & Acquisitions — Deal Structure and Execution</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Transactional</span>
              <span class="module-item__duration">4 weeks · 28 contact hours + workshop</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">The complete M&A transaction lifecycle — from deal origination and structuring through to completion mechanics, post-closing obligations, and warranty claims. Includes SPA drafting workshop.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">Asset vs share purchase — structuring considerations</div>
            <div class="module-item__topic">Heads of Terms / Letters of Intent</div>
            <div class="module-item__topic">SPA — key provisions and risk allocation</div>
            <div class="module-item__topic">Conditions precedent and MAC clauses</div>
            <div class="module-item__topic">Representations, warranties, indemnities</div>
            <div class="module-item__topic">Completion mechanics — locked box vs. closing accounts</div>
            <div class="module-item__topic">W&I insurance and escrow arrangements</div>
            <div class="module-item__topic">Post-closing obligations and adjustment</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will structure and negotiate M&A transactions, draft and review SPAs, and advise on completion risk mitigation mechanisms.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 05</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Commercial Contract Drafting</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Drafting</span>
              <span class="module-item__duration">3 weeks · 20 contact hours + 2 workshops</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">Principles and practice of commercial contract drafting — from supply agreements and service contracts to complex bespoke commercial arrangements. Heavy emphasis on workshop drafting and redline review.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">Drafting for clarity and risk allocation</div>
            <div class="module-item__topic">Definitions and interpretation clauses</div>
            <div class="module-item__topic">Boilerplate — meaning and consequences</div>
            <div class="module-item__topic">Payment and pricing structures</div>
            <div class="module-item__topic">IP ownership and licensing provisions</div>
            <div class="module-item__topic">Confidentiality and data protection clauses</div>
            <div class="module-item__topic">Force majeure and material change</div>
            <div class="module-item__topic">Dispute resolution clauses — arbitration vs. litigation</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will draft, review, and negotiate commercial contracts across a range of industry sectors and transaction types.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 06</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Banking & Finance Law</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Finance</span>
              <span class="module-item__duration">3 weeks · 22 contact hours</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">Loan facilities, security structures, and the full documentation framework for bilateral and syndicated lending transactions. LMA standard documentation is examined in depth.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">Types of lending facilities — term, revolving, bridge</div>
            <div class="module-item__topic">LMA facility agreements — structure and key clauses</div>
            <div class="module-item__topic">Security creation — mortgages, charges, pledges</div>
            <div class="module-item__topic">Perfection, registration, and priority</div>
            <div class="module-item__topic">Representations, undertakings, and events of default</div>
            <div class="module-item__topic">Syndicated lending and intercreditor arrangements</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will advise on finance structures, review and negotiate facility agreements, and manage security documentation in banking transactions.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 07</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Shareholders' Agreements & Joint Ventures</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Corporate</span>
              <span class="module-item__duration">2 weeks · 16 contact hours + workshop</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">Drafting and negotiating shareholders' agreements and joint venture structures — governance rights, capital provisions, deadlock resolution, and exit mechanisms.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">SHA architecture and key provisions</div>
            <div class="module-item__topic">Veto rights and reserved matters</div>
            <div class="module-item__topic">Pre-emption, drag-along, and tag-along</div>
            <div class="module-item__topic">Anti-dilution and ratchet mechanisms</div>
            <div class="module-item__topic">Deadlock resolution mechanisms</div>
            <div class="module-item__topic">Exit provisions — IPO, trade sale, buy-out</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will structure and draft shareholders' agreements and joint venture documentation for a range of ownership and governance arrangements.</div>
        </div>
      </div>
    </div>

    <!-- Phase 3 -->
    <div class="phase-header">
      <div class="phase-header__pill">Phase 3 — Months 5–6</div>
      <div class="phase-header__line"></div>
      <div class="phase-header__title">Specialist Practice & Capstone</div>
    </div>
    <div class="modules-list">
      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 08</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Competition Law & Merger Control</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Regulatory</span>
              <span class="module-item__duration">2 weeks · 16 contact hours</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">Competition law fundamentals with a focus on merger control filings, prohibited conduct, and competition compliance programme design for transactional contexts.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">Merger control thresholds and filing obligations</div>
            <div class="module-item__topic">Substantive merger assessment</div>
            <div class="module-item__topic">Cartel conduct and information exchange</div>
            <div class="module-item__topic">Abuse of dominance in commercial agreements</div>
            <div class="module-item__topic">Dawn raid preparedness and leniency applications</div>
            <div class="module-item__topic">Competition clauses in commercial contracts</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will advise on merger control strategy, draft competition-compliant commercial agreements, and manage dawn raid risk.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 09</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Employment Law in Corporate Transactions</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Employment</span>
              <span class="module-item__duration">2 weeks · 14 contact hours</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">Employment law considerations in M&A, restructurings, and outsourcings — TUPE, transfer of undertakings, and executive compensation structuring.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">TUPE and business transfer regimes</div>
            <div class="module-item__topic">Section 197 transfers under the LRA</div>
            <div class="module-item__topic">Collective consultation obligations</div>
            <div class="module-item__topic">Executive service agreements and incentives</div>
            <div class="module-item__topic">Long-term incentive plans (LTIPs)</div>
            <div class="module-item__topic">Restrictive covenants — enforceability</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will advise on the employment aspects of corporate transactions and draft executive compensation arrangements.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 10</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Intellectual Property in Commercial Transactions</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Specialist</span>
              <span class="module-item__duration">2 weeks · 14 contact hours</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">IP ownership, licensing, and risk management from a transactional perspective — IP due diligence, assignment, and IP in M&A and technology transactions.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">IP ownership — employees and contractors</div>
            <div class="module-item__topic">IP due diligence in M&A and PE transactions</div>
            <div class="module-item__topic">Technology licensing — exclusive vs. non-exclusive</div>
            <div class="module-item__topic">IP reps and warranties in SPAs</div>
            <div class="module-item__topic">Open source licence compliance risk</div>
            <div class="module-item__topic">IP in joint ventures and collaboration agreements</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will conduct IP due diligence, negotiate IP provisions in commercial and M&A documentation, and advise on IP risk mitigation.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 11</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Private Equity & Venture Capital Transactions</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Finance</span>
              <span class="module-item__duration">2 weeks · 16 contact hours</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">The legal structure of private equity and venture capital transactions — fund structure, investment documentation, governance, and exit strategy.</p>
          <div class="module-item__topics-title">Topics Covered</div>
          <div class="module-item__topics">
            <div class="module-item__topic">PE fund structure and documentation</div>
            <div class="module-item__topic">Term sheets — VC and PE conventions</div>
            <div class="module-item__topic">Subscription and shareholders' agreements</div>
            <div class="module-item__topic">Management equity and incentive schemes</div>
            <div class="module-item__topic">Leveraged buyout documentation</div>
            <div class="module-item__topic">Exit routes — trade sale, secondary buyout, IPO</div>
          </div>
          <div class="module-item__outcome"><strong>Learning Outcome:</strong> Participants will advise on PE and VC investment structures, draft investment documentation, and manage complex multi-stakeholder transactions.</div>
        </div>
      </div>

      <div class="module-item">
        <div class="module-item__header" onclick="toggleModule(this)">
          <span class="module-item__num">Module 12</span>
          <div class="module-item__title-wrap">
            <div class="module-item__title">Capstone: Integrated Deal Simulation</div>
            <div class="module-item__meta">
              <span class="module-item__tag">Capstone</span>
              <span class="module-item__tag" style="background:var(--gold-pale);color:var(--gold);">Assessment</span>
              <span class="module-item__duration">3 weeks · Full deal-room simulation</span>
            </div>
          </div>
          <span class="module-item__toggle">▼</span>
        </div>
        <div class="module-item__body">
          <p class="module-item__desc">A fully immersive deal simulation spanning an acquisition, financing, and post-closing integration scenario. Participants act as deal counsel across multiple workstreams under time pressure, with faculty playing advisors, counterparties, and clients.</p>
          <div class="module-item__topics-title">Simulation Workstreams</div>
          <div class="module-item__topics">
            <div class="module-item__topic">Legal due diligence co-ordination</div>
            <div class="module-item__topic">SPA and SHA negotiation and drafting</div>
            <div class="module-item__topic">Finance documentation review</div>
            <div class="module-item__topic">Regulatory and competition filing strategy</div>
            <div class="module-item__topic">Client advisory and board presentation</div>
            <div class="module-item__topic">Post-completion integration advice</div>
          </div>
          <div class="module-item__outcome"><strong>Assessment:</strong> Participants are assessed on deal output quality, negotiation conduct, written advice, and a final oral presentation to a simulated board. Successful completion awards the PCCL Certificate.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── Delivery methods ───────────────────────── -->
<section class="section section--white">
  <div class="container">
    <div class="section__header section__header--center">
      <p class="eyebrow">Programme Delivery</p>
      <div class="divider divider--center"></div>
      <h2>How the Programme is Taught</h2>
    </div>
    <div class="delivery-grid">
      <div class="delivery-card">
        <div class="delivery-card__icon">📚</div>
        <div class="delivery-card__title">Practitioner Lectures</div>
        <p class="delivery-card__desc">Led by senior practitioners drawn from top-tier law firms, in-house legal teams, and the judiciary. Theory is always anchored in real transaction experience and war stories from practice.</p>
      </div>
      <div class="delivery-card">
        <div class="delivery-card__icon">✍️</div>
        <div class="delivery-card__title">Drafting Workshops</div>
        <p class="delivery-card__desc">Eight intensive drafting workshops across the programme. Participants draft, redline, and negotiate documents in small groups under practitioner supervision using actual transaction templates.</p>
      </div>
      <div class="delivery-card">
        <div class="delivery-card__icon">🏛️</div>
        <div class="delivery-card__title">Deal-Room Simulations</div>
        <p class="delivery-card__desc">Live transaction simulations from initial instruction through to closing. Faculty play opposing counsel, client boards, and regulators. Pressure-tested, realistic, and professionally filmed for debrief.</p>
      </div>
      <div class="delivery-card">
        <div class="delivery-card__icon">📋</div>
        <div class="delivery-card__title">Problem-Based Learning</div>
        <p class="delivery-card__desc">Each module includes structured problem sets based on real transaction fact patterns — requiring participants to apply module content to multi-issue advisory scenarios.</p>
      </div>
      <div class="delivery-card">
        <div class="delivery-card__icon">🤝</div>
        <div class="delivery-card__title">Peer Review Groups</div>
        <p class="delivery-card__desc">Small cohort review groups provide structured peer feedback on drafting exercises and problem answers — developing both critical and collaborative professional skills.</p>
      </div>
      <div class="delivery-card">
        <div class="delivery-card__icon">🎯</div>
        <div class="delivery-card__title">Continuous Assessment</div>
        <p class="delivery-card__desc">Assessment is spread across all modules through written submissions, drafting exercises, and participation marks — no single end examination. The capstone carries 40% of the final grade.</p>
      </div>
    </div>
  </div>
</section>

<!-- ─── Timetable ──────────────────────────────── -->
<section class="section section--cream">
  <div class="container">
    <div class="section__header">
      <p class="eyebrow">2025 Timetable</p>
      <div class="divider"></div>
      <h2>Programme Schedule — June 2025 Cohort</h2>
    </div>
    <div style="overflow-x:auto;">
      <table class="timetable">
        <thead>
        <tr>
          <th>Period</th>
          <th>Module</th>
          <th>Format</th>
          <th>Dates</th>
          <th>Hours</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Phase 1 — Week 1–3</td>
          <td>Module 01: Foundations of Corporate Law</td>
          <td>Lectures + Problem Set</td>
          <td>16 Jun – 4 Jul 2025</td>
          <td class="gold">20h</td>
        </tr>
        <tr>
          <td>Phase 1 — Week 4–6</td>
          <td>Module 02: Contract Law in Commercial Practice</td>
          <td>Lectures + Problem Set</td>
          <td>7 Jul – 25 Jul 2025</td>
          <td class="gold">20h</td>
        </tr>
        <tr>
          <td>Phase 1 — Week 7–8</td>
          <td>Module 03: Legal Due Diligence</td>
          <td>Lectures + Data Room Workshop</td>
          <td>28 Jul – 8 Aug 2025</td>
          <td class="gold">16h + 4h WS</td>
        </tr>
        <tr>
          <td>Phase 2 — Week 9–12</td>
          <td>Module 04: Mergers & Acquisitions</td>
          <td>Lectures + SPA Drafting Workshop</td>
          <td>11 Aug – 5 Sep 2025</td>
          <td class="gold">28h + 6h WS</td>
        </tr>
        <tr>
          <td>Phase 2 — Week 13–15</td>
          <td>Module 05: Commercial Contract Drafting</td>
          <td>Lectures + 2× Drafting Workshops</td>
          <td>8 Sep – 26 Sep 2025</td>
          <td class="gold">20h + 8h WS</td>
        </tr>
        <tr>
          <td>Phase 2 — Week 16–18</td>
          <td>Module 06: Banking & Finance Law</td>
          <td>Lectures + LMA Workshop</td>
          <td>29 Sep – 17 Oct 2025</td>
          <td class="gold">22h + 4h WS</td>
        </tr>
        <tr>
          <td>Phase 2 — Week 19–20</td>
          <td>Module 07: Shareholders' Agreements & JVs</td>
          <td>Lectures + SHA Drafting Workshop</td>
          <td>20 Oct – 31 Oct 2025</td>
          <td class="gold">16h + 4h WS</td>
        </tr>
        <tr>
          <td>Phase 3 — Week 21–22</td>
          <td>Module 08: Competition Law</td>
          <td>Lectures</td>
          <td>3 Nov – 14 Nov 2025</td>
          <td class="gold">16h</td>
        </tr>
        <tr>
          <td>Phase 3 — Week 23–24</td>
          <td>Module 09: Employment in Transactions</td>
          <td>Lectures</td>
          <td>17 Nov – 28 Nov 2025</td>
          <td class="gold">14h</td>
        </tr>
        <tr>
          <td>Phase 3 — Week 25–26</td>
          <td>Module 10: Intellectual Property</td>
          <td>Lectures</td>
          <td>1 Dec – 12 Dec 2025</td>
          <td class="gold">14h</td>
        </tr>
        <tr>
          <td>Phase 3 — Week 27–28</td>
          <td>Module 11: Private Equity & Venture Capital</td>
          <td>Lectures</td>
          <td>5 Jan – 16 Jan 2026</td>
          <td class="gold">16h</td>
        </tr>
        <tr>
          <td>Phase 3 — Week 29–32</td>
          <td><strong>Module 12: Capstone — Deal Simulation</strong></td>
          <td>Full Deal-Room Simulation</td>
          <td>19 Jan – 13 Feb 2026</td>
          <td class="gold">40h</td>
        </tr>
        </tbody>
      </table>
    </div>
    <p style="font-size:0.8rem;color:var(--text-muted);margin-top:1rem;">Sessions are held Thursday–Friday evenings (18:00–20:30) and alternate Saturdays (09:00–13:00). Schedule subject to minor adjustment.</p>
  </div>
</section>

<div class="cta-band" style="background:var(--navy);padding-block:4rem;">
  <div class="container" style="text-align:center;">
    <p class="eyebrow" style="text-align:center;">Ready to Enrol?</p>
    <div class="divider divider--center"></div>
    <h2 style="color:var(--white);margin-bottom:1rem;">Applications Close 15 May 2025</h2>
    <p style="color:rgba(255,255,255,0.6);max-width:480px;margin-inline:auto;margin-bottom:2rem;">Secure your place in the June 2025 cohort. Early-bird pricing available until 30 March.</p>
    <div style="display:flex;justify-content:center;gap:1rem;flex-wrap:wrap;">
      <a href="application.html" class="btn btn--gold">Apply Now</a>
      <a href="scholarship.html" class="btn btn--outline-white">View Scholarship</a>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="footer__grid">
      <div>
        <div class="footer__brand-name">PCCL Programme</div>
        <div class="footer__brand-tag">Legal Practice Academy</div>
        <p class="footer__brand-desc">A professional development programme for lawyers and legal practitioners seeking to build real-world corporate and commercial transactional skills.</p>
      </div>
      <div>
        <div class="footer__heading">Programme</div>
        <ul class="footer__list">
          <li><a href="index.html">Overview</a></li>
          <li><a href="curriculum.html">Curriculum</a></li>
          <li><a href="faculty.html">Faculty</a></li>
          <li><a href="application.html">Apply</a></li>
        </ul>
      </div>
      <div>
        <div class="footer__heading">Applications</div>
        <ul class="footer__list">
          <li><a href="application.html">Standard Entry</a></li>
          <li><a href="application.html#earlybird">Early-Bird Entry</a></li>
          <li><a href="scholarship.html">Scholarship</a></li>
        </ul>
      </div>
      <div>
        <div class="footer__heading">Contact</div>
        <ul class="footer__list">
          <li><a href="mailto:admissions@pccl-programme.org">admissions@pccl-programme.org</a></li>
          <li><a href="tel:+27112345678">+27 11 234 5678</a></li>
          <li><a href="#">Johannesburg, South Africa</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__bottom">
      <span>© 2025 PCCL Programme. All rights reserved.</span>
      <div class="footer__bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
      </div>
    </div>
  </div>
</footer>

<script>
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('navLinks');
  hamburger.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('open');
    hamburger.setAttribute('aria-expanded', String(isOpen));
    hamburger.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
  });
  navLinks.addEventListener('click', (event) => {
    if (event.target.closest('a')) { navLinks.classList.remove('open'); hamburger.setAttribute('aria-expanded', 'false'); hamburger.setAttribute('aria-label', 'Open navigation menu'); }
  });
  document.addEventListener('keydown', (event) => { if (event.key === 'Escape') { navLinks.classList.remove('open'); hamburger.setAttribute('aria-expanded', 'false'); hamburger.focus(); } });

  function toggleModule(header) {
    const item = header.closest('.module-item');
    const isOpen = item.classList.toggle('open');
    header.setAttribute('aria-expanded', String(isOpen));
  }

  document.querySelectorAll('.module-item__header').forEach((header) => {
    header.setAttribute('role', 'button');
    header.setAttribute('tabindex', '0');
    header.setAttribute('aria-expanded', String(header.closest('.module-item').classList.contains('open')));
    header.addEventListener('keydown', (event) => {
      if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); toggleModule(header); }
    });
  });
</script>
</body>
</html>
