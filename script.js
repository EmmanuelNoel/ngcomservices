let btnShow = document.querySelector('input');

btnShow.addEventListener('click', () => {
    swal({
        title: 'My Title',
        text: 'Hello World',
        icon: 'success',
        button: 'Custom Button'
    });
});