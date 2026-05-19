<h2>Thank you for contacting MP Travels Ltd.</h2>

<p>Dear {{ $messageData->name }},</p>

<p>We have received your message successfully. Our team will contact you soon.</p>

<p><strong>Your Subject:</strong> {{ $messageData->subject ?? 'N/A' }}</p>

<p><strong>Your Message:</strong></p>
<p>{{ $messageData->message }}</p>

<p>Thank you,<br>MP Travels Ltd.</p>