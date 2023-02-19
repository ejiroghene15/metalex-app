// * Set input to replace entries as tags under area of specialization
let tags = document.querySelectorAll(".tags");
tags.forEach((input) => new Tagify(input));

// * Registration
$(".registration_form").on("submit", function (e) {
  e.preventDefault();
  let _this = $(this);
  let data = _this.serializeArray();
  let _button = _this.find(".submit_button");
  let ca_text = _this.find(".ca__text");
  let ca_loader = _this.find(".ca__loader");

  _button.prop("disabled", true);
  ca_text.hide();
  ca_loader.show();

  $.post("/api/register", data, function (response) {
    if (response.status === "success") {
      toastr.success(response.message, "Registration Successful");
      _this[0].reset();
    }
  })
    .catch(({ status, responseJSON }) => {
      let message;
      switch (status) {
        case 500:
          message = "Server error: Unable to process registration";
          break;
        default:
          message = responseJSON.message;
          break;
      }
      toastr.error(message, "Registration Error");
    })
    .done(() => {
      _button.prop("disabled", false);
      ca_text.show();
      ca_loader.hide();
    });
});

// * Reset Password
$(".forgot_password").on("submit", function (e) {
  e.preventDefault();
  let _this = $(this);
  let data = _this.serializeArray();
  let _button = _this.find(".submit_button");
  let ca_text = _this.find(".ca__text");
  let ca_loader = _this.find(".ca__loader");

  _button.prop("disabled", true);
  ca_text.hide();
  ca_loader.show();

  $.post("/api/forgot-password", data, function (response) {
    if (response.status === "success") {
      toastr.success(response.message, "Password Reset");
      _this[0].reset();
    }
  })
    .catch(({ status, responseJSON }) => {
      let message;
      switch (status) {
        case 500:
          message = "Server error: Unable to process registration";
          break;

        default:
          message = responseJSON.message;
          break;
      }
      toastr.error(message, "Password Reset");
    })
    .done(() => {
      _button.prop("disabled", false);
      ca_text.show();
      ca_loader.hide();
    });
});
