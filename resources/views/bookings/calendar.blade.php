<x-layout title="Booking Calendar">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-4xl mx-auto mt-10 border border-gray-300">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Booking Calendar</h1>
        <div id="calendar"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    @foreach($bookings as $booking)
                    {
                        title: '{{ $booking->service_type }}',
                        start: '{{ $booking->date }}T{{ $booking->time }}',
                        url: '{{ route('bookings.show', $booking->id) }}'
                    },
                    @endforeach
                ]
            });
            calendar.render();
        });
    </script>
</x-layout>
