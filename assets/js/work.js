const firstimg = document.querySelector('.backimages')
var images = new Array(
    "assets/images/bens.jpg",
    "assets/images/toyota.jpg",
    "assets/images/lexux.jpg",
    "assets/images/wagon.jpg"
);
var len = images.length;
var i = 0;

function yes(){
    if (i > len-1) {
        i = 0;
    }
    firstimg.src = images[i];
    i++;
    setTimeout('yes()',3000)
}
const mobile = document.querySelector('.mobile-toggler')
const sidebar = document.querySelector('#sidebarMobile')
const yh = document.querySelector('#toggle')
mobile.addEventListener('click',()=>{
    sidebar.classList.toggle('show-nav')
    console.log(sidebar.classList)
    show.classList.toggle('fa-bars')
    show.classList.toggle('fa-times')
    yh.classList.toggle('topnav1')
})  