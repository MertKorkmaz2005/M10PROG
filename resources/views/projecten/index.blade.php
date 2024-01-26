@extends( 'layouts.master' )

@section('content')
<section class="nextPage">


      @foreach($projecten as $project)

        <article class="nextPage__card">
          <h2 class="nextPage__h2">{{$project->titel}}</h2>
          <figure class="nextPage__figureImg">
            <img src="{{$project->img}}" alt="" class="nextPage__img" />
          </figure>
          <p class="nextPage__p">
          {{$project->description}}
          </p>
          @if($project->img2)
           <figure class="nextPage__figureImg">
           <img class="nextPage__img"src="{{Storage::url($project->img2)}}"> 
          </figure>
            @endif
          <figure class="nextPage__buttonWrapper">
            <a class="nextPage__arrowLink" href="{{route('projecten.show', $project)}}"
              ><button class="nextPage__arrowButton">
                <i class="nextPage__arrowI fa-solid fa-arrow-right"></i></button
            ></a>
          </figure>

        </article>

     

      @endforeach







    </section>

@endsection


