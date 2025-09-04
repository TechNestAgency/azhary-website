document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('.php-email-form');
  if (!form) return;

  const loading = form.querySelector('.loading');
  const errorMessage = form.querySelector('.error-message');
  const sentMessage = form.querySelector('.sent-message');

  // Hide all messages initially
  loading.style.display = 'none';
  errorMessage.style.display = 'none';
  sentMessage.style.display = 'none';

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Hide all messages
    loading.style.display = 'block';
    errorMessage.style.display = 'none';
    sentMessage.style.display = 'none';

    // Remove any existing validation errors
    form.querySelectorAll('.is-invalid').forEach(input => {
      input.classList.remove('is-invalid');
    });
    form.querySelectorAll('.invalid-feedback').forEach(error => {
      error.remove();
    });

    // Submit form
    fetch(form.action, {
      method: 'POST',
      body: new FormData(form),
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
    .then(response => response.json())
    .then(data => {
      loading.style.display = 'none';
      
      if (data.success) {
        sentMessage.style.display = 'block';
        sentMessage.textContent = data.message;
        form.reset();
      } else {
        errorMessage.style.display = 'block';
        errorMessage.textContent = data.message || 'An error occurred. Please try again.';
        
        // Display validation errors if any
        if (data.errors) {
          Object.keys(data.errors).forEach(field => {
            const input = form.querySelector(`[name="${field}"]`);
            if (input) {
              input.classList.add('is-invalid');
              const errorDiv = document.createElement('div');
              errorDiv.className = 'invalid-feedback';
              errorDiv.textContent = data.errors[field][0];
              input.parentNode.appendChild(errorDiv);
            }
          });
        }
      }
    })
    .catch(error => {
      loading.style.display = 'none';
      errorMessage.style.display = 'block';
      errorMessage.textContent = 'An error occurred. Please try again.';
    });
  });

  // Clear validation errors when input changes
  form.querySelectorAll('input, select, textarea').forEach(input => {
    input.addEventListener('input', function() {
      this.classList.remove('is-invalid');
      const errorDiv = this.parentNode.querySelector('.invalid-feedback');
      if (errorDiv) {
        errorDiv.remove();
      }
    });
  });
}); 