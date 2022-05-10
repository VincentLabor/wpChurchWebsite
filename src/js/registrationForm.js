
//This is the checkbox that certifies that the user agrees to all the conditions.
const agreement = document.getElementById("agreeToParticipate");
//This is the submit button
const submitBtn = document.getElementById("regSubmitBtn");
const errorTxt = document.getElementById("errorText");
const agree2Part = document.getElementById("agreeToParticipate");

submitBtn.onclick = ()=>{
	console.log("This button has been clicked.");

    if(document.querySelector('#agreeToParticipate').checked){
        window.open("https://givebutter.com/PFVLSZ", '_blank');
        //http://localhost/wordpress/conferences/thank-you-for-registering/
    } else {
        //This has to be edited later for the text to be red. 
        errorTxt.innerHTML = "Please agree before moving forward."
    }
    // agreement.requirement = true;
};

