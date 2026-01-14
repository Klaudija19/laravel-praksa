<h2>Congratulations!</h2>

<p>Your job listing has been successfully posted.</p>

<p><strong>Position:</strong> {{ $job->title }}</p>
<p><strong>Salary:</strong> {{ $job->salary }}</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">
        View your job listing
    </a>
</p>

<p>Thank you for using JobsBoard.</p>
