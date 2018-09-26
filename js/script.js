let video = document.querySelector(".storybook-video");
let device = document.querySelector(".device-container");

function toggleVideo() {
  if (video.paused) {
    video.play()
    video.classList.toggle("display-none");
    device.style.transform = "rotate(90deg)";
  } else if (video.play) {
    video.pause()
    video.classList.toggle("display-none");
    device.style.transform = "rotate(0deg)";

  }
}