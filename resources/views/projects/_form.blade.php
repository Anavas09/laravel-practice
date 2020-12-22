@csrf
<label for="formTitle">
    Title <br>
    <input type="text" name="title" id="formTitle" value="{{ old('title', $project->title) }}" ><br>
    {!! $errors->first('title', '<span>:message</span><br>') !!}
</label>
<br>
<label for="formURL">
    URL <br>
    <input type="text" name="url" id="formURL" value="{{ old('url', $project->utl) }}"><br>
    {!! $errors->first('url', '<span>:message</span><br>') !!}
</label>
<br>
<label for="formDescription">
    Description <br>
    <textarea name="description" id="formDescription">{{ old('description', $project->description) }}</textarea><br>
    {!! $errors->first('description', '<span>:message</span><br>') !!}
</label>
<br>
<br>
<button>{{$btnText}}</button>