;(function () {
  const menuToggle = document.querySelector('.menu-toggle')
  menuToggle.onclick = function (e) {
    const body = document.querySelector('body')
    body.classList.toggle('hide-sidebar')
  }
})()

function addOneSecond(hours, minutes, seconds) {
  const d = new Date()
  d.setHours(parseInt(hours))
  d.setMinutes(parseInt(minutes))
  d.setSeconds(parseInt(seconds) + 1)

  return `${h}:${m}:${s}`
}

function activeClock() {
  const activeClock = document.querySelector('[active-clock]')
  if (!activeClock) return
}

activeClock()
