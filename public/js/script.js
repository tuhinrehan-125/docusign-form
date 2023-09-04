
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});


// Image Upload
document.addEventListener("DOMContentLoaded", function() {
    const imageInput = document.getElementById("image-input");
    const imagePreview = document.getElementById("image-preview");

    imageInput.addEventListener("change", function() {
        const files = Array.from(imageInput.files);

        if (files.length > 30 || files.length < 10) {
            alert("Please upload between 10 and 30 images.");
            imageInput.value = "";
            return;
        }

        imagePreview.innerHTML = "";

        files.forEach(file => {
            const reader = new FileReader();
            const imagePreviewItem = document.createElement("div");
            imagePreviewItem.classList.add("image-preview-item");

            reader.onload = function(event) {
                const image = new Image();
                image.src = event.target.result;
                imagePreviewItem.appendChild(image);
            };

            reader.readAsDataURL(file);
            imagePreview.appendChild(imagePreviewItem);
        });
    });
});
// End Image Upload

// Signature
// document.addEventListener("DOMContentLoaded", function() {
//     const canvas = document.getElementById("signature-canvas");
//     const clearButton = document.getElementById("clear-button");
//     const context = canvas.getContext("2d");
//     let isDrawing = false;

//     canvas.width = 300;
//     canvas.height = 150;

//     context.strokeStyle = "#000";
//     context.lineWidth = 2;

//     // Function to get the correct event coordinates
//     function getCoordinates(e) {
//         if (e.type === "touchstart" || e.type === "touchmove" || e.type === "touchend") {
//             const touch = e.touches[0] || e.changedTouches[0];
//             return { x: touch.clientX - canvas.getBoundingClientRect().left, y: touch.clientY - canvas.getBoundingClientRect().top };
//         } else {
//             return { x: e.clientX - canvas.getBoundingClientRect().left, y: e.clientY - canvas.getBoundingClientRect().top };
//         }
//     }

//     canvas.addEventListener("mousedown", startDrawing);
//     canvas.addEventListener("mousemove", draw);
//     canvas.addEventListener("mouseup", stopDrawing);
//     canvas.addEventListener("mouseout", stopDrawing);

//     canvas.addEventListener("touchstart", startDrawing);
//     canvas.addEventListener("touchmove", draw);
//     canvas.addEventListener("touchend", stopDrawing);

//     clearButton.addEventListener("click", clearCanvas);

//     function startDrawing(e) {
//         isDrawing = true;
//         const coordinates = getCoordinates(e);
//         context.beginPath();
//         context.moveTo(coordinates.x, coordinates.y);
//     }

//     function draw(e) {
//         if (!isDrawing) return;
//         e.preventDefault();
//         const coordinates = getCoordinates(e);
//         context.lineTo(coordinates.x, coordinates.y);
//         context.stroke();
//     }

//     function stopDrawing() {
//         isDrawing = false;
//     }

//     function clearCanvas() {
//         context.clearRect(0, 0, canvas.width, canvas.height);
//     }
// });

// document.addEventListener("DOMContentLoaded", function () {
//     const canvas = document.getElementById("signature-canvas");
//     const clearButton = document.getElementById("clear-button");
//     const signaturePad = new SignaturePad(canvas);

//     clearButton.addEventListener("click", function () {
//         signaturePad.clear();
//     });
// });
$(document).ready(function () {
    const canvas = document.getElementById("signature-canvas");
    const clearButton = document.getElementById("clear-button");
    const signaturePad = new SignaturePad(canvas);

    clearButton.addEventListener("click", function () {
        signaturePad.clear();
    });
});
