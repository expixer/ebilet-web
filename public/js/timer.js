
// === Timer === //
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

     let event = document.getElementById("start-date").innerText;
    console.log(event)

  const countDown = new Date(event).getTime(),
      x = setInterval(function() {

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("day").innerText = Math.floor(distance / (day)),
          document.getElementById("hour").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minute").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("second").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "Booking Ends!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
