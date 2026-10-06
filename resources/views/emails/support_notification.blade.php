<div style="font-family: sans-serif; padding: 20px; color: #333; border: 1px solid #eee; border-radius: 10px;">
    <h2 style="color: #0dcaf0;">New Support Request Received!</h2>
    <p>Hello Team, a new person has expressed interest in supporting PPI through the website.</p>
    <hr>
    <p><strong>Name:</strong> {{ $supportRequest->name }}</p>
    <p><strong>Phone/WhatsApp:</strong> {{ $supportRequest->phone }}</p>
    <p><strong>Type of Support:</strong> {{ $supportRequest->support_type }}</p>
    <p><strong>Date:</strong> {{ $supportRequest->created_at->format('M d, Y H:i') }}</p>
    <hr>
    <p>Please contact them as soon as possible to guide them on the next steps.</p>
</div>


