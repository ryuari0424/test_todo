@extends('layout.app')

@section('content')
    <div class="container">
        <section class="vh-100" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 col-xl-7">
                        <div class="card rounded-3">
                            <div class="card-body p-4">

                                <h4 class="text-center my-3 pb-3">To Do App</h4>

                                <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2"
                                    action="{{ route('store') }}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-outline">
                                            <input name="title" type="text" id="form1" class="form-control" />
                                            <label class="form-label" for="form1">Enter a task here</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-outline">
                                            <input name="memo" type="text" id="form1" class="form-control" />
                                            <label class="form-label" for="form1">Enter a memo here</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">登録</button>
                                    </div>
                                    
                                </form>

                                <table class="table mb-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">@sortablelink('id', 'ID')</th>
                                            <th scope="col">task title</th>
                                            <th scope="col">memo</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($todos as $todo)
                                            <tr>
                                                <th scope="row">{{ $todo->id }}</th>
                                                <td>{{ $todo->title }}</td>
                                                <td>{{ $todo->memo }}</td>
                                                <td>
                                                    <form action="{{ route('destroy', $todo->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="return confirm('削除してもよろしいですか?');" type="submit" class="btn btn-danger">削除</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
