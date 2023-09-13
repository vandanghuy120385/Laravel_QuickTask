<x-app-layout>
    <x-hero-banner small-text="Beat Solo Air" mid-text="Summer Sale" large-text-1="FINE" large-text-2="SMILE" desc="Beats Solo Air" image='storage/images/brands_logo/black-shoes.png' />
    <div class="products-heading">
        <h2>Best selling</h2>
        <p>Speaker</p>
    </div>
    <div class="products-container">
        @foreach ($products as $product)
        <x-product slug="{{ $product['slug'] }}" image="{{ $product['image'] }}" name="{{ $product['name'] }}" price="{{ $product['price'] }}" />
        @endforeach
    </div>
    <div style="margin-top: 40px;">
        <x-hero-banner small-text="Brand new" mid-text="Comme des Garcons" large-text-1="SMILE" desc="Comme des Garcons" image="storage/images/brands_logo/Comme des Garcons.jpg" />
    </div>

    <x-footer-banner discount="{{ $banner['discount'] }}" large-text-1="{{ $banner['largeText1'] }}" large-text-2="{{ $banner['largeText2'] }}" sale-time="{{ $banner['saleTime'] }}" small-text="{{ $banner['smallText'] }}" mid-text="{{ $banner['midText'] }}" desc="{{$banner['desc']}}" product="{{ $banner['product'] }}" image="{{ $banner['image'] }}" />
</x-app-layout>