<div class="task">
    <div class="title">
        <input type="checkbox"
            @if ($data && $data['done'])
                checked
            @endif
        />
        <div class="task_title"> {{$data['title'] ?? ''}}</div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div> {{$data['category'] ?? ''}}</div>
    </div>
    <div class="actions">
        <a href="{{$data['edit_url'] ?? ''}}">
            <img src="/assets/images/icon-edit.png"/>
        </a>
        <a href="{{$data['delete_url'] ?? ''}}">
            <img src="/assets/images/icon-delete.png"/>
        </a>
    </div>
</div>
