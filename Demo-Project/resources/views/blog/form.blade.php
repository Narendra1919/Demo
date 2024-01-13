<div class="form-group row">
    <label class="col-lg-3 col-form-label" for="example-hf-email">Title</label>
    <div class="col-lg-7">
        {{ Form::text('title', null, ['class'=>'form-control','placeholder'=>'Enter Title..']) }}
        {{-- <input type="text" class="form-control" id="example-hf-email" name="title" placeholder="Enter Title.."> --}}
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-form-label" for="example-hf-password">Auther Name</label>
    <div class="col-lg-7">
        {{ Form::text('auther_name', null, ['class'=>'form-control','placeholder'=>'Enter Auther Name..']) }}
        {{-- <input type="text" class="form-control" id="example-hf-password" name="auther_name" placeholder="Enter Auther Name.."> --}}
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-form-label" for="example-textarea-input">Description</label>
    <div class="col-lg-7">
        {{ Form::textarea('description', null, ['class'=>'form-control','rows'=>'6','placeholder'=>'Content..']) }}
        {{-- <textarea class="form-control" id="example-textarea-input" name="description" rows="6" placeholder="Content.."></textarea> --}}
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-form-label" for="example-textarea-input">Photo</label>
    <div class="col-lg-7">
        {{ Form::file('image') }}
        {{-- <input type="file" id="example-file-input-custom" name="image" data-toggle="custom-file-input"> --}}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-9 ml-auto">
      
        {{Form::submit('Submit',["class"=>"btn btn-alt-primary"])}}
        {{-- <button type="submit" class="btn btn-alt-primary">Submit</button> --}}
    </div>
</div>
