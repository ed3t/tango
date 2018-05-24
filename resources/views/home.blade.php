@extends('layouts.app')

@section('content')
    <div class="bg-light is-fullheight p-t-2">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="/images/default_avatar.png" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content p-a-1">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64 is-circle">
                                        <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-5">John Smith</p>
                                    <p class="subtitle is-6">@johnsmith</p>
                                </div>
                            </div>

                            <nav class="level">
                                <div class="level-item has-text-centered">
                                    <div>
                                        <p class="is-6 has-text-grey-light">
                                            <small>Tweets</small>
                                        </p>
                                        <p class="is-4">3,456</p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                        <p class="is-6 has-text-grey-light">
                                            <small>Following</small>
                                        </p>
                                        <p class="is-4">123</p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                        <p class="is-6 has-text-grey-light">
                                            <small>Followers</small>
                                        </p>
                                        <p class="is-4">456K</p>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    {{--user card--}}
                </div>


                <div class="column is-6">
                    <div class="card">
                        <div class="card-content bg-light">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-32x32 is-circle">
                                        <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <form action="">
                                        <div class="field">
                                            <div class="control">
                                                <textarea rows="3" class="textarea" placeholder="Whats happening?"></textarea>
                                            </div>
                                        </div>

                                        <div class="level">
                                            <div class="level-left">
                                                <a class="has-text-grey-light">
                                                    <span class="icon">
                                                      <i class="fa fa-image"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="level-right">
                                                <div class="level-item">200</div>
                                                <div class="level-item"><button class="button is-outlined is-primary">
                                                        Tweet
                                                    </button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{--tweeter end--}}
                        </div>

                        <div class="card-content tweets">
                            <article class="media tweet" v-for="n in 10">
                                <figure class="media-left">
                                    <p class="image is-64x64 is-circle">
                                        <a href="">
                                            <img src="http://bulma.io/images/placeholders/128x128.png">
                                        </a>
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                            <br>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                        </p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <a class="level-item has-text-grey-light">
                                                <span class="icon is-small"><i class="fa fa-comment-o"></i></span> <small> 4</small>
                                            </a>
                                            <a class="level-item has-text-grey-light">
                                                <span class="icon is-small"><i class="fa fa-reply"></i></span> <small> 12</small>
                                            </a>
                                            <a class="level-item has-text-grey-light">
                                                <span class="icon is-small"><i class="fa fa-retweet"></i></span> <small> 34</small>
                                            </a>
                                            <a class="level-item has-text-grey-light">
                                                <span class="icon is-small"><i class="fa fa-heart"></i></span> <small> 676</small>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="media-right">
                                    <button class="delete"></button>
                                </div>
                            </article>
                        </div>
                    </div>
                    <button class="button is-fullwidth is-large is-loading">
                        Load more...
                    </button>
                </div>
                <div class="column is-3">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Who to follow
                            </p>
                        </header>
                        <div class="card-content">
                            <article class="media" v-for="n in 3">
                                <figure class="media-left">
                                    <p class="image is-64x64 is-circle">
                                        <img src="http://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>John Smith</strong> <small>@johnsmith</small>
                                        </p>
                                        <a href="" class="button is-small">Follow</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <p class="has-text-grey-light">
                                <small>&copy; {{ config('app.name') }} 2017</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
