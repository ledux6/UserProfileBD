<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script> window.Laravel = { csrfToken: '{{csrf_token()}}'}</script>

    <title></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body class="bg-dark text-light">
    <div class="container  pl-5 pr-5">
        <div class="page-header p-5">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <img src="{{URL::asset('achievement-icon-png-4.jpg')}}" alt="" height="50" width="50">

                    {{$user->certificates->count()}} Certificates Earned
                </div>
                <div class="col-md-auto">
                    <img src="{{URL::asset('book.png')}}" alt="" height="50" width="50">
                    {{$user->completed_courses_count()}} Courses Completed
                </div>
                <div class="col-md-auto">
                    <img src="{{URL::asset('clock.png')}}" alt="" height="50" width="50">
                    126 Hours Spent Studying
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 bg-secondary p-3 ml-3 mr-3 mt-3 mb-0 rounded-top">
                <h2>Progression</h2>
                <p>Level {{$user->experience()/100}}</p>
                <p>{{$user->experience()%100}} /100</p>
                <p>Badges</p>
                @foreach($user->achievements as $achievement)
                    <p>{{$achievement->name}}</p>
                    @endforeach
            </div>
            <div class="col-lg bg-secondary p-3 m-3 rounded ">
                Welcome back {{$user->first_name}} {{$user->last_name}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 bg-secondary p-3 ml-3 mr-3 mt-0 mb-3 ">
                <h3>Mastered On Bitdegree</h3>
                @foreach($user->courses as $course)
                    <div class="row">
                        <div class="col-sm-1">
                    <p>{{$course->skill}}</p>
                        </div>
                        <div class="col-sm-3 offset-7">
                            <p>{{$course->mastery}}</p>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar"
                        @if($course->mastery === "beginner")
                        style="width: 20%"
                        @elseif($course->mastery === "intermediate")
                             style="width: 50%"
                        @elseif($course->mastery === "advanced")
                             style="width: 100%"
                        @endif

                             aria-valuenow=
                                @if($course->mastery === "beginner")
                                     {{"20"}}
                                @elseif($course->mastery === "intermediate")
                                     {{"50"}}
                                @elseif($course->mastery === "advanced")
                                     {{"100"}}
                                @endif

                                      aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endforeach
            </div>
            <div class="col-lg p-3 m-3 bg-secondary rounded" >
                <div class="row">
                    <div class="col-1 offset-4">
                <img src="{{URL::asset('achievement-icon-png-4.jpg')}}" alt="" class="align-center" height="100" width="100">
                    </div>
                    <div class="col-2">
                    <h1 class="text-center mt-3">{{$user->certificates->count()}}</h1>
                    </div>
                </div>
                <p class="text-center">Certificates Earned</p>
                <p class="text-center">Featured Certificate</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 bg-secondary p-3 m-3 rounded">
                @if (isset($user->recommendations))
                    ,,{{$user->recommendations->orderBy('created_at')->get()[0]->text}}''
                    {{$user->recommendations->orderBy('created_at')->get()[0]->author}}
                @endif
            </div>
            <div class="col-lg  p-3 mb-3 rounded" >
                <h2>Certificates Earned</h2>
                <div id="app">
                    <certificate></certificate>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>