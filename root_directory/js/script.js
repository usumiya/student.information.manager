// Example JavaScript code for Student Information Management project

// Function to validate registration form
function validateRegistrationForm() {
    var username = document.forms["registrationForm"]["username"].value;
    var password = document.forms["registrationForm"]["password"].value;
    var email = document.forms["registrationForm"]["email"].value;

    if (username == "") {
        alert("Username must be filled out");
        return false;
    }
    if (password == "") {
        alert("Password must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    return true;
}

// Example AJAX request function (not used in all pages)
function makeAjaxRequest(url, data, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                callback(xhr.responseText);
            } else {
                console.error('Error: ' + xhr.status);
            }
        }
    };
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(data));
}

// Example function to handle form submission with AJAX
function handleFormSubmission(event) {
    event.preventDefault();
    var formData = {
        username: document.getElementById('username').value,
        password: document.getElementById('password').value,
        email: document.getElementById('email').value
    };

    makeAjaxRequest('process_registration.php', formData, function(response) {
        console.log('Response from server:', response);
        // Additional logic to handle server response
    });
}

// Event listeners for form submission (example)
var registrationForm = document.getElementById('registrationForm');
if (registrationForm) {
    registrationForm.addEventListener('submit', handleFormSubmission);
}
