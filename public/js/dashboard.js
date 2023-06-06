const navLinks = document.querySelectorAll('.nav-link');
const contents = document.querySelectorAll('.content');

navLinks.forEach((link) => {
  link.addEventListener('click', () => {
    const target = link.getAttribute('data-target');
    contents.forEach((content) => {
      content.style.display = 'none';
    });
    document.getElementById(`content-${target}`).style.display = 'block';
  });
});