<div class="modal fade" id="forum-rules" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Forum Rules & Guidelines</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class="fs-5 lh-3 text-muted mb-3">
          Welcome to the Metalex Legal Forum! To ensure an insightful and productive experience for all Metalex users,
          please adhere to the following rules and guidelines:
        </h6>

        @csrf
        <article class="mb-3">
          {{-- Respect--}}
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="respect">
              Respect
            </label>
            <p>
              <small>
                Share your insights and treat all users with courtesy and respect. Disagreements are natural, but
                personal attacks, offensive language, or any form of harassment will not be tolerated.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="stay-on-topic">
              Stay on topic
            </label>
            <p>
              <small>
                Keep discussions relevant to the forum's categories and topics. Off-topic posts may be moved or removed.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="no-spam">
              No Spamming
            </label>
            <p>
              <small>
                Do not post spam, advertisements, or promotional content unrelated to a forum's purpose. Any such posts
                will be deleted.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="copyright">
              Copyright and Plagiarism
            </label>
            <p>
              <small>
                Do not post copyrighted material without proper attribution or permission in a forum. Plagiarism is not
                allowed.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="keep-personal-info">
              Be Cautious with Personal Information
            </label>
            <p>
              <small>
                Do not share personal contact information, including email addresses, phone numbers, or physical
                addresses. Protect your privacy. Do you wish to schedule a private interaction or consultation with a
                legal expert, reach out to us directly.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="no-trolling">
              No Trolling
            </label>
            <p>
              <small>
                Do not engage in trolling, baiting, or disruptive behavior. Constructive criticism and differing
                viewpoints are welcome, but deliberate attempts to incite conflict will not be tolerated.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="privacy">
              Respect Privacy
            </label>
            <p>
              <small>
                Do not share or request personal information about others without their consent. Respect the privacy of
                all users.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="report-violation">
              Reporting Violations
            </label>
            <p>
              <small>
                If you come across a post that violates these rules, report it to us directly or the moderators rather
                than engaging in public disputes.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="username-and-avatars">
              Usernames and Avatars
            </label>
            <p>
              <small>
                Choose appropriate usernames and avatars. Offensive or inappropriate usernames and avatars will be
                changed.
              </small>
            </p>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="rule">
            <label class="form-check-label" for="moderator-authority">
              Moderator Authority
            </label>
            <p>
              <small>
                Follow the instructions of the forum moderators. Their role is to maintain a positive and productive
                environment.
              </small>
            </p>
          </div>

        </article>

      </div>
    </div>
  </div>
</div>
