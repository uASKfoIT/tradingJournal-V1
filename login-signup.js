//--Banner Image
var image_url = "https://wallpapers.com/images/hd/4k-laptop-dream-desk-27xhabcycspkqeg3.jpg";
var banner_image = document.getElementById("banner-image");
banner_image.src = image_url;
   
//--Store Register Input
function pushData(temp_username, temp_password) {
    return fetch("insertUserData.php", {
        method: "POST",
        body: JSON.stringify({
            username: temp_username,
            password: temp_password
        }),
        headers: { "Content-Type": "application/json" }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network error');
        }
        return response.json(); // Convert response to JSON
    })
    .then(data => {
        if(data.success == false){
            alert("Username Taken");
            alert(data.error);
            return false;
        }
        console.log("User data inserted successfully:", data);
        return true;
    })
    .catch(error =>{ 
        console.error('Error:', error);
        alert("Unexpected error occured");
        return false;
    });
}

//--Retreive Register Input
async function retreiveRegisterInfo(){
    const register_username = document.getElementById("register-username").value.trim();
    const register_password = document.getElementById("register-password").value.trim();
    const register_confirmPassword = document.getElementById("register-confirmPassword").value.trim();
    
    if(register_username && register_password && register_confirmPassword){
        if (register_password == register_confirmPassword){
            const status = await pushData(register_username, register_password);
            console.log("Register Status: ", status);
            return status;
        }else{
            alert("Password do not match");
            return false;
        }
    }else{
        alert("Invalid input: All fields are required.");
        return false;
    }
}

//--Validate User
function validateUser(temp_username, temp_password){
    return fetch("validateUser.php", {
        method: "POST",
        body: JSON.stringify({
            username: temp_username,
            password: temp_password
        }),
        headers: {"Content-Type": "application/json"}
    })
    .then(response => {
        if(!response.ok){
            throw new Error('Network error');
        }
        return response.json()
    })
    .then(data => {
        if(data.success === false){
            alert("Incorrect Username or Password");
            return false;
        }
        console.log("Log In Successful");
        return true;
    })
    .catch(error =>{ 
        console.error('Error:', error);
        alert("Unexpected error occured");
        return false;
    });
}

//--Retreive Login Input
async function retreiveLoginInfo() {
    const login_username = document.getElementById("login-username").value.trim();
    const login_password = document.getElementById("login-password").value.trim();

    if(login_username && login_password){
        const status = await validateUser(login_username, login_password);
        console.log("Login Status: ", status);
        return status;
    }else{
        alert("Invalid input: All fields are required.");
        return false;
    }
}

//--Form Submission 
const login_formName = "login-form";
const register_formName = "register-form";

document.addEventListener("DOMContentLoaded", function() {
    const submission_buttons = document.querySelectorAll(".hidden-submit");

    submission_buttons.forEach(button => {
        // Get parent
        const parent_button = button.closest(".general-button__style1-gb");

        if (parent_button) {
            // Add Event Listener to parent
            parent_button.addEventListener("click", async function(e) {
                e.preventDefault();

                // Get form for context
                const form = button.closest("form");
                const page = form?.id || "unknown form";                

                if(page === login_formName){
                    var validateInfo =  await retreiveLoginInfo();
                    if(validateInfo){
                        form.submit();
                    }
                }else if(page === register_formName){
                    var checkinfo = await retreiveRegisterInfo();
                    if(checkinfo){
                        console.log("Passwords Math");
                        form.submit();
                    }
                }else{
                    console.log("Error");
                }
            });
        }
    });
});














