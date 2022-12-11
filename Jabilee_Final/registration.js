var myInput = document.getElementById("pw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
const togglePassword = document.querySelector("#togglePassword");
const togglePassword2 = document.querySelector("#togglePassword2");
const pw = document.querySelector("#pw");
const confirmpw = document.querySelector("#confirmpw");

myInput.onfocus = function() {
    document.getElementById("validmessage").style.display = "block";
}
                
myInput.onblur = function() {
    document.getElementById("validmessage").style.display = "none";
}
                
myInput.onkeyup = function() {
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.remove("pwinvalid");
        letter.classList.add("pwvalid");
    } 
    else {
        letter.classList.remove("pwvalid");
        letter.classList.add("pwinvalid");
    }
                  
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.remove("pwinvalid");
        capital.classList.add("pwvalid");
    } 
    else {
        capital.classList.remove("pwvalid");
        capital.classList.add("pwinvalid");
    }

    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
        number.classList.remove("pwinvalid");
        number.classList.add("pwvalid");
    } 
    else {
        number.classList.remove("pwvalid");
        number.classList.add("pwinvalid");
    }
        if(myInput.value.length >= 8) {
        length.classList.remove("pwinvalid");
        length.classList.add("pwvalid");
        } 
        else {
            length.classList.remove("pwvalid");
            length.classList.add("pwinvalid");
        }
    }
    togglePassword.addEventListener("click", function () {
        const type = pw.getAttribute("type") === "password" ? "text" : "password";
        pw.setAttribute("type", type);
        
        this.classList.toggle("bi-eye");
    });

    togglePassword2.addEventListener("click", function () {
        const type = confirmpw.getAttribute("type") === "password" ? "text" : "password";
        confirmpw.setAttribute("type", type);
        
        this.classList.toggle("bi-eye");
    });
    
    var pwcheck = function() {
        if (document.getElementById('pw').value === document.getElementById('confirmpw').value) {
            document.getElementById('message').style.color = 'rgb(8, 255, 8)';
            document.getElementById('message').innerHTML = 'Password Matched';
        } 
        else if (document.getElementById('confirmpw').value === document.getElementById('pw').value) {
            document.getElementById('message').style.color = 'rgb(8, 255, 8)';
            document.getElementById('message').innerHTML = 'Password Matched';
        }
        else {
            document.getElementById('message').style.color = 'rgb(255, 0, 0)';
            document.getElementById('message').innerHTML = 'Password do not match';
        }
    }

