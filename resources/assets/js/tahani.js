/*===== SHOW NAVBAR  =====*/
$(document).on('click', '#header-toggle', function () {
    const sidebar = $('#nav-bar'),
        bodypd = $('#body-pd'),
        toggle = $('#header-toggle');

    sidebar.toggleClass('collapsed');
    bodypd.toggleClass('body-pd');

    document.cookie = "sidebar-collapsed=" + sidebar.hasClass('show') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
    document.cookie = "sidebar-collapsed=" + bodypd.hasClass('body-pd') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
    document.cookie = "sidebar-collapsed=" + toggle.hasClass('open') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
});


/*===== USER TEMPLATE NAVBAR  =====*/

// const hamBurger = document.querySelector(".toggle-btn");

// hamBurger.addEventListener("click", function () {
//     alert('hh');
//   document.querySelector("#sidebar").classList.toggle("expand");
// });



// $(document).on('click', '.toggle-btn', function () {
//     // alert('hi'); 
//     document.querySelector("#sidebar").classList.toggle("expand");
// });


let list = document.querySelectorAll(".user-navigation li");
function activeLink(){
    list.forEach((item) => {
        item.classList.remove("hoverred");

    });
    this.classList.add("hoverred");
}
list.forEach ((item) => item.addEventListener("mouseover",activeLink ));

// user menu toggle
let userToggle = document.querySelector(".user-toggle");
let userNavigation = document.querySelector(".user-navigation");
let userMain =  document.querySelector(".user-main");

// userToggle.onclick = function(){
//     alert('hi');
//     userNavigation.classList.toggle('active-menu');
//     userMain.classList.toggle('active-menu');
// }


$(document).on('click', '.user-toggle', function () {
    // alert('hi'); 
    userNavigation.classList.toggle('active-menu');
    userMain.classList.toggle('active-menu');

});
