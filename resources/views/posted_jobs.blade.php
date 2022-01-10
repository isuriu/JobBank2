@include('layouts/sidemenu')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />

<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <br>
    <nav aria-label="breadcrumb" style="padding-left: 15px;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Posted Jobs</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table id="appliedJobs" class="hover">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Salary</th>
                            <th>Type</th>
                            <th>Closing Date</th>
                            <th>Requirements</th>
                            <th>Key Words</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($job_data as $job)
                        <tr>
                            <td>{{$job->job_title}}</td>
                            <td>{{$job->expected_salary}}</td>
                            <td>{{$job->job_type}}</td>
                            <td>{{$job->closing_date}}</td>
                            <td>{{$job->requirements}}</td>
                            <td>{{$job->key_words}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>   

    </div>
    
</x-app-layout>

<script>
$(document).ready( function () {
    $('#appliedJobs').DataTable({
        ordering:  false
    });
} );
</script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>