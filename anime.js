<script>
  document.addEventListener("DOMContentLoaded", function() {
    anime({
      targets: '.header',
      opacity: [0, 1],
      translateY: [-50, 0],
      duration: 1000,
      easing: 'easeOutQuart'
    });

    anime({
      targets: '.heroSection .form-control',
      scale: [0.8, 1],
      opacity: [0, 1],
      duration: 1000,
      delay: 500,
      easing: 'easeOutQuart'
    });

    anime({
      targets: '.heroSection .btn',
      scale: [0.8, 1],
      opacity: [0, 1],
      duration: 1000,
      delay: 1000,
      easing: 'easeOutQuart'
    });

    anime({
      targets: '.heroSection .img-fluid',
      opacity: [0, 1],
      translateX: [-100, 0],
      duration: 1000,
      delay: 1500,
      easing: 'easeOutQuart'
    });
  });
</script>
