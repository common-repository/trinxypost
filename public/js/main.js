
function instaCall(url, output, access_token, size) {
	jQuery(document).ready(function($){
  var outputs = document.getElementById(output);
  if (url != "") {
    function loadContent() {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          var disp = JSON.parse(this.response);

          getPosts(disp);
        }
      };
      xhr.open(
        "GET",
        "https://graph.facebook.com/v8.0/instagram_oembed?url=" +
          url +
          "&access_token=" +
          access_token,
        true
      );

      xhr.send();
    }
    loadContent();
    function getPosts(list) {
      $(outputs).append(`<div class="trinxy-post-${size}">${list.html}</div>`);
    }
	}
})
}

function instaCallGallery(url, output, access_token, size) {
	jQuery(document).ready(function($){
  var outputs = document.getElementById(output);
  if (url != "") {
    function loadContent() {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          var disp = JSON.parse(this.response);

          getPosts(disp);
        }
      };
      xhr.open(
        "GET",
        "https://graph.facebook.com/v8.0/instagram_oembed?url=" +
          url +
          "&access_token=" +
          access_token,
        true
      );

      xhr.send();
    }
    loadContent();
    function getPosts(list) {
      $(outputs).append(
        `<div class="trinxy-gallery-${size}"> <a target="blank" href="${url}"><img src="${list.thumbnail_url}"></a></div>`
      );
    }
	}
})
}

function instaCallGalleryCommentAndAuthor(url, output, access_token, size) {
	jQuery(document).ready(function($){
	var outputs = document.getElementById(output);
  if (url != "") {
    function loadContent() {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          var disp = JSON.parse(this.response);

          getPosts(disp);
        }
      };
      xhr.open(
        "GET",
        "https://graph.facebook.com/v8.0/instagram_oembed?url=" +
          url +
          "&access_token=" +
          access_token,
        true
      );

      xhr.send();
    }
    loadContent();
    function getPosts(list) {
      $(outputs)
        .append(`<blockquote class="instagram-media trinxy-gallery-author-comments-${size}"> <a target="blank" href="${url}"><img src="${list.thumbnail_url}"></a>
		 </blockquote><script async src="//platform.instagram.com/en_US/embeds.js"></script>`);
    }
	}
})
}
