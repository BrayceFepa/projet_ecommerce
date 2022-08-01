let sideBar = document.querySelector('.sidebar');
document.querySelector('#menu-btn').onclick = () => {
    sideBar.classList.toggle('active');
}

document.querySelector('#side-bar').onclick = () => {
    sideBar.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

window.onscroll = () => {
    sideBar.classList.remove('active');
    searchForm.classList.remove('active');
    accordion.classList.remove('active');
}