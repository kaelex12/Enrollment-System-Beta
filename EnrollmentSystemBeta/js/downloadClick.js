function sweetalertclick(){
    Swal.fire({
        title: 'Convert to PDF',
        text: "To Download/Convert this form please click the ''REGISTRATION FORM''",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continue'
        
      }).then((result) => {    
        if (result.isConfirmed) {
            window.location = "fourthPage.php";
        }else{  
            window.location = "thirdPage.php";
        }
      })
}