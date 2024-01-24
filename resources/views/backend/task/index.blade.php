<x-app-layout title="Task Lists">
    <x-slot name="content">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card my-4">
                        <h1 class="bg-dark text-center py-2 text-white">Tasks</h1>
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Showing All Tasks
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td width='40%'>{{ $task->description }}</td>
                                        <td>{{ $task->due_date }}</td>
                                        <td >
                                        <span
                                            class="text-{{ $task->status == 'completed' ? 'success' : 'danger' }} ">{{ $task->status == 'completed' ? 'Complete' : 'Pending' }}
                                        </span>
                                            &nbsp;
                                            <a href=""
                                               class="btn {{ $task->status == 'completed' ? 'btn-danger' : 'btn-success' }}">{{ $task->status == 'completed' ? 'Pending' : 'Complete' }}</a>
                                        </td>
                                        <td>
                                            <a href=""
                                               class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <p class="text-success fw-bold">{{Session::get('msg')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
