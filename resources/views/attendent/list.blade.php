@extends("layout.master")
@section('title', 'List Student')
@section('content')
    <table class="table">

        <!--Table head-->
        <thead class="mdb-color darken-3">
        <tr>
            <th>Slot ID</th>
            <th>Timeslot</th>
            <th>Subject</th>
            <th>Class ID</th>
            <th>Action</th>
        </tr>
        </thead>
        <!--Table head-->
        <tr>
            <th scope="row">20654</th>
            <td>8h-12h</td>
            <td>PHP</td>
            <td>T1707M</td>
            <td><button>Take</button></td>
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
