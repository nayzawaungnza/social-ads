<x-mail::message>
# Enrollment Confirmation

Hello, {{ $studentName }}!

You have successfully enrolled in the course **{{ $courseName }}**. We’re excited to have you join us.


<x-mail::button :url="route('courses.show', ['id' => $course->id])">
View Course
</x-mail::button>

Thank you for choosing us for your learning journey!

Best regards,  
{{ config('app.name') }}
</x-mail::message>
