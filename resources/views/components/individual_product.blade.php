

<li class="col-lg-4 col-md-6 col-sm-12">
    <div class="product-box">
        <div class="producct-img">
            <img src="{{ $image }}" alt="" />
        </div>
        <div class="product-caption">
            <h4><a href="{{ $link }}">{{ $title }}</a></h4>
            <div class="price"><ins>{{ $slot }}</ins></div>
            <a href="{{ $moreLink }}" class="btn btn-outline-primary">Más</a>
        </div>
    </div>
</li>
