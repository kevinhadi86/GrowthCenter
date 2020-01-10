<style>
    body {
        margin: 0;
        padding: 0;
        background-color: rgba(200, 200, 200, 0.5);
    }

    .container {
        width: 100%;
        padding: 100px 0;
        display: flex;
        justify-content: center;
    }

    .table-container {
        width: 50%;
        padding: 50px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px #00528880;
    }

    table {
        width: 100%;
    }

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
</style>
<div class="container">
    <div class="table-container">
        <div style="text-align: center">
            <h2>An Inquiry has been submitted</h2>
        </div>
        <table>
            <tr>
                <th>#</th>
                <th>#</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$contactUs->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$contactUs->email}}</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>{{$contactUs->subject}}</td>
            </tr>
            <tr>
                <td>message</td>
                <td>{{$contactUs->message}}</td>
            </tr>
        </table>
    </div>
</div>
