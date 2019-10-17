<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
        <tr>
            <th>Generate PDF</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Contact No</th>
            <th colspan="3">Action</th>
        </tr>



        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                {{--<td>{!! $employee->id !!}</td>--}}
                <td><a href="{!! url('pdf_generate').'/'.$employee->id !!}" class="btn btn-info"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                <td>{!! $employee->name !!}</td>
                <td>{!! $employee->address !!}</td>
                <td>{!! $employee->email !!}</td>
                <td>{!! $employee->contactno !!}</td>
                <td>
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('employees.show', [$employee->id]) !!}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('employees.edit', [$employee->id]) !!}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
