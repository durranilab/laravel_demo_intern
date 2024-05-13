<h1>Form</h1>


<form action="{{route('saveform')}}" method="post">
    @csrf

    <div style="flex-direction: column; display: flex; width: 196px">

        <label>Name:</label>
        <input type="text" name="name">

        <label>Email:</label>
        <input type="email" name="email">

        <label>Phone:</label>
        <input type="number" name="phone">

        <label>Address:</label>
        <input type="text" name="address">

        <label>Gender:</label>
        <input type="radio" name="gender" value="male">
        <label>Male</label>
        <input type="radio" name="gender" value="female">
        <label>Female</label>

        <label>DOB:</label>
        <input type="date" name="dob">

        <input type="submit">

    </div>
</form>
