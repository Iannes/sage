{{--  @if ($hero->background_type == 'image')

    <section class="hero outer" style="background-image:url('{{ $hero->background_image }}')">

        <div class="inner">
            <div class="hero__text v-center">
                <h1>{{ $hero->title }}</h1>
                <h2>{!! $hero->intro !!}</h2>
            </div>
        </div>

    </section>

@else

    <section class="hero outer">

        <div class="inner">
            <div class="hero__text v-center">
                <h1>{{ $hero->title }}</h1>
                <h2>{!! $hero->intro !!}</h2>
            </div>
        </div>

        <div class="hero__video">
            <video width="320" height="240" src="{{ $hero->background_video_mp4 }}" loop autoplay muted>
                <img src"{{ $hero->video_poster }}">
            </video>
        </div>

    </section>


@endif  --}}