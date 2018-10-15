let missionVideo = document.querySelector(".missionbook-video");
let missiondevice = document.querySelector(".mission-device");

function toggleMissionVideo() {
  if (missionVideo.paused) {
    missionVideo.play()
    missionVideo.classList.toggle("display-none");
    missiondevice.style.transform = "rotate(90deg)";
  } else if (missionVideo.play) {
    missionVideo.pause()
    missionVideo.classList.toggle("display-none");
    missiondevice.style.transform = "rotate(0deg)";

  }
}

let storyVideo = document.querySelector(".storybook-video");
let storydevice = document.querySelector(".story-device");

function toggleStoryVideo() {
  if (storyVideo.paused) {
    storyVideo.play()
    storyVideo.classList.toggle("display-none");
    storydevice.style.transform = "rotate(90deg)";
  } else if (storyVideo.play) {
    storyVideo.pause()
    storyVideo.classList.toggle("display-none");
    storydevice.style.transform = "rotate(0deg)";

  }
}

let coloringVideo = document.querySelector(".coloringbook-video");
let coloringdevice = document.querySelector(".coloring-device");

function toggleColoringVideo() {
  if (coloringVideo.paused) {
    coloringVideo.play()
    coloringVideo.classList.toggle("display-none");
    coloringdevice.style.transform = "rotate(90deg)";
  } else if (coloringVideo.play) {
    coloringVideo.pause()
    coloringVideo.classList.toggle("display-none");
    coloringdevice.style.transform = "rotate(0deg)";

  }
}

function openMenu() {
  //Toggle between showing and hiding the menu
  var menu = document.querySelector("#mobile-display");
  menu.classList.toggle("menu-hidden");
  menu.classList.toggle("menu-z");
};

function removeTooltip() {
  var x = document.activeElement.id;
  var name = document.querySelector("#name-error");
  var email = document.querySelector("#email-error");
  var phone = document.querySelector("#phone-error");

  if (x === "name") {
    name.classList.add("display-none");
  }
  if (x === "email") {
    email.classList.add("display-none");
  }
  if (x === "phone") {
    phone.classList.add("display-none");
  }
}