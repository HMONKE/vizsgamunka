<div class="mb-5 welcome-banner">
    <img src="assets/images/home/welcome-banner.jpg" alt="Welcome_img">
    <div class="centered">
        <h2>Dark Souls Webshop</h2>
    </div>
</div>

<div class="my-5">
    <h3 class="text-center text-uppercase">Featured products</h3>
    <div class="row g-0">
        <?php $prod = new View; $prod->featuredProductsV(); ?>
    </div>
</div>