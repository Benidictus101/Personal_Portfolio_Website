document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    const message = document.getElementById('formMessage');
  
    form.addEventListener('submit', e => {
      e.preventDefault();
  
      // Basic form validation or processing can be added here
  
      message.textContent = 'Thank you for your message! I will get back to you soon.';
      form.reset();
    });
  });
   