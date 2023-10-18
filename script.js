document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents the default form submission
  
    // Get the values of the username and password fields
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    // Perform your login logic here
    // For demonstration purposes, let's just log the values to the console
    console.log('Username:', username);
    console.log('Password:', password);
  
    // You can add further logic here like sending a request to the server for authentication
  });
  