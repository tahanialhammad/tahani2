<template>
    <form :action="action" method="POST" @submit.prevent="handleFormSubmit">
      <!-- Form content -->
      <slot></slot>
    </form>
  </template>
  
  <script>
  import Swal from 'sweetalert2';
  
  export default {
    props: {
      action: {
        type: String,
        required: true
      },
      confirm: {
        type: String,
        default: 'Are you sure?'
      },
      confirmButtonText: {
        type: String,
        default: 'Yes'
      },
      cancelButtonText: {
        type: String,
        default: 'Cancel'
      },
      message: {
        type: String,
        default: ''
      }
    },
    methods: {
      handleFormSubmit() {
        Swal.fire({
          html: this.message,
          title: this.confirm,
          showCancelButton: true,
          confirmButtonColor: '#333840',
          confirmButtonText: this.confirmButtonText,
          cancelButtonText: this.cancelButtonText,
          closeOnConfirm: true,
          allowOutsideClick: true,
          customClass: 'swal-left'
        }).then(result => {
          if (result.isConfirmed) {
            const form = document.createElement('form');
            form.method = 'POST'; // Ensure method is always POST for CSRF protection
            form.action = this.action;
  
            const token = document.createElement('input');
            token.name = '_token';
            token.type = 'hidden';
            token.value = document.querySelector('meta[name="csrf-token"]').content;
  
            const hiddenInput = document.createElement('input');
            hiddenInput.name = '_method';
            hiddenInput.type = 'hidden';
            hiddenInput.value = 'DELETE'; // For DELETE request method
  
            form.appendChild(token);
            form.appendChild(hiddenInput);
  
            document.body.appendChild(form);
            form.submit();
          }
        });
      }
    }
  };
  </script>
  