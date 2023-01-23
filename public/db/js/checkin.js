  
    const checkinForm = document.querySelector("#checkinForm");
    const checkinBtn = document.querySelector('#checkin');
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

    checkinForm.addEventListener('submit', (e) => {
      console.log('clicked')
      e.preventDefault();


      Toast.fire({
        icon: 'success',
        title: 'This partcipant - Mzer Emmanuel has been checked in succsefully'
      })
    });
