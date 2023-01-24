@extends('layouts.layout')

@section('content')
<div class="content">
    <h2 class="title mb-10">Barcha bemorlar</h2>
    <div class="table">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
      <table border="1">
      <thead>
        <thead>
          <tr>
            <th>No</th>
            <th>F.I.SH</th>
            <th>Telefon raqami</th>
            <th>Tug'ilgan sanasi</th>
            <th>Jinsi</th>
            <th>Viloyat</th>
            <th>Kassalik turi</th>
            <th>ПЦР натижаси</th>
            <th>Batafsil ko'rish</th>
            <th>O'chirish</th>
          </tr>
        </thead>
        <tbody>
            @if (count($members) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
			@endif

            @foreach ($members as $member)

                <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>{{ $member->name }} </td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->date }}</td>
                    <td>{{ $member->gender }}</td>
                    <td>{{ $member->region }}</td>
                    <td>{{ $member->type_sickness }}</td>
                    <td>{{ $member->psr }}</td>
                    <td><a href="{{ route('members.show', $member->id) }}">Batafsil</a></td>
                    <td>
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST">
                        @csrf
						@method('DELETE')
                        <button onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><b>O'chirish</b></button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>
      </thead>
      </table>

    </div>
    <div>{{ $members->links() }}</div>

</div>
@endsection
