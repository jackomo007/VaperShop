<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="bxslider-home4" id="bxslider-home4">
            @if($images)
                @foreach($images as $image)
                <li style="width: 1170px;height: 346px;">
                    <a href="#"> <img src="/images/carrousel/{{ $image->image }}" alt="Slide"></a>                    
                </li>
                @endforeach
            @endif
        </ul>
    </div>
    <!-- ./Slider -->
</div>