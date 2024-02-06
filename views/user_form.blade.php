

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<form action="{{ url('/user/submit') }}" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" name="name" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" required><br><br>
    <label for="phone_number">Phone Number:</label><br>
    <input type="text" name="phone_number" required><br><br>

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>

</form>
