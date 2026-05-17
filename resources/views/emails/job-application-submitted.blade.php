<h2>Application Submitted Successfully</h2>

<p>Dear {{ $application->name }},</p>

<p>Your job application has been received successfully.</p>

<p><strong>Job:</strong> {{ $application->job->title ?? '' }}</p>

<p>Thank you,<br>MP Travels Ltd.</p>