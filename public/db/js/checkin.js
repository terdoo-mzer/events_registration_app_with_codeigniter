
const checkinForm = document.querySelector("#checkinForm");
const checkinBtn = document.querySelector('#checkin');

// Output Dashboard logs using the elements
const registered_num = document.querySelector("#registered_num");
const checkedin_num = document.querySelector("#checkedin_num");
const reg_checked_diff = document.querySelector("#reg_checked_diff");

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

checkinBtn.addEventListener('click', (e) => {
  console.log('clicked')
  e.preventDefault();
  checkIn();

  // var formdata = new FormData(checkinForm);
  // // formdata.append("attendeeId_input", "109");
  // console.log(formdata)

  // var requestOptions = {
  //   method: 'POST',
  //   body: formdata,
  //   redirect: 'follow'
  // };

  // fetch("http://localhost:8080/dashboard/check-in", requestOptions)
  //   .then(response => {
  //     response.json();
  //     console.log(response)
  //   })
  //   .then(result => {
  //     console.log(result)

  //     if (result.status === '200') {

  //       // Sweet alert 
  //       Toast.fire({
  //         icon: 'success',
  //         title: `${result.message}`
  //       })
  //     }
  //   })
  //   .catch(error => console.log('error', error));


});

const checkIn = async () => {
  try {
    // let response = await fetch('http://squash-it.com.ng/dashboard/check-in', {
    let response = await fetch('http://localhost:8080/dashboard/check-in', {
      method: 'POST',
      body: new FormData(checkinForm),
    });

    const result = await response.json();

    console.log(result);
    if (result.status === 200) {

      // Sweet alert 
      Toast.fire({
        icon: 'success',
        title: `${result.message}`
      })

      checkinForm.reset();
    } else if (result.status === 400) {
      const checkin_error_div = document.querySelector('.checkin_error');


      checkin_error_div.style.display = "block";
      checkin_error_div.innerHTML = "";

      checkin_error_div.innerHTML += `<p>${result.message}</p>`;

      setTimeout(function () { checkin_error_div.style.display = "none" }, 10000);
    }
  } catch (error) {
    console.error();
  }

}

function outputLogs() {
     fetch('http://localhost:8080/reg-checkin-data')
     .then(response => {
      // console.log(response);
      return response.json();
     })
     .then(result => {
      // console.log(result);

        if(result.status === 200) {

            const registered = result.data.number_registered;
            const checkedIn = result.data.number_checkedin;

            // output the values to the DOM
            registered_num.innerHTML = registered;
            checkedin_num.innerHTML = checkedIn;

            reg_checked_diff.innerHTML = registered - checkedIn;

        } else {
          console.log('There are no logs at the monment')
        }
     })

     console.log('1234');
}

outputLogs();

// setInterval(outputLogs, 4000);
