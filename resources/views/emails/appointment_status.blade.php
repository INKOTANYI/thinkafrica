<!doctype html>
<html>
  <body style="font-family:Arial,Helvetica,sans-serif; color:#111">
    <h2>Appointment Status Update</h2>
    <p>Hello {{ $name }},</p>
    <p>Your appointment status has been updated to <strong>{{ $status }}</strong>.</p>
    @if(!empty($service))
      <p>Service: {{ $service }}</p>
    @endif
    @if(!empty($preferred))
      <p>Preferred Date/Time: {{ $preferred }}</p>
    @endif
    @if(!empty($reason))
      <p>Reason: {{ $reason }}</p>
    @endif
    <p>Thank you,<br/>Think Africa</p>
  </body>
</html>
