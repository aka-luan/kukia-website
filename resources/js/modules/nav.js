function openNav() {
  document.getElementById('fs_menu').style.display = 'block';
  document.getElementById('open_menu').style.display = 'none';
}

function closeNav() {
  document.getElementById('fs_menu').style.display = 'none';
  document.getElementById('open_menu').style.display = 'block';
}

export { openNav, closeNav };
