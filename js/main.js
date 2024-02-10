

const navItems = document.querySelector('.nav__items');
const openNavBtn = document.querySelector('#open__nav-btn');
const closeNavBtn = document.querySelector('#close__nav-btn');


const openNav = () => {
    navItems.style.display = 'flex';
    openNavBtn.style.display = 'none'
    closeNavBtn.style.display='inline-block';
}

openNavBtn.addEventListener('click', openNav);




const closeNav = () => {
    navItems.style.display = 'none'
    openNavBtn.style.display = 'inline-block'
    closeNavBtn.style.display='none';

}

closeNavBtn.addEventListener('click',closeNav );




const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show__sidebar-btn');
const hidesidebarBtn = document.querySelector('#hide__sidebar-btn');



const showSidebar = () => {
    sidebar.style.left = '0'
    showSidebarBtn.style.display = 'none' ;
    hidesidebarBtn.style.display ='inline-block';
}


const hideSidebar = () => {
    sidebar.style.left = '-100%';
    showSidebarBtn.style.display = 'inline-block';
    hidesidebarBtn.style.display = 'none';
}


showSidebarBtn.addEventListener('click', showSidebar);

hidesidebarBtn.addEventListener('click', hideSidebar);