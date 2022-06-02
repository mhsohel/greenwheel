 // Sticky Header
 window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    var header2 = document.getElementById("myHeader2");
    var sticky2 = header.offsetTop;


    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        if (window.pageYOffset > sticky2) {
            header2.classList.add("sticky2");
        } else {
            header2.classList.remove("sticky2");
        }
    }

    // search-top-js
  $(document).ready(function() {

    $(".fa-search").click(function() {
       $(".search-box").toggle();
       $("input[type='text']").focus();
     });

 });