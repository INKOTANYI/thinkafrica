<!doctype html>
<html>
  <body style="font-family:Arial,Helvetica,sans-serif; color:#111">
    <h2>Message Status Update</h2>
    <p>Hello {{ $name }},</p>
    <p>Your inquiry (subject: <strong>{{ $subjectLine }}</strong>) has been marked as <strong>{{ $status }}</strong>.</p>
    @if(!empty($reason))
      <p>Reason: {{ $reason }}</p>
    @endif
    <p>We will be in touch if further information is needed.</p>
    <p>Thank you,<br/>Think Africa</p>
  </body>
</html>
