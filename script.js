

const navItems = document.querySelector('.sidebar');
const openNavBtn = document.querySelector('.btn_nav');
const closeNavBtn = document.querySelector('.btn_close');


const openNav = () => {
    navItems.style.display = 'flex';
    
}

openNavBtn.addEventListener('click', openNav);




const closeNav = () => {
    navItems.style.display = 'none'; 
    
    

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