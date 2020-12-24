@csrf
<div class="form-group">
    <label for="formTitle">Title</label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="title" id="formTitle" value="{{ old('title', $project->title) }}" >
</div>

<div class="form-group">
    <label for="formURL">URL</label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="url" id="formURL" value="{{ old('url', $project->url) }}">
</div>
    
<div class="form-group">
    <label for="formDescription">Description</label>
    <textarea class="form-control border-0 bg-light shadow-sm" name="description" id="formDescription">{{ old('description', $project->description) }}</textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>