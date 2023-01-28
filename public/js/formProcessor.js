
const btn = document.querySelector('#register');
const form = document.querySelector('#register_form');
const alert_success = document.querySelector('#alert-success');
const alert_danger = document.querySelector('#alert-danger');

btn.addEventListener('click', (e) => {
   e.preventDefault();
   register();
});

const register = async () => {
   try {
      // let response = await fetch('http://squash-it.com.ng/create-reservation', {
      let response = await fetch('http://localhost:8080/create-reservation', {
         
         method: 'POST',
         body: new FormData(form),
      });
      const result = await response.json();

      console.log(result)

      // Check for result.status to know what is returned,
      // and handle appropriately
      if(result.status === 200) {
        alert_danger.style.display = 'none'; // First clear the error alert if there was any
       
        alert_success.style.display = 'block';
        alert_success.innerHTML += `<p>${result.message}</p>`;

        form.reset();
       

        // alert_success.style.display = 'none';

      } else if(result.status === 400) {

        // First set the container to an emty string. 
        // This will prevent concatenation of the errors
        // So each time the function runs, it will overwrite the existing errors
        alert_danger.innerHTML = '';

        // Get the message property of the returned message
        let errors = result.message;

        // console.log(errors)
         
        // Loop over the object and covert to array
         let errorsOutput = Object.keys(errors);
         
         // Loop over the returned array from above
         errorsOutput.forEach((err) => {
            console.log(errors[err]);

            alert_danger.style.display = 'block';
            alert_danger.innerHTML += `<p>${errors[err]}</p>`;
         });

      } else {
         console.log("Sorry not found");
      }
   } catch (error) {
      console.error();
   }
};



