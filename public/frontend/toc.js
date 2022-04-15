$(document).on("click", 'a[href^="#"]', function (e) {
  var id = $(this).attr("href");
  var $id = $(id);
  if ($id.length === 0) {
    return;
  }
  e.preventDefault();
  var pos = $id.offset().top;
  $("body, html").animate({ scrollTop: pos }, 300);
});

document.addEventListener("DOMContentLoaded", function () {
  TableOfContents();
});
function xu_ly_ky_tu_trang(str) {
  // Gộp nhiều dấu space thành 1 space
  str = str.replace(/\s+/g, " ");
  // loại bỏ toàn bộ dấu space (nếu có) ở 2 đầu của xâu
  return str.trim();
}
function loai_bo_ky_tu_khong_la_chu_so(str) {
  return str.replace(
    /[^0-9a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ\s]/gi,
    ""
  );
}
function xoa_dau(str) {
  str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
  str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
  str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
  str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
  str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
  str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
  str = str.replace(/đ/g, "d");
  str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
  str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
  str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
  str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
  str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
  str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
  str = str.replace(/Đ/g, "D");
  return str;
}
function full_xu_ly(str) {
  str = xu_ly_ky_tu_trang(str);
  str = loai_bo_ky_tu_khong_la_chu_so(str);
  str = xoa_dau(str);
  return str;
}
function TableOfContents(container, output) {
  var toc = "";
  var level = 0;
  var container =
    document.querySelector(container) || document.querySelector("#contents");
  var output = output || "#toc";

  container.innerHTML = container.innerHTML.replace(
    /<h([\d])>([^<]+)<\/h([\d])>/gi,
    function (str, openLevel, titleText, closeLevel) {
      if (openLevel != closeLevel) {
        return str;
      }

      if (openLevel > level) {
        toc += new Array(openLevel - level + 1).join("<ul>");
      } else if (openLevel < level) {
        toc += new Array(level - openLevel + 1).join("</li></ul>");
      } else {
        toc += new Array(level + 1).join("</li>");
      }

      level = parseInt(openLevel);

      var anchor = full_xu_ly(titleText.replace(/ /g, "_"));

      toc += '<li><a class="scroll-to" href="#' + anchor + '">' + titleText + "</a>";

      return (
        "<h" +
        openLevel +
        '  id="' +
        anchor +
        '">' +
        titleText +
        "</h" +
        closeLevel +
        ">"
      );
    }
  );

  if (level) {
    toc += new Array(level + 1).join("</ul>");
  }
  //console.log(toc);
  document.querySelector(output).innerHTML += toc;
}


$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop() + 20;
    $('h2,h3').each(function(i) {
        if ($(this).position().top <= scrollDistance) {
            $('#toc ul ul li a.active').removeClass('active');
            $('#toc a').eq(i).addClass('active');
        }
    });
}).scroll();

// $(document).on('click', 'a[href^="#"]', function (event) {
//     event.preventDefault();
//     $('html, body').animate({
//         scrollTop: $($.attr(this, 'href')).offset().top - 100 //Add this
//     }, 0);
// });