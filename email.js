document.getElementById
    ('contact-form').addEventListener('submit', function(event) {
      event.preventDefault();
      
      var formData = new FormData(event.target);
      fetch("https://formspree.io/f/xayrdowr", {
        method: 'POST',
        body: Data,
      }).then(Response => {
        if (Response.ok) {
          alert('Thanks for your message!');
        }else {
          alert('Something went wrong!');
        }
      });
      document.getElementById
      ('contact-form').reset();
    });