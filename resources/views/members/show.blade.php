@extends('layouts.layout')

@section("content")
<div class="content">
    <h2 class="title mb-10">Diagramm</h2>
    <div class="table__user">
        <table border="1">

            <tr>
                <th>No</th>
                <td>{{ $member->id }}</td>
            </tr>
            <tr>
                <th>F.I.SH</th>
                <td>{{ $member->name }}</td>
            </tr>
            <tr>
                <th>Telefon raqami</th>
                <td>{{ $member->phone }}</td>
            </tr>

            <tr>
                <th>Tug'ilgan sanasi</th>
                <td>{{ $member->date }}</td>
            </tr>

            <tr>
                <th>Jinsi</th>
                <td>{{ $member->gender }}</td>
            </tr>

            <tr>
                <th>Viloyat</th>
                <td>{{ $member->region }}</td>
            </tr>

            <tr>
                <th>Tumani</th>
                <td>{{ $member->city }}</td>
            </tr>

            <tr>
                <th>Kassalik turi : </th>
                <td>{{ $member->type_sickness }}</td>
            </tr>

            <tr>
                <th>Tashxis</th>
                <td>{{ $member->sickness }}</td>
            </tr>



        </table>
        <table border="1">
            <tr>
                <td>ПЦР натижаси</td>
                <td>{{ $member->psr }}</td>
            </tr>
            <tr>
                <td>АЛТ</td>
                <td>{{ $member->alt }}</td>
            </tr>
            <tr>
                <td>АСТ</td>
                <td>{{ $member->ast }}</td>
            </tr>
            <tr>
                <td>Биллирубин</td>
                <td>{{ $member->billirubin }}</td>
            </tr>
            <tr>
                <td>Ишқорий фосфотаза</td>
                <td>{{ $member->ishqor }}</td>
            </tr>
            <tr>
                <td>Тимол сурмаси</td>
                <td>{{ $member->surma }}</td>
            </tr>
            <tr>
                <td>IgG</td>
                <td>{{ $member->igg }}</td>
            </tr>
            <tr>
                <td>IgM</td>
                <td>{{ $member->igm }}</td>
            </tr>
            <tr>
                <td>Natija</td>
                <td>{{ $member->result }}</td>
            </tr>

        </table>
    </div>
</div>
@endsection
