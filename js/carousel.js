$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel()

    // Enable Carousel Indicators
    $(".projectOne").click(function(){
        $("#myCarousel").carousel(0)
    })
    $(".projectTwo").click(function(){
        $("#myCarousel").carousel(1)
    })
    $(".projectThree").click(function(){
        $("#myCarousel").carousel(2)
    })
    $(".projectFour").click(function(){
        $("#myCarousel").carousel(3)
    })
    $(".projectFive").click(function(){
        $("#myCarousel").carousel(4)
    })

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev")
    })
    $(".right").click(function(){
        $("#myCarousel").carousel("next")
    })
})