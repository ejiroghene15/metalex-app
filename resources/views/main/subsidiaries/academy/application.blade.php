<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Apply — PCCLP | Metalex Academy</title>
  <link rel="stylesheet" href="{{asset('assets/css/academy/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/css/academy/application.css')}}"/>
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
      <details class="programme-menu">
        <summary class="nav__link">Programmes</summary>
        <div class="programme-menu__list"><a href="index.html">PCCLP — Corporate &amp; Commercial Practice</a></div>
      </details>
      <a href="curriculum.html" class="nav__link">Curriculum</a>
      <a href="faculty.html" class="nav__link">Faculty</a>
      <a href="application.html" class="nav__link active">Apply</a>
      <a href="scholarship.html" class="nav__link">Fees &amp; Scholarship</a><a href="faq.html"
                                                                                class="nav__link">FAQ</a>
      <a href="application.html" class="btn btn--gold nav__cta">Apply Now</a>
    </div>
    <button class="nav__hamburger" id="hamburger" aria-label="Open navigation menu" aria-controls="navLinks"
            aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<header class="page-header" id="earlybird">
  <div class="container">
    <p class="eyebrow page-header__eyebrow">2026 Cohort Applications</p>
    <h1 class="page-header__title">Apply for PCCLP</h1>
    <p class="page-header__lead">Complete your application below. Standard and early-bird entry routes are available.
      Applications are reviewed on a rolling basis — early applications are strongly encouraged.</p>
  </div>
</header>

