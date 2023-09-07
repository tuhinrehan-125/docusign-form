
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches


// Validation function for the first step
function validateStep1() {
    return true;

    // Check if at least one checkbox is selected
    var checkboxes = $("input[name='pornstar'], input[name='cam_model'], input[name='social_media_star'], input[name='magazine_model'], input[name='other']");
    if (!checkboxes.is(":checked")) {
        alert("Please select at least one option.");
        return false;
    }

    // Add other validations for the fields in step 1 here if needed
    var name = $("input[name='name']").val();
    var stageName = $("input[name='stage_name']").val();
    var email = $("input[name='email']").val();
    var phone = $("input[name='phone']").val();
    var nationality = $("input[name='nationality']").val();
    var age = $("input[name='age']").val();
    // var dob = $("input[name='dob']").val();
    var maritalStatus = $("select[name='marital_status']").val();

    // Check if any of the required fields are empty
    if (name === "" || stageName === "" || email === "" || phone === "" || nationality === "" || age === "" || maritalStatus === "") {
        alert("Please fill in all the required fields.");
        return false;
    }
    return true;
}

// Validation function for the second step
function validateStep2() {
    return true;
    
    var foreign_model = $("input[name='foreign_model']");
    if (!foreign_model.is(":checked")) {
        alert("Please select the foreign model option.");
        return false;
    }
    var medeled_before = $("input[name='medeled_before']");
    if (!medeled_before.is(":checked")) {
        alert("Please select you have modeled before or not.");
        return false;
    }
    var base_city = $("input[name='base_city']").val();
    if (base_city === "") {
        alert("Please write your base city.");
        return false;
    }
    var model_base_city = $("input[name='model_base_city']");
    if (!model_base_city.is(":checked")) {
        alert("Please select do you model in your base city or not.");
        return false;
    }
    var availability_base_city = $("input[name='availability_base_city']");
    if (!availability_base_city.is(":checked")) {
        alert("Please select availability in base city.");
        return false;
    }
    var travel_often = $("input[name='travel_often']");
    if (!travel_often.is(":checked")) {
        alert("Please select do you travel often or not.");
        return false;
    }
    var model_tour = $("input[name='model_tour']");
    if (!model_tour.is(":checked")) {
        alert("Please select the model tour option.");
        return false;
    }
    var adult_film_star = $("input[name='adult_film_star']");
    if (!adult_film_star.is(":checked")) {
        alert("Please select are you an adult film star or not.");
        return false;
    }

    return true;
}

// Validation function for the third step
function validateStep3() {
    var over_eighteen = $("input[name='over_eighteen']");
    if (!over_eighteen.is(":checked")) {
        alert("Please select you are 18 plus or not.");
        return false;
    }

    var age_proof_file = $("input[name='age_proof_file']");
    if (!(age_proof_file.files.length > 0)) {
        alert("Please submit the ID.");
        return false;
    }

    var back_of_id_picture = $("input[name='back_of_id_picture']");
    if (!(back_of_id_picture.files.length > 0)) {
        alert("Please submit the picture of the back of your ID.");
        return false;
    }

    return true;
}


$(".next").click(function () {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    // Validate the current step before proceeding
    var isValid = false;
    if ($("fieldset").index(current_fs) === 0) {
        isValid = validateStep1();
    } else if ($("fieldset").index(current_fs) === 1) {
        isValid = validateStep2();
    } else if ($("fieldset").index(current_fs) === 2) {
        isValid = validateStep3();
    }

    if (!isValid) {
        animating = false;
        return;
    }

    // Activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    // Show the next fieldset
    next_fs.show();
    // Hide the current fieldset with style
    current_fs.animate(
        { opacity: 0 },
        {
            step: function (now, mx) {
                // As the opacity of current_fs reduces to 0 - stored in "now"
                // 1. Scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                // 2. Bring next_fs from the right(50%)
                left = now * 50 + "%";
                // 3. Increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    transform: "scale(" + scale + ")",
                    position: "absolute",
                });
                next_fs.css({ left: left, opacity: opacity });
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            // This comes from the custom easing plugin
            easing: "easeInOutBack",
        }
    );
});


// function validateCurrentStep(current_fs) {
//     // Add validation logic for each step here
//     if ($("fieldset").index(current_fs) === 0) {
//         // Validation for the first step
//         var name = $("input[name='name']").val();
//         var stageName = $("input[name='stage_name']").val();
//         var email = $("input[name='email']").val();
//         var phone = $("input[name='phone']").val();
//         var nationality = $("input[name='nationality']").val();
//         var age = $("input[name='age']").val();
//         var dob = $("input[name='dob']").val();
//         var maritalStatus = $("select[name='marital_status']").val();

//         // Check if any of the required fields are empty
//         if (name === "" || stageName === "" || email === "" || phone === "" || nationality === "" || age === "" || dob === "" || maritalStatus === "") {
//             alert("Please fill in all the required fields.");
//             return false;
//         }
//     }
//     // Add validation for other steps as needed

//     return true;
// }

// $(".next").click(function () {
//     // Validate the current step before proceeding
//     var isValid = validateCurrentStep(current_fs);
//     if (!isValid) {
//         animating = false;
//         return;
//     }
// });


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
