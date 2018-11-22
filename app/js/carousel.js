let carousel = $('.carousel')
let currdeg  = 0

//event listeners on prev and next buttons to rotate on click
$('.next').on('click', {
    click: 'next'
}, rotate)

$('.prev').on('click',
    { click: 'prev'
    }, rotate)

/**
 * Rotates the circle that the images are appended on to -60degs to showq the next image in the carousel or +60degs
 * to show the previous one
 *
 * @param button is the button clicked to trigger a slide change
 */
function rotate(button){
    if (button.data.click === 'next') {
        currdeg -= 60
    }

    if (button.data.click === 'prev') {
        currdeg += 60
    }

    carousel.css({
        'transform': 'rotateY('+currdeg+'deg)'
    })
}
