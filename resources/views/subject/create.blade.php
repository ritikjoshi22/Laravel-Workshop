<form action="{{route("subject.store")}}" method="post">
    @csrf
    Subject:<input type="text" placeholder="Enter your subject" required name="subject"><br>
    <input type="submit" value="Submit">
</form>
