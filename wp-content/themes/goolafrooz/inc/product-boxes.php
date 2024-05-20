<?PHP
$product_posts = new WP_Query(array(
    'post_type' => 'post',
    'post_per_page' => '7',
    'post_status' => 'publish',
    'category_name' => 'green-house-products'
));

if ($product_posts->have_posts()) {

?>
    <div class="overflow-x-scroll">
        <script src="https://cdn.jsdelivr.net/npm/tailwindcss-cdn@3.4.1/tailwindcss.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <div x-data="swipeCards()" x-init="
			let isDown = false;
			let startX;
			let scrollLeft;
			$el.addEventListener('mousedown', (e) => {
			isDown = true;
			startX = e.pageX - $el.offsetLeft;
			scrollLeft = $el.scrollLeft;
			});
			$el.addEventListener('mouseleave', () => {
			isDown = false;
			});
			$el.addEventListener('mouseup', () => {
			isDown = false;
			});
			$el.addEventListener('mousemove', (e) => {
			if (!isDown) return;
			e.preventDefault();
			const x = e.pageX - $el.offsetLeft;
			const walk = (x - startX) * 1;
			$el.scrollLeft = scrollLeft - walk;
			});
			" class="overflow-x-scroll scrollbar-hide mb-4 relative px-0.5 " style="overflow-y: hidden;">
            <div class="flex snap-x snap-mandatory gap-4 " style="width: max-content;">
                <?PHP while ($product_posts->have_posts()) {
                    $product_posts->the_post(); ?>
                    <div>
                        <div class="flex-none w-64 snap-center shadow-lg ">
                            <div class="bg-white border-1 border border-gray-200 rounded-lg overflow-hidden mb-4 ">
                                <?PHP if (has_post_thumbnail()) { ?>
                                    <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-50 h-40 object-cover">
                                <?PHP } ?>
                                <div class="p-4">
                                    <h3 class="text-lg leading-6 font-bold text-gray-900"><?PHP the_title(); ?></h3>
                                    <p class="text-gray-600 mt-2 text-sm" "><?PHP the_excerpt(); ?></p>
                            <div class=" flex justify-between items-center mt-4">
                                        <span class="text-2xl font-extrabold text-gray-900" x-text="'$' + card.price.toFixed(2)"></span>
                                        <a href="<?PHP the_permalink(); ?>" class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="22px" viewBox="0 0 414.287 414.287" xml:space="preserve">
                                                <g>
                                                    <path d="M412.398,202.993L288.535,95.289c-1.502-1.305-3.591-1.699-5.463-1.027c-1.873,0.67-3.237,2.3-3.568,4.261l-8.938,52.887
                                                    H40.554c-2.684,0-4.976,1.938-5.423,4.583l-3.054,18.067c-0.27,1.597,0.177,3.23,1.223,4.467c1.045,1.237,2.581,1.95,4.2,1.95
                                                    h103.982l-2.208,15H8.134c-2.684,0-4.976,1.938-5.423,4.583l-2.634,15.584c-0.27,1.597,0.177,3.229,1.223,4.467
                                                    c1.045,1.236,2.581,1.949,4.2,1.949h159.196l-2.206,15H63.505c-2.684,0-4.976,1.938-5.423,4.583l-2.505,14.817
                                                    c-0.271,1.597,0.177,3.229,1.222,4.467c1.046,1.237,2.582,1.95,4.201,1.95h190.721l-8.628,51.053
                                                    c-0.366,2.168,0.593,4.346,2.439,5.538c0.908,0.586,1.945,0.879,2.982,0.879c1.07,0,2.141-0.312,3.067-0.935l160.272-107.704
                                                    c1.421-0.955,2.316-2.518,2.422-4.225C414.385,205.776,413.689,204.116,412.398,202.993z" />
                                                </g>
                                            </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <?PHP } ?>
        </div>
    </div>
    <script>
    function swipeCards() {
      return {
        cards: [{
            id: 1,
            image: `https://golafrooz.com/wp-content/uploads/2024/04/هیتر300000.jpg`,
            title: 'هیتر 300000',
            description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح',
            link: 'https://golafrooz.com/'
          },
          {
            id: 2,
            image: `https://golafrooz.com/wp-content/uploads/2024/04/نخ-گلخانه-ای.jpg`,
            title: 'نخ گلخانه ای',
            description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح',
            link: 'https://golafrooz.com/'
          },
          {
            id: 3,
            image: `https://golafrooz.com/wp-content/uploads/2024/04/ناودان-لاکینگ-خور.jpg`,
            title: 'ناودان لاکینگ خور',
            description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح',
            link: 'https://golafrooz.com/'
          },
          {
            id: 4,
            image: `https://golafrooz.com/wp-content/uploads/2024/04/مشعل-گازوئیلی.jpg`,
            title: 'مشعل گاز',
            description: 'توضیحات مختصر و مفید درباره راک پینتون',
            link: 'https://golafrooz.com/'
          },
          {
            id: 5,
            image: `https://golafrooz.com/wp-content/uploads/2024/04/لوله-سایز3.jpg`,
            title: 'لوله سایز 3',
            description: ' توضیحات مختصر و مفید درباره بست دوش و تمامی متعلقات آن',

            link: 'https://golafrooz.com/'
          },
          {
            id: 6,
            image: `https://golafrooz.com/wp-content/uploads/2024/04/فن-سیرکوله.jpg`,
            title: 'فن سیرکوله',
            description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح',

            link: 'https://golafrooz.com/'
          },
          {
            id: 7,
            image: `https://golafrooz.com/wp-content/uploads/2024/04/سرستون-ایرانی.jpg`,
            title: 'سر سوتون ایرانی',
            description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح.',

            link: 'https://golafrooz.com/'
          }
        ],
        addToCart(product) {
          // Implement your add to cart logic here
          console.log('Adding to cart:', product);
        }
      };
    }
  </script>
    </div>
<?PHP }
wp_reset_postdata(); ?>