<?php
$slide_items = get_query_var('slide_items');
?>

<script>
function createSlider(sliderId) {
    let currentSlide = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll(`#${sliderId} .slide-item`);
        slides.forEach((slide, i) => {
            slide.classList.remove('translate-x-0', 'translate-x-full', 'translate-x-minus-full');
            if (i === index) {
                slide.classList.add('translate-x-0');
            } else if (i < index) {
                slide.classList.add('translate-x-minus-full');
            } else {
                slide.classList.add('translate-x-full');
            }
        });
    }

    function nextSlide() {
        const slides = document.querySelectorAll(`#${sliderId} .slide-item`);
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function previousSlide() {
        const slides = document.querySelectorAll(`#${sliderId} .slide-item`);
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    document.querySelector(`#${sliderId} .next-button`).addEventListener('click', nextSlide);
    document.querySelector(`#${sliderId} .prev-button`).addEventListener('click', previousSlide);

    showSlide(currentSlide);
}

document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.slider');
    sliders.forEach(slider => {
        createSlider(slider.id);
    });
});
</script>

<style>
.slider {
    position: relative;
    width: 80%;
    height: 400px;
    overflow: hidden;
    margin: auto;
    margin-top: 40px;
}
.slide-item {
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    transition: transform 1s ease-in-out;
}
.translate-x-0 {
    transform: translateX(0);
}
.translate-x-full {
    transform: translateX(100%);
}
.translate-x-minus-full {
    transform: translateX(-100%);
}
</style>

<div id="slider1" class="slider">
    <?php foreach($slide_items as $index => $slide): ?>
    <div class="slide-item" style="background-image: url('<?php echo esc_url($slide['image']); ?>');">
        <p class="bg-gray-900 px-7 py-3 text-white font-bold uppercase rounded-md opacity-80"><?php echo esc_html($slide['text']); ?></p>
    </div>
    <?php endforeach; ?>
    <div class="absolute z-10 left-0 top-1/2 bg-gray-200 w-16 h-16 flex items-center justify-center text-black cursor-pointer prev-button">
        &#x276E;
    </div>
    <div class="absolute z-10 right-0 top-1/2 bg-gray-200 w-16 h-16 flex items-center justify-center text-black cursor-pointer next-button">
        &#x276F;
    </div>
</div>

<div id="slider2" class="slider">
    <?php foreach($slide_items as $index => $slide): ?>
    <div class="slide-item" style="background-image: url('<?php echo esc_url($slide['image']); ?>');">
        <p class="bg-gray-900 px-7 py-3 text-white font-bold uppercase rounded-md opacity-80"><?php echo esc_html($slide['text']); ?></p>
    </div>
    <?php endforeach; ?>
    <div class="absolute z-10 left-0 top-1/2 bg-gray-200 w-16 h-16 flex items-center justify-center text-black cursor-pointer prev-button">
        &#x276E;
    </div>
    <div class="absolute z-10 right-0 top-1/2 bg-gray-200 w-16 h-16 flex items-center justify-center text-black cursor-pointer next-button">
        &#x276F;
    </div>
</div>
