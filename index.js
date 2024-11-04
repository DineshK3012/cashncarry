// functions to open side menu bar 
function showMenu() {
    var menu = document.getElementById('menu-bar');
    menu.classList.remove("menu-open");

    var body = document.querySelector('body');
    body.classList.add('no-scroll-menu');
}

// functions to close side menu bar 
function hideMenu() {
    var menu = document.getElementById('menu-bar');
    menu.classList.add("menu-open");

    var body = document.querySelector('body');
    body.classList.remove('no-scroll-menu');
}

//function to open dropdown login/signup box
function dropdownMenu() {
    var ddMenu = document.getElementById('dd-Menu');
    ddMenu.classList.toggle("dropdown-Toggle");
}

//function to display the Sliding cart 
function cartSlide() {
    updateCart();

    var slidingcart = document.getElementById('sliding-cart');
    slidingcart.classList.toggle("cart-slide-Toggle");

    var modalBg = document.querySelector('#modal-bg');
    modalBg.classList.toggle('modal-bg');

    var body = document.querySelector('body');
    body.classList.toggle('no-scroll');

    hideMenu();
}

// Script for login/signup Form 
function showlsForm() {
    var lscontainer = document.querySelector('.ls-container');
    lscontainer.classList.toggle("ls-container-Toggle");

    var ddMenu = document.getElementById('dd-Menu');
    ddMenu.classList.remove("dropdown-Toggle");

    var modalBg = document.querySelector('#modal-bg');
    modalBg.classList.toggle('modal-bg');

    var body = document.querySelector('body');
    body.classList.toggle('no-scroll');

    hideMenu();
}

let signinBtn = document.querySelector('.signinBtn');
let signupBtn = document.querySelector('.signupBtn');
let formBox = document.querySelector('.formBox');
let body = document.querySelector('body');

//function to switch from signin to signup
signupBtn.onclick = function () {
    formBox.classList.add('active')
    body.classList.add('active')
}

//function to switch from signup to signin
signinBtn.onclick = function () {
    formBox.classList.remove('active')
    body.classList.remove('active')
}

//function to show product specification
function showProductSpecs() {
    var productSpecs = document.querySelector('.product-specs');
    productSpecs.classList.toggle("product-specs-toggle");

    var modalBg = document.querySelector('#modal-bg');
    modalBg.classList.toggle('modal-bg');

    var body = document.querySelector('body');
    body.classList.toggle('no-scroll');
}

//Product gallery images scripts
let productImg = document.getElementById('prdct-img');
let otherImgs = document.getElementsByClassName('other-img');

otherImgs[0].onclick = function () {
    productImg.src = otherImgs[0].src;
}

otherImgs[1].onclick = function () {
    productImg.src = otherImgs[1].src;
}

otherImgs[2].onclick = function () {
    productImg.src = otherImgs[2].src;
}

otherImgs[3].onclick = function () {
    productImg.src = otherImgs[3].src;
}

//function to show user profile
function showProfile() {
    var profileContainer = document.querySelector('.profile-container');
    profileContainer.classList.toggle("profile-toggle");

    var modalBg = document.querySelector('#modal-bg');
    modalBg.classList.toggle('modal-bg');

    var body = document.querySelector('body');
    body.classList.toggle('no-scroll');

    hideMenu();
}

/************************* Cart functions *************************/

// function to update cart amount
function updateCart() {
    let itemPriceDiv = document.querySelectorAll('.cart-slide .cart-items .cart-itm .cart-itm-details .cart-itm-price')

    itemPriceDiv.forEach(element => {
        let itemqn = parseInt(element.querySelector('.item-qn input').value);
        // console.log(itemqn);

        let itemp = parseInt(element.querySelector('.item-p span').innerHTML);
        // console.log(itemp);

        let itemTp = element.querySelector('.item-tp span');
        // console.log(itemTp);
        itemTp.innerHTML = itemqn * itemp;

        // console.log("total Price");
        // console.log(itemTp.innerHTML);
    });

    let itemTp = document.querySelectorAll('.cart-slide .cart-items .cart-itm .cart-itm-details .cart-itm-price .item-tp span')

    // console.log(itemTp);
    let sum = 0;

    //calculating the total price
    itemTp.forEach(element => {
        let p = parseInt(element.innerHTML);
        sum += p;
    });

    // console.log(sum);
    let cartAmount = document.querySelector('.cart-slide .bottom .proceed-btn > div span');
    cartAmount.innerHTML = sum;
}

//function to increase quantity of a item in cart
function increaseQn(e) {
    let input = e.parentElement.querySelector('input');
    // console.log(input);

    let inputVal = input.value;
    // console.log(inputVal);
    inputVal++;

    input.value = inputVal;
}

//function to decrease quantity of a item in cart
function decreaseQn(e) {
    let input = e.parentElement.querySelector('input');
    // console.log(input);

    let inputVal = input.value;
    // console.log(inputVal);

    if (inputVal > 0) {
        inputVal--;
    }

    input.value = inputVal;
}

// Other page js 
function showMM() {
    let miniMenu = document.querySelector('.listC');
    miniMenu.classList.toggle('listC-toggle');
}

//function for contact
function contactFunc() {
    let contactContainer = document.querySelector('.container');
    contactContainer.classList.remove('hide');

    let map = document.querySelector('.mp-box');
    map.classList.remove('hide');

    let rnr = document.querySelector('.rnr-container');
    rnr.classList.add('hide');
}

//function for contact
function rnrFunc() {
    let rnr = document.querySelector('.rnr-container');
    rnr.classList.remove('hide');

    let contactContainer = document.querySelector('.container');
    contactContainer.classList.add('hide');

    let map = document.querySelector('.mp-box');
    map.classList.add('hide');
}