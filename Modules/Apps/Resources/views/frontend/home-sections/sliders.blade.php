@if(count($records))
<div class="home-slider-container {{isset($home->classes['container']) ? $home->classes['container'] : ''}}">
  <div class="owl-carousel home-slides">
    @foreach($records as $k => $record)
    <div class="item {{isset($home->classes['cards']) ? $home->classes['cards'] : ''}}">
      <a href="{{$record->link}}">
        <img src="{{ asset($record->getFirstMediaUrl('images')) }}"
          alt="" />
      </a>
    </div>
    @endforeach
  </div>
</div>
@endif