<!-- ─── Application form ───────────────────────── -->
<section class="section section--cream">
  <div class="container">

    <div class="entry-tabs">
      <button class="entry-tab active" onclick="switchTab('earlybird')">Early-Bird Entry</button>
      <button class="entry-tab" onclick="switchTab('standard')">Standard Entry</button>
    </div>

    <!-- Early-bird panel -->
    <div class="entry-panel active" id="panel-earlybird">
      <div class="application-layout">
        <div>
          <div class="application-form">
            <div class="application-form__title">Early-Bird Application</div>
            <div class="application-form__sub">Deadline: <strong>30 March 2026</strong> · Early Bird tuition is
              ₦180,000. All fields marked * are required.
            </div>

            <form onsubmit="handleSubmit(event)">
              <div class="form-section">
                <div class="form-section__title">Personal Information</div>
                <div class="form-stack">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="eb-first">First Name *</label>
                      <input type="text" id="eb-first" placeholder="e.g. Amara" required/>
                    </div>
                    <div class="form-group">
                      <label for="eb-last">Last Name *</label>
                      <input type="text" id="eb-last" placeholder="e.g. Osei-Bonsu" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="eb-email">Email Address *</label>
                    <input type="email" id="eb-email" placeholder="amara@lawfirm.co.za" required/>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="eb-phone">Phone Number *</label>
                      <input type="tel" id="eb-phone" placeholder="+27 82 123 4567" required/>
                    </div>
                    <div class="form-group">
                      <label for="eb-country">Country of Practice *</label>
                      <select id="eb-country" required>
                        <option value="" disabled selected>Select country</option>
                        <option>South Africa</option>
                        <option>Nigeria</option>
                        <option>Ghana</option>
                        <option>Kenya</option>
                        <option>Zimbabwe</option>
                        <option>Botswana</option>
                        <option>Namibia</option>
                        <option>Zambia</option>
                        <option>Tanzania</option>
                        <option>Uganda</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-section">
                <div class="form-section__title">Professional Background</div>
                <div class="form-stack">
                  <div class="form-group">
                    <label for="eb-employer">Current Employer / Organisation *</label>
                    <input type="text" id="eb-employer" placeholder="e.g. Bowmans LLP" required/>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="eb-role">Current Role / Title *</label>
                      <input type="text" id="eb-role" placeholder="e.g. Associate" required/>
                    </div>
                    <div class="form-group">
                      <label for="eb-yoe">Years of Legal Experience *</label>
                      <select id="eb-yoe" required>
                        <option value="" disabled selected>Select range</option>
                        <option>0–2 years (Candidate Attorney / Pupil)</option>
                        <option>2–5 years</option>
                        <option>5–10 years</option>
                        <option>10+ years</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="eb-practice">Primary Practice Area *</label>
                    <select id="eb-practice" required>
                      <option value="" disabled selected>Select practice area</option>
                      <option>Corporate & Commercial</option>
                      <option>Banking & Finance</option>
                      <option>Litigation / Dispute Resolution</option>
                      <option>Regulatory & Compliance</option>
                      <option>Employment Law</option>
                      <option>Tax Law</option>
                      <option>In-House / General Counsel</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="eb-qual">Highest Legal Qualification *</label>
                    <input type="text" id="eb-qual" placeholder="e.g. LLB, University of Cape Town (2018)" required/>
                  </div>
                </div>
              </div>

              <div class="form-section">
                <div class="form-section__title">Motivation</div>
                <div class="form-stack">
                  <div class="form-group">
                    <label for="eb-motivation">Why do you want to join the PCCL Programme? *</label>
                    <textarea id="eb-motivation" rows="5"
                              placeholder="Describe your professional goals and what you hope to gain from the programme (minimum 150 words)."
                              required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="eb-employer-support">Employer Support</label>
                    <select id="eb-employer-support">
                      <option value="" disabled selected>Is your employer supporting this application?</option>
                      <option>Yes — fully sponsored</option>
                      <option>Yes — partial sponsorship</option>
                      <option>No — self-funded</option>
                      <option>To be confirmed</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="eb-ref">Referee Name & Contact (Professional Reference) *</label>
                    <input type="text" id="eb-ref" placeholder="e.g. Partner James Boateng — james.boateng@bowmans.com"
                           required/>
                  </div>
                </div>
              </div>

              <div class="form-consent">
                <input type="checkbox" id="eb-consent" required/>
                <label for="eb-consent">I confirm that the information provided is accurate and I consent to the PCCL
                  Programme processing my personal data in accordance with the <a href="#">Privacy Policy</a>. I
                  understand that a non-refundable application fee of $150 is payable on submission.</label>
              </div>

              <div class="form-submit">
                <button type="submit" class="btn btn--gold">Submit Early-Bird Application →</button>
                <p class="form-note" style="margin-top:0.75rem;">Application fee: $150 (non-refundable). Payable by EFT
                  or card on submission confirmation. Places are limited — you will be notified of your application
                  outcome within 10 business days.</p>
              </div>
            </form>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="application-sidebar">
          <div class="sidebar-box">
            <div class="sidebar-box__header">
              <div class="sidebar-box__header-title">Early-Bird Entry — Key Details</div>
            </div>
            <div class="sidebar-box__body">
              <div class="earlybird-highlight">
                <div class="earlybird-highlight__label">Early-Bird Saving</div>
                <div class="earlybird-highlight__text">Apply by 30 March 2026 and pay ₦180,000 instead of ₦230,000 — a
                  saving of <strong>₦50,000</strong>.
                </div>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Application Deadline</span>
                <span class="sidebar-item__value">30 March 2025</span>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Application Status</span>
                <span class="sidebar-item__value open">Open</span>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Programme Start</span>
                <span class="sidebar-item__value">16 June 2025</span>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Duration</span>
                <span class="sidebar-item__value">6 months</span>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Format</span>
                <span class="sidebar-item__value">In-Person (Johannesburg)</span>
              </div>
              <div class="sidebar-pricing">
                <div class="sidebar-pricing__row">
                  <span class="sidebar-pricing__label">Tuition Fee (Early-Bird)</span>
                  <span class="sidebar-pricing__price">₦180,000</span>
                </div>
                <div class="sidebar-pricing__note">Includes all module materials, workshops, data room access, alumni
                  network membership. VAT inclusive.
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-box">
            <div class="sidebar-box__header">
              <div class="sidebar-box__header-title">Entry Requirements</div>
            </div>
            <div class="sidebar-box__body">
              <ul class="requirements-list">
                <li>LLB or equivalent legal qualification</li>
                <li>Admitted attorney, advocate, or equivalent</li>
                <li>Minimum 1 year post-qualification experience</li>
                <li>Proficiency in English (instruction language)</li>
                <li>One professional reference</li>
              </ul>
              <p style="font-size:0.78rem;color:var(--text-muted);margin-top:1rem;line-height:1.6;">Final-year LLB
                students and pupil barristers may apply for deferred entry. Contact admissions to discuss.</p>
            </div>
          </div>

          <div class="sidebar-box">
            <div class="sidebar-box__header">
              <div class="sidebar-box__header-title">Have Questions?</div>
            </div>
            <div class="sidebar-box__body">
              <p style="font-size:0.875rem;color:var(--text-mid);margin-bottom:1rem;line-height:1.65;">Our admissions
                team is available Monday–Friday, 09:00–17:00 SAST.</p>
              <a href="mailto:admissions@pccl-programme.org" class="btn btn--outline-gold"
                 style="width:100%;justify-content:center;font-size:0.85rem;">admissions@pccl-programme.org</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Standard panel -->
    <div class="entry-panel" id="panel-standard">
      <div class="application-layout">
        <div>
          <div class="application-form">
            <div class="application-form__title">Standard Application</div>
            <div class="application-form__sub">Deadline: <strong>15 May 2026</strong> · Standard tuition fee of
              ₦230,000. All fields marked * are required.
            </div>

            <form onsubmit="handleSubmit(event)">
              <div class="form-section">
                <div class="form-section__title">Personal Information</div>
                <div class="form-stack">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="st-first">First Name *</label>
                      <input type="text" id="st-first" placeholder="e.g. Kwame" required/>
                    </div>
                    <div class="form-group">
                      <label for="st-last">Last Name *</label>
                      <input type="text" id="st-last" placeholder="e.g. Asante-Mensah" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="st-email">Email Address *</label>
                    <input type="email" id="st-email" placeholder="kwame@legalfirm.co" required/>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="st-phone">Phone Number *</label>
                      <input type="tel" id="st-phone" placeholder="+27 73 456 7890" required/>
                    </div>
                    <div class="form-group">
                      <label for="st-country">Country of Practice *</label>
                      <select id="st-country" required>
                        <option value="" disabled selected>Select country</option>
                        <option>South Africa</option>
                        <option>Nigeria</option>
                        <option>Ghana</option>
                        <option>Kenya</option>
                        <option>Zimbabwe</option>
                        <option>Botswana</option>
                        <option>Namibia</option>
                        <option>Zambia</option>
                        <option>Tanzania</option>
                        <option>Uganda</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-section">
                <div class="form-section__title">Professional Background</div>
                <div class="form-stack">
                  <div class="form-group">
                    <label for="st-employer">Current Employer / Organisation *</label>
                    <input type="text" id="st-employer" placeholder="e.g. MTN Group — In-House Legal" required/>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="st-role">Current Role / Title *</label>
                      <input type="text" id="st-role" placeholder="e.g. Legal Counsel" required/>
                    </div>
                    <div class="form-group">
                      <label for="st-yoe">Years of Legal Experience *</label>
                      <select id="st-yoe" required>
                        <option value="" disabled selected>Select range</option>
                        <option>0–2 years (Candidate Attorney / Pupil)</option>
                        <option>2–5 years</option>
                        <option>5–10 years</option>
                        <option>10+ years</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="st-practice">Primary Practice Area *</label>
                    <select id="st-practice" required>
                      <option value="" disabled selected>Select practice area</option>
                      <option>Corporate & Commercial</option>
                      <option>Banking & Finance</option>
                      <option>Litigation / Dispute Resolution</option>
                      <option>Regulatory & Compliance</option>
                      <option>Employment Law</option>
                      <option>Tax Law</option>
                      <option>In-House / General Counsel</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="st-qual">Highest Legal Qualification *</label>
                    <input type="text" id="st-qual" placeholder="e.g. LLM, University of the Witwatersrand (2020)"
                           required/>
                  </div>
                </div>
              </div>

              <div class="form-section">
                <div class="form-section__title">Motivation</div>
                <div class="form-stack">
                  <div class="form-group">
                    <label for="st-motivation">Why do you want to join the PCCL Programme? *</label>
                    <textarea id="st-motivation" rows="5"
                              placeholder="Describe your professional goals and what you hope to gain from the programme (minimum 150 words)."
                              required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="st-employer-support">Employer Support</label>
                    <select id="st-employer-support">
                      <option value="" disabled selected>Is your employer supporting this application?</option>
                      <option>Yes — fully sponsored</option>
                      <option>Yes — partial sponsorship</option>
                      <option>No — self-funded</option>
                      <option>To be confirmed</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="st-ref">Referee Name & Contact (Professional Reference) *</label>
                    <input type="text" id="st-ref" placeholder="e.g. Director Lerato Mokoena — l.mokoena@werksmans.com"
                           required/>
                  </div>
                </div>
              </div>

              <div class="form-consent">
                <input type="checkbox" id="st-consent" required/>
                <label for="st-consent">I confirm that the information provided is accurate and I consent to the PCCL
                  Programme processing my personal data in accordance with the <a href="#">Privacy Policy</a>. I
                  understand that a non-refundable application fee of $150 is payable on submission.</label>
              </div>

              <div class="form-submit">
                <button type="submit" class="btn btn--gold">Submit Standard Application →</button>
                <p class="form-note" style="margin-top:0.75rem;">Application fee: $150 (non-refundable). Payable by EFT
                  or card on submission confirmation. Places are limited — you will be notified within 10 business
                  days.</p>
              </div>
            </form>
          </div>
        </div>

        <!-- Sidebar standard -->
        <div class="application-sidebar">
          <div class="sidebar-box">
            <div class="sidebar-box__header">
              <div class="sidebar-box__header-title">Standard Entry — Key Details</div>
            </div>
            <div class="sidebar-box__body">
              <div class="sidebar-item">
                <span class="sidebar-item__label">Application Deadline</span>
                <span class="sidebar-item__value">15 May 2025</span>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Application Status</span>
                <span class="sidebar-item__value open">Open</span>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Programme Start</span>
                <span class="sidebar-item__value">16 June 2025</span>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Duration</span>
                <span class="sidebar-item__value">6 months</span>
              </div>
              <div class="sidebar-item">
                <span class="sidebar-item__label">Format</span>
                <span class="sidebar-item__value">In-Person (Johannesburg)</span>
              </div>
              <div class="sidebar-pricing">
                <div class="sidebar-pricing__row">
                  <span class="sidebar-pricing__label">Tuition Fee (Standard)</span>
                  <span class="sidebar-pricing__price">₦230,000</span>
                </div>
                <div class="sidebar-pricing__note">Includes all module materials, workshops, data room access, alumni
                  network membership. VAT inclusive.
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-box">
            <div class="sidebar-box__header">
              <div class="sidebar-box__header-title">Entry Requirements</div>
            </div>
            <div class="sidebar-box__body">
              <ul class="requirements-list">
                <li>LLB or equivalent legal qualification</li>
                <li>Admitted attorney, advocate, or equivalent</li>
                <li>Minimum 1 year post-qualification experience</li>
                <li>Proficiency in English (instruction language)</li>
                <li>One professional reference</li>
              </ul>
            </div>
          </div>

          <div class="sidebar-box">
            <div class="sidebar-box__header">
              <div class="sidebar-box__header-title">Consider the Scholarship?</div>
            </div>
            <div class="sidebar-box__body">
              <p style="font-size:0.875rem;color:var(--text-mid);margin-bottom:1rem;line-height:1.65;">Merit-based
                scholarships covering up to 60% of tuition are available for eligible candidates. Scholarship deadline
                is 31 March 2025.</p>
              <a href="scholarship.html" class="btn btn--outline-gold"
                 style="width:100%;justify-content:center;font-size:0.85rem;">Learn About the Scholarship →</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── Application process ────────────────────── -->
