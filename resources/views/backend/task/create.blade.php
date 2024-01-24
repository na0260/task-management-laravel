<x-app-layout title="Create New Task">
    <x-slot name="content">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-6 mx-auto mt-5">
                        <h1 class="bg-dark text-center py-2 text-white">Add New Task</h1>
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label class="form-label">Title:</label>
                                <input type="text" name="title" class="form-control" placeholder="Add Task Title Here"
                                       required>
                            </div>
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="col-md-12">
                                <label class="form-label">Description:</label><br>
                                <textarea name="description" id="" cols="70" rows="5" class="form-control" placeholder="Add Task Description Here"></textarea>
                            </div>
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="col-md-12">
                                <label class="form-label">Due Date:</label>
                                <input type="date" name="due_date" class="form-control"
                                       required>
                            </div>
                            @error('due_date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="col-12">
                                <button class="btn btn-dark" type="submit">Add</button>
                            </div>
                        </form>
                        <p class="text-success">{{Session::get('msg')}}</p>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>
