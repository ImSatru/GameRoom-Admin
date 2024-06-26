const hourElement = document.getElementById("page-hour");

function updateClock() {
  const currentTime = new Date();
  const formattedTime = currentTime.toLocaleTimeString([], {
    hour: "2-digit",
    minute: "2-digit",
    hour12: false, 
  });
  hourElement.textContent = formattedTime;
}

updateClock();
setInterval(updateClock, 1000);