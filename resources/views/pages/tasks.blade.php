@extends('layouts.app')

@section('content')

<div class="email-app todo-box-container mt-3">
    <div class="left-part list-of-tasks">
        <a class="ri-menu-fill ri-close-fill btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
        <div class="scrollable" style="height: 100%;">
            <div class="p-3">
                <a class="waves-effect waves-light btn btn-info d-block" href="javascript: void(0)" id="add-task">Add New Task</a>
            </div>
            <div class="divider"></div>
            <ul class="list-group">
                <li>
                    <small class="p-3 d-block text-uppercase text-dark font-weight-medium">Your Assigned Tasks &nbsp;&nbsp;&nbsp;<span class="btn btn-primary btn-xs ml-auto">{{$dr}}</span></small>
                </li>
                @if ($as != null)
                <li class="list-group-item p-0 border-0">
                    <a href="{{ url('dashboard') }}" class="todo-link list-group-item-action p-3 d-flex align-items-center" id="all-todo-list">
                        <i data-feather="add" class="feather-sm me-2"></i> {{ $as -> name }}
                    </a>
                </li>
                @elseif ($as == null)
                <a href="javascript: void(0)" class="todo-link active list-group-item-action p-3 d-flex align-items-center" id="all-todo-list">
                    <i class="feather-sm me-2"></i> <span class="text-danger"> No Task's Found</span>
                </a>
                @endif
                <hr />
            </ul>
        </div>
    </div>


    <div class="right-part mail-list bg-white overflow-auto">
        <div id="todo-list-container">
            <div class="todo-listing">
                <div id="all-todo-container" class="p-3">

                    <div class="todo-item all-todo-list p-3 border-bottom position-relative">

                        @if ($cr == null)
                        <div class="jumbotron">
                            <h5 class="text-danger text-center">No Task Found</h5>
                        </div>
                        @endif

                        @foreach ($cr as $rc)
                        <div class="inner-item d-flex align-items-start">
                            <div class="w-100">

                                <div class="checkbox checkbox-info d-flex align-items-start">

                                    <div>
                                        <div class="content-todo">
                                            <h5 class="font-weight-medium fs-4 todo-header">{{ $rc->name }}</h5>
                                            <div class="todo-subtext text-muted fs-3">{{$rc->description}}</div>
                                            <span class="todo-time fs-2 text-muted d-flex align-items-center"><i data-feather="calendar" class="me-1 feather-sm"></i> {{ $rc->date }} | &nbsp; <span class="todo-time fs-2"> <b> Start Time: {{ $rc->start_time }} - End Time : {{ $rc->end_time }} </b></span></span>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown-action">
                                            <div class="dropdown todo-action-dropdown">
                                                <button class="btn btn-link text-dark p-1 dropdown-toggle text-decoration-none todo-action-dropdown" type="button" id="more-action-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i data-feather="more-vertical" class="feather-sm"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="more-action-1">

                                                    <a class="remove dropdown-item" href="{{ url('doneTask') }}">
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="trash-2" class="feather-sm fill-white text-success me-1"></i>Marked as done </div>
                                                    </a>

                                                    <a class="remove dropdown-item" href="{{ url('deleteTask/') }}">
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="trash-2" class="feather-sm fill-white text-info me-1"></i>In Progress
                                                        </div>
                                                    </a>

                                                    <a class="remove dropdown-item" href="{{ url('deleteTask/') }}">
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="trash-2" class="feather-sm fill-white text-danger me-1"></i>Not Done
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        @endforeach
                    </div>
                </div>



    <!-- Task Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title text-white">Add Task</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ url('storeTask') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="compose-box">
                            <div class="compose-content" id="addTaskModalTitle">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex mail-to mb-4">
                                            <div class="w-100">
                                                <label for="">Task Title</label>
                                                <input id="task" type="text" placeholder="Title" class="form-control mb-1" name="title" required />
                                                <label for="">Description</label>
                                                <textarea name="description" placeholder="Description" class="form-control mb-2" id="" cols="30" rows="3" required></textarea>
                                                <label for="">Due Date </label>
                                                <input type="date" placeholder="Due Date" class="form-control mb-2" name="dueDate" required />
                                                <label for="">Starting Time</label>
                                                <input type="time" name="startTime" id="" class="form-control mb-2" required>
                                                <label for="">Ending Time</label>
                                                <input type="time" name="endTime" id="" class="form-control mb-2" required>
                                                <label for="">Assigning To</label>
                                                <select name="assign" class="form-select">
                                                    <option selected disabled>Select your option </option>
                                                    @foreach ($ur as $u)
                                                    <option value="{{ $u ->id }}">{{ $u ->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="ri-close-fill align-middle"></i> Discard
                        </button>
                        <button type="submit" class="btn btn-info">
                            Add Task
                        </button>
                        {{-- <button type="submit" class="btn btn-success edit-tsk">Add</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Group Modal -->
    <div class="modal fade" id="addGroupModal" tabindex="-1" role="dialog" aria-labelledby="addGroupModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title text-white">Add Group</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ url('storeGroup') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="compose-box">
                            <div class="compose-content" id="addTaskModalTitle">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex mail-to mb-4">
                                            <div class="w-100">
                                                <input id="groupInput" type="text" placeholder="Enter New Group Name" class="form-control" name="name" required />
                                                {{-- <span class="validation-text"></span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="ri-close-fill align-middle"></i> Discard
                        </button>
                        {{-- <button class="btn btn-info add-grp" disabled>
                    Add Group
                  </button> --}}
                        <button type="submit" class="btn btn-success edit-tsk">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
    @section('script')
    {{-- <script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script> --}}
    <script src="{{ asset('js/pages/todo/todo.js') }}"></script>

    <script>
        function checkTask(check) {
            if (check.checked == true)
                window.location.href = "{{ url('tasks/') }}/" + check.value;
        }
    </script>

    @endsection
