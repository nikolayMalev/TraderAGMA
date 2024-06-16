document.addEventListener('DOMContentLoaded', function () {
  var accordionButtons = document.querySelectorAll('.accordion__btn');
  accordionButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
      event.preventDefault();
      var accordionSection = this.closest('.accordion__section');
      var accordionBody = accordionSection.querySelector('.accordion__body');
      accordionSection.classList.toggle('is-current');
      if (accordionSection.classList.contains('is-current')) {
        accordionBody.style.maxHeight = accordionBody.scrollHeight + 'px';
      } else {
        accordionBody.style.maxHeight = null;
      }
    });
  });
});
//# sourceMappingURL=accordion-criteria.js.map