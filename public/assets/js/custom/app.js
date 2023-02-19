$("select[name='country'").on("change", function () {
  let _this = $(this);
  let states = "<option>Select State</option>";
  let country = _this.val();
  toastr.remove();

  // * exit the process if no country was selected
  if (!country) return;

  let states_loading = _this.parents("form").find(".state-loader");

  // * show an icon indicating a loading status of the states to be gotten from the API request
  states_loading.show();

  // * States And Cities data
  let settings = {
    url: `https://api.countrystatecity.in/v1/countries/${country}/states`,
    method: "GET",
    headers: {
      "X-CSCAPI-KEY": CSC_TOKEN,
    },
  };

  $.ajax(settings).then(function (response) {
    states_loading.hide();

    if (!response.length)
      return toastr.error("No state was found for your selected country", "");

    response.sort((a, b) => {
      let fa = a.name.toLowerCase(),
        fb = b.name.toLowerCase();

      if (fa < fb) {
        return -1;
      }
      if (fa > fb) {
        return 1;
      }
      return 0;
    });

    response.forEach(
      ({ name, iso2 }) => (states += `<option value='${name}'>${name}</option>`)
    );

    _this.parents("form").find("select[name='state']").html(states);
  });
});

$("#change_avatar").click(() => $("#avatar").click());

$("#avatar").change(function () {
  const file = this.files[0];
  if (file) {
    let reader = new FileReader();
    reader.onload = ({ target }) =>
      $("#img-uploaded").attr("src", target.result);
    reader.readAsDataURL(file);
    $("#upload-avatar").show();
  }
});
