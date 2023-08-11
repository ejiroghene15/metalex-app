const CKBallonEditor = () => {
  BalloonEditor
    .create(document.querySelector('.editor'), {
      toolbar: {
        items: ["bold", "link", "bulletedList", "numberedList"],
      },
      licenseKey: "",
    })
    .then(editor => {
      window.editor = editor;
    })
    .catch(error => {
      console.error('Oops, something went wrong!');
      console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
      console.warn('Build id: wui4zned51yo-bq6cokjedqtb');
      console.error(error);
    });
};

const CKClassicEditor = () => {
  // * Initialize wysiwyg HTML editor
  ClassicEditor
    .create(document.querySelector('.editor'), {
      toolbar: {
        items: ["bold", "link", "bulletedList", "numberedList"],
      },
      licenseKey: "",
    })
    .then(editor => {
      window.editor = editor;
    })
    .catch(error => {
      console.error('Oops, something went wrong!');
      console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
      console.warn('Build id: wui4zned51yo-bq6cokjedqtb');
      console.error(error);
    });
};

CKBallonEditor();

// Create a thread
$("body").on("submit", "#reply_thread, .reply_comment", function (e) {
  e.preventDefault();
  let data = $(this).serializeArray();

  // Check if the array contains the reply
  const has_reply = data.some(obj => obj.name.includes('reply'));
  if (!has_reply) data.push({name: 'reply', value: editor.getData()});

  let btn = $(this).children("button");
  let original_label = btn.text();
  btn.attr("disabled", true).text("Replying...");
  $.post(`${APP_URL}/forum/create/thread`, data, function (response) {
    if (response?.status === "success") {
      $("#thread_section").load(`${location.href} #thread_section > *`);
      btn.attr("disabled", false).text(original_label);
      setTimeout(CKBallonEditor, 500)
      return window.editor.setData("")
    }
    btn.attr("disabled", false).text(original_label);
  });
})

// * Display Comment Reply Box
$("#thread_section").on("click", ".reply_user", function () {
  $(this).parents(".comment_section").find(".reply_comment").slideToggle();
});

// * Bookmark a thread
$(".bookmark").on("submit", function (e) {
  e.preventDefault();
  let btn_elem = $(this).children("button");
  let action = btn_elem.find('.label').attr('for');

  let data = $(this).serializeArray();
  $.post(`${APP_URL}/forum/${action === 'add' ? 'bookmark' : 'removeBookmark'}/thread`, data, function (response) {
    if (response?.status === 'success') {
      switch (action) {
        case 'add':
          btn_elem.find('.label').text("Remove Bookmark").attr("for", "remove");
          btn_elem.find(".icon").removeClass("bi-bookmark").addClass("bi-bookmark-fill");
          break;
        case 'remove':
          btn_elem.find('.label').text("Bookmark").attr("for", "add");
          btn_elem.find(".icon").removeClass("bi-bookmark-fill").addClass("bi-bookmark");
          break;
      }
    }
  })
})

// * Flag a Thread or Blog Post
$("#thread_section").on("click", ".flag_thread", function () {
  thread_id.value = $(this).data().thread;
});

$("#report-content").submit(function (e) {
  e.preventDefault();
  let form = $(this)[0];
  let data = $(this).serializeArray();
  $.post(`${APP_URL}/forum/report/thread/${thread_id.value}`, data, function (response) {
    if (response?.status === "success") {
      $("#thread_section").load(`${location.href} #thread_section > *`);
      form.reset();
      $(".btn-close").click();
      setTimeout(CKBallonEditor, 500)
    }
  });
})