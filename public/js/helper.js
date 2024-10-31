// let ROOT = 'http://localhost/mycoachingWEB/';
let comment_input = document.getElementById("comment_input");
let comment_post_btn = document.getElementById("comment_post_btn");
let seemore = document.querySelectorAll(".seemore");
let pdfobject = document.getElementById("pdfobject");
let delete_cmt = document.getElementById("delete_cmt");
let del_cmt = document.querySelectorAll(".delete_cmt");
let confirm_popup_container = document.getElementsByClassName(
  "confirm_popup_container"
);
let loadComments = document.getElementById("loadComments");

let flag = 0;
seemore.forEach(function (e) {
  e.addEventListener("click", function () {
    if (flag) {
      e.previousElementSibling.style = "overflow:hidden;height:30px";
      e.innerHTML = "See More";
      flag = 0;
    } else {
      console.log((e.previousElementSibling.style = "height:fit-content"));
      e.innerHTML = "See Less";
      flag = 1;
    }
  });
});

function objectModel(divId, data_id, data_path) {
  let element = document.getElementById(divId);
  let close = document.getElementById(data_id);
  if (element.style.display == "block") {
    element.style.display = "none";
  } else {
    element.style.display = "block";
  }
  $.ajax({
    url: "http://localhost/mycoachingWEB/" + data_path,
    data: { id: data_id },
    method: "POST",
    success: function (e) {
      pdfobject.setAttribute(
        "data",
        "http://localhost/mycoaching/public/docs/timetable/" + e
      );
      console.log(pdfobject.getAttribute("data"));
    },
  });
}

function comments(ele_id, path, popUp,num="") {
  let cid,vid;
  let curr_id;
  let element = document.getElementById(ele_id);
  let pop_up = document.getElementsByClassName(popUp)[0];
  let form = new FormData(element);
  if(form.get('video_id')!=""){
    vid = form.get('video_id');
  }
  if(form.get('course_id')){
    cid = form.get("course_id");
  }
  let user_id = form.get("user_id");
  let comment = form.get("comment");
  $.ajax({
    url: ROOT + path,
    method: "POST",
    data: { comment: comment, course_id: cid,video_id:vid,user_id: user_id},
    success: function (e) {
      console.log(e);
      
      $("#loadComments"+num).html(e);
      pop_up.style.display = "block";
      pop_up.innerHTML = "Commented Successfully!";
      setTimeout(function () {
        pop_up.style.display = "none";
      }, 5000);
    },
  });
}

function confirm_popUP(msg, callback) {
  let cancle = document.getElementById("cancleButton");
  let ok = document.getElementById("okButton");
  let content = document.querySelector(".content h5");
  content.innerHTML = msg;

  ok.addEventListener("click", pressOK);
  cancle.addEventListener("click", pressCancle);

  function pressOK() {
    callback(true);
    confirm_popup_container[0].style.display = "none";
  }
  function pressCancle() {
    callback(false);
    confirm_popup_container[0].style.display = "none";
  }
  confirm_popup_container[0].style.display = "block";
}

del_cmt.forEach((e) => {
  e.addEventListener("click", function () {
    let cmt_id = e.getAttribute("value");
    confirm_popUP("We want to make sure that you want to remove it?", function (result) {
      if (result) {
        $.ajax({
          url: ROOT + "comment/delete",
          method: "POST",
          data: { id: cmt_id },
          success: function (e) {
            $("#loadComments").html(e);

            confirm_popup_container[0].style.display = "none";
          },
        });
      } else {
        console.log("clicked cancle btn");
      }
    });
  });
});
