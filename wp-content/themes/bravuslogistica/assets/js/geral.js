window.onscroll = function() {scrollFunction()};
window.onload = function() { menuMobile(), dropdownMenuSet() };


//const nav = document.getElementById("nav");
var mMobile = document.getElementById("menuMobile").innerText;
var elNav = document.getElementById("nav");
var mlist = document.getElementById("mlist");


function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
   // mlist.style.setProperty('color','#fff');
    elNav.classList.add("scrollnav");

  } else {

    elNav.classList.remove("scrollnav");

  }
}

function menuMobile(){

    document.getElementById("menuMobile").onclick = function(){

        var iValor = document.getElementById("menuMobile").innerText;
        var element = document.querySelector('.menu-list');

        if(iValor == 'menu'){
            document.getElementById("menuMobile").innerText = "close";
            element.style.setProperty('display','flex');
            console.log(iValor);
        }
        if(iValor == 'close'){
            document.getElementById("menuMobile").innerText = "menu";
            document.getElementById("mlist").removeAttribute("style");
            console.log(iValor);
        }


    }
}

function headerBackgroundColor(){

  var header = document.querySelector("header");

  var onebg = setTimeout(function(){ header.className = 'corbgh-one'; }, 10000);
  var onebg = setTimeout(function(){ header.className = 'corbgh-two'; }, 20000);
  var onebg = setTimeout(function(){ header.className = 'corbgh-three'; }, 30000);
  var onebg = setTimeout(function(){ header.className = 'corbgh-four'; }, 40000);
  var onebgfive = setTimeout(function(){ header.className = 'corbgh-five'; }, 50000);

}

function dropdownMenuSet(){
  
    //var nomeId = document.getElementById("dropg").text;
    //var noemalizado = nomeId.toLowerCase();
    //console.log(noemalizado);

    document.getElementById("dropg").addEventListener("click", function(){
        var drop = document.getElementById("dropdown");
        var link = document.getElementById("dropg");
        var atributo = this.getAttribute('data-titulo-type');

        if(! atributo == '' && link.style.display == ''){
            drop.style.setProperty('display','block');
            link.style.setProperty('display','block');
        }else{
            drop.style.setProperty('display','none');
            link.removeAttribute('style');
        }
    });


  /* document.querySelector(".dropdown").addEventListener("mouseover", function(){
      var drop = document.getElementsByClassName("dropdown");
          drop.style.setProperty('display','none');
    });

    document.querySelector(".dropdown").addEventListener("mouseout", function(){
      var drop = document.getElementById("dropdown");
          drop.style.setProperty('display','block');
    }); */
}