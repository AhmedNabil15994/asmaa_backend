@if(count($home_sections))
    @foreach($home_sections as $home)
        @php
            $type = $home->type;
            if(in_array($type,['categories','products','sliders']) && !$home->$type()->count()){
                switch ($type){
                    case 'categories':
                    $records = Modules\Category\Entities\Category::active()->MainCategories()->get();
                    break;
                    case 'products':
                    $records = Modules\Catalog\Entities\Product::active()->withCount(['variants'])->orderByRaw("RAND()")->take(24)->get();
                    break;
                    case 'sliders':
                    $records = Modules\Slider\Entities\Slider::active()->Published()->get();
                    break;
                    default:
                    $records = null;
                    break;
                }
            }else{
                    $records = null;
            }
        @endphp
        @include('apps::frontend.home-sections.'. $type , ['records' => isset($records) && $records ? $records : $home->$type , 'home' => $home])
    @endforeach
@endif

