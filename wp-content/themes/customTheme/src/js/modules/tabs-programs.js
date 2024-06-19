document.addEventListener('DOMContentLoaded', () => {
    const balancePointer = document.querySelector('.tabs__balance-pointer');
    const balanceLinks = document.querySelectorAll('.tabs__balance ul li a');
    const programLinks = document.querySelectorAll('.tabs__programs ul li a');
    const rapidHeading = document.querySelector('.tab__heading-rapid');
    const twoStepHeading = document.querySelector('.tab__heading-2step');

    const positionPointer = (element) => {
        const rect = element.getBoundingClientRect();
        const ulRect = element.parentElement.parentElement.getBoundingClientRect();
        const pointerLeft = rect.left - ulRect.left + rect.width / 2 - balancePointer.offsetWidth / 2;
        balancePointer.style.left = `${pointerLeft}px`;
    };

    const setCurrentLink = (element, links) => {
        links.forEach(link => link.classList.remove('is-current'));
        element.classList.add('is-current');
    };

    const setCurrentProgram = (element) => {
        setCurrentLink(element, programLinks);
        if (element.textContent.trim() === 'Rapid') {
            rapidHeading.classList.add('is-visible');
            twoStepHeading.classList.remove('is-visible');
        } else if (element.textContent.trim() === '2-Step') {
            rapidHeading.classList.remove('is-visible');
            twoStepHeading.classList.add('is-visible');
        }
    };

    if (balanceLinks.length > 0) {
        positionPointer(balanceLinks[0]);
        setCurrentLink(balanceLinks[0], balanceLinks);
    }

    balanceLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            positionPointer(link);
            setCurrentLink(link, balanceLinks);
        });
    });

    programLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            setCurrentProgram(link);
        });
    });
});
