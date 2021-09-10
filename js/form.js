const buttonEnviar = document.getElementById('enviar');


const ajax = (data, callback) => {
    const form = document.getElementById(data.form);
    const xhr      = new XMLHttpRequest();
          formData = new FormData(form);
          
    xhr.onreadystatechange = function(e) {
        console.log(xhr.readyState);
        console.log(e);
        // console.log(xhr.status);
        // console.log(xhr.readyState);
        // if (xhr.readyState === 4 && xhr.status === 200) {
        //     callback(null, {
        //         erro: false,
        //         mensaje: xhr.responseText,
        //     });
        // }
        }
    
    xhr.open(data.method, data.url);

    // xhr.setRequestHeader("Content-Type", "multipart/form-data");
    // xhr.setRequestHeader("Content-Type", "application/json");
    // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(formData);
    // xhr.abort();
}
document.getElementById('form-usuario').addEventListener('submit', function (event) {
    event.preventDefault();
    ajax({
        url: 'users.php',
        method: 'POST',
        form: 'form-usuario'
    }, (error, response) => {
        if (!error) {
            // console.log(response);
        }
    });
});
// buttonEnviar.addEventListener('click', () => {
//     document.getElementById('form-usuario').checkValidity();
//     // ajax({
//     //     url: 'users.php',
//     //     method: 'POST',
//     //     form: 'form-usuario'
//     // }, (error, response) => {
//     //     if (!error) {
//     //         // console.log(response);
//     //     }
//     // });
// });
