@include('layouts/sidemenu')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />

<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <br>
    <nav aria-label="breadcrumb" style="padding-left: 15px;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Applied Jobs</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table id="appliedJobs" class="hover">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Company Name</th>
                            <th>Closing Date</th>
                            <th>Salary</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applied_jobs as $job)
                        <tr>
                            <td>{{$job->job_title}}</td>
                            <td>{{$job->company_name}}</td>
                            <td>{{$job->closing_date}}</td>
                            <td>&#165;{{number_format($job->expected_salary, '0', '.', ',')}}</td>
                            <td><a href="/job_details/{{$job->job_id}}/applied">See More >></a></td>
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