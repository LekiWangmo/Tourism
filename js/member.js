<script>
const wrapper = document.querySelector('.team-wrapper');
const prevBtn = document.querySelector('.team-nav.prev');
const nextBtn = document.querySelector('.team-nav.next');

const slideGap = 15; // gap between slides in px
const slideWidth = wrapper.querySelector('.team-slide').offsetWidth + slideGap;

prevBtn.addEventListener('click', () => {
    wrapper.scrollBy({ left: -slideWidth, behavior: 'smooth' });
});

nextBtn.addEventListener('click', () => {
    wrapper.scrollBy({ left: slideWidth, behavior: 'smooth' });
});
</script>