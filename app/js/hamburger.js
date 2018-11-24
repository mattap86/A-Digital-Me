//Sets the width of the element with id="sidebar" to 200px.
function openNav() {
    document.getElementById('sideBar').style.width = '200px';
}

//Adds event listener on click of hamburger icon to open sidebar.
document.getElementById('hamburger').addEventListener('click', function() {
    openNav()
})

//Sets the width of the element with id="sidebar" to 0.
function closeNav() {
    document.getElementById('sideBar').style.width = '0';
}

//Adds event listener on click of X in sidebar to close sidebar.
document.getElementById('closeSideNav').addEventListener('click', function() {
    closeNav()
})
