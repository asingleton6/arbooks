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