<script>
const wrapper = document.querySelector('.whatsapp-wrapper');
const tooltip = wrapper.querySelector('.whatsapp-tooltip');

wrapper.addEventListener('mouseenter', () => {
  tooltip.textContent = 'WhatsApp';
});

wrapper.addEventListener('mouseleave', () => {
  tooltip.textContent = 'Contact Us';
});
</script>