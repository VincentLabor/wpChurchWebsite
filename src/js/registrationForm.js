
//This is the checkbox that certifies that the user agrees to all the conditions.
const agreement = document.getElementById("agreeToParticipate");
//This is the submit button
const submitBtn = document.getElementById("regSubmitBtn");
const errorTxt = document.getElementById("errorText");
const agree2Part = document.getElementById("agreeToParticipate");

// let $form = $('form#test-form');

let form = document.getElementById('sheetdb-form');

form.addEventListener("submit", e=>{
    e.preventDefault();
    fetch(form.action, {
        method: "POST",
        body: new FormData(document.getElementById("sheetdb-form")),
    }).then(
        response => response.json()
    ).then((html) => {
        window.open('d.html','_blank')
    });
})

// submitBtn.onclick = (e)=>{
// 	console.log("This button has been clicked.");
//     var jqxhr = $.ajax({
//         url: url,
//         method: "GET",
//         dataType: "json",
//         data: $form.serializeObject()
//     })
    // fetch('https://script.google.com/macros/s/AKfycbwsL-CYYP_V4vqTznrfQIZ2Gqbzh0w_TvamVgWi4pazgd_TClv9l8ry_bkvSJFMy4El/exec')
    // .then((response)=>response.json)
    // .then((data)=>console.log(data));

    if(document.querySelector('#agreeToParticipate').checked){
        window.open("https://givebutter.com/PFVLSZ", '_blank');
        //http://localhost/wordpress/conferences/thank-you-for-registering/
    } else {
        //This has to be edited later for the text to be red. 
        errorTxt.innerHTML = "Please agree before moving forward."
    }
    // agreement.requirement = true;


