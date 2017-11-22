<div class="thumbnail">
    <div class="image-container">
        <div class="caption">
            <figure class="imghvr-push-up">
                <img src="{{$movie->poster_image}}" class="image"
                     style="width:100%; height: 450px;"
                     alt="{{$movie->name}}">
                <figcaption>
                    <h3>{{$movie->name}}
                        | {{$movie->release_date->format('Y')}}</h3>
                    @if(!$movie->isFavourite())
                        <button class="btn btn-success add" role="button"
                                data-movie="{{$movie}}">
                            <i class="fa fa-heart-o"></i>
                            Add to My Favourite
                        </button>
                    @else
                        <button type="button" class="btn btn-danger remove"
                                data-movie="{{$movie->id}}">
                            <i class="fa fa-heart"></i>
                            Remove From My Favourite
                        </button>
                    @endif
                </figcaption>
            </figure>
        </div>
    </div>
</div>