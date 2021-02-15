const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";
    
    current += 1;

    var name = document.getElementById("prefix").value + " " + document.getElementById("firstname").value + " " + 
    document.getElementById("lastname").value;//get first name
    disp_name.innerHTML = name;//assign disp_name to be shown in html

    var phoneNumber = document.getElementById("phonenumber").value;
    disp_phone.innerHTML = phoneNumber;

    var address = document.getElementById("address").value + ", " + document.getElementById("city").value + ", " + 
    document.getElementById("state").value + ", " + document.getElementById("zipcode").value;//get address
    disp_address.innerHTML = address;

    var check_in = document.getElementById("check-in").value;
    disp_check_in.innerHTML = check_in;
    var check_out = document.getElementById("check-out").value;
    disp_check_out.innerHTML = check_out;
    var adults = document.getElementById("adults").value;
    disp_adults.innerHTML = adults;
    var children = document.getElementById("children").value;//children
    disp_children.innerHTML = children;
    //ROOM
    if(document.getElementById("room1").checked){
        var room = document.getElementById("room1").value;
        price = 10000.00;
        disp_room.innerHTML = room;
    }
    if(document.getElementById("room2").checked){
        var room = document.getElementById("room2").value;
        price = 20000.00;
        disp_room.innerHTML = room;
    }
    if(document.getElementById("room3").checked){
        var room = document.getElementById("room3").value;
        price = 30000.00;
        disp_room.innerHTML = room;
    }
    //ADD ON
    if(document.getElementById("addon1").checked){
        var addon = document.getElementById("addon1").value;
        priceAdd = 4480.00;
        disp_addon.innerHTML = addon;
    }
    if(document.getElementById("addon2").checked){
        var addon = document.getElementById("addon2").value;
        priceAdd = 1800.00;
        disp_addon.innerHTML = addon;
    }
    if(document.getElementById("addon3").checked){
        var addon = document.getElementById("addon3").value;
        priceAdd = 6800.00;
        disp_addon.innerHTML = addon;
    }
    totalPrice = price + priceAdd;
    disp_price.innerHTML = totalPrice;

    var promo = document.getElementById("promo").value
    if(promo=="none"){discVal=0.10}
    if(promo=="newyearpromo"){discVal=0.05}
    if(promo=="valentinespromo"){discVal=0.15}
    if(promo=="SummerPromo"){discVal=0.20}
    if(promo=="winterpromo"){discVal=0.30}
    if(promo=="christmaspromo"){discVal=0.25}
    disp_promo.innerHTML = discVal;
    
    totalAmtDue = totalPrice - (totalPrice*discVal);
    disp_totalAmtDue.innerHTML = Number(totalAmtDue).toFixed(2);
    

    document.getElementById("submit").style.visibility = "visible";
});