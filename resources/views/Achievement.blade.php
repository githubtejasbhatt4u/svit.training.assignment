@extends('Assignment1index')


@section('achieve')
    

<div id="features-wrapper">
    <div class="container">
        <div class="row">
            
            @foreach ($rec as $item)
            <div class="4u">					
                <!-- Box -->
                    <section class="box feature">
                        <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                        <div class="inner">
                            <header>
                                <h2>{{$item->title}}</h2>
                                <p>{{$item->achievement_date}}</p>
                            </header>
                            <p>{{$item->body}}</p>
                        </div>
                    </section>

            </div>
            @endforeach
             
         </div>
    </div>
</div> 
@endsection