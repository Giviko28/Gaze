function animateCount(target, duration) {
    let start = 0;
    const step = 1;
    const interval = Math.floor(duration / (target / step));
    const countElement = document.getElementById('count');

    const countInterval = setInterval(() => {
        countElement.textContent = start;
        start += step;

        if (start > target) {
            countElement.textContent = target;
            clearInterval(countInterval);
            countElement.textContent = countElement.textContent + '+'
        }
    }, interval);

}

window.addEventListener('load', () => {
    animateCount(50, 1000);
   // Count from 0 to 50 in 1 second
});
