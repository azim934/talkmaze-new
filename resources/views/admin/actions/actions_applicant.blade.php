@if(isset($applicant))
    @if(!$applicant->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('applicants.edit', [$applicant->id]) }}" title="Edit Applicant"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/applicants/{{$applicant->id}}')" title="Suspend Applicant" class="delete-row delete-color" data-id="{{ $applicant->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('applicants/restore/{{$applicant->id}}')" title="Restore Applicant" class="restore-row restore-color" data-id="{{ $applicant->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('applicants/deletePermanently/{{$applicant->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $applicant->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
