// Add Sweet Alert dialog box for checking in attendees
const checkinBtn = document.getElementById('checkin_btn');

checkinBtn.addEventListener('click', function () {
    console.log('YAy!!!')
    Swal.fire({
        title: 'Check-In Registered Attendee',
        inputPlaceholder: 'Please Enter Attendees ID',
        input: 'number',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: false,
        confirmButtonText: 'CheckIn',
        showLoaderOnConfirm: true,
        preConfirm: (id) => {
            return fetch(`http://localhost:8080/dashboard/checkIn`, {
                method: 'post',
                body: JSON.stringify({id:id})
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(response.statusText)
                    }
                    return response.json()
                })
                .catch(error => {
                    Swal.showValidationMessage(
                        `Request failed: ${error}`
                    )
                })
        },
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: `${result.value.login}'s avatar`,
                imageUrl: result.value.avatar_url
            })
        }
    })
}
)