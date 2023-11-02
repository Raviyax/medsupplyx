$('li').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
  });


  $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".header").addClass("changeHeader");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header").removeClass("changeHeader");
        }
    });
});



function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  
  function openForm1() {
    document.getElementById("myForm1").style.display = "block";
  }
  
  function closeForm1() {
    document.getElementById("myForm1").style.display = "none";
  }
  