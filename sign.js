signupButton.addEventListener("click", function() {
    // Show the signup form
    signupFormWrapper.style.display = "flex";
  });
  
  // Close the signup form when the close button is clicked
  closeButton.addEventListener("click", function() {
    signupFormWrapper.style.display = "none";
  });
  
  // Submit the signup form when the submit button is clicked
  signupForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
    
    // Get the form data and log it to the console
    const formData = new FormData(signupForm);
    console.log(Object.fromEntries(formData.entries()));
    
    // // Close the signup form
    // signupFormWrapper.style.display = "none";
  });
  
  function submitForm() {
    // Get form data
    const name = document.getElementById("name").value;
    const age = document.getElementById("age").value;
    const gender = document.getElementById("gender").value;
    const address = document.getElementById("address").value;
    const city = document.getElementById("city").value;
  
    // Create AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save_form.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  
    // Send form data as URL-encoded string
    const data = `name=${name}&age=${age}&gender=${gender}&address=${address}&city=${city}`;
    xhr.send(data);
  
    // Handle response
    xhr.onload = function () {
      if (xhr.status === 200) {
        alert(xhr.responseText);
        // Reset form
        document.getElementById("signupForm").reset();
        // Close signup form
        closeSignupForm();
      } else {
        alert("Error saving form data");
      }
    };
  }