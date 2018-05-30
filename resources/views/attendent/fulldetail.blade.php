@extends("layout.master")
@section('title',"Take attendent ")
@section("content")
    <table class="table">

        <!--Table head-->
        <thead class="mdb-color darken-3">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Present</th>
        </tr>
        </thead>
        <!--Table head-->
        <tr>
            <th scope="row">D0051</th>
            <td>Đào Minh An</td>
            <td><input type="checkbox" class="form-check-input" value=""></td>
        </tr>
        <tr>
            <th scope="row">20655</th>
            <td>13h30-17h30</td>
            <td>ASF2</td>
            <td>T1708A</td>
            <td><button>Take</button></td>
        </tr>
        <tr>
            <th scope="row">20656</th>
            <td>17h30-21h</td>
            <td>EJB</td>
            <td>T1608E</td>
            <td><button>Take</button></td>
        </tr>
        <!--Table body-->
        <tbody>

        </tbody>
        <!--Table body-->

    </table>
    @endsection