<section class="section section--white">
  <div class="container">
    <div class="section__header section__header--center">
      <p class="eyebrow">What Happens Next</p>
      <div class="divider divider--center"></div>
      <h2>The Application Process</h2>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="process-step__icon">📋</div>
        <div class="process-step__num">Step 01</div>
        <div class="process-step__title">Submit Application</div>
        <p class="process-step__desc">Complete and submit the form above. Pay the $150 non-refundable application fee on
          the confirmation page.</p>
      </div>
      <div class="process-step">
        <div class="process-step__icon">🔍</div>
        <div class="process-step__num">Step 02</div>
        <div class="process-step__title">Application Review</div>
        <p class="process-step__desc">The admissions committee reviews your application and contacts your referee. You
          will hear within 10 business days.</p>
      </div>
      <div class="process-step">
        <div class="process-step__icon">📞</div>
        <div class="process-step__num">Step 03</div>
        <div class="process-step__title">Admissions Interview</div>
        <p class="process-step__desc">Shortlisted candidates participate in a 20-minute video interview with a member of
          the admissions committee.</p>
      </div>
      <div class="process-step">
        <div class="process-step__icon">🎓</div>
        <div class="process-step__num">Step 04</div>
        <div class="process-step__title">Offer & Enrolment</div>
        <p class="process-step__desc">Successful candidates receive a formal offer letter. A 20% deposit secures your
          place. Balance payable before programme start.</p>
      </div>
    </div>
  </div>
