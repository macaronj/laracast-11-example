<h2>{{ $job->title }}</h2>
<p>
    Congratulations your job was posted!
</p>
<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your job listing.</a>
</p>
