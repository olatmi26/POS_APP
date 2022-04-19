import Swal from 'sweetalert2/src/sweetalert2.js';
window.toastr = require('toastr');
window.Swal = Swal;
const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    allowOutsideClick: false,
    timerProgressBar: false,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.toastr = require('toastr');
$(document).ready(function() {
    // alert('okays');
});