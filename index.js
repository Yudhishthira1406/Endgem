// function showfiles(str) {
//    var xhttp;
//    xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function () {
//        if (this.readyState == 4 && this.status == 200) {
//            document.getElementById("coursematerial").innerHTML = this.responseText;
//        }
//   };
//    xhttp.open("GET", "showoptions.php?q=" + str, true);
//   xhttp.send();
// }

//buttons=document.getElementsByTagName("button");

// buttons.forEach(button => {
//     button.addEventListener("click",loadDoc);
// });

// Array(buttons).forEach(button => {
//     button.addEventListener("click",loadDoc);
// });

// for (var i = 0; i < buttons.length; i++) {
//     buttons[i].addEventListener("click", function () {
//         var xhttp = new XMLHttpRequest();
//         xhttp.onreadystatechange = function () {
//             if (this.readyState == 4 && this.status == 200) {
//                 buttons[i].getElementById("down").innerHTML = this.responseText;

//             }
//         };
//         xhttp.open("GET", "increment.php?q="buttons[i].getElementById("notes").innerHTML + "&r=" + buttons[i].getElementById("course").innerHTML, true);
//         xhttp.send();
//     })
// }

function load(str) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      str.children[3].innerHTML = this.responseText;
    }
  };
  var r = str.children[1].innerHTML;
  xhttp.open("GET", "increment.php?q=" + r + "&r=" + document.getElementById('select').value, true);
  xhttp.send();
  return true;
}

function redirect(str) {
  location.replace("course.php?q=" + str);
}

function load2(str) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //str.children[3].innerHTML = this.responseText;
    }
  };
  var r = str.substring(2);
  xhttp.open("GET", "increment.php?q=" + r + "&r=" + document.getElementById('select').value, true);
  xhttp.send();
  return true;
}

// $('#menu').css("right", "-300px");
// $('.menu').on('click', function () {
//     if ($('.menu').hasClass('open')) {
//         $(this).removeClass('open');
//         $(this).animate({
//             "right": "20px",
//             "background-position": "0px"
//         });
//         $('#menu').animate({ "right": "-300px" });
//         $('body').css("position", "absolute");
//         $('body').animate({
//             "right": "0px",
//             "z-index": "999"
//         });
//     }
//     else {
//         $(this).addClass('open');
//         $(this).animate({
//             "right": "310px",
//             "background-position": "-40px"
//         });
//         $('#menu').animate({ "right": "0px" });
//         $('body').css("position", "absolute");
//         $('body').animate({
//             "right": "300px",
//             "z-index": "999"
//         });

//     }
// });


function openNav() {
  var menu = document.getElementById("ham");
  var cross = document.getElementById("cross");

  if (document.getElementById("mySidebar").style.width == "0px") {
    document.getElementById("mySidebar").style.width = "350px";
    document.getElementById("main").style.marginLeft = "350px";
    menu.style.zIndex = "-1";
    cross.style.zIndex = "";
  }
  else {
    document.getElementById("mySidebar").style.width = "0px";
    document.getElementById("main").style.marginLeft = "0px";
    cross.style.zIndex = "-1";
    menu.style.zIndex = "";
  }
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
