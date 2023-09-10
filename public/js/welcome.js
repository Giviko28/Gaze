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

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    })
});

const hiddenElements = document.querySelectorAll('.custom-hidden, .custom-hidden-right');
hiddenElements.forEach((el) => observer.observe(el));

window.addEventListener('load', () => {
    animateCount(50, 1000);
   // Count from 0 to 50 in 1 second
});
