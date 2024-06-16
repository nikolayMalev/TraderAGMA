document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.accordion__btn');

    accordionButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            const accordionSection = this.closest('.accordion__section');
            const accordionBody = accordionSection.querySelector('.accordion__body');

            accordionSection.classList.toggle('is-current');

            if (accordionSection.classList.contains('is-current')) {
                accordionBody.style.maxHeight = accordionBody.scrollHeight + 'px';
            } else {
                accordionBody.style.maxHeight = null;
            }
        });
    });
});