</section>

<!-- ─── FAQ ───────────────────────────────────── -->
<section class="section section--cream">
  <div class="container" style="max-width:800px;">
    <div class="section__header">
      <p class="eyebrow">Common Questions</p>
      <div class="divider"></div>
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question" type="button" onclick="toggleFaq(this)" aria-expanded="false">Can I apply if I am
          not yet admitted as an attorney?
        </button>
        <div class="faq-answer">The programme is designed for admitted practitioners. However, final-year LLB students
          and candidate attorneys / pupil barristers may apply for a conditional offer, with full enrolment confirmed on
          admission to the roll. Please contact admissions to discuss your circumstances before applying.
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question" type="button" onclick="toggleFaq(this)" aria-expanded="false">Is the programme
          available online or part-time?
        </button>
        <div class="faq-answer">Sessions are held Thursday and Friday evenings (18:00–20:30 SAST) and alternate
          Saturdays (09:00–13:00). The programme is designed to be compatible with full-time practice — no leave is
          required. In-person attendance in Johannesburg is required; there is no fully remote option, though select
          guest masterclasses are streamed for participants who cannot attend.
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question" type="button" onclick="toggleFaq(this)" aria-expanded="false">What is the
          difference between early-bird and standard entry?
        </button>
        <div class="faq-answer">The entry routes are identical — same curriculum, same faculty, same cohort. The only
          difference is the application deadline and tuition fee. Early-bird applications must be received by 30 March
          2025 and attract a reduced fee of $3,900 (saving $900). Standard applications close on 15 May 2025 at the full
          $4,800 fee.
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question" type="button" onclick="toggleFaq(this)" aria-expanded="false">Can my firm sponsor
          multiple participants?
        </button>
        <div class="faq-answer">Yes. Firms sponsoring three or more participants from the same cohort qualify for a 10%
          group discount on tuition fees. Please contact admissions directly to arrange a group application and
          invoicing. A firm liaison contact will be assigned for the duration of the programme.
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question" type="button" onclick="toggleFaq(this)" aria-expanded="false">What certification do
          I receive on completion?
        </button>
        <div class="faq-answer">Participants who successfully complete all modules and the capstone deal simulation
          receive the PCCL Certificate in Corporate & Commercial Legal Practice. The certificate is recognised by all
          major law firms and in-house legal teams across the region as evidence of structured practical training.
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question" type="button" onclick="toggleFaq(this)" aria-expanded="false">Is the application
          fee refundable if I am unsuccessful?
        </button>
        <div class="faq-answer">The $150 application fee is non-refundable in all circumstances. If your application is
          unsuccessful, you are welcome to apply for a future cohort, and any reapplication fee is waived for candidates
          who applied within the previous 12 months.
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="footer__grid">
      <div>
        <div class="footer__brand-name">PCCL Programme</div>
        <div class="footer__brand-tag">Legal Practice Academy</div>
        <p class="footer__brand-desc">A professional development programme for lawyers and legal practitioners seeking
          to build real-world corporate and commercial transactional skills.</p>
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
    if (event.target.closest('a')) {
      navLinks.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
      hamburger.setAttribute('aria-label', 'Open navigation menu');
    }
  });
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      navLinks.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
      hamburger.focus();
    }
  });

  function switchTab(type) {
    document.querySelectorAll('.entry-tab').forEach((t, i) => {
      t.classList.toggle('active', (i === 0 && type === 'earlybird') || (i === 1 && type === 'standard'));
    });
    document.querySelectorAll('.entry-panel').forEach(p => p.classList.remove('active'));
    document.getElementById('panel-' + type).classList.add('active');
  }

  function handleSubmit(e) {
    e.preventDefault();
    const form = e.target;
    const btn = form.querySelector('button[type="submit"]');
    btn.textContent = '✓ Application Submitted';
    btn.disabled = true;
    form.querySelectorAll('input, select, textarea').forEach(el => el.disabled = true);
    const note = document.createElement('p');
    note.className = 'form-status';
    note.setAttribute('role', 'status');
    note.innerHTML = '<strong>Thank you for your application.</strong> You will receive a confirmation email within 24 hours. Application fee payment instructions will be included. We aim to respond to all applications within 10 business days.';
    form.appendChild(note);
  }

  function toggleFaq(question) {
    const item = question.closest('.faq-item');
    const isOpen = item.classList.toggle('open');
    question.setAttribute('aria-expanded', String(isOpen));
  }
</script>
</body>
</html>
