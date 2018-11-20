//Brings the nav bar in from the right side of the viewport on clicking the hamburger icon.
function openNav() {
    document.getElementById('sideBar').style.width = '200px';
}

document.getElementById('hamburger').addEventListener('click', function() {
    openNav()
})

//Closes the nav bar on clicking x.
function closeNav() {
    document.getElementById('sideBar').style.width = '0';
}

document.getElementById('closeSideNav').addEventListener('click', function() {
    closeNav()
})
