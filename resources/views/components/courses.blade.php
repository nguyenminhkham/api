<div class="wrap">
        @foreach ($courses as $course)
        <ul class="course-wrap">
            <li><img src="{{$course->thumnail}}" alt="" class="image"></li>
            <li>{{$course->name}}</li>
            <li>{{$course->description}}</li>
            <li>{{$course->price}}</li>
        </ul>
        @endforeach
</div>
