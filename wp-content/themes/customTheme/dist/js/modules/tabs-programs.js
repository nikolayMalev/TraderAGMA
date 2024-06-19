document.addEventListener('DOMContentLoaded', function () {
  var balancePointer = document.querySelector('.tabs__balance-pointer');
  var balanceLinks = document.querySelectorAll('.tabs__balance ul li a');
  var programLinks = document.querySelectorAll('.tabs__programs ul li a');
  var rapidHeading = document.querySelector('.tab__heading-rapid');
  var twoStepHeading = document.querySelector('.tab__heading-2step');
  var positionPointer = function positionPointer(element) {
    var rect = element.getBoundingClientRect();
    var ulRect = element.parentElement.parentElement.getBoundingClientRect();
    var pointerLeft = rect.left - ulRect.left + rect.width / 2 - balancePointer.offsetWidth / 2;
    balancePointer.style.left = "".concat(pointerLeft, "px");
  };
  var setCurrentLink = function setCurrentLink(element, links) {
    links.forEach(function (link) {
      return link.classList.remove('is-current');
    });
    element.classList.add('is-current');
  };
  var setCurrentProgram = function setCurrentProgram(element) {
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
  balanceLinks.forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      positionPointer(link);
      setCurrentLink(link, balanceLinks);
    });
  });
  programLinks.forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      setCurrentProgram(link);
    });
  });
});
//# sourceMappingURL=tabs-programs.js.map